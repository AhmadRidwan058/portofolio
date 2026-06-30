<?php

namespace App\Filament\Resources\Projects;

use App\Filament\Resources\Projects\Pages\CreateProject;
use App\Filament\Resources\Projects\Pages\EditProject;
use App\Filament\Resources\Projects\Pages\ListProjects;
use App\Filament\Resources\Projects\Schemas\ProjectForm;
use App\Filament\Resources\Projects\Tables\ProjectsTable;
use App\Models\Project;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Components\Actions\Action;
use Illuminate\Support\Facades\Http;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(\Filament\Schemas\Schema $schema): \Filament\Schemas\Schema
    {
        return $schema
            ->schema([
                // Tarik Data GitHub
                \Filament\Forms\Components\TextInput::make('github_repo')
                    ->label('Tarik Data dari GitHub (format: username/repo)')
                    ->placeholder('contoh: laravel/framework')
                    ->dehydrated(false)
                    ->columnSpanFull()
                    ->suffixAction(
                        \Filament\Actions\Action::make('fetchFromGitHub')
                            ->icon('heroicon-m-arrow-down-tray')
                            ->action(function ($state, \Filament\Schemas\Components\Utilities\Set $set) {
                                if (!$state) return;
                                
                                $repoPath = str_replace(['https://github.com/', 'http://github.com/'], '', $state);
                                $repoPath = trim($repoPath, '/');
                                
                                $response = \Illuminate\Support\Facades\Http::withToken(env('GITHUB_TOKEN'))
                                    ->get("https://api.github.com/repos/{$repoPath}");

                                if ($response->successful()) {
                                    $data = $response->json();
                                    
                                    $set('title', $data['name'] ?? '');
                                    $set('slug', \Illuminate\Support\Str::slug($data['name'] ?? ''));
                                    $set('description', $data['description'] ?? '');
                                    $set('demo_url', $data['homepage'] ?? '');

                                    $detectedSkills = [];

                                    // 1. Deteksi Bahasa Utama dari GitHub (misal: C++, Python, JavaScript)
                                    if (!empty($data['language'])) {
                                        $detectedSkills[] = $data['language'];
                                    }

                                    // 2. Deteksi Framework dari composer.json (seperti sebelumnya)
                                    $composerResponse = \Illuminate\Support\Facades\Http::withToken(env('GITHUB_TOKEN'))
                                        ->get("https://api.github.com/repos/{$repoPath}/contents/composer.json");

                                    if ($composerResponse->successful()) {
                                        $composerContent = json_decode(base64_decode($composerResponse->json('content')), true);
                                        $dependencies = array_merge($composerContent['require'] ?? [], $composerContent['require-dev'] ?? []);
                                        
                                        $whitelist = [
                                            'laravel/framework' => 'Laravel',
                                            'livewire/livewire' => 'Livewire',
                                            'filament/filament' => 'Filament PHP',
                                            'tailwindcss' => 'Tailwind CSS',
                                        ];

                                        foreach ($dependencies as $package => $version) {
                                            if (isset($whitelist[$package])) {
                                                $detectedSkills[] = $whitelist[$package];
                                            }
                                        }
                                    }

                                    // 3. Masukkan ke Database Otomatis jika belum ada (Auto-Create)
                                    $skillIds = [];
                                    foreach (array_unique($detectedSkills) as $skillName) {
                                        // firstOrCreate akan mencari skill. Jika tidak ada, dia akan membuatkannya otomatis!
                                        $skill = \App\Models\Skill::firstOrCreate(
                                            ['name' => $skillName],
                                            ['color' => '#64748b'] // Warna default (abu-abu) untuk skill baru
                                        );
                                        $skillIds[] = $skill->id;
                                    }

                                    // Centang otomatis di form
                                    if (!empty($skillIds)) {
                                        $set('skills', $skillIds);
                                    }

                                    \Filament\Notifications\Notification::make()
                                        ->title('Berhasil!')
                                        ->body('Data dan Skill berhasil ditarik & disinkronisasi.')
                                        ->success()
                                        ->send();
                                } else {
                                    \Filament\Notifications\Notification::make()
                                        ->title('Gagal menarik data!')
                                        ->body('Pastikan repository publik dan penulisan nama benar.')
                                        ->danger()
                                        ->send();
                                }
                            })
                    ),

                // --- Batas Input Standar ---

                \Filament\Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true) // Mendengarkan ketikan user
                    ->afterStateUpdated(function (string $operation, $state, \Filament\Schemas\Components\Utilities\Set $set) {
                        // Jika sedang membuat proyek baru, otomatis isi slug berdasarkan title
                        if ($operation === 'create') {
                            $set('slug', \Illuminate\Support\Str::slug($state));
                        }
                    }),
                
                \Filament\Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true) // Mencegah slug ganda
                    ->maxLength(255),
                
                \Filament\Forms\Components\Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                
                \Filament\Forms\Components\TextInput::make('demo_url')
                    ->url()
                    ->maxLength(255),
                
                \Filament\Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->directory('projects-thumbnails')
                    ->columnSpanFull(),
                
                \Filament\Forms\Components\Select::make('skills')
                    ->relationship('skills', 'name')
                    ->multiple()
                    ->preload()
                    ->columnSpanFull(),
                    
                \Filament\Forms\Components\Toggle::make('is_active')
                    ->default(true) // Otomatis aktif saat dibuat
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return ProjectsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListProjects::route('/'),
            'create' => CreateProject::route('/create'),
            'edit' => EditProject::route('/{record}/edit'),
        ];
    }
}
