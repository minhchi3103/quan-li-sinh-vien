@extends('templete.dashboard')
@section('content')

@if (isset($list))
{{$count=0?"":""}}
<h1>Danh sách các học kì có thể xếp lớp</h1>
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
        @foreach ($list as $item)
        <tr>
            <th scope="row">{{++$count}}</th>
            <td>{{$item->mahocki}}</td>
            <td scope="col"><a href="/quanli/xeplopsinhvien/{{$item->mahocki}}">Xếp lớp cho sinh viên trong học kì này</a></td>
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