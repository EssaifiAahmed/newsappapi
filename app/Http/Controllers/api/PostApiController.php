<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function index(){
        $posts = Post::with(['author','pictures','videos', 'category', 'tags'])->paginate();
        return  PostResource::collection($posts);
    }
}