<?php

namespace App\Console\Commands;

use App\Models\Skill;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ScanSkills extends Command
{
    // Ini adalah nama perintah yang akan kita ketik di terminal nanti
    protected $signature = 'portfolio:scan-skills';
    
    // Deskripsi singkat tentang apa yang dilakukan perintah ini
    protected $description = 'Memindai composer.json & package.json untuk generate Skill secara otomatis';

    public function handle()
    {
        $this->info('Memulai pemindaian file konfigurasi...');

        // 1. Daftar "Kamus Terjemahan" (Whitelist)
        // Format: 'nama-package-asli' => ['Nama Cantik', 'Warna Hex']
        $whitelist = [
            'laravel/framework' => ['name' => 'Laravel', 'color' => '#FF2D20'],
            'livewire/livewire' => ['name' => 'Livewire', 'color' => '#fb70a9'],
            'filament/filament' => ['name' => 'Filament PHP', 'color' => '#FBBF24'],
            'tailwindcss' => ['name' => 'Tailwind CSS', 'color' => '#38bdf8'],
            'alpinejs' => ['name' => 'Alpine.js', 'color' => '#8bc0d0'],
            'vue' => ['name' => 'Vue.js', 'color' => '#41B883'],
            'react' => ['name' => 'React', 'color' => '#61DAFB'],
        ];

        $foundSkills = [];

        // 2. Memindai composer.json (Untuk mendeteksi teknologi Backend/PHP)
        if (File::exists(base_path('composer.json'))) {
            $composer = json_decode(File::get(base_path('composer.json')), true);
            // Menggabungkan package dari "require" dan "require-dev"
            $phpDeps = array_merge($composer['require'] ?? [], $composer['require-dev'] ?? []);
            
            foreach ($phpDeps as $package => $version) {
                if (array_key_exists($package, $whitelist)) {
                    $foundSkills[] = $whitelist[$package];
                }
            }
        }

        // 3. Memindai package.json (Untuk mendeteksi teknologi Frontend/JS/CSS)
        if (File::exists(base_path('package.json'))) {
            $npm = json_decode(File::get(base_path('package.json')), true);
            $jsDeps = array_merge($npm['dependencies'] ?? [], $npm['devDependencies'] ?? []);
            
            foreach ($jsDeps as $package => $version) {
                if (array_key_exists($package, $whitelist)) {
                    $foundSkills[] = $whitelist[$package];
                }
            }
        }

        // 4. Proses Eksekusi ke Database
        if (empty($foundSkills)) {
            $this->warn('Tidak ada skill dari whitelist yang ditemukan dalam proyek ini.');
            return;
        }

        foreach ($foundSkills as $skillData) {
            // firstOrCreate mencegah data ganda masuk ke database
            Skill::firstOrCreate(
                ['name' => $skillData['name']], 
                ['color' => $skillData['color']]
            );
            $this->line("✅ Skill tercatat: <info>{$skillData['name']}</info>");
        }

        $this->info('Pemindaian selesai! Silakan cek menu Skills di dashboard Filament.');
    }
}