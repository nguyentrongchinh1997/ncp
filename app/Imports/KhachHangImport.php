<?php

namespace App\Imports;

use App\KhachHang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KhachHangImport implements ToModel, WithHeadingRow
{
	public function model(array $row)
	{
		return new KhachHang([
			'id' => $row['ma_khach_hang'],
			'hoten' => $row['ho_va_ten'],
			'ngaysinh' => $row['ngay_sinh'],
			'dienthoai' => $row['dien_thoai'],
			'email' => $row['email'],
			'domain_id' => $row['ten_mien_da_thue'],
			'hosting_id' => $row['hosting_da_thue'],
			'ghichu' => $row['ghi_chu'],
		]);
	}
	
	public function headingRow(): int
	{
		return 5;
	}
}