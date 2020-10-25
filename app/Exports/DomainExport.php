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
			'Tên Domain',
			'Giá tiền',
			'Ngày tạo',
			'Trạng thái',
			'Ngày sửa',
		];
	}
	
	public function collection()
	{
		return Domain::all( 'tendomain', 'giatien', 'created_at', 'status', 'updated_at');
	}
}
