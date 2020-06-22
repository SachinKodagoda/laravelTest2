<?php

namespace App\Http\Controllers;

use App\Post;

class PostController
{
    public function index(){
        return Post::all();
    }
}
