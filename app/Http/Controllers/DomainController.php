<?php

namespace App\Http\Controllers;

use App\Domain;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Excel;
use App\Imports\DomainImport;
use App\Exports\DomainExport;

class DomainController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	// Danh sách
	public function getDanhSach()
	{
		$domain = Domain::all();
		return view('domain.danhsach', compact('domain'));
	}
	
	// Form thêm
	public function getThem()
	{
		return view('domain.them');
	}
	
	// Xử lý thêm
	public function postThem(Request $request)
	{
		$request->validate([
			'tendomain' => 'required|max:50',
			'giatien' => 'required|max:50',
		]);
		$check = Domain::where('tendomain', $request->tendomain)->first();

		if (empty($check)) {
			Domain::create([
				'tendomain' => $request->tendomain,
				'giatien' => $request->giatien,
			]);
			
			return redirect('/domain');
		} else {
			return back()->with('error', 'Tên miền này đã thêm');
		}
	}
	
	// Form sửa
	public function getSua($id)
	{
		$domain = Domain::find($id);
		return view('domain.sua', compact('domain'));
	}
	
	// Xử lý sửa
	public function postSua(Request $request, $id)
	{
		$domain = Domain::find($id);
		$domain->tendomain = $request->tendomain;
		$domain->giatien = $request->giatien;
		$domain->updated_at  = Carbon::now();
		$domain->save();
		
		return redirect('/domain');
	}
	
	// Xác nhận xóa
	public function getXoa($id)
	{
		$domain = Domain::find($id);
		return view('domain.xoa', compact('domain'));
	}
	
	// Xử lý xóa
	public function postXoa(Request $request, $id)
	{
		$domain = Domain::find($id);
		$domain->delete();
		
		return redirect('/domain');
	}

	public function postNhap(Request $request)
	{
		Excel::import(new DomainImport, $request->TapTinExcel);
        
		return redirect('/domain');
	}
	
	public function getXuat(Request $request)
	{
		return Excel::download(new DomainExport, 'Domain.xlsx');
	}
}