<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'github_link',
        'demo_link',
        'image',
    ];
}
