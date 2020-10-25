<?php

namespace App\Http\Controllers;

use App\RegisHosting;
use App\NguoiDung;
use App\Domain;
use App\Hosting;
use App\KhachHang;
use Carbon\Carbon;
use App\Order;
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
			$revenues = Order::all();
		} else {
			$date_start = date("$request->date_start 00:00:00");
			$date_end = date("$request->date_end 23:59:59");
			$revenues = Order::whereBetween('created_at', [$date_start, $date_end])->get();
		}
		
		return view('revenue', compact('revenues', 'date_start', 'date_end'));
	}

	public function accept($id)
	{
		DB::beginTransaction();
		try {
			$order = Order::where('id', $id)->first();
			$order->status = 1;
			$order->save();

			foreach ($order->regishosting as $orderItem) {
				$date_register = date('Y-m-d'); // ngày đăng ky sẽ là ngày duyệt đơn
				$t = strtotime($date_register);

				if ($orderItem->type == 0) {
					$date_exprie = date('Y-m-d', strtotime('+1 years', $t));
				} else {
					$date_exprie = date('Y-m-d', strtotime("+$orderItem->time month", $t));
				}
	
				if ($orderItem->type == 0) {
					$domain = Domain::updateOrCreate(
						[
							'tendomain' => $orderItem->loaihosting,
						],
						[
							'giatien' => $orderItem->price,
							'status' => 1
						]
					);
					KhachHang::create(
						[
							'order_id' => $id,
							'domain_id' => $domain->id,
							'price' => $orderItem->price,
							'nguoidung_id' => $orderItem->nguoidung_id,
							'date_register' => $date_register,
							'date_exprie' => $date_exprie
						]
					);
				} else {
					$host = Hosting::where('status', 0)->where('giatien', $orderItem->price/$orderItem->time)->get()->random(1);
					Hosting::where('id', $host[0]->id)->update(['status' => 1]);
					KhachHang::create(
						[
							'order_id' => $id,
							'hosting_id' => $host[0]->id,
							'price' => $orderItem->price,
							'nguoidung_id' => $orderItem->nguoidung_id,
							'date_register' => $date_register,
							'date_exprie' => $date_exprie
						]
					);
				}
			}
			
			DB::commit();

			return back();
		} catch (\Throwable $th) {
			DB::rollBack();
			dd($th->getMessage());
			return back()->with('error', 'Không đủ domain hoặc hosting');
		}
	}

	public function getDanhSach()
	{
		$user = auth()->user();

		if ($user->level == 1) {
			$orders = Order::latest()->get();
		} else {
			$orders = Order::where('nguoidung_id', auth()->user()->id)->latest()->get();
		}
		
		return view('/sanpham/giohang', compact('orders', 'user'));
	}

	public function getThem(Request $request)
	{
		$option = (!empty($request->option)) ? $request->option : NULL;
		$regishosting = RegisHosting::all();

		return view('sanpham/regishosting', compact('option'));
	}
}