<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class GalleryController extends Controller
{
   
    
    public function index(Request $request)
    {
		
        $data = array();
        
        return view('gallery.index' ,$data);
    }
    
	
}
