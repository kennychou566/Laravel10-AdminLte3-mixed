<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class PagesController extends Controller
{
    public function invoice(Request $request)
    {
		
        $data = array();
        
        return view('pages.invoice' ,$data);
    }
    public function profile(Request $request)
    {
		
        $data = array();
        
        return view('pages.profile' ,$data);
    }
    public function ecommerce(Request $request)
    {
		
        $data = array();
        
        return view('pages.ecommerce' ,$data);
    }
    public function projects(Request $request)
    {
		
        $data = array();
        
        return view('pages.projects' ,$data);
    }
    public function projectadd(Request $request)
    {
		
        $data = array();
        
        return view('pages.projectadd' ,$data);
    }
    public function projectedit(Request $request)
    {
		
        $data = array();
        
        return view('pages.projectedit' ,$data);
    }
    public function projectdetail(Request $request)
    {
		
        $data = array();
        
        return view('pages.projectdetail' ,$data);
    }
    public function contacts(Request $request)
    {
		
        $data = array();
        
        return view('pages.contacts' ,$data);
    }
    public function faq(Request $request)
    {
		
        $data = array();
        
        return view('pages.faq' ,$data);
    }
    public function contactus(Request $request)
    {
		
        $data = array();
        
        return view('pages.contactus' ,$data);
    }
    
    
	
}
