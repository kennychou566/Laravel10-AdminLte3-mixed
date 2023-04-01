<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class FormsController extends Controller
{
   
    
    public function general(Request $request)
    {
		
        $data = array();
        
        return view('forms.general' ,$data);
    }
    public function advanced(Request $request)
    {
		
        $data = array();
        
        return view('forms.advanced' ,$data);
    }
    public function editors(Request $request)
    {
		
        $data = array();
        
        return view('forms.editors' ,$data);
    }
    public function validation(Request $request)
    {
		
        $data = array();
        
        return view('forms.validation' ,$data);
    }
    
	
}
