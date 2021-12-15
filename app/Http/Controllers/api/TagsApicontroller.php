<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\TagResource;
use App\Models\Tags;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tag;

class TagsApicontroller extends Controller
{
    public function index(){
        $tags = Tags::all();
        return  TagResource::collection($tags);
    }

    public function posts($id){
        $tag   = Tags::find($id);
        $posts = $tag->posts;
        return  PostResource::collection($posts);
    }
}
