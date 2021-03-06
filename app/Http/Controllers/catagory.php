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
        return view('catagory.add_catagory');
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
        return Redirect()->back();
    }

    // catagory view
    function view_catagory(){
        $allcategory=DB::table('catagorys')->get();
        return view('catagory.add_catagory',compact('allcategory'));
    }

    // delete catagory
    public function delete_catagory($id){
        $delete=DB::table('catagorys')->where('id',$id)->Delete();
        return Redirect()->back();
    }

    // Edit Catagory
    public function edit_catagory($id){
        $edit=DB::table('catagorys')->where('id',$id)->first();
        return view('catagory.edit_catagory',compact('edit'));
    }

    // Update Catagory
    public function update_catagory(Request  $request, $id){
        $request->validate([
            'catName' => 'required',
            'slug' => 'required',
        ]);
        $data=array();
        $data['catName']=$request->catName;
        $data['slug']=$request->slug;
        $category=DB::table('catagorys')->where('id',$id)->update($data);
        return Redirect('/add_catagory');
    }
}
