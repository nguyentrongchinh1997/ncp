<?php

namespace App\Exports;

use App\Domain;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DomainExport implements FromCollection, WithHeadings
{
    public function headings(): array
	{
		return [
			'Mã Domain',
			'Tên Domain',
			'Tên khách hàng',
			'Địa chỉ ip',
			'ngày thuê',
			'thời hạn',
			'giá tiền',
		];
	}
	
	public function collection()
	{
		return Domain::all('id', 'tendomain', 'tenkh', 'diachiip', 'ngaythue', 'thoihan', 'giatien');
	}
}
