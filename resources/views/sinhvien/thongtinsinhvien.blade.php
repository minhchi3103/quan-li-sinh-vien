@extends('templete.dashboard')
@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-lg-6  border border-primary rounded">
        <h1>Thông tin sinh viên</h1>
        <form action="{{Request::url()}}" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="maso">Tên đăng nhập/Mã số</label>
                <input name="maso" type="text" class="form-control" id="maso" value="{{$sinhvien->maso}}" required>
            </div>
            <div class="form-group">
                <label for="hoten">Họ và tên</label>
                <input name="hoten" type="text" class="form-control" id="hoten" value="{{$sinhvien->hoten}}" required>
            </div>
            <div class="form-group">
                <label for="hedaotao">Hệ đào tạo</label>
                <input name="hedaotao" type="text" class="form-control" id="hedaotao" value="{{$sinhvien->hedaotao}}" required>
            </div>
            <div class="form-group">
                <label for="gioitinh">Giới tính</label>
                <select name="gioitinh" class="form-control" id="gioitinh">
                    <option value="Nam" {{$sinhvien->gioitinh=='Nam'?'selected':''}}>Nam</option>
                    <option value="Nữ" {{$sinhvien->gioitinh!='Nam'?'selected':''}}>Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="diachi">Địa chỉ</label>
                <input name="diachi" type="text" class="form-control" id="diachi" value="{{$sinhvien->diachi}}">
            </div>
            <div class="form-group">
                <label for="sodienthoai">Số điện thoại</label>
                <input name="sodienthoai" type="text" class="form-control" id="sodienthoai" value="{{$sinhvien->sodienthoai}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="text" class="form-control" id="email" value="{{$sinhvien->email}}">
            </div>
            <button type="submit" class="btn btn-primary m-2">Cập nhật</button>
        </form>
    </div>
</div>
@endsection