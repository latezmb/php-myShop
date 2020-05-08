<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class myInformation extends Controller
{
    //
    public function myInfoe()
    {
        if(session::has('userName'))
        {
            $username = session('userName');
            $data = DB::table('tb_user')->where('username','=',$username)->first();
            return view('/main/.updateInformation',['data'=>$data]);
        }
        return view('main/login');
    }
    
    public function update(Request $request)
    {
        $userName = session('userName');
        $password = $request->input('password');
        $zpassword = $request->input('zpassword');
        $phone = $request->input('phone');
        $email = $request->input('email');
        if ($password != $zpassword)
        {
            return '两次输入的密码不一致！  <a href="'.url('updateInfor').'">返回注册</a>';
        }
        
        $update = DB::table('tb_user')
                ->where('username','=',$userName)
                ->update([
                    'password'=>$password,
                    'phone'=>$phone,
                    'email'=>$email
                ]);
                dd($update);
        return "修改成功!<a href='".url('login')."'>返回登陆</a>";

    }
}
?>
