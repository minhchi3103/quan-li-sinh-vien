<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LopHoc;
use App\User;
use App\HocPhan;
use App\Hocki;
use App\SinhVienLopHoc;
class QuanLyLopHoc extends Controller
{
    public function TaoMoi(Request $rq)
    {
        $mahocki=$rq->mahocki;
        $mahocphan=$rq->mahocphan;
        $malophoc=$rq->malophoc;
        $masogvphutrach=$rq->masogvphutrach;
        $lichhoc=$rq->lichhoc;
        $tietbatdau=$rq->tietbatdau;
        $sotiet=$rq->sotiet;
        $soluongsinhvien=$rq->soluongsinhvien;
        $lophoc = LopHoc::create(
                ['malophoc'=>$malophoc,
                'mahocki'=>$mahocki,
                'mahocphan'=>$mahocphan,
                'masogvphutrach'=>$masogvphutrach,
                'lichhoc'=>$lichhoc,
                'tietbatdau'=>$tietbatdau,
                'sotiet'=>$sotiet,
                'soluongsinhvien'=>$soluongsinhvien]);
        $rq->session()->flash('success', 'Đã xử lí');
        return redirect('/quanli');
        return $lophoc;
    }
    public function FormTaoMoi()
    {
        $gv = User::where(['quyenhan'=>'gv'])->get();
        $hp = HocPhan::orderBy('mahocphan')->get();
        $hk = HocKi::orderBy('mahocki','desc')->get();
        return view('quanli.taolophoc',['dsgv'=>$gv,'dshp'=>$hp, 'dshk'=>$hk]);
    }
    public function Xoa(Request $rq, $idlophoc)
    {
        SinhVienLopHoc::where(['idlophoc'=>$idlophoc])->delete();
        return LopHoc::where(['id'=>$idlophoc])->delete();
    }
    public function DanhSachLopTheoHocKi(Request $rq, $mahocki)
    {
        return view('quanli.danhsachloptheohocki',['list'=>LopHoc::where(['mahocki'=>$mahocki])->get(), 'mahocki'=>$mahocki]);
    }
    public function MainView()
    {
        return view('quanli.quanlilophoc_mainview',['list'=>HocKi::all()]);
    }
}
