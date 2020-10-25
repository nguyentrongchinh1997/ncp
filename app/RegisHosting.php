<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisHosting extends Model
{
	protected $table = 'regishosting';
	protected $keyType = 'string';
	protected $fillable = [
		'nguoidung_id', 'loaihosting', 'type', 'status', 'time', 'price', 'order_id'
	];

	public function nguoiDung()
	{
		return $this->belongsTo(NguoiDung::class, 'nguoidung_id', 'id');
	}

	public function khachHang()
	{
		return $this->hasMany(KhachHang::class, 'cart_id', 'id');
	}

	public function order()
	{
		return $this->belongsTo(Order::class);
	}
}