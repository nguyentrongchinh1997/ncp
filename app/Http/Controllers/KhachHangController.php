<?php

namespace App\Http\Controllers;

use App\KhachHang;
use App\Domain;
use App\Hosting;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Excel;
use App\Imports\KhachHangImport;
use App\Exports\KhachHangExport;


class KhachHangController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	// Danh sách
	public function getDanhSach()
	{
		$khachhang = KhachHang::all();
		return view('khachhang.danhsach', compact('khachhang'));
	}
	
	// Form thêm
	public function getThem()
	{
		$domain = Domain::all();
		$hosting = Hosting::all();
		return view('khachhang.them', compact('domain'), compact('hosting'));
	}
	
	// Xử lý thêm
	public function postThem(Request $request)
	{
		// Kiểm tra
		$request->validate([
			'id' => 'required|max:8|unique:khachhang',
			'domain_id',
			'hosting_id',
			'hoten' => 'required',
			'ngaysinh' => 'required',
			'email' => 'required|email',
			'dienthoai' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
			'ghichu',
		]);
		
		$sv = new KhachHang();
		$sv->id = $request->id;
		$sv->domain_id = $request->domain_id;
		$sv->hosting_id= $request->hosting_id;
		$sv->hoten = $request->hoten;
		$sv->ngaysinh = $request->ngaysinh;
		$sv->email = $request->email;
		$sv->dienthoai = $request->dienthoai;
		$sv->ghichu = $request->ghichu;
		$sv->created_at = Carbon::now();
		$sv->updated_at = Carbon::now();
		$sv->save();
		
		return redirect('/khachhang');
	}
	
	// Form sửa
	public function getSua($id)
	{
		$domain = Domain::all();
		$hosting = Hosting::all();
		$khachhang = KhachHang::find($id);
		return view('khachhang.sua', compact('domain', 'khachhang'), compact('hosting', 'khachhang'));
	}
	
	// Xử lý sửa
	public function postSua(Request $request, $id)
	{
		$request->validate([
			'domain_id' => 'required',
			'hosting_id' => 'required',
			'hoten' => 'required',
			'ngaysinh' => 'required',
			'email' => 'required|email',
			'dienthoai' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
			'ghichu' => 'required|max:50',
		]);

		$kh = KhachHang::find($id);
		$kh->domain_id = $request->domain_id;
		$kh->hosting_id= $request->hosting_id;
		$kh->hoten = $request->hoten;
		$kh->ngaysinh = $request->ngaysinh;
		$kh->email = $request->email;
		$kh->dienthoai = $request->dienthoai;
		$kh->ghichu = $request->ghichu;
		$kh->updated_at = Carbon::now();
		$kh->save();
		
		return redirect('/khachhang');
	}
	
	// Xác nhận
	public function getXoa($id)
	{
		$khachhang = KhachHang::find($id);
		return view('khachhang.xoa', compact('khachhang'));
	}
	
	// Xử lý xóa
	public function postXoa(Request $request, $id)
	{
		$khachhang = KhachHang::find($id);
		$khachhang->delete();
		
		return redirect('/khachhang');
	}
	public function postNhap(Request $request)
	{
		Excel::import(new KhachHangImport, $request->TapTinExcel);
        
		return redirect('/khachhang');
	}
	
	public function getXuat(Request $request)
	{
		return Excel::download(new KhachHangExport, 'DH18PM.xlsx');
	}
}