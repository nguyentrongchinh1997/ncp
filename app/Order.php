<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'nguoidung_id',
        'discount',
        'status'
    ];

    public function nguoidung()
    {
        return $this->belongsTo(NguoiDung::class);
    }

    public function regishosting()
    {
        return $this->hasMany(RegisHosting::class);
    }

    public function khachHang()
    {
        return $this->hasMany(KhachHang::class);
    }
}
