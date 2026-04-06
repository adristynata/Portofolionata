<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = Project::all();
    return view('welcome', compact('projects'));
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('dashboard')->group(function () {
        Route::get('/', function () {
            abort_unless(auth()->user()->is_admin, 403);
            $projectCount = Project::count();
            $latestProjects = Project::latest()->take(5)->get();
            return view('dashboard', compact('projectCount', 'latestProjects'));
        })->name('dashboard');
        Route::resource('project', ProjectController::class)->names('project');
        Route::resource('contact', ProjectController::class)->names('contact');
});
   

require __DIR__.'/auth.php';
