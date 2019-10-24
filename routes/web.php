<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/dangxuat');
});
Route::get('/test', 'Test');
Route::get('/dangnhap', function (){return view('dangnhap');})->name('login');

Route::post('/dangnhap', 'QuanLyDangNhap@DangNhap');
Route::get('/dangxuat', 'QuanLyDangNhap@DangXuat');
Route::middleware(['isadmin'])->prefix('quanli')->group(function () {

    Route::get('/', function () {return view('templete.dashboard');});
    //
    Route::get('taikhoan', function (){return view('quanli.taikhoan_mainview');});
    Route::get('thongtinsinhvien', 'QuanLyTaiKhoan@XemDanhSachSinhVien');
    Route::get('thongtingiangvien', 'QuanLyTaiKhoan@XemDanhSachGiangVien');
    Route::get('xemdanhsach_{role}','QuanLyTaiKhoan@XemDanhSach');
    Route::get('taotaikhoan', function (){return view('quanli.taotaikhoan');});
    Route::post('taotaikhoan', 'QuanLyTaiKhoan@TaoMoi');
    Route::get('doimatkhau', function (){return view('quanli.doimatkhau1');});
    Route::get('doimatkhau/{username}', function (){return view('quanli.doimatkhau2');});
    Route::post('doimatkhau/{username}', 'QuanLyTaiKhoan@DoiMatKhau');
    Route::get('xoataikhoan/{username}', 'QuanLyTaiKhoan@Xoa');
    //
    Route::get('hocphan', function(){return view('quanli.hocphan_mainview');});
    Route::get('taohocphan', function(){return view('quanli.taohocphan');});
    Route::post('taohocphan', 'QuanLyHocPhan@TaoMoi');
    Route::get('xoahocphan/{mahocphan}','QuanLyHocPhan@Xoa');
    Route::get('danhsachhocphan','QuanLyHocPhan@DanhSach');
    //
    Route::get('taohocki', function(){return view('quanli.taohocki');});
    Route::post('taohocki', 'QuanLyHocKi@TaoMoi');
    Route::get('xoahocki/{mahocki}','QuanLyHocKi@Xoa');
    Route::get('danhsachhocki','QuanLyHocKi@DanhSach');
    //
    Route::get('quanlilophoc', 'QuanLyLopHoc@MainView');
    Route::get('taolophoc','QuanLyLopHoc@FormTaoMoi');
    Route::post('taolophoc', 'QuanLyLopHoc@TaoMoi');
    Route::get('xoalophoc/{idlophoc}', 'QuanLyLopHoc@Xoa');
    Route::get('danhsachlophoc/{mahocki}', 'QuanLyLopHoc@DanhSachLopTheoHocKi');
    //
    Route::get('xeplopsinhvien','QuanLyLopHocVaSinhVien@MainView');
    Route::get('xeplopsinhvien/{mahocki}','QuanLyLopHocVaSinhVien@FormTaoMoi');
    Route::post('xeplopsinhvien/{mahocki}','QuanLyLopHocVaSinhVien@TaoMoi');
    //
    Route::get('thongtinsinhvien/{maso}','ThongTinSinhVien@XemThongTinCaNhan');
    Route::post('thongtinsinhvien/{maso}','ThongTinSinhVien@CapNhatThongTinCaNhan');
    //
    Route::get('thongtingiangvien/{maso}','ThongTinGiangVien@XemThongTinCaNhan');
    Route::post('thongtingiangvien/{maso}','ThongTinGiangVien@CapNhatThongTinCaNhan');
    //
    Route::get('thongtinsinhvien/xemlophoc/{maso}', 'ThongTinSinhVien@MainView');
    Route::get('thongtinsinhvien/xemlophoc/{maso}/{mahocki}', 'ThongTinSinhVien@XemLopHoc');
    Route::get('thongtinsinhvien/thoikhoabieu/{maso}', 'ThongTinSinhVien@TKBMainView');
    Route::get('thongtinsinhvien/thoikhoabieu/{maso}/{mahocki}', 'ThongTinSinhVien@ThoiKhoaBieu');
    //
    Route::get('thongtingiangvien/tienluong/{maso}', 'ThongTinGiangVien@MainView');
    Route::get('thongtingiangvien/tienluong/{maso}/{mahocki}', 'ThongTinGiangVien@XemTienLuong');
});
Route::middleware(['isstudent'])->prefix('sinhvien')->group(function () {
    Route::get('/', function () {return view('templete.dashboard');});
    Route::get('thongtinsinhvien/xemlophoc/{maso}', 'ThongTinSinhVien@MainView');
    Route::get('thongtinsinhvien/xemlophoc/{maso}/{mahocki}', 'ThongTinSinhVien@XemLopHoc');
    Route::get('thongtinsinhvien/thoikhoabieu/{maso}', 'ThongTinSinhVien@TKBMainView');
    Route::get('thongtinsinhvien/thoikhoabieu/{maso}/{mahocki}', 'ThongTinSinhVien@ThoiKhoaBieu');
});
Route::middleware(['islecturer'])->prefix('giangvien')->group(function () {
    Route::get('/', function () {return view('templete.dashboard');});
    Route::get('thongtingiangvien/tienluong/{maso}', 'ThongTinGiangVien@MainView');
    Route::get('thongtingiangvien/tienluong/{maso}/{mahocki}', 'ThongTinGiangVien@XemTienLuong');
    Route::get('thongtingiangvien/thoikhoabieu/{maso}', 'ThongTinGiangVien@TKBMainView');
    Route::get('thongtingiangvien/thoikhoabieu/{maso}/{mahocki}', 'ThongTinGiangVien@ThoiKhoaBieu');
});
