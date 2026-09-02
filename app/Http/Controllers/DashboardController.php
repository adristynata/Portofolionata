<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Certificate;
use App\Models\Message;
use App\Models\Experience;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $projectCount = Project::count();
        $skillCount = Skill::count();
        $certificateCount = Certificate::count();
        $messageCount = Message::count();
        $unreadMessageCount = Message::where('is_read', false)->count();

        $latestMessages = Message::latest()->take(5)->get();
        $latestProjects = Project::latest()->take(5)->get();

        return view('dashboard.index', compact(
            'projectCount',
            'skillCount',
            'certificateCount',
            'messageCount',
            'unreadMessageCount',
            'latestMessages',
            'latestProjects'
        ));
    }
}
