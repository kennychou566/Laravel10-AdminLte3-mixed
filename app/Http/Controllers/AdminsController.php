<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Session;
use Validator;
use Carbon;

use App\Models\Kc_admin;

class AdminsController extends Controller
{
   
    
    public function index(Request $request)
    {
		
        $data = array();
        $data['admins'] = Kc_admin::orderBy('id', 'desc')->get();
        Session::put('admrtn', $request->fullurl());
        return view('admins.index' ,$data);
    }
    public function create(Request $request)
    {
		
        $data = array();
        $data['id']='';
    
        return view('admins.create' ,$data);
    }
    public function store(Request $request)
    {
		
        $validator = Validator::make($request->input(), ['adm_name'=> 'required|max:255','log_id' => 'required|email|max:100','pwd'=> 'required|min:6','pwd_confirm'=> 'required|min:6']);
        if ($validator->fails()) {
            $errMsg=($validator->errors()->all());
            Session::flash('danger_message', $errMsg[0]);
            $request->flash();
            return back()->withInput();
        }
        
        //check pwd && pwd_confirm matched
        if ($request->input('pwd') != $request->input('pwd_confirm')) {
            Session::flash('danger_message', "Password confirm Error!");
            return back()->withInput();
        }
        //check logid duplicated
        $dup = Kc_admin::whereNull('deleted_at')->where('log_id', $request->input('log_id'))->count();
        if ($dup) {
            Session::flash('danger_message', "LogID Repeated!");
            return back()->withInput();
        }
        $admin = new Kc_admin;
        if (!empty($request->input('pwd'))) {
            $admin->password = bcrypt($request->input('pwd'));
        }
        $admin->log_id = $request->input('log_id');
        $admin->name = $request->input('adm_name');
        $admin->active = $request->input('active');
        $admin->save();
        return redirect(Session('admrtn') ? Session('admrtn') : 'admins');
      
    }
    public function show(Request $request,$id)
    {
		
        $data = array();
        $data['id'] = empty($id) ? '' : $id;
       
        if ($id) {
            $admin = Kc_admin::where('id', $id)->whereNull('deleted_at')->first();
            if (empty($admin)) {
                return redirect(Session('admrtn') ? Session('admrtn') :'admins');
            }
            $request->replace(['adm_name' => $admin['name'], 'log_id' => $admin['log_id'], 'active' => $admin['active']]);
        }
        $request->flash();
        return view('admins.create' ,$data);
    }

    public function update(Request $request,$id)
    {
		
        $validator = Validator::make($request->input(), ['adm_name'=> 'required|max:255','log_id' => 'required|email|max:100']);
        if ($validator->fails()) {
            $errMsg=($validator->errors()->all());
            Session::flash('danger_message', $errMsg[0]);
            $request->flash();
            return back()->withInput();
        }
        
        if ($request->input('pwd') && strlen($request->input('pwd')) < 6) {
            Session::flash('danger_message', "PWD must be more than 6 characters!");
            return $this->show($request,$id);
        }
        if ($request->input('pwd_confirm') && strlen($request->input('pwd_confirm')) < 6) {
            Session::flash('danger_message', "PWD_CONFIRM must be more than 6 characters!");
            return $this->show($request,$id);
        }
        if ($request->input('pwd') != $request->input('pwd_confirm')) {
            Session::flash('danger_message', "Pwd & pwd_confirm no match!");
            return $this->show($request,$id);
        }

        //檢查登入帳號有無重複
        $dup = Kc_admin::where('id','!=',$id)->where('log_id',$request->input('log_id'))->whereNull('deleted_at')->count();
        if ($dup) {
            Session::flash('danger_message', "LogID Repeated!");
            return $this->show($request,$id);
        }
        
        
        $admin = Kc_admin::find($id);
        if ($request->input('pwd')) {
            $admin->password = bcrypt($request->input('pwd'));
        }

        $admin->name = $request->input('adm_name');
        $admin->active = $request->input('active');
        $admin->save();
        return redirect(Session('admrtn') ? Session('admrtn') : 'admins');
       
    }
    public function destroy(Request $request,$id)
    {
		
        $data = array();
        $adm = Kc_admin::find($id);
       
   //     $adm->update(['deleted_at' => Carbon\Carbon::now()]);
   //     $data['status']="ok";
        $data['status']="function not enabled!!";
        return  json_encode($data);
        
    }
    public function toggle(Request $request,$id)
    {
        $admin = Kc_admin::find($id);
        $updates['active'] = ($admin->active==1) ? '0' :'1'; 
        $admin->update($updates);
        return redirect(Session('admrtn') ? Session('admrtn') : url('admins') ); 
    }
}
