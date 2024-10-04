<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(): View
    {
        $post = Post::latest()->paginate(10);
        return view('post.index', compact('product'));
    }

    public function create(): View
    {
        return view('post.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image'         => 'required|image|mimes:png,jpg|max:2024',
            'title'         => 'required|min:6',
            'description'   => 'required',
        ]);
        $image = $request->file()
    }
}
