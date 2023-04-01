<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class UielementsController extends Controller
{
   
    
    public function buttons(Request $request)
    {
		
        $data = array();
        
        return view('uiElements.buttons' ,$data);
    }
    public function general(Request $request)
    {
		
        $data = array();
        
        return view('uiElements.general' ,$data);
    }
    public function icons(Request $request)
    {
		
        $data = array();
        
        return view('uiElements.icons' ,$data);
    }
    public function modals(Request $request)
    {
		
        $data = array();
        
        return view('uiElements.modals' ,$data);
    }
    public function navbar(Request $request)
    {
		
        $data = array();
        
        return view('uiElements.navbar' ,$data);
    }
    public function ribbons(Request $request)
    {
		
        $data = array();
        
        return view('uiElements.ribbons' ,$data);
    }
    public function sliders(Request $request)
    {
		
        $data = array();
        
        return view('uiElements.sliders' ,$data);
    }
    public function timeline(Request $request)
    {
		
        $data = array();
        
        return view('uiElements.timeline' ,$data);
    }
	
}
