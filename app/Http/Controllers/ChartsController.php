<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class ChartsController extends Controller
{
   
    
    public function chartjs(Request $request)
    {
		
        $data = array();
        
        return view('charts.chartjs' ,$data);
    }
    public function flot(Request $request)
    {
		
        $data = array();
        
        return view('charts.flot' ,$data);
    }
    public function inline(Request $request)
    {
		
        $data = array();
        
        return view('charts.inline' ,$data);
    }
    public function uplot(Request $request)
    {
		
        $data = array();
        
        return view('charts.uplot' ,$data);
    }
	
}
