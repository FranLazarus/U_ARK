<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * 使用者登入
     * @return Response
     */
    public function login(Request $request)
    {
        $user = User::where('account',$request->account)->where('password',$request->password)->first();
        if($user){
            if($user->status==1){
                dd('歡迎光臨諾亞克');
            }else{
                dd('此帳號待審核開通');
            }
        }
        dd('請先註冊帳號');
    }
}
