@extends('templete.dashboard')
@section('content')

@if (isset($list))
{{$count=0?"":""}}
<h1>Danh sách lớp trong học kì {{$mahocki}}</h1>
<h5>Họ và tên sinh viên: {{isset($sinhvien->hoten)?$sinhvien->hoten:''}}. 
    <a href="/quanli/thongtinsinhvien/{{$maso}}">Xem thông tin</a></h5>
<h5>MSSV: {{isset($sinhvien->maso)?$sinhvien->maso:''}}</h5>
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Mã lớp học</th>
            <th scope="col">Mã học kì</th>
            <th scope="col">Mã học phần</th>
            <th scope="col">Giảng viên phụ trách</th>
            <th scope="col">Lịch học</th>
            <th scope="col">Số lượng sinh viên</th>
            <th scope="col">#</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $item)
        <tr>
            <th scope="row">{{++$count}}</th>
            <td>{{$item->lophoc->malophoc}}</td>
            <td>{{$item->lophoc->mahocki}}</td>
            <td>{{$item->lophoc->mahocphan}}</td>
            <td>{{$item->lophoc->masogvphutrach}}</td>
            <td>{{$item->lophoc->lichhoc}} Tiết: {{$item->lophoc->tietbatdau}}-{{$item->lophoc->tietbatdau+$item->lophoc->sotiet-1}}</td>
            <td>{{$item->lophoc->soluongsinhvien}}</td>
        <td><a href="{{$item->lophoc->id}}">Xóa lớp</a></td>
        </tr>
        @endforeach
        @if ($count==0)
        <tr>
                <td colspan="7">Sinh viên chưa có lớp nào trong học kì này. <a href="/quanli/xeplopsinhvien">Xếp lớp cho sinh viên</a></th>
                
            </tr>
        @endif
    </tbody>
</table>
@endif
@endsection