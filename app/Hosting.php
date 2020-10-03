<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hosting extends Model
{
	protected $table = 'hosting';
	protected $keyType = 'string';
	protected $fillable = ['diachiip','giatien', 'status'];
	
	public function KhachHang()
	{
		return $this->hasMany(KhachHang::class, 'hosting_id', 'id');
	}
}