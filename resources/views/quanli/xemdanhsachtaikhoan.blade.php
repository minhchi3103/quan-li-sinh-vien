@extends('templete.dashboard')
@section('content')

@if (isset($userlist))
{{$count=0?"":""}}
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Mã số</th>
            <th scope="col">Loại tài khoản</th>
            <th scope="col">Thông tin tài khoản</th>
            <th scope="col">#</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($userlist as $user)
        <tr>
            <th scope="row">{{++$count}}</th>
            <td>{{$user->maso}}</td>
            <td>{{$user->quyenhan}}</td>
            <td>
                @if ($user->quyenhan!='ql')
                    <a href="/quanli/{{$user->quyenhan=='sv'?'thongtinsinhvien':'thongtingiangvien'}}/{{$user->maso}}">Xem thông tin cá nhân</a>
                    @if ($user->quyenhan=='sv')
                        | <a href="/quanli/thongtinsinhvien/xemlophoc/{{$user->maso}}">Thông tin học tập</a>
                        | <a href="/quanli/thongtinsinhvien/thoikhoabieu/{{$user->maso}}">Thời khóa biểu</a>
                    @endif
                    @if ($user->quyenhan=='gv')
                        | <a href="/quanli/thongtingiangvien/tienluong/{{$user->maso}}">Tiền lương</a>
                    @endif
                @endif
            </td>
            <td><a href="/quanli/xoataikhoan/{{$user->maso}}">Xóa tài khoản</a></td>
        </tr>
        @endforeach
        @if ($count==0)
        <tr>
                <td colspan="3">Không tìm thấy tài khoản phù hợp</th>
                
            </tr>
        @endif
    </tbody>
</table>
@endif
@endsection