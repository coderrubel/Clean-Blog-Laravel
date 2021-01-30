<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class post extends Controller
{
     function add_post(){
        return view('post.add_post');
    }

    function add_catagory(){
        return view('post.add_catagory');
    }
}
