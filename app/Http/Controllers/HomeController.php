<?php

namespace App\Http\Controllers;
use App\DanhMuc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function __construct()
	{
		
	}
	
	public function getHome()
	{
		$danhmuc = DanhMuc::all();
		return view('home', compact('danhmuc'));
	}
}