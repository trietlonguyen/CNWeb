<?php

namespace App\Http\Controllers;
use App\DanhMuc;
use App\SanPham;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	// Danh sách
	public function getDanhSach()
	{
		$danhmuc = DanhMuc::all();
		$sanpham = SanPham::all();
		return view('sanpham.danhsach', compact('sanpham','danhmuc'));
	}
	
	// Form thêm
	public function getThem()
	{
		$danhmuc = DanhMuc::all();
		return view('sanpham.them', compact('danhmuc'));
	}
	
	// Xử lý thêm
	public function postThem(Request $request)
	{
		$request->validate([
			'danhmuc_id' => 'required',
			'tensanpham' => 'required',
			'mota',
			'hinhanh',
			'giatien',
		]);
		
		$sanpham = new SanPham();
		$sanpham->danhmuc_id = $request->danhmuc_id;
		$sanpham->tensanpham = $request->tensanpham;
		$sanpham->mota = $request->mota;

		if($request->hasFile('hinhanh')){

            $fImage = $request->file('hinhanh');
            $bientam = time().'_'.$fImage->getClientOriginalName();
            $destinationPath = public_path('/upload');
            $fImage->move($destinationPath,$bientam);
        }
        $sanpham->hinhanh = $bientam;
		$sanpham->giatien = $request->giatien;
		$sanpham->created_at = Carbon::now();
		$sanpham->updated_at  = Carbon::now();
		$sanpham->save();
		
		return redirect('/sanpham');
	}
	
	// Form sửa
	public function getSua($id)
	{
		$lop = SanPham::find($id);
		return view('lop.sua', compact('lop'));
	}
	
	// Xử lý sửa
	public function postSua(Request $request, $id)
	{
		$request->validate([
			'id' => 'required|max:8|unique:lop,id,' . $id,
			'tenlop' => 'required|max:50',
		]);
		
		$lop = SanPham::find($id);
		$lop->id = $request->id;
		$lop->tenlop = $request->tenlop;
		$lop->updated_at  = Carbon::now();
		$lop->save();
		
		return redirect('/lop');
	}
	
	// Xác nhận xóa
	public function getXoa($id)
	{
		$lop = SanPham::find($id);
		return view('lop.xoa', compact('lop'));
	}
	
	// Xử lý xóa
	public function postXoa(Request $request, $id)
	{
		$lop = SanPham::find($id);
		$lop->delete();
		
		return redirect('/lop');
	}
}