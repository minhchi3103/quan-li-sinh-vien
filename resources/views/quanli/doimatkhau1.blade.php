@extends('templete.dashboard')
@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-lg-6  border border-primary rounded">
        <div class='form'>
            {{csrf_field()}}
            <div class="form-group">
                <label for="username">Tên đăng nhập/Mã số</label>
                <input name="maso" type="text" class="form-control" id="username" placeholder="vd: sv001">
            </div>
            <button class="btn btn-primary m-2" onclick="window.location.href ='/quanli/doimatkhau/'+$('#username').val()">Đổi
                mật khẩu</button>
        </div>
    </div>
</div>
@endsection