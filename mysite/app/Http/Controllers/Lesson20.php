<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Lesson20 extends Controller
{
    //
    public function index(){
        return view('lesson20.index');
    }
    
    public function grade(Request $request){
        $xh = $request->input('xh');
        $km = $request->input('km');
        $data = DB::table('tb_grade')->where('xh','=',$xh)->where('km','=',$km)->get();
        return view('lesson20.grade',['data'=>$data]);
    }
    
    public  function student(Request $request){
        $gjz = $request->input('keyword');
        $data = DB::table('tb_student')
                    ->where('sno','like','%'.$gjz.'%')
                    ->orwhere('sname','like','%'.$gjz.'%')
                    ->orwhere('classname','like','%'.$gjz.'%')
                    ->get();
        return view('lesson20/student',['data'=>$data]);
    }
    
    public function order(Request $request){
        $start = $request->input('stime');
        $end = $request->input('etime');
        $data = DB::table('tb_orders')
                ->where('trans_time','>=',$start)
                ->where('trans_time','<=',$end)
                ->get();
        return view('lesson20/order',['data'=>$data]);
    }
   
}
