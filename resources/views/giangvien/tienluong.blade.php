@extends('templete.dashboard')
@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-6">
            <h3>Thông tin tiền lương hàng tháng</h3>
        <h5>Học kì: {{$mahocki}}</h5>
        <h5>Giảng viên: @if (isset($giangvien->hoten))
                {{$giangvien->hoten}}
        @endif</h5>
        <h5>Mã số: {{$maso}}</h5>
        <h5>Lương hàng tháng: {{number_format($tienluong,0,',','.')}} VNĐ</h5>
        </div>
    </div>
@endsection