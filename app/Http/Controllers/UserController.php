<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /// GET ALL
    public function index(){
        return view('users.users')->with([
            'users' => User::paginate()
        ]);
    }

    //GET BY ID
    public function show($id){
        return view('users.users')->with([
        
        ]);
    }

    // POST
    public function store(){
        //TODO
    }
}
