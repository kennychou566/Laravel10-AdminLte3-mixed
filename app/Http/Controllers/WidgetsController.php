<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class WidgetsController extends Controller
{
   
    
    public function index(Request $request)
    {
		
        $data = array();
        
        return view('widgets.index' ,$data);
    }
    
	
}
