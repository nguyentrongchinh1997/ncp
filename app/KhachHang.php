<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
	protected $table = 'khachhang';
	protected $keyType = 'string';
	protected $fillable = ['id', 'domain_id', 'hosting_id', 'price', 'nguoidung_id', 'date_register', 'date_exprie', 'cart_id'];
	
	public function Domain()
	{
		return $this->belongsTo('App\Domain');
	}

	public function Hosting()
	{
		return $this->belongsTo(Hosting::class, 'hosting_id', 'id');
	}

	public function regisHosting()
	{
		return $this->belongsTo(RegisHosting::class, 'cart_id', 'id');
	}

	public function nguoiDung()
	{
		return $this->belongsTo(NguoiDung::class, 'nguoidung_id', 'id');
	}
}