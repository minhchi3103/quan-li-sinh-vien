<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class QuanLyDangNhap extends Controller
{
    public function DangNhap(Request $rq)
    {
        $rq->session()->flush();
        $u = User::where('maso', $rq->maso)->first();
        if ($u && $rq->matkhau==$u->matkhau)
        {
            $rq->session()->put(['maso'=>$u->maso,'quyenhan'=>$u->quyenhan]);
            $rq->session()->flash('success', 'Đăng nhập thành công');
            switch ($u->quyenhan) {
                case 'ql':
                    return redirect('/quanli');
                    break;
                case 'sv':
                    return redirect('/sinhvien');
                    break;
                case 'gv':
                    return redirect('/giangvien');
                    break;
                default:
                    return redirect('/');
                    break;
            }
        }
        return redirect()->route('login');
    }
    public function DangXuat(Request $rq)
    {
        $rq->session()->flush();
        $rq->session()->flash('success', 'Đã đăng xuất');
        return redirect()->route('login');
    }
}
