<?php

namespace App\Http\Controllers;

use App\Lop;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LopController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	// Danh sách
	public function getDanhSach()
	{
		$lop = Lop::all();
		return view('lop.danhsach', compact('lop'));
	}
	
	// Form thêm
	public function getThem()
	{
		return view('lop.them');
	}
	
	// Xử lý thêm
	public function postThem(Request $request)
	{
		$request->validate([
			'id' => 'required|max:8|unique:lop',
			'tenlop' => 'required|max:50',
		]);
		
		$lop = new Lop();
		$lop->id = $request->id;
		$lop->tenlop = $request->tenlop;
		$lop->created_at = Carbon::now();
		$lop->updated_at  = Carbon::now();
		$lop->save();
		
		return redirect('/lop');
	}
	
	// Form sửa
	public function getSua($id)
	{
		$lop = Lop::find($id);
		return view('lop.sua', compact('lop'));
	}
	
	// Xử lý sửa
	public function postSua(Request $request, $id)
	{
		$request->validate([
			'id' => 'required|max:8|unique:lop,id,' . $id,
			'tenlop' => 'required|max:50',
		]);
		
		$lop = Lop::find($id);
		$lop->id = $request->id;
		$lop->tenlop = $request->tenlop;
		$lop->updated_at  = Carbon::now();
		$lop->save();
		
		return redirect('/lop');
	}
	
	// Xác nhận xóa
	public function getXoa($id)
	{
		$lop = Lop::find($id);
		return view('lop.xoa', compact('lop'));
	}
	
	// Xử lý xóa
	public function postXoa(Request $request, $id)
	{
		$lop = Lop::find($id);
		$lop->delete();
		
		return redirect('/lop');
	}
}