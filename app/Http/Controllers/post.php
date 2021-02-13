<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class post extends Controller
{

    // Add Posts
     function add_post(){
        return view('post.add_post');
    }
    // Add Post
    function AddPost(Request $request){

        $request->validate([
            'title' => 'required|min:2|max:80',
            'details' => 'required',
            'author' => 'required',
            'date' => 'required',
            'image' => 'required | mimes:jpeg,jpg,png,PNG',
        ]);

        $post=array();
        $post['title']=$request->title;
        $post['details']=$request->details;
        $post['author']=$request->author;
        $post['date']=$request->date;

        $image=$request->file('image');
    	if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='post_image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            $post['image']=$image_url;
           //  DB::table('posts')->insert($post);
            //  $notification=array(
            //     'messege'=>'Successfully Post Inserted',
            //     'alert-type'=>'success'
            //      );
            //  return Redirect()->back()->with($notification);
    	}else{
    		// DB::table('posts')->insert($post);
    		//  $notification=array(
            //     'messege'=>'Successfully Post Inserted',
            //     'alert-type'=>'success'
            //      );
            //  return Redirect()->back()->with($notification);
        }
        
        $addpost=DB::table('posts')->insert($post);
        return view('post.add_post');
    }

     function allPost(){
        $allpost=DB::table('posts')->get();
        return view('post.all_post',compact('allpost'));
    }
    
    function ViewPost(){
        $viewpost=DB::table('posts')->get();
        return view('/index',compact('viewpost'));
    }

    // Delete Post
    public function DeletePost($id){
        $delete=DB::table('posts')->where('id',$id)->Delete();
        return Redirect()->back();
    }
}
