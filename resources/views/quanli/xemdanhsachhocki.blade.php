@extends('templete.dashboard')
@section('content')

@if (isset($list))
{{$count=0?"":""}}
<h1>Danh sách các học kì</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Mã học kì</th>
            <th scope="col">#</th>
            <th scope="col">##</th>
        </tr>
    </thead>
    <tbody>
        <tr><td colspan="4" class="text-center">
                <h5><a href="/quanli/taohocki">Tạo học kì</a></h5></td></tr>
        @foreach ($list as $item)
        <tr>
            <th scope="row">{{++$count}}</th>
            <td>{{$item->mahocki}}</td>
            <td scope="col"><a href="/quanli/danhsachlophoc/{{$item->mahocki}}">Danh sách lớp mở trong học kì này</a></td>
        <td><a href="/quanli/xoahocki/{{$item->mahocki}}">Xóa học kì</a></td>
        </tr>
        @endforeach
        @if ($count==0)
        <tr>
                <td colspan="3">Không có học kì nào. <a href="/quanli/taohocki">Tạo học kì</a></th>
                
            </tr>
        @endif
    </tbody>
</table>
@endif
@endsection