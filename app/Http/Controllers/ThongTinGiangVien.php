<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\SinhVien;
use App\SinhVienLopHoc;
use App\HocKi;
use App\GiangVien;
use App\LopHoc;
use App\HocPhan;
class ThongTinGiangVien extends Controller
{
    public function XemThongTinCaNhan(Request $rq, $maso)
    {
        $sv = GiangVien::firstOrNew(['maso'=>$maso],[
                'hoten'=>'',
                'trinhdo'=>'',
                'gioitinh'=>'',
                'diachi'=>'',
                'sodienthoai'=>'',
                'email'=>'']);
        return view('giangvien.thongtingiangvien',['giangvien'=>$sv]);
    }
    public function CapNhatThongTinCaNhan(Request $rq, $maso)
    {
        $sv = GiangVien::updateOrCreate(['maso'=>$maso],[
                'hoten'=>$rq->hoten,
                'trinhdo'=>$rq->trinhdo,
                'gioitinh'=>$rq->gioitinh,
                'diachi'=>$rq->diachi,
                'sodienthoai'=>$rq->sodienthoai,
                'email'=>$rq->email]);
        return view('giangvien.thongtingiangvien',['giangvien'=>$sv]);
    }
    public function XemTienLuong(Request $rq, $maso, $mahocki)
    {
        $ds = LopHoc::where(['masogvphutrach'=>$maso, 'mahocki'=>$mahocki])->get();
        $sv = GiangVien::where(['maso'=>$maso])->first();
        $tongsotiet = 0;
        foreach ($ds as $item) {
            $tongsotiet=$tongsotiet+$item->sotiet;
        }
        $luongthang = $tongsotiet*4*900000*0.1;
        return view('giangvien.tienluong',['mahocki'=>$mahocki,'maso'=>$maso,'giangvien'=>$sv, 'tienluong'=>$luongthang]);
    }
    public function MainView(Request $rq, $maso)
    {
        $hk = HocKi::orderBy('mahocki','desc')->get();
        return view('giangvien.tienluong_mainview',['list'=>$hk]);
    }

    public function ThoiKhoaBieu(Request $rq, $maso, $mahocki)
    {
        $ds = LopHoc::where(['masogvphutrach'=>$maso,'mahocki'=>$mahocki])->get();
        for ($i=0; $i < count($ds); $i++) { 
            $ds[$i]->tenhocphan=HocPhan::where('mahocphan',$ds[$i]->mahocphan)->first()->tenhocphan;
        }
        return view('giangvien.thoikhoabieu',['list'=>$ds]);
    }
    public function TKBMainView(Request $rq, $maso)
    {
        $hk = HocKi::orderBy('mahocki','desc')->get();
        return view('giangvien.thoikhoabieu_mainview',['list'=>$hk]);
    }
}
