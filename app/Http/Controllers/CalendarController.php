<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class CalendarController extends Controller
{
   
    
    public function index(Request $request)
    {
		
        $data = array();
        
        return view('calendar.index' ,$data);
    }
    
    
    
	
}
