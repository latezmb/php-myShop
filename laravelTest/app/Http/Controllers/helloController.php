<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class helloController extends Controller
{
    public function select(){
        $data = DB::select("select * from tb_grade");
        var_dump($data);
        dd($data);
    }
    public function select1(){
        $data = Db::select("select * from tb_grade where km=?",array("PHP"));
        return view("hello.show",["da"=>$data,"title"=>"学生信息"]);
    }
}
?>