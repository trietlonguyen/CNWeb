<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lop extends Model
{
	protected $table = 'lop';
	protected $keyType = 'string';
	
	public function SinhVien()
	{
		return $this->hasMany('App\SinhVien');
	}
	
}