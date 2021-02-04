<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class post extends Controller
{
     function add_post(){
        return view('post.add_post');
    }
    
    // function AddPost(Request $request){
    //     $post=array();
    //     $post['title']=$request->title;
    //     $post['details']=$request->details;
    //     $post_data=DB::table('posts')->insert($post);
    //     return view('post.add_post');
    // }


    // Add Catagory
    function add_catagory(){
        return view('post.add_catagory');
        
    }

    function DataAdd(Request  $request){
        $data=array();
        $data['catName']=$request->catName;
        $data['slug']=$request->slug;
        $users=DB::table('catagorys')->insert($data);
        return view('post.add_catagory');
    }
}
