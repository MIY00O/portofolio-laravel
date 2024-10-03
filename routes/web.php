<?php


use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/projects', function () {
    return view('projects', ['title' => 'Projects', 'posts' => Post::all()]);
});

Route::get('/project/{post:slug}', function (post $post) {
    // $post = Post::find($id);
    return view('project', ['title' => 'Project', 'post' => $post]);
});
