<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;

class myHandle extends Controller
{
    //
    public  function goodsShow(Request $request)
    {
        $id = $request->get('id');
        $data = DB::table('tb_goods')->where('id','=',$id)->first();
        $comment = DB::table('tb_comments')->where('goodsId','=',$id)->orderBy('id','desc')->get();
        if ($data)
        {
            return view('model/detailed',['data'=>$data,'comment'=>$comment]);
        }
        return '数据错误  &nbsp;&nbsp;&nbsp;&nbsp;<a href="'.url('main').'"></a>';
    }
    
    public function addComment(Request $request)
    {
        if(session::has('userName'))
        {
            $goodsId = $request->input('goodsId');
            $username = $request->input('username');
            $content = $request->input('content');
            $inser = DB::table('tb_comments')->insert([
                'goodsId'=>$goodsId,
                'username'=>$username,
                'content'=>$content
            ]);
            if ($inser)
            {
                echo "<script>alert(\"评论成功！\");window.location.href=\"".url('detailed')."?id=".$goodsId."\";</script>";
            }
        }
        else
        {
            return redirect('login');
        }
        
    }
    
    
}
