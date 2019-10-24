@extends('templete.dashboard')
@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-lg-6  border border-primary rounded">
        <form action="/quanli/taotaikhoan" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="username">Tên đăng nhập/Mã số</label>
                <input name="tendangnhap" type="text" class="form-control" id="username">
            </div>
            <div class="form-group">
                <label for="matkhau">Mật khẩu</label>
                <input name="matkhau" type="text" class="form-control" id="matkhau">
            </div>
            <div class="form-group">
                <label for="loaitaikhoan">Loại tài khoản</label>
                <select name="loaitaikhoan" class="form-control" id="loaitaikhoan">
                    <option value="sv">Sinh viên</option>
                    <option value="gv">Giảng viên</option>
                    <option value="ql">Quản lí</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary m-2">Tạo</button>
        </form>
    </div>
</div>
@endsection