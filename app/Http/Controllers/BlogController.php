<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function viewBlog($slug){
        $blog = Post::published()->where('slug', $slug)->first();
        return view('frontend.pages.baseblog', compact('blog'));
    }
}
