<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class SearchController extends Controller
{
   
    
    public function simple(Request $request)
    {
        $data = array();
        return view('search.simple' ,$data);
    }
    public function simpleresults(Request $request)
    {
        $data = array();
        return view('search.simple-results' ,$data);
    }
    public function enhanced(Request $request)
    {
        $data = array();
        return view('search.enhanced' ,$data);
    }
    public function enhancedresults(Request $request)
    {
        $data = array();
        return view('search.enhanced-results' ,$data);
    }
}
