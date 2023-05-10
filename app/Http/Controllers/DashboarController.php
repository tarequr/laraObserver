<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboarController extends Controller
{
    public function dashboard()
    {
        $blogs = Blog::all();
        return view('blog.index', compact('blogs'));
    }

    public function store(Request $request)
    {
        Blog::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return back();
    }
}
