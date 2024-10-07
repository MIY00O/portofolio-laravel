<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function create(): View
    {
        return view('add');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title'         => 'required|min:6',
            'description'   => 'required|min:10',
            'image'         => 'required|image|mimes:png,jpeg,jpg|max:2048',
        ]);
        $image = $request->file('image');
        $imageName = $image->hashName();
        $image->move(storage_path('app/public/posts'), $imageName);

        Post::create([
            'image'         => $imageName,
            'title'         => $request->title,
            'desciption'    => $request->desciption,
        ]);
        return redirect()->route('add')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
