<?php

namespace App\Http\Controllers;

use App\NguoiDung;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NguoiDungController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function uploadAvatar(Request $request)
	{
		// $request->image->store('images', 'public');
		NguoiDung::find(1)->update(['avatar' => 'asdfsd']);
		return 'uploaded';
	}

	// Danh sách
	public function getDanhSach()
	{
		$nguoidung = NguoiDung::all();
		return view('nguoidung.danhsach', compact('nguoidung'));
	}
	
	// Form thêm
	public function getThem()
	{
		return view('nguoidung.them');
	}
	
	// Xử lý thêm
	public function postThem(Request $request)
	{
		$request->validate([
			'id' => 'required|max:8|unique:nguoidung',
			'tendomain' => 'required|max:50',
			'tenkh' => 'required|max:50',
			'giatien' => 'required|max:50',
			'diachiip' => 'required|max:50',
			'ngaythue' => 'required|max:50',
			'thoihan' => 'required|max:50',
		]);
		
		$nguoidung = new NguoiDung();
		$nguoidung->id = $request->id;
		$nguoidung->tendomain = $request->tendomain;
		$nguoidung->tenkh = $request->tenkh;
		$nguoidung->giatien = $request->giatien;
		$nguoidung->diachiip = $request->diachiip;
		$nguoidung->ngaythue = $request->ngaythue;
		$nguoidung->thoihan = $request->thoihan;
		$nguoidung->created_at = Carbon::now();
		$nguoidung->updated_at  = Carbon::now();
		$nguoidung->save();
		
		return redirect('/nguoidung');
	}
	
	// Form sửa
	public function getSua($id)
	{
		$nguoidung = NguoiDung::find($id);
		return view('nguoidung.sua', compact('nguoidung'));
	}
	
	// Xử lý sửa
	public function postSua(Request $request, $id)
	{
		$request->validate([
			'tendomain' => 'required|max:50',
			'tenkh' => 'required|max:50',
			'giatien' => 'required|max:50',
			'diachiip' => 'required|max:50',
			'ngaythue' => 'required|max:50',
			'thoihan' => 'required|max:50',
		]);
		
		$nguoidung = NguoiDung::find($id);
		$nguoidung->tendomain = $request->tendomain;
		$nguoidung->tenkh = $request->tenkh;
		$nguoidung->giatien = $request->giatien;
		$nguoidung->diachiip = $request->diachiip;
		$nguoidung->ngaythue = $request->ngaythue;
		$nguoidung->thoihan = $request->thoihan;
		$nguoidung->updated_at  = Carbon::now();
		$nguoidung->save();
		
		return redirect('/nguoidung');
	}
	
	// Xác nhận xóa
	public function getXoa($id)
	{
		$nguoidung = NguoiDung::find($id);
		return view('nguoidung.xoa', compact('nguoidung'));
	}
	
	// Xử lý xóa
	public function postXoa(Request $request, $id)
	{
		$nguoidung = NguoiDung::find($id);
		$nguoidung->delete();
		
		return redirect('/nguoidung');
	}
}