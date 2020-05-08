<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Order extends Controller
{
    //
    public function myOrder()
    {
        if (session::has('userName')) {
            $username = session('userName');
            $data = DB::table('tb_orders')->where('username', '=', $username)
                ->orderby('id', 'desc')
                ->get();
            return view('model/order', [
                'data' => $data
            ]);
        }
        return redirect('login');
    }

    public function addOrder(Request $request)
    {
        if (session::has('userName')) {
            if ($request->input('Buy') != null) {
                $username = session('userName');
                $money = $request->input('money');
                $goodsName = $request->input('goodsName');
                $size = $request->input('size');
                $sum = $request->input('sum');
                $sumMoney = $money * $sum;
                $goodsImg = $request->input('goodsImg');
                $add = DB::table('tb_orders')->insert([
                    'username' => $username,
                    'goodsImg' => $goodsImg,
                    'size' => $size,
                    'money' => $sumMoney,
                    'sum' => $sum,
                    'goodsName' => $goodsName
                ]);
                if ($add) {
                    echo "<script>alert(\"购买成功！\");window.location.href='" . url('order') . "'</script>";
                }
                echo "<script>alert(\"购买失败！稍后再试\");window.location.href='" . url('main') . "'</script>";
            } else {
                    $username = session('userName');
                    $money = $request->input('money');
                    $goodsName = $request->input('goodsName');
                    $size = $request->input('size');
                    $sum = $request->input('sum');
                    $sumMoney = $money * $sum;
                    $goodsImg = $request->input('goodsImg');
                    $add = DB::table('tb_shopping')->insert([
                        'username' => $username,
                        'goodsImg' => $goodsImg,
                        'size' => $size,
                        'money' => $sumMoney,
                        'sum' => $sum,
                        'goodsName' => $goodsName
                    ]);
                    if ($add) {
                        echo "<script>alert(\"添加购物车成功！\");window.location.href='" . url('myShopping') . "'</script>";
                    }
                    echo "<script>alert(\"添加购物车失败！稍后再试\");window.location.href='" . url('main') . "'</script>";
            }
        }
    }
    
    public function myShopping(){
        if (session::has('userName')) {
            $username = session('userName');
            $data = DB::table('tb_shopping')->where('username', '=', $username)
            ->orderby('id', 'desc')
            ->get();
            return view('model/ShoppingCart', [
                'data' => $data
            ]);
        }
        return redirect('login');
    }
    
    public function delShopAddorder(Request $request){
        $id = $request->get('id');
        $select = DB::table('tb_shopping')->where('id','=',$id)->first();
        $username = $select->username;
        $money = $select->money;
        $goodsName = $select->goodsName;
        $size = $select->size;
        $sum = $select->sum;
        $goodsImg = $select->goodsImg;
        $add = DB::table('tb_orders')->insert([
            'username' => $username,
            'goodsImg' => $goodsImg,
            'size' => $size,
            'money' => $money,
            'sum' => $sum,
            'goodsName' => $goodsName
        ]);
        if ($add) {
            DB::table('tb_shopping')->where('id','=',$id)->delete();
            echo "<script>alert(\"购买成功！\");window.location.href='" . url('order') . "'</script>";
        }
        echo "<script>alert(\"购买失败！稍后再试\");window.location.href='" . url('main') . "'</script>";
    }
}