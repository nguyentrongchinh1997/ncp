<?php

namespace App\Http\Controllers;

use App\RegisHosting;
use App\NguoiDung;
use App\Domain;
use App\Hosting;
use App\KhachHang;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class RegisHostingController extends Controller
{
	
	// public function index()
	// {
	// 	return view('/sanpham/regishosting');
	// }

	public function revenue(Request $request)
	{
		$date = NULL;

		if (empty($request->date)) {
			$revenues = KhachHang::all();
			$total = KhachHang::sum('price');
		} else {
			$date = $request->date;
			$revenues = KhachHang::whereDate('created_at', $date)->get();
			$total = KhachHang::whereDate('created_at', $date)->sum('price');
		}
		
		return view('revenue', compact('revenues', 'total', 'date'));
	}

	public function accept($id)
	{
		DB::beginTransaction();
		try {
			$cart = RegisHosting::findOrFail($id);
			$cart->status = 1; $cart->save();
			$date_register = date('Y-m-d', strtotime($cart->created_at));
			$t = strtotime($date_register);
			$date_exprie = date('Y-m-d', strtotime('+1 years', $t));

			if ($cart->type == 0) {
				$domain = Domain::where('status', 0)->get()->random(1);
				Domain::where('id', $domain[0]->id)->update(['status' => 1]);
				KhachHang::updateOrCreate(
					[
						'cart_id' => $id
					],
					[
						'domain_id' => $domain[0]->id,
						'price' => $domain[0]->giatien,
						'nguoidung_id' => $cart->nguoidung_id,
						'date_register' => $date_register,
						'date_exprie' => $date_exprie
					]
				);
			} else {
				$host = Hosting::where('status', 0)->get()->random(1);
				Hosting::where('id', $host[0]->id)->update(['status' => 1]);
				KhachHang::updateOrCreate(
					[
						'cart_id' => $id
					],
					[
						'hosting_id' => $host[0]->id,
						'price' => $host[0]->giatien,
						'nguoidung_id' => $cart->nguoidung_id,
						'date_register' => $date_register,
						'date_exprie' => $date_exprie
					]
				);
			}
			DB::commit();

			return back();
		} catch (\Throwable $th) {
			DB::rollBack();
			return back()->with('error', 'Không đủ domain hoặc hosting');
		}
	}

	public function getDanhSach()
	{
		$user = auth()->user();

		if ($user->level == 1) {
			$regishosting = RegisHosting::all();
		} else {
			$regishosting = RegisHosting::where('nguoidung_id', auth()->user()->id)->latest()->get();
		}
		
		return view('/sanpham/giohang', compact('regishosting', 'user'));
	}

	public function getThem()
	{
		$regishosting = RegisHosting::all();
		return view('sanpham/regishosting');
	}
	
	// Xử lý thêm
	public function postThem(Request $request)
	{
		$request->validate([
			'loaihosting' => 'required|max:50',
			'dienthoai' => 'required|max:50',
		]);

		if (!auth()->check()) {
			return redirect('/register');
		}
		NguoiDung::where('id', auth()->user()->id)->update(['phone' => $request->dienthoai]);
		
		$rh = new RegisHosting();
		$rh->loaihosting = $request->loaihosting;
		$rh->nguoidung_id = auth()->user()->id;
		$rh->created_at = Carbon::now();
		$rh->save();

		return redirect()->route('cart');
	}
}