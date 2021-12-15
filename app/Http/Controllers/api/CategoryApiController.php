<?php

namespace App\Http\Controllers\APi;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;
use App\Models\Category;

class CategoryApiController extends Controller
{

    public function index(){
        $categories = Category::all();
        return  CategoryResource::collection($categories);
    }

    public function posts($id){
        $category = Category::find($id);
        $posts = $category->posts;
        return  PostResource::collection($posts);
    }

}
