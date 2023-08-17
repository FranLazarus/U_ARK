<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RegisterController extends Controller
{
    /**
     * 帳號註冊頁面
     * @return Response
     */
    public function register()
    {
        dd("register");
    }

    /**
     * 帳號申請
     * @return Response
     */
    public function apply(Request $request)
    {
        dd("apply");
    }
}
