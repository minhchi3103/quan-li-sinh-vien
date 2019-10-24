<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HocPhan;
class QuanLyHocPhan extends Controller
{
    public function TaoMoi(Request $rq)
    {
        $mahocphan = $rq->mahocphan;
        $tenhocphan = $rq->tenhocphan;
        $sotiet = $rq->sotiet;
        $hocphan = HocPhan::updateOrCreate(['mahocphan'=>$mahocphan],
                                    ['tenhocphan'=>$tenhocphan,'sotiet'=>$sotiet]);
        $rq->session()->flash('success', 'Đã xử lí');
        return redirect('/quanli');
    }
    public function Xoa(Request $rq, $mahocphan)
    {
        $user = HocPhan::where('mahocphan', $mahocphan)->delete();
        $rq->session()->flash('success', 'Đã xử lí');
        return redirect('/quanli');
        return $user;
    }
    public function DanhSach()
    {
        return view('quanli.xemdanhsachhocphan',['list'=>HocPhan::orderBy('mahocphan','desc')->get()]);
    }
}
