<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
	protected $table = 'domain';
	protected $fillable = ['tendomain','giatien', 'status'];
	
	public function KhachHang()
	{
		return $this->hasMany('App\KhachHang');
	}

	public function Hosting()
	{
		return $this->hasMany('App\Hosting');
	}
}