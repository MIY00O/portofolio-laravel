<?php

use App\Http\Controllers\AboutController;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});


Route::get('/about', [AboutController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/add', [ProjectController::class, 'add']);

Route::get('/project/{post:slug}', function (post $post) {
    // $post = Post::find($id);
    return view('project', ['title' => 'Project', 'post' => $post]);
});
