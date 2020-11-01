<?php

namespace App\Http\Controllers;

use App\SinhVien;
use App\Lop;
use App\Imports\SinhVienImport;
use App\Exports\SinhVienExport;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Excel;

class SinhVienController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	// Danh sách
	public function getDanhSach()
	{
		
		//$sinhvien = SinhVien::all();
		//$sinhvien=SinhVien::where('id',$masv)->first();
		$sinhvien=SinhVien::where ('id','dpm175046')->get();
		return view('sinhvien.danhsach', compact('sinhvien'));
	}
	
	// Form thêm
	public function getThem()
	{
		$lop = Lop::all();
		return view('sinhvien.them', compact('lop'));
	}
	
	// Xử lý thêm
	public function postThem(Request $request)
	{
		// Kiểm tra
		
		
		$sv = new SinhVien();
		$sv->id = $request->id;
		$sv->lop_id = $request->lop_id;
		$sv->holot = $request->holot;
		$sv->ten = $request->ten;
		$sv->ngaysinh = $request->ngaysinh;
		$sv->email = $request->email;
		$sv->dienthoai = $request->dienthoai;
		$sv->ghichu = $request->ghichu;
		$sv->created_at = Carbon::now();
		$sv->updated_at = Carbon::now();
		$sv->save();
		
		return redirect('/sinhvien');
	}
	
	// Form sửa
	public function getSua($id)
	{
		$lop = Lop::all();
		$sinhvien = SinhVien::find($id);
		return view('sinhvien.sua', compact('lop', 'sinhvien'));
	}
	
	// Xử lý sửa
	public function postSua(Request $request, $id)
	{
		// Kiểm tra
		
		$sv = SinhVien::find($id);
		$sv->id = $request->id;
		$sv->lop_id = $request->lop_id;
		$sv->holot = $request->holot;
		$sv->ten = $request->ten;
		$sv->ngaysinh = $request->ngaysinh;
		$sv->email = $request->email;
		$sv->dienthoai = $request->dienthoai;
		$sv->ghichu = $request->ghichu;
		$sv->updated_at = Carbon::now();
		$sv->save();
		
		return redirect('/sinhvien');
	}
	
	// Xác nhận
	public function getXoa($id)
	{
		$sinhvien = SinhVien::find($id);
		return view('sinhvien.xoa', compact('sinhvien'));
	}
	
	// Xử lý xóa
	public function postXoa(Request $request, $id)
	{
		$sinhvien = SinhVien::find($id);
		$sinhvien->delete();
		
		return redirect('/sinhvien');
	}
	
	// Nhập từ Excel
	public function postNhap(Request $request)
	{
		Excel::import(new SinhVienImport, $request->TapTinExcel);
		
		return redirect('/sinhvien');
	}
	
	// Xuất ra Excel
	public function getXuat()
	{
		return Excel::download(new SinhVienExport, 'dssinhvien.xlsx');
	}
}