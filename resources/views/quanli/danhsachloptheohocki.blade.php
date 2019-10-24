@extends('templete.dashboard')
@section('content')

@if (isset($list))
{{$count=0?"":""}}
<h1>Danh sách lớp trong theo mã học kì: {{$mahocki}}</h1>
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
            <td>{{$item->malophoc}}</td>
            <td>{{$item->mahocki}}</td>
            <td>{{$item->mahocphan}}</td>
            <td>{{$item->masogvphutrach}}</td>
            <td>{{$item->lichhoc}}</td>
            <td>{{$item->soluongsinhvien}}</td>
        <td><a href="/quanli/xoalophoc/{{$item->id}}">Xóa lớp</a></td>
        </tr>
        @endforeach
        @if ($count==0)
        <tr>
                <td colspan="7">Không có lớp nào được mở trong học kì này. <a href="/quanli/taolophoc">Tạo lớp học mới</a></th>
                
            </tr>
        @endif
    </tbody>
</table>
@endif
@endsection