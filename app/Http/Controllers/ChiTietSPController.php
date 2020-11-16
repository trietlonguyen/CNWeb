<?php

namespace App\Http\Controllers;
use App\SanPham;
use App\ChiTietSP;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChiTietSPController extends Controller
{
	// Danh sách
	public function getDanhSach()
	{
        $sanpham = SanPham::where('id')->latest()->get();
        $chitietsp = ChiTietSP::all();
		return view('chitietsp.danhsach', compact('chitietsp','sanpham'));
	}
	
	// Form thêm
	public function getThem()
	{
		$sanpham = SanPham::where('id')->latest()->get();
		$chitietsp = ChiTietSP::all();
		return view('chitietsp.them', compact('chitietsp','sanpham'));
	}
	
	// Xử lý thêm
	public function postThem(Request $request)
	{
		$request->validate([
			'sanpham_id' => 'required',
			'manhinh' => 'required',
			'os' => 'required',
			'camera_sau' => 'required',
			'camera_truoc' => 'required',
			'cpu' => 'required',
			'ram' => 'required',
			'bonhotrong' => 'required',
			'thenho' => 'required',
			'sim' => 'required',
			'pin' => 'required',
			'pk_sac' => 'required',
			'pk_tainghe' => 'required',
		]);
		
		$sp = new ChiTietSP();
		$sp->sanpham_id = $request->sanpham_id;
		$sp->manhinh = $request->manhinh;
		$sp->os = $request->os;
		$sp->camera_sau = $request->camera_sau;
		$sp->camera_truoc = $request->camera_truoc;
		$sp->cpu = $request->cpu;
		$sp->ram = $request->ram;
		$sp->bonhotrong = $request->bonhotrong;
		$sp->thenho = $request->thenho;
		$sp->sim = $request->sim;
		$sp->pin = $request->pin;
		$sp->pk_sac = $request->pk_sac;
		$sp->pk_tainghe = $request->pk_tainghe;
		$sp->created_at = Carbon::now();
		$sp->updated_at  = Carbon::now();
		$sp->save();
		
		return redirect('/chitietsp');
	}
	
	// Form sửa
	public function getSua($id)
	{
		$khoa = Khoa::find($id);
		return view('khoa.sua', compact('khoa'));
	}
	
	// Xử lý sửa
	public function postSua(Request $request, $id)
	{
		$request->validate([
			'id' => 'required|max:8|unique:khoa,id,' . $id,
			'tenkhoa' => 'required|max:50',
		]);
		
		$khoa = Khoa::find($id);
		$khoa->id = $request->id;
		$khoa->tenkhoa = $request->tenkhoa;
		$khoa->updated_at  = Carbon::now();
		$khoa->save();
		
		return redirect('/khoa');
	}
	
	// Xác nhận xóa
	public function getXoa($id)
	{
		$chitietsp = ChiTietSP::find($id);
		return view('chitietsp.xoa', compact('chitietsp'));
	}
	
	// Xử lý xóa
	public function postXoa(Request $request, $id)
	{
		$chitietsp = ChiTietSP::find($id);
		$chitietsp->delete();
		
		return redirect('/chitietsp');
	}
}