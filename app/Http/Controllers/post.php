<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class post extends Controller
{

    // Add Posts
     function add_post(){
        $cat=DB::table('catagorys')->get(); 
        return view('post.add_post',compact('cat'));
    }
    // Add Post
    function AddPost(Request $request){

        $request->validate([
            'title' => 'required|min:2|max:80',
            'catagory' => 'required',
            'details' => 'required|min:5|max:5000',
            'author' => 'required',
            'date' => 'required',
            'image' => 'required | mimes:jpeg,jpg,png,PNG',
        ]);

        $post=array();
        $post['title']=$request->title;
        $post['catagory']=$request->catagory;
        $post['details']=$request->details;
        $post['author']=$request->author;
        $post['date']=$request->date;

        $image=$request->file('image');
    	if ($image) {
            // $image_name=hexdec(uniqid());
            $image_name=$image->getFilename();
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='post_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $post['image']=$image_url;
             DB::table('posts')->insert($post);
             $notification=array(
                'messege'=>'Successfully Post Inserted',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
    	}else{
    		DB::table('posts')->insert($post);
    		 $notification=array(
                'messege'=>'Successfully Post Inserted',
                'alert-type'=>'success'
                 );
             return Redirect()->back()->with($notification);
        }
        
        $addpost=DB::table('posts')->insert($post);
        return Redirect()->back();
    }

     function allPost(){
        $allpost=DB::table('posts')
        ->join('catagorys','posts.catagory','catagorys.id')
        ->select('posts.*','catagorys.catName')->get();
        return view('post.all_post',compact('allpost'));
    }
    
    function ViewPost(){
        $viewpost=DB::table('posts')
        ->join('catagorys','posts.catagory','catagorys.id')
        ->select('posts.*','catagorys.catName')->paginate(4);
        return view('/index',compact('viewpost'));
    }

    // Delete Post
    public function DeletePost($id){
        $delete=DB::table('posts')->where('id',$id)->Delete();
        return Redirect()->back();
    }

    // Edit Post
    public function EditPost($id){
        $edit_post=DB::table('posts')->where('id',$id)->first();
        $edit_cat=DB::table('catagorys')->get();
        return view('post.edit_post',compact('edit_post','edit_cat'));
    }

    //Updata Post
    public function UpdatePost(Request $request, $id){
        $request->validate([
            'title' => 'required|min:2|max:80',
            'catagory' => 'required',
            'details' => 'required|min:5|max:5000',
            'author' => 'required',
            'date' => 'required',
            'image' => 'mimes:jpeg,jpg,png,PNG',
        ]);

        $post=array();
        $post['title']=$request->title;
        $post['catagory']=$request->catagory;
        $post['details']=$request->details;
        $post['author']=$request->author;
        $post['date']=$request->date;

        $image=$request->file('image');
    	if ($image) {
            // $image_name=hexdec(uniqid());
            $image_name=$image->getFilename();
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='post_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $post['image']=$image_url;
            unlink($request->old_photo);
             DB::table('posts')->where('id',$id)->update($post);
             $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
                 return Redirect()->back()->with($notification);
    	}else{
            $post['image']=$request->old_photo;
    		DB::table('posts')->where('id',$id)->update($post);
    		 $notification=array(
                'messege'=>'Successfully Post Update',
                'alert-type'=>'success'
                 );
                 return Redirect()->back()->with($notification);
        }
        
        $addpost=DB::table('posts')->update($post);
        return Redirect()->back();
    }
}
