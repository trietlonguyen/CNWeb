<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
	protected $table = 'sanpham';
	protected $keyType = 'string';
	
	public function DanhMuc()
	{
		return $this->belongsTo('App\DanhMuc');
	}
	public function ChiTietSP()
	{
		return $this->hasMany('App\ChiTietSP');
	}
}