<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($id){
        $post = Post::with(['user', 'category'])->findOrFail($id);
        return view('frontend.layouts.single_blog_page', compact('post'));
    }
}
