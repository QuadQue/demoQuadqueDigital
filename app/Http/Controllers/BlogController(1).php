<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.blog', ['blogs' => $blogs, 'categories' => $categories, 'tags' => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $category_id = $request->category_id;
        $title = $request->title;
        $tag = json_encode($request->tag);
        $description = $request->description;

        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'photo' => 'required|dimensions:min_width=1844,min_height=819|image|mimes:jpeg,png,jpg,svg',
            'tag' => 'required',
            'description' => 'required'
        ]);

        //store the blog
        $blog = new Blog();

        $blog->category_id = $category_id;
        $blog->title = $title;
        $blog->tag = $tag;
        $blog->description = $description;

        if ($request->photo) {

            $newFileName = time() . '.' . $request->photo->getClientOriginalExtension();
            $path = 'assets/images/blog_images';
            $request->photo->move($path, $newFileName);
            $blog->photo  = $newFileName;
        }


        $inserted =  $blog->save();

        if ($inserted) {
            return back()->with('success', 'Blog has been posted...');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tags = Tag::all();
        $categories = Category::all();
        $blog = Blog::find($id);
        $related_posts = Blog::where('category_id', $blog->category_id)->limit(2)->get();
        $latest_blogs = Blog::Orderby('id', 'desc')->limit(3)->get();

        return view('pages.blog-detailed', ['blog' => $blog, 'tags' => $tags, 'categories' => $categories, 'latest_blogs' => $latest_blogs, 'related_posts' => $related_posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
