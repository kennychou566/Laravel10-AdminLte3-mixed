<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class TablesController extends Controller
{
   
    
    public function simple(Request $request)
    {
		
        $data = array();
        
        return view('tables.simple' ,$data);
    }
    public function datas(Request $request)
    {
		
        $data = array();
        
        return view('tables.datas' ,$data);
    }
    public function jsgrid(Request $request)
    {
		
        $data = array();
        
        return view('tables.jsgrid' ,$data);
    }
    
    
	
}
