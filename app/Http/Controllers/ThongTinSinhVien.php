<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SinhVien;
use App\SinhVienLopHoc;
use App\HocKi;
use App\HocPhan;
class ThongTinSinhVien extends Controller
{
    public function XemThongTinCaNhan(Request $rq, $maso)
    {
        $sv = SinhVien::firstOrNew(['maso'=>$maso],[
                'hoten'=>'',
                'hedaotao'=>'',
                'gioitinh'=>'',
                'diachi'=>'',
                'sodienthoai'=>'',
                'email'=>'']);
        return view('sinhvien.thongtinsinhvien',['sinhvien'=>$sv]);
    }
    public function CapNhatThongTinCaNhan(Request $rq, $maso)
    {
        $sv = SinhVien::updateOrCreate(['maso'=>$maso],[
                'hoten'=>$rq->hoten,
                'hedaotao'=>$rq->hedaotao,
                'gioitinh'=>$rq->gioitinh,
                'diachi'=>$rq->diachi,
                'sodienthoai'=>$rq->sodienthoai,
                'email'=>$rq->email]);
        return view('sinhvien.thongtinsinhvien',['sinhvien'=>$sv]);
    }
    public function XemLopHoc(Request $rq, $maso, $mahocki)
    {
        $ds = SinhVienLopHoc::where(['masosinhvien'=>$maso,'mahocki'=>$mahocki])->with('lophoc')->get();
        $sv = SinhVien::where(['maso'=>$maso])->first();
        return view('sinhvien.danhsachlopsinhvienhoctronghocki', 
            ['list'=>$ds, 'sinhvien'=>$sv, 'mahocki'=>$mahocki, 'maso'=>$maso]);
    }
    public function MainView(Request $rq, $maso)
    {
        $hk = HocKi::orderBy('mahocki','desc')->get();
        return view('sinhvien.thongtinhoctap_mainview',['list'=>$hk]);
    }
    public function ThoiKhoaBieu(Request $rq, $maso, $mahocki)
    {
        $ds = SinhVienLopHoc::where(['masosinhvien'=>$maso,'mahocki'=>$mahocki])->with('lophoc')->get();
        for ($i=0; $i < count($ds); $i++) { 
            $ds[$i]->tenhocphan=HocPhan::where('mahocphan',$ds[$i]->lophoc->mahocphan)->first()->tenhocphan;
        }
        return view('sinhvien.thoikhoabieu',['list'=>$ds]);
    }
    public function TKBMainView(Request $rq, $maso)
    {
        $hk = HocKi::orderBy('mahocki','desc')->get();
        return view('sinhvien.thoikhoabieu_mainview',['list'=>$hk]);
    }
}
