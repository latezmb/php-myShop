<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class testb extends Controller
{
    //
    public function select(){
        $data = DB::table('tb_grade')->get();
        return view('testb/index',['data'=>$data]);
    }
    
    public function update($id){
        $data = DB::table('tb_grade')->where('id','=',$id)->first();
        return view('testb/update',['data'=>$data]);
    }
    
    public function updatedo(Request $request){
        $id = $request->post('id');
        $cj = $request->post('cj');
        DB::table('tb_grade')->where('id','=',$id)->update(['cj'=>$cj]);
        return redirect('testb/select');
    }
    
    public function delete($id){
        DB::table('tb_grade')->where('id','=',$id)->delete();
        return redirect('testb/select');
    }
    
    public function insert() {
        $data = DB::table('tb_grade')->select('xh','km')->distinct()->get();
        return view('testb/insert',['data'=>$data]);
    }
    
    public function insertdo(Request $request){
        
        $rules = [
            'cj' => 'integer'
        ];
        
        $msg = [
          'cj.integer'=>'成绩必须为整数'  
        ];
        
        $this->validate($request, $rules,$msg);
        
        try {
            $xh = $request->post('xh');
            $km = $request->post('km');
            $cj = $request->post('cj');
            DB::table('tb_grade')->insert(['xh'=>$xh,'km'=>$km,'cj'=>$cj]);
            return redirect()->back()->with('msg','添加成功')->withInput();
        }catch (\Exception $e){
            return redirect()->back()->withErrors('msg','添加失败！');
        }

    }
    
    
}
