<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class page extends Controller
{
     function support(){
        return view('pages.support');
    }

    function about(){
        return view('pages.about');
    }

    function single_post(){
        return view('pages.single_post');
    }
}
