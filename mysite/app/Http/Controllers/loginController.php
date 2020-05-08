<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\tbUser;

class loginController extends Controller
{
    //
    public function login(){
        return view('login/login');
    }
    
    public function logindo(Request $request){
        $username = $request->post('username');
        $password = $request->post('password');
        $user = tbUser::where('username','=',$username)->first();
        if (!empty($user)){
            if ($user->pwd == $password){
                session()->put('user_id',$user->id);
                return view('home/index',['user'=>$user->username,'title'=>'主页']);
            }else{
                return "密码不正确！";
            }
        }else{
           echo "用户名不存在";
           echo "<a href='".url('login')."'>返回</a>";
        }
    }
}
