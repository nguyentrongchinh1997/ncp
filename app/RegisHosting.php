<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisHosting extends Model
{
	protected $table = 'regishosting';
	protected $keyType = 'string';

	public function nguoiDung()
	{
		return $this->belongsTo(NguoiDung::class, 'nguoidung_id', 'id');
	}

	public function khachHang()
	{
		return $this->hasMany(KhachHang::class, 'cart_id', 'id');
	}
}