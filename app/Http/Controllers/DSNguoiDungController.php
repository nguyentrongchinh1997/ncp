<?php

namespace App\Http\Controllers;

use App\NguoiDung;
use App\KhachHang;
use App\Domain;
use App\Hosting;
use Carbon\Carbon;
use Excel;
use App\Imports\DomainImport;
use App\Exports\DomainExport;
use Illuminate\Http\Request;

class DSNguoiDungController extends Controller
{
    public function getKhachHang()
    {
        $userId = auth()->user()->id;
        $khachhang = KhachHang::where('id', $userId)->latest()->get();

        return view('khachhang.danhsach', compact('khachhang'));
    }

    public function getDanhSach()
    {
        $userId = auth()->user()->id;
        $nguoidung = NguoiDung::where('id', $userId)->latest()->get();

        return view('nguoidung.danhsach', compact('nguoidung'));
    }

    public function getSua($id)
    {
        $userId = auth()->user()->id;
        $nguoidung = NguoiDung::find($id);
        return view('nguoidung.sua', compact('nguoidung'));
    }

    public function postSua(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $nd = NguoiDung::find($id);
        $nd->name = $request->name;
        $nd->username= $request->username;
        $nd->phone = $request->phone;
        $nd->email = $request->email;
        $nd->updated_at = Carbon::now();
        $nd->save();
        
        return redirect('/nguoidung');
    }

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
        
        return redirect('/');
    }
}
