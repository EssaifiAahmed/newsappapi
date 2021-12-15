<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // GET ALL
    public function index(){
        return view('comments.comments')->with([
            'comments' => Comment::with(['author','post'])->paginate()
        ]);
    }

    //GET BY ID
    public function show($id){
        return view('comments.comment')->with([
            'comment' => Comment::find($id)
        ]);
    }

    // POST
    public function store(){
        //TODO
    }
}
