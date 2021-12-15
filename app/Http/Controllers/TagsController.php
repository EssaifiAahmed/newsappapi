<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    // GET ALL
    public function index(){
        return view('tags.tags')->with([

            'tags' => Tags::all()

        ]);
    }

     //GET BY ID
     public function show($id){
        return view('tags.tag')->with([
            'tag' => Tags::find($id)
        ]);
    }

    // POST
    public function store(Request $request)
    {
        $request->validate([
            'tag_title' => 'required',
        ]);
        $tag = new Tags();
        $tag->title = $request->get('tag_title');
        $tag->save();
        return redirect()->back()->with('message','Tag Created');    
    }
}
