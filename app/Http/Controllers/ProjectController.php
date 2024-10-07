<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        return view('project.projects', ['title' => 'Projects', 'posts' => Post::all()]);
    }

    public function add()
    {
        return view('project.add', ['title' => 'Add Project']);
    }
}
