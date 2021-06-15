<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function insertOrder(Request $request, $id)
    {

        $productId = $id;
        $userName = session('user');

        DB::table('orders')->insert([
            'user_name' => $userName,
            'product_id' => $productId
        ]);

        return redirect('/shoes');
    }


    public function getOrder()
    {
        $userOrder = session('user');
        if (session('success')) {
            $orders = DB::table('orders')->where('user_name', $userOrder)->get();
            return view('pages.cart', ['orders' => $orders]);
        } else {
            return redirect('/login-register');
        }
    }

    public function deleteOrder($id)
    {
        DB::table('orders')->where('id', $id)->delete();
        return redirect('/cart');
    }
}
