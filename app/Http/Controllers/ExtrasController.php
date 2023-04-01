<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class ExtrasController extends Controller
{
   
    
    public function login(Request $request)
    {
        $data = array();
        return view('extras.login' ,$data);
    }
    public function loginv2(Request $request)
    {
        $data = array();
        return view('extras.login-v2' ,$data);
    }
    public function register(Request $request)
    {
        $data = array();
        return view('extras.register' ,$data);
    }
    public function registerv2(Request $request)
    {
        $data = array();
        return view('extras.register-v2' ,$data);
    }
    public function forgotpassword(Request $request)
    {
        $data = array();
        return view('extras.forgot-password' ,$data);
    }
    public function forgotpasswordv2(Request $request)
    {
        $data = array();
        return view('extras.forgot-password-v2' ,$data);
    }
    public function recoverpassword(Request $request)
    {
        $data = array();
        return view('extras.recover-password' ,$data);
    }
    public function recoverpasswordv2(Request $request)
    {
        $data = array();
        return view('extras.recover-password-v2' ,$data);
    }
    public function lockscreen(Request $request)
    {
        $data = array();
        return view('extras.lockscreen' ,$data);
    }
    public function legacy(Request $request)
    {
        $data = array();
        return view('extras.legacy-user-menu' ,$data);
    }
    public function language(Request $request)
    {
        $data = array();
        return view('extras.language-menu' ,$data);
    }
    public function error404(Request $request)
    {
        $data = array();
        return view('extras.404' ,$data);
    }
    public function error500(Request $request)
    {
        $data = array();
        return view('extras.500' ,$data);
    }
    public function pace(Request $request)
    {
        $data = array();
        return view('extras.pace' ,$data);
    }
    public function blank(Request $request)
    {
        $data = array();
        return view('extras.blank' ,$data);
    }
    public function starter(Request $request)
    {
        $data = array();
        return view('extras.starter' ,$data);
    }
}
