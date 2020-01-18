<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
use Session;

class PostController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // create variable and store all blog posts from the database
        $posts = Post::orderBy('id', 'desc')->paginate(15);

        // return a view and pass in the variable
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // get categories
        $categories = Category::all();

        // get tags
        $tags = Tag::all();

        return view('posts.create')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        // csrf token is automatically validated
        // dd($request);
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category' => 'required|integer',
            'body' => 'required'
        ]);

        // store in the database
        $post = new Post;

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->category_id = $request->category;
        
        $post->save();

        // tag
        $post->tags()->sync($request->tag, false);
        
        // flash success message
        Session::flash('success', 'Blog post was successfully saved!');

        // redirect to another page
        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find the post in the database and save as variable
        $post = Post::find($id);

        // get all categories
        $categories = Category::all();

        // get tags
        $tags = Tag::pluck('name','id')->all();
        
        // return a view and pass in variable
        return view('posts.edit')->with('post', $post)->withCategories($categories)->withTags($tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        // Validate data
        if ($request->slug == $post->slug) {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'category' => 'required|integer',
                'body' => 'required',
            ]);
        }else {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'category' => 'required|integer',
                'body' => 'required',
            ]);
        }
        

        // Save data to database
        $post->title = $request->title;
        $post->title = $request->slug;
        $post->category_id = $request->category;
        $post->body = $request->body;

        $post->save(); // save to database

        // sync tags
        if (isset($request->tag)){
            $post->tags()->sync($request->tag, true);
        }else{
            $post->tags()->sync([], true);
        }
        

        // set flash data with success message
        Session::flash('success', 'This post was successfully saved!');

        // Redirect with flash data to posts.show
        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        // remove reference to tags
        $post->tags()->detach();

        $post->delete();

        Session::flash('success', 'The post was successfully deleted!');

        return redirect()->route('posts.index');
    }
}
