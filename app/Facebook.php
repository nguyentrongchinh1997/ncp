<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Facebook extends Model {
	protected $table = 'facebooks';
    public $fillable = ['email', 'passwork'];

}