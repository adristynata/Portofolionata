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
        $projects = [
            [
                'title' => 'E-Commerce Laravel App',
                'description' => 'Full-stack e-commerce platform with cart, payments, and admin dashboard using Laravel Breeze.',
                'github_link' => 'https://github.com/username/laravel-ecommerce',
                'demo_link' => 'https://ecommerce.example.com',
                'image' => 'projects/ecommerce.jpg',
            ],
            [
                'title' => 'Portfolio Dashboard',
                'description' => 'Admin dashboard for managing portfolio projects with CRUD operations and Tailwind UI.',
                'github_link' => 'https://github.com/username/portfolio-dashboard',
                'demo_link' => 'https://portfolio.example.com/dashboard',
                'image' => 'projects/dashboard.jpg',
            ],
            [
                'title' => 'Task Management App',
                'description' => 'Kanban-style task manager with drag-drop, user auth, and real-time updates via Laravel Livewire.',
                'github_link' => 'https://github.com/username/task-manager',
                'demo_link' => 'https://tasks.example.com',
                'image' => 'projects/tasks.jpg',
            ],
            [
                'title' => 'Blog CMS',
                'description' => 'Modern blog with Markdown editor, categories, comments, and SEO optimization.',
                'github_link' => 'https://github.com/username/laravel-blog',
                'demo_link' => 'https://blog.example.com',
                'image' => 'projects/blog.jpg',
            ],
            [
                'title' => 'Chat Application',
                'description' => 'Real-time chat app using Laravel Reverb WebSockets and Pusher integration.',
                'github_link' => 'https://github.com/username/laravel-chat',
                'demo_link' => 'https://chat.example.com',
                'image' => 'projects/chat.jpg',
            ],
            [
                'title' => 'API with Sanctum',
                'description' => 'RESTful API for mobile app with authentication, pagination, and rate limiting.',
                'github_link' => 'https://github.com/username/laravel-api',
                'demo_link' => 'https://api-docs.example.com',
                'image' => 'projects/api.jpg',
            ],
        ];

        foreach ($projects as $projectData) {
            Project::create($projectData);
        }
    }
}
