<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class LayoutsController extends Controller
{
   
    
    public function topnav(Request $request)
    {
		
        $data = array();
        
        return view('layoutOptions.top-nav' ,$data);
    }
    public function topnavsidebar(Request $request)
    {
		
        $data = array();
        
        return view('layoutOptions.top-nav-sidebar' ,$data);
    }
    public function boxed(Request $request)
    {
		
        $data = array();
        
        return view('layoutOptions.boxed' ,$data);
    }
    public function fixedsidebar(Request $request)
    {
		
        $data = array();
        
        return view('layoutOptions.fixed-sidebar' ,$data);
    }
    public function fixedsidebarcustom(Request $request)
    {
		
        $data = array();
        
        return view('layoutOptions.fixed-sidebar-custom' ,$data);
    }	
    public function fixedtopnav(Request $request)
    {
		
        $data = array();
        
        return view('layoutOptions.fixed-topnav' ,$data);
    }	
    public function fixedfooter(Request $request)
    {
		
        $data = array();
        
        return view('layoutOptions.fixed-footer' ,$data);
    }	
    public function collapsedsidebar(Request $request)
    {
		
        $data = array();
        
        return view('layoutOptions.collapsed-sidebar' ,$data);
    }	
}
