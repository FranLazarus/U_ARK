<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\apply_file;
use Modules\Unit\Entities\Org;

class RegisterController extends Controller
{
    /**
     * 帳號註冊頁面
     * @return Response
     */
    public function register()
    {
        return view('register');
    }

    /**
     * 帳號申請
     * @return Response
     */
    public function apply(Request $request)
    {
        $validated = $request->validate([
            'org_no' => 'required',
            'name' => 'required|string|max:255',
            'birthday' => 'date|nullable|before:'.date('Y-m-d'),
            'email' => 'nullable|email',
            'file' => 'required',
            'account' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ],[]);

        $org = Org::where('org_no',$validated['org_no'])->first();
        if($org){
            $validated['org_id'] = $org->id;
        }else{
            $org = Org::create([
                'org_no'=>$validated['org_no'],
            ]);
            $validated['org_id'] = $org->id;
        }

        $user = User::create($validated);


        $file_name = $request->file->getClientOriginalName();
        $request->file->storeAs($user->id, $file_name);
        $file_path = storage_path('app/public/'.$user->id.'/'.$file_name);

        apply_file::create([
            'user_id'=>$user->id,
            'file_path'=>$file_path,
        ]);

        return redirect()->route('login');
    }
}
