<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $posts = Post::with(['user', 'category'])->paginate(7);
        $featuredBlog = Post::with(['user', 'category'])
                    ->where('trending', 1)  // Fetch only posts where trending is 1
                    ->latest()
                    ->first();
          

        // dd($featuredBlog);
        return view("frontend.layouts.home", compact("posts", "featuredBlog",));
    }

    public function about(){
        return view("frontend.layouts.about");
    }

    public function contact(){
        return view("frontend.layouts.contact");
    }

    public function showCategory($slug)
    {
        // Retrieve the category by slug with its posts and the user who created each post
        $category = Category::with(['posts.user'])
                             ->where('slug', $slug)
                             ->firstOrFail(); // Use firstOrFail to handle invalid slugs
    
        // Get paginated posts related to the category
        $posts = $category->posts()->paginate(5); // Paginate with 5 posts per page (adjustable)
    
        // Return the view with the category and paginated posts
        return view('frontend.layouts.category', compact('category', 'posts'));
    }


}
