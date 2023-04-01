<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class MiscellaneousController extends Controller
{
   
    
    public function iframe(Request $request)
    {
        $data = array();
        return view('miscellaneous.iframe' ,$data);
    }
    public function iframedark(Request $request)
    {
        $data = array();
        return view('miscellaneous.iframe-dark' ,$data);
    }
    
}
