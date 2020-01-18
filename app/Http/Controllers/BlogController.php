<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class BlogController extends Controller
{
    public function getIndex() {

        $posts = Post::paginate(10);
        
        return view ('blog.index')->with('posts', $posts);
    }

    public function getSingle($slug) {

        // fetch from the DB based on slug
        // get() fetch a collection of object, must be iterated or collection[0]
        // first() get a single object
        $post = Post::where('slug', '=', $slug)->first();

        $comments = $post->comments->sortByDesc('id');
        
        // return the view and pass in the post object
        return view('blog.single')->withPost($post)->withComments($comments);

    }

    
}
