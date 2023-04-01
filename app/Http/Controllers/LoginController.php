<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Session;
use Carbon;
use Hash;

use App\Models\Kc_admin;

class LoginController extends Controller
{
   
    

    public function index(Request $request)
    {
		
        $data = array();
        if(Session::has('adm_id')){return redirect("/");}	
        if(empty($request->input("logid"))){
            $request->replace(['logid' => "admin@test.com", 'pwd' => "password"]);
        }
        $request->flash();
        return view('login.index' ,$data);
    }
    public function store(Request $request)
    {
       
       $admins = Kc_admin::where('log_id',$request->input("logid"))->where('active',1)->first();
       if(empty($admins)){
           Session::flash('danger_message',"Login ID or Password Error!!");
            return $this->index($request);
       }
        if (Hash::check($request->input('pwd'),$admins['password']))
        {		
            Session::put('adm_id', $admins['id']);
            $updates['last_at'] = Carbon\Carbon::now(); 
            $updates['log_ip'] = $request->ip();
            $admins->update($updates);
            return redirect("/");
        }else{
            Session::flash('danger_message',"Login ID or Password Error!!");
            return $this->index($request);
        } 
    }
    public function logout(Request $request){     
        Session::flush();	
        return redirect('login');
    }
}
