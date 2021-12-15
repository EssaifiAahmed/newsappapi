<?php

use App\Http\Resources\CategoriesResources;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesMAsterController
{

    // GET ALL
    public function index(){
        return new CategoriesResources(Category::paginate());
    }

    //GET BY ID
    public function show($id){
        //TODO
    }

    // POST
    public function store(){
        //TODO
    }
}
