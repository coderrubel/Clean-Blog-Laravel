<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\catagory;
class post extends Controller
{
     function add_post(){
        return view('post.add_post');
    }

    function add_catagory(Request $req){
        $catagory= new catagory;
        $catagory=$req->cat_name;
        $catagory=$req->cat_slug;
        return view('post.add_catagory');
    }
}
