<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HocKi;
class QuanLyHocKi extends Controller
{
    public function TaoMoi(Request $rq)
    {
        $hk = HocKi::updateOrCreate(['mahocki'=>$rq->mahocki]); 
        $rq->session()->flash('success', 'Đã xử lí');
        return redirect('/quanli');
    }
    public function Xoa(Request $rq, $mahocki)
    {
        return HocKi::where(['mahocki'=>$mahocki])->delete();
    }
    public function DanhSach()
    {
        return view('quanli.xemdanhsachhocki',['list'=>HocKi::orderBy('mahocki','desc')->get()]);
    }
}
