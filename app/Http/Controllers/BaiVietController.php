<?php

namespace App\Http\Controllers;

use App\BaiViet;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BaiVietController extends Controller
{
	// Danh sách
	public function getDanhSach()
	{
		$baiviet = BaiViet::all();
		return view('baiviet.danhsach', compact('baiviet'));
	}
	
	// Form thêm
	public function getThem()
	{
		return view('baiviet.them');
	}
	
	// Xử lý thêm
	public function postThem(Request $request)
	{
		$request->validate([
			'tieude' => 'required',
			'noidung' => 'required',
			'hinhanh' => 'required',
		]);
		
		$baiviet = new BaiViet();
		$baiviet->tieude = $request->tieude;
		$baiviet->noidung = $request->noidung;
		if($request->hasFile('hinhanh')){

            $fImage = $request->file('hinhanh');
            $bientam = time().'_'.$fImage->getClientOriginalName();
            $destinationPath = public_path('/upload');
            $fImage->move($destinationPath,$bientam); 
        }
       	$baiviet->hinhanh = $bientam;
		$baiviet->created_at = Carbon::now();
		$baiviet->updated_at  = Carbon::now();
		$baiviet->save();

		
		
		return redirect('/baiviet');
	}
	
	// Form sửa
	public function getSua($id)
	{
		$baiviet = BaiViet::find($id);
		return view('baiviet.sua', compact('baiviet'));
	}
	
	// Xử lý sửa
	public function postSua(Request $request, $id)
	{
		$request->validate([
			'tieude' => 'required',
			'noidung' => 'required',
		]);
		
		$baiviet = new BaiViet();
		$baiviet->tieude = $request->tieude;
		$baiviet->noidung = $request->noidung;
		$baiviet->created_at = Carbon::now();
		$baiviet->updated_at  = Carbon::now();
		$baiviet->save();
		
		return redirect('/baiviet');
	}
	
	// Xác nhận xóa
	public function getXoa($id)
	{
		$baiviet = BaiViet::find($id);
		return view('baiviet.xoa', compact('baiviet'));
	}
	
	// Xử lý xóa
	public function postXoa(Request $request, $id)
	{
		$baiviet = BaiViet::find($id);
		$baiviet->delete();
		
		return redirect('/baiviet');
	}
}