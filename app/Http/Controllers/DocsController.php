<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class DocsController extends Controller
{
   
    
    public function installation(Request $request)
    {
        $data = array();
        return view('docs.installation' ,$data);
    }
    public function aboutme(Request $request)
    {
        $data = array();
        return view('docs.about-me' ,$data);
    }
}
