<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    // Mengizinkan pengisian data secara massal
    protected $guarded = [];

    // Mendefinisikan relasi kebalikan (opsional tapi sangat disarankan)
    public function projects()
    {
        return $this->belongsToMany(Project::class);
    }
}