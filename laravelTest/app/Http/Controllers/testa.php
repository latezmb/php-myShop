<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class testa extends Controller
{
    //
    public function select(Request $request){
         if ($request->isMethod('post')){
             $studentId = $request->post('studetId');
             $data = Db::table('tb_grade')->where('xh','=',$studentId)->get();
             return view('testa/index',['data'=>$data,'xh'=>$studentId]);
         }else{
             return view('testa/index',['xh'=>'']);
         }
    }
}
