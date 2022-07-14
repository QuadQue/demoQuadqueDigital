<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tags = Tag::all();
        return view('admin.tag', ['tags' => $tags]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $inserted = Tag::create([
            'name' => $request->name
        ]);

        if ($inserted) {
            return back()->with('success', 'Tag has been inserted successfully');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tag  $Tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->tag_id;
        $name = $request->name;
        //validate input
        $request->validate([
            'name' => 'required'
        ]);

        $updated = Tag::where('id', $id)->update([
            'name' => $name
        ]);

        if ($updated) {
            return back()->with('success', 'Tag has been updated successfully...');
        }

        //update the Tag
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tag  $Tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        $tag = Tag::find($request->tag_id);
        $deleted = $tag->delete();

        if ($deleted) {
            return back()->with('success', 'Tag has been deleted successfully...');
        }
    }
}
