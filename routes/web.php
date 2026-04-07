<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use App\Models\User;
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
            // Removed admin check - accessible to all logged-in users
            $projectCount = Project::count();
            $latestProjects = Project::latest()->take(5)->get();
            $userCount = User::count();
            $adminActivityCount = Project::count();
            return view('dashboard', compact('projectCount', 'latestProjects', 'userCount', 'adminActivityCount'));
        })->name('dashboard');
        Route::resource('project', ProjectController::class)->names('project');
        Route::resource('contact', ProjectController::class)->names('contact');
});
   

require __DIR__.'/auth.php';
