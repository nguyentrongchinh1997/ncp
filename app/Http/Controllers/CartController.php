<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Domain;
use App\RegisHosting;
use App\Order;
use DB;

class CartController extends Controller
{

    public function list()
    {
        $discountCodes = DB::table('discount_codes')->where('expire', '>=', date('Y-m-d'))->get();
        $userId = auth()->user()->id;
        $carts = Cart::where('nguoidung_id', $userId)->latest()->get();
        $total = Cart::where('nguoidung_id', $userId)->sum('price');

        return view('carts.list', compact('carts', 'total', 'discountCodes'));
    }

    public function send(Request $request)
    {
        $userId = auth()->user()->id;
        $carts = Cart::where('nguoidung_id', $userId)->latest()->get();
        $order = Order::create([
            'nguoidung_id' => auth()->user()->id,
            'discount' => $request->code
        ]);

        foreach($carts as $item) {
            RegisHosting::create([
                'nguoidung_id' => $item->nguoidung_id,
                'loaihosting' => $item->product,
                'type' => $item->type,
                'price' => $item->price,
                'time' => $item->time,
                'order_id' => $order->id
            ]);
        }
        Cart::where('nguoidung_id', $userId)->delete();

        return back()->with('success', 'Gửi đơn hàng thành công, vui lòng đợi chúng tôi xác nhận');
    }

    public function add(Request $request)
    {
        $check = Domain::where('tendomain', $request->product)->first();

        if (empty($check)) {
            Cart::updateOrCreate(
                [
                    'product' => $request->product,
                    'nguoidung_id' => auth()->user()->id
                ],
                [
                    'price' => $request->price,
                    'type' => $request->type,
                    'time' => $request->time,
                ]
            );

            return 1;
        } else {
            return 0;
        }
    }

    public function delete($id)
    {
        Cart::where('id', $id)->delete();

        return back()->with('success', 'Xóa thành công');
    }

    // Mua hosting
	public function postThem(Request $request)
	{
		if (!auth()->check()) {
			return redirect('/register');
		}	
        $inputs = $request->all();
        $price = $inputs['option'] * 1000 * $inputs['time'];

        Cart::create(
            [
                'product' => $inputs['product'],
                'nguoidung_id' => auth()->user()->id,
                'price' => $price,
                'type' => 1,
                'time' => $inputs['time'],
            ]
        );

		return back()->with('success', 'ok');
	}
}
