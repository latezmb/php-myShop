<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tbCourse;

class course extends Controller{
    public function index(){
        $data = tbCourse::paginate(10);
        return view('test/course',['data'=>$data]);
    }
}