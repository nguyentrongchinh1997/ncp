<?php

namespace App\Imports;

use App\Domain;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DomainImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Domain([
            'id' => $row['ma_domain'],
            'tendomain' => $row['ten_domain'],
            'tenkh' => $row['ten_khach_hang'],
            'diachiip' => $row['dia_chi_ip'],
            'ngaythue' => $row['ngay_thue'],
            'thoihan' => $row['thoi_han'],
            'giatien' => $row['gia_tien'],
        ]);
    }
    
    public function headingRow(): int
    {
        return 5;
    }
}
