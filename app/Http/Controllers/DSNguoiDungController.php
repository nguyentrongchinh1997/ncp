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

    public function getDanhSach()
    {
        $userId = auth()->user()->id;
        $nguoidung = NguoiDung::where('id', $userId)->latest()->get();
        $products = KhachHang::where('nguoidung_id', $userId)->get();

        return view('nguoidung.danhsach', compact('nguoidung', 'products'));
    }

    // Form thêm hình ảnh
    public function getThemHinhAnh($id)
    {
        $userId = auth()->user()->id;
        $nguoidung = NguoiDung::find($id);
        return view('nguoidung.them', compact('nguoidung'));
    }
    
    // Xử lý thêm ảnh
    public function postThemHinhAnh(Request $request, $id)
    {
        $request->validate([
            'hinhanh' => 'required',
        ]);
        
        $nguoidung = NguoiDung::find($id);
        if($request->hasFile('hinhanh')){

            $fImage = $request->file('hinhanh');
            $bientam = time().'_'.$fImage->getClientOriginalName();
            $destinationPath = public_path('/upload');
            $fImage->move($destinationPath,$bientam); 
        }
        $nguoidung->hinhanh = $bientam;
        $nguoidung->save();
        return redirect('/nguoidung');
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
