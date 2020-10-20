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
		$khachhang = KhachHang::all()->groupBy('nguoidung_id');

		return view('khachhang.danhsach', compact('khachhang'));
	}
}