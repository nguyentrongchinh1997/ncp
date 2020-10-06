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

	public function buyDomainForm(Request $request)
	{
		$check = Domain::where('tendomain', $request->get('domain'))->first();
		$domain = $request->get('domain');
			
		if (empty($check)) {
			Domain::create([
				'tendomain' => $request->get('domain'),
				'giatien' => $request->get('price'),
			]);
		} else {
			if ($check->status == 1) {
				return redirect()->route('sanphamdomain', ['query' => $request->get('domain')])->with('error', 'Tên miền này đã được đăng ký');
			}
		}
		return view('sanpham.buy_domain', compact('domain'));
	}

	public function buyDomain(Request $request)
	{
		if (!auth()->check()) {
			return redirect('/login');
		} else {
			RegisHosting::create([
				'nguoidung_id' => auth()->user()->id,
				'loaihosting' => $request->domain,
				'type' => 0,
				'time' => 12
			]);

			return redirect()->route('cart');
		}
	}

	public function revenue(Request $request)
	{
		$date_start = $date_end = NULL; 

		if (empty($request->date_start)) {
			$revenues = KhachHang::all();
			$total = KhachHang::sum('price');
		} else {
			$date_start = date("$request->date_start 00:00:00");
			$date_end = date("$request->date_end 23:59:59");
			$revenues = KhachHang::whereBetween('created_at', [$date_start, $date_end])->get();
			$total = KhachHang::whereBetween('created_at', [$date_start, $date_end])->sum('price');
		}
		
		return view('revenue', compact('revenues', 'total', 'date_start', 'date_end'));
	}

	public function accept($id)
	{
		DB::beginTransaction();
		try {
			$cart = RegisHosting::findOrFail($id);
			$cart->status = 1; $cart->save();
			$date_register = date('Y-m-d', strtotime($cart->created_at));
			$t = strtotime($date_register);

			if ($cart->type == 0) {
				$date_exprie = date('Y-m-d', strtotime('+1 years', $t));
			} else {
				$date_exprie = date('Y-m-d', strtotime("+$cart->time month", $t));
			}
 
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
			$regishosting = RegisHosting::latest()->get();
		} else {
			$regishosting = RegisHosting::where('nguoidung_id', auth()->user()->id)->latest()->get();
		}
		
		return view('/sanpham/giohang', compact('regishosting', 'user'));
	}

	public function getThem(Request $request)
	{
		$option = (!empty($request->option)) ? $request->option : NULL;
		$regishosting = RegisHosting::all();

		return view('sanpham/regishosting', compact('option'));
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
		$rh->type = 1;
		$rh->time = $request->time;
		$rh->created_at = Carbon::now();
		$rh->save();

		return redirect()->route('cart');
	}
}