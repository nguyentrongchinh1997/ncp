<?php

namespace App\Exports;

use App\KhachHang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KhachHangExport implements FromCollection, WithHeadings
{
	public function headings(): array
	{
		return [
			'Mã khách hàng',
			'Họ tên',
			'Ngày sinh',
			'Điện thoại',
			'Email',
			'Tên miền đã thuê',
			'Hosting đã thuê',
			'Ghi chú',
		];
	}
	
	public function collection()
	{
		return KhachHang::all('id', 'hoten', 'ngaysinh', 'dienthoai', 'email', 'domain_id', 'hosting_id', 'ghichu');
	}
}