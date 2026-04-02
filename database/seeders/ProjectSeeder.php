<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Project 1',
            'description' => 'Description 1',
            'demo_link' => 'demo 1',
            'image' => 'project1.jpg',
            'github_link' => 'github 1'
        ]);
    }
}
