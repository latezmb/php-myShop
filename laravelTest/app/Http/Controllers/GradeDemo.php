<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GradeDemo extends Controller
{
    public function search(){
        return view('gradeDemo.search');
    }
    
    public function searchdo(Request $request){
        $condition = $request->post("studentId");
        $data = DB::table("tb_grade")->where("xh","=",$condition)->get()->toArray();
        return view('gradeDemo.searchdo',["data" => $data]);
    }
}
