<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorApiController extends Controller
{
    public function index(){
        $users = User::all();
        return  UserResource::collection($users);
    }

    public function posts($id){
        $author = User::find($id);
        $posts = $author->posts;
        return  PostResource::collection($posts);
    }
}
