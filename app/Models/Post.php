<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Post extends Model
{
    public function create(): View
    {
        return view('post.create');
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
        $image->move(storage_path('app/public/products'), $imageName);

        Product::create([
            'image'         => $imageName,
            'title'         => $request->title,
            'desciption'    => $request->desciption,
        ]);
        return redirect()->route('Post.index');
    }
}
