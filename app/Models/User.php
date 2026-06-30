<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser; // 1. Tambahkan ini
use Filament\Panel; // 2. Tambahkan ini
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable implements FilamentUser // 3. Implementasikan kontrak ini
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Tambahkan fungsi ini agar diizinkan masuk ke panel Filament
     */
    public function canAccessPanel(Panel $panel): bool
    {
        // Untuk sementara, kita izinkan semua user yang sudah login
        // Nanti bisa diganti dengan: return str_ends_with($this->email, '@gmail.com');
        return true; 
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}