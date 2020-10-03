<?php

namespace App\Http\Controllers;

use App\Hosting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HostingController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	// Danh sách
	public function getDanhSach()
	{
		$hosting = Hosting::all();
		return view('hosting.danhsach', compact('hosting'));
	}
	
	// Form thêm
	public function getThem()
	{
		return view('hosting.them');
	}
	
	// Xử lý thêm
	public function postThem(Request $request)
	{
		$request->validate([
			'diachiip' => 'required|max:50',
			'giatien' => 'required|max:50',
		]);

		$check = Hosting::where('diachiip', $request->diachiip)->first();

		if (empty($check)) {
			Hosting::create([
				'diachiip' => $request->diachiip,
				'giatien' => $request->giatien,
			]);
			
			return redirect('/hosting');
		} else {
			return back()->with('error', 'Địa chỉ IP này đã thêm');
		}
	}
	
	// Form sửa
	public function getSua($id)
	{
		$hosting = Hosting::find($id);
		return view('hosting.sua', compact('hosting'));
	}
	
	// Xử lý sửa
	public function postSua(Request $request, $id)
	{
		$request->validate([
			'diachiip' => 'required|max:50',
			'giatien' => 'required|max:50',
		]);
		
		$hosting = Hosting::find($id);
		$hosting->diachiip = $request->diachiip;
		$hosting->giatien = $request->giatien;
		$hosting->created_at = Carbon::now();
		$hosting->updated_at  = Carbon::now();
		$hosting->save();
		
		return redirect('/hosting');
	}
	
	// Xác nhận xóa
	public function getXoa($id)
	{
		$hosting = Hosting::find($id);
		return view('hosting.xoa', compact('hosting'));
	}
	
	// Xử lý xóa
	public function postXoa(Request $request, $id)
	{
		$hosting = Hosting::find($id);
		$hosting->delete();
		
		return redirect('/hosting');
	}
}