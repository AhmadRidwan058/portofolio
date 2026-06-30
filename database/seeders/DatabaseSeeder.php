<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Membuat Data Keahlian (Skills)
        $laravel = Skill::create(['name' => 'Laravel', 'color' => '#FF2D20']);
        $livewire = Skill::create(['name' => 'Livewire', 'color' => '#fb70a9']);
        $tailwind = Skill::create(['name' => 'Tailwind CSS', 'color' => '#38bdf8']);
        $mysql = Skill::create(['name' => 'MySQL', 'color' => '#00758F']);

        // 2. Membuat Data Proyek
        $erapor = Project::create([
            'title' => 'E-Rapor Digital',
            'slug' => Str::slug('E-Rapor Digital'),
            'description' => 'Aplikasi e-rapor sekolah digital yang dilengkapi dengan sistem manajemen nilai, pengaturan peran (guru/admin), dan fitur pembuatan laporan PDF otomatis.',
            'demo_url' => 'http://erapor.portofolio.test', // Ini simulasi URL subdomain nantinya
            'is_active' => true,
        ]);

        $galon = Project::create([
            'title' => 'Sistem Manajemen Galon',
            'slug' => Str::slug('Sistem Manajemen Galon'),
            'description' => 'Aplikasi manajemen multi-outlet untuk bisnis isi ulang air. Memudahkan pemantauan stok, transaksi harian, dan pembukuan antar cabang.',
            'demo_url' => 'http://galon.portofolio.test',
            'is_active' => true,
        ]);

        // 3. Menghubungkan Proyek dengan Skill (Logika Auto-Generate)
        // E-rapor menggunakan Laravel, Livewire, dan MySQL
        $erapor->skills()->attach([$laravel->id, $livewire->id, $mysql->id]);
        
        // Aplikasi Galon menggunakan semuanya termasuk Tailwind CSS
        $galon->skills()->attach([$laravel->id, $livewire->id, $tailwind->id, $mysql->id]);
    }
}