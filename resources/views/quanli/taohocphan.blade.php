@extends('templete.dashboard')
@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-lg-6 border border-primary rounded">
        <form action="/quanli/taohocphan" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="mahocphan">Mã học phần</label>
                <input name="mahocphan" type="text" class="form-control" id="mahocphan">
            </div>
            <div class="form-group">
                <label for="tenhocphan">Tên học phần</label>
                <input name="tenhocphan" type="text" class="form-control" id="tenhocphan">
            </div>
            <div class="form-group">
                <label for="sotiet">Số tiết</label>
                <input name="sotiet" type="number" class="form-control col-2" id="sotiet" min="1" max="100" value="1">
            </div>
            <button type="submit" class="btn btn-primary m-2">Tạo</button>
        </form>
    </div>
</div>
@endsection