<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class zhuce extends Controller
{
    //
    public function zhucey(){
        return view('formYZ/index');
    }
    
    public function signup(Request $request){
        //验证列表
        $rules = [
            'userName'=>['required','min:4','max:16'],
            'email'=>['required','email','max:150'],
            'password'=>['required','min:6'],
            'zpassword'=>['required','same:password']
        ];
        
        //提示列表
        $msg = [
            'userName.required'=>'用户名不能为空',
            'userName.min'=>'用户名不能少于4个字符',
            'userName.max'=>'用户名不能超过16个字符',
            'email.required'=>'邮箱不能为空',
            'email.email'=>'邮箱格式不正确',
            'email.max'=>'邮箱的不能超过150个字符',
            'password.required'=>'密码不能为空',
            'password.min'=>'密码不能少于6个字符',
            'zpassword.required'=>'确认密码不能为空',
            'zpassword.same'=>'确认密码与密码不一致'
        ];
        
        //参数   表单提交过来的数据   表单验证规则   表单验证错误提示
         $this->validate($request, $rules,$msg);
         try{
             DB::table('tb_users')->insert([
                 'userName'=>$request->post('userName'),
                 'email'=>$request->post('email'),
                 'pwd'=>$request->post('password')
             ]);
             return redirect()->back()->with('msg','注册成功！')->withInput();
         }catch (\Exception $e){
             return redirect()->back()->withErrors('msg',"注册失败！")->withInput();
         }
    }
    
}
