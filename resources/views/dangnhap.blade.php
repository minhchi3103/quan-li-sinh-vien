@extends('templete.login')
@section('style')
body {
background-image: linear-gradient(#1D1D1D 50%, #5E5E5E 60%, #D4D2D3 70%);
}
@endsection
@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-lg-6">
        <div class="card">
            <h5 class="card-header text-center">
                Đăng nhập
            </h5>
            <div class="card-body">
                <form action="/dangnhap" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="username">Tên đăng nhập</label>
                        <input name="maso" type="text" class="form-control" id="username" placeholder="vd: sv001">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu</label>
                        <input name="matkhau" type="password" class="form-control" id="password" placeholder="********">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
