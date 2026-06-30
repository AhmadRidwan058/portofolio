<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // Mengizinkan pengisian data secara massal (mass-assignment)
    protected $guarded = [];

    // Mendefinisikan relasi Many-to-Many ke tabel skills
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}