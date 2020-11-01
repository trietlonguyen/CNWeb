<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
	protected $table = 'sinhvien';
	protected $keyType = 'string';
	
	protected $fillable = [
		'id', 'lop_id', 'holot', 'ten'
	];
	
	public function Lop()
	{
		return $this->belongsTo('App\Lop');
	}
}