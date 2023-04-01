<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class DashboardController extends Controller
{
   
    
    public function index(Request $request)
    {
		
        $data = array();
        
        return view('dashboard.index' ,$data);
    }
    public function sample(Request $request ,$id)
    {
		
        $data = array();
        if($id==2){
            return view('dashboard.index2' ,$data);
        }elseif($id==3){
            return view('dashboard.index3' ,$data);
        }
        return view('dashboard.index1' ,$data);
    }
    public function nextpage(Request $request)
    {
		
        $data = array();
        
        return view('dashboard.nextpage' ,$data);
    }
}
