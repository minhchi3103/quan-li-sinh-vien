<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class QuanLyTaiKhoan extends Controller
{
    public function TaoMoi(Request $rs)
    {
        $username = $rs->tendangnhap;
        $password = $rs->matkhau;
        $role     = $rs->loaitaikhoan;
        if ($role == 'sv' || $role == 'gv' || $role == 'ql')
        {
            $user = User::firstOrCreate(
                ['maso'=>$username],
                ['matkhau'=>$password,'quyenhan'=>$role]
            );
            $rs->session()->flash('success', 'Đã xử lí');
            return redirect('/quanli/taikhoan');
        }
        $rs->session()->flash('success', 'Đã xử lí');
        return redirect('/quanli');
        return [$username,$password,$role];
    }
    public function DoiMatKhau(Request $rs, $username)
    {
        $password = $rs->matkhau;
        $user = User::where('maso', $username)
                ->update(['matkhau'=>$password]);
        $rq->session()->flash('success', 'Đã xử lí');
        return redirect('/quanli');
        return $user;
    }
    public function Xoa(Request $rs, $username)
    {
        $user = User::where('maso', $username)->delete();
        $rq->session()->flash('success', 'Đã xử lí');
        return redirect('/quanli/taikhoan');
    }
    public function XemDanhSach(Request $rs, $role)
    {
        if ($role=='all') return view('quanli.xemdanhsachtaikhoan', ['userlist'=>User::all()]);
        return view('quanli.xemdanhsachtaikhoan', ['userlist'=>User::where('quyenhan', $role)->get()]);
    }
    public function XemDanhSachSinhVien(Request $rs)
    {
        return view('quanli.xemdanhsachtaikhoan', ['userlist'=>User::where('quyenhan', 'sv')->get()]);
    }
    public function XemDanhSachGiangVien(Request $rs)
    {
        return view('quanli.xemdanhsachtaikhoan', ['userlist'=>User::where('quyenhan', 'gv')->get()]);
    }
}
