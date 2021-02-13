<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class page extends Controller
{
     function support(){
        return view('pages.support');
    }

    function about(){
        return view('pages.about');
    }

    function single_post($id){
        $post=DB::table('posts')->where('id',$id)->first();
        return view('pages.single_post')->with('post',$post);
    }
}
