<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class catagory extends Controller
{
    // Add Catagorys
    function add_catagory(){
    //    $category=DB::table('catagorys')->get();
    //    return view('post.add_catagory',compact('category'));
        return view('post.add_catagory');
    }

        
    function AddCatagory(Request  $request){

        $request->validate([
            'catName' => 'required|unique:catagorys|max:15|min:2',
            'slug' => 'required|unique:catagorys',
        ]);
    
        
        $data=array();
        $data['catName']=$request->catName;
        $data['slug']=$request->slug;
        $category=DB::table('catagorys')->insert($data);
        return view('post.add_catagory');
    }
}
