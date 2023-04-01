<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class MailboxController extends Controller
{
   
    
    public function inbox(Request $request)
    {
		
        $data = array();
        
        return view('mailbox.inbox' ,$data);
    }
    public function compose(Request $request)
    {
		
        $data = array();
        
        return view('mailbox.compose' ,$data);
    }
    public function read(Request $request)
    {
		
        $data = array();
        
        return view('mailbox.read' ,$data);
    }
    
    
	
}
