<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class HomeController extends Controller
{
   
    
    public function index(Request $request)
    {
		
        $data = array();
        
        return view('home.index' ,$data);
    }
    
    public function nextpage(Request $request)
    {
		
        $data = array();
        
        return view('home.nextpage' ,$data);
    }
}
