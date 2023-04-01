<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App\Models\Kc_admin;


class Adminx
{
    public function handle($request, Closure $next)
    {
    	if (!Session::has('adm_id')) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
               return redirect()->guest('login');
                
				
            }
        }	
        return $next($request);
    }
    public static function admin_id() {
        return Session::has('adm_id') ? Session::get('adm_id') : 0;
    }

    public static function admin()
    {
    	if(!Session::has('adm_id')){return NULL;}
        $aid = Session::get('adm_id');
        $rec = Kc_admin::where('id',$aid)->where('active','=',1)->first();
        if(empty($rec)){return NULL;}
        return $rec;
       
    }
    
    public static function getrand($length=32,$type=4) {
            $hash = '';	
            switch ($type){
                    case 1:	
                            $chars = '0123456789abcdefghijklmnpqrstuvwxyz';   //預設小寫及數字
                            break;
                    case 2:
                            $chars = '0123456789'; //純數字
                            break;
                    case 3:
                            $chars = 'ABCDEFGHIJKLMNPQRSTUVWXYZ0123456789';//小寫英文字&數字
                            braek;
                    case 4:
                            $chars = 'ABCDEFGHIJKLMNPQRSTUVWXYZ0123456789abcdefghijklmnpqrstuvwxyz'; //大小寫夾雜及數字
                            break;
            }
            $max = strlen($chars) - 1;
            mt_srand((double)microtime() * 1000000); 
            for($i = 0; $i < $length; $i++) { 
                $hash .= $chars[mt_rand(0, $max)];  
            } 
            return $hash;
    }

	
}
