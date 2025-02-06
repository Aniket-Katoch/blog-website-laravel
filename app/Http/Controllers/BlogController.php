<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function show($slug)
    {
        $post = Post::with(['user', 'category'])
                    ->where('slug', $slug)
                    ->firstOrFail();

        // Ensure category slug is accessible
        $categorySlug = $post->category ? $post->category->slug : null;

        return view('frontend.layouts.single_blog_page', compact('post', 'categorySlug'));
    }
}
