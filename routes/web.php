<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\Skill;

Route::get('/', function () {
    // Tarik semua proyek yang berstatus aktif beserta relasi skill-nya
    $projects = Project::with('skills')->where('is_active', true)->get();
    
    // Tarik semua skill yang ada
    $skills = Skill::all();

    return view('welcome', compact('projects', 'skills'));
});