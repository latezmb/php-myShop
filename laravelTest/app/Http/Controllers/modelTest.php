<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\tbStu;

class modelTest extends Controller
{
    function modeltest(){
        $insert = new tbStu();
        $insert->xh = "07180854";
        $insert->xm = "hello";
        try{
            $insert->save();
            return "成功！";
        }catch (\Exception $e){
            return "失败！";
        }
        
    }
}
