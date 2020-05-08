<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class login extends Controller
{
    //
    public function main(Request $request)
    {
        if($request->isMethod('post'))
        {
            $content = $request->input('content');
            $data = DB::table('tb_goods')->where('goodsName','like',"%".$content."%")->get();
            if($data->first())
            {
                return view('/main/index',['data'=>$data]);
            }
            return view('main/index',['data'=>null]);
        }
        $data = DB::table('tb_goods')->orderBy('id','desc')->get();
        return view('main/index',['data'=>$data]);
    }
    
    public function myLogin()
    {
        return view('main/login');
    }
    
    public function logindo(Request $request)
    {
        $user = $request->input("userName");
        $pass = $request->input("password");
        $data = DB::table('tb_user')->where('username','=',$user)->where('password','=',$pass)->first();
        if($data)
        {
            $userName = $data->username;
            session(['userName'=>$userName]);
            return redirect('main');           
        }
        else
        {
            return "输入信息有误".'  <a href="'.url('login').'">返回登陆</a>';
        }
    }
    
    public function out()
    {
        
        session::forget('userName');
        return view('main/login');
    }
    
    public function zhucedo(Request $request)
    {
        $userName = $request->input('userName');
        $password = $request->input('password');
        $zpassword = $request->input('zpassword');
        $phone = $request->input('phone');
        $email = $request->input('email');
        if ($password != $zpassword)
        {
            return '两次输入的密码不一致！  <a href="'.url('login').'">返回注册</a>';
        }
        $insert = DB::table('tb_user')->insert([
            'username' => $userName,
            'password' => $password,
            'phone' => $phone,
            'email' => $email
        ]);
        if($insert)
        {
            session(['userName'=>$userName]);
            return "注册成功!<a href='".url('main')."'>返回主页</a>";
        }
    }
}
