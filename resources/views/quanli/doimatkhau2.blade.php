@extends('templete.dashboard')
@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-lg-6  border border-primary rounded">
        <form method="POST" action="{{Request::url()}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="username">Mật khẩu mới</label>
                <input name="matkhau" type="text" class="form-control" id="username">
            </div>
            <button type="submit" class="btn btn-primary m-2">Đổi mật khẩu</button>
        </form>
    </div>
</div>
@endsection