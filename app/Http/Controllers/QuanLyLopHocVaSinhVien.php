<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinhVienLopHoc;
use App\LopHoc;
use App\User;
use App\HocKi;
class QuanLyLopHocVaSinhVien extends Controller
{
    public function TaoMoi(Request $rq, $mahocki)
    {
        $sv = $rq->masosinhvien;
        $hp = $rq->idlophoc;
        if (!is_array($sv)) $sv = [$sv];
        if (!is_array($hp)) $hp = [$hp];
        foreach ($sv as $mssv) {
            foreach ($hp as $idlophoc) {
                SinhVienLopHoc::firstOrCreate(['idlophoc'=>$idlophoc,'masosinhvien'=>$mssv, 'mahocki'=>$mahocki]);
            }
        }
        $rq->session()->flash('success', 'Đã xử lí');
        return redirect('/quanli');
    }
    public function FormTaoMoi(Request $rq, $mahocki)
    {
        $sv = User::where(['quyenhan'=>'sv'])->get();
        $lh = LopHoc::where(['mahocki'=>$mahocki])->get();
        return view('quanli.xeplopsinhvien', ['dssv'=>$sv, 'dslh'=>$lh]);
    }
    public function MainView(Request $rq)
    {
        $hk = HocKi::all();
        return view('quanli.xeplopsinhvien_mainview', ['list'=>$hk]);
    }
}
