@section('style')

.navbar-icon-top .navbar-nav .nav-link > .fa {
position: relative;
width: 36px;
font-size: 24px;
}

.navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
font-size: 0.75rem;
position: absolute;
right: 0;
font-family: sans-serif;
}

.navbar-icon-top .navbar-nav .nav-link > .fa {
top: 3px;
line-height: 12px;
}

.navbar-icon-top .navbar-nav .nav-link > .fa > .badge {
top: -10px;
}

@media (min-width: 576px) {
.navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link {
text-align: center;
display: table-cell;
height: 70px;
vertical-align: middle;
padding-top: 0;
padding-bottom: 0;
}

.navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa {
display: block;
width: 48px;
margin: 2px auto 4px auto;
top: 0;
line-height: 24px;
}

.navbar-icon-top.navbar-expand-sm .navbar-nav .nav-link > .fa > .badge {
top: -7px;
}
}

@media (min-width: 768px) {
.navbar-icon-top.navbar-expand-md .navbar-nav .nav-link {
text-align: center;
display: table-cell;
height: 70px;
vertical-align: middle;
padding-top: 0;
padding-bottom: 0;
}

.navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa {
display: block;
width: 48px;
margin: 2px auto 4px auto;
top: 0;
line-height: 24px;
}

.navbar-icon-top.navbar-expand-md .navbar-nav .nav-link > .fa > .badge {
top: -7px;
}
}

@media (min-width: 992px) {
.navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link {
text-align: center;
display: table-cell;
height: 70px;
vertical-align: middle;
padding-top: 0;
padding-bottom: 0;
}

.navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa {
display: block;
width: 48px;
margin: 2px auto 4px auto;
top: 0;
line-height: 24px;
}

.navbar-icon-top.navbar-expand-lg .navbar-nav .nav-link > .fa > .badge {
top: -7px;
}
}

@media (min-width: 1200px) {
.navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link {
text-align: center;
display: table-cell;
height: 70px;
vertical-align: middle;
padding-top: 0;
padding-bottom: 0;
}

.navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa {
display: block;
width: 48px;
margin: 2px auto 4px auto;
top: 0;
line-height: 24px;
}

.navbar-icon-top.navbar-expand-xl .navbar-nav .nav-link > .fa > .badge {
top: -7px;
}
}

@endsection
@if (Session::get('quyenhan')=='ql')
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/quanli">Dashboard</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/quanli/taikhoan">
                    Tài khoản
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/quanli/thongtinsinhvien">
                    Sinh viên
                </a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/quanli/thongtingiangvien">
                        Giảng viên
                    </a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="/quanli/hocphan">
                    Học phần
                </a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/quanli/danhsachhocki">
                        Học kì
                    </a>
                </li>
            <li class="nav-item">
                <a class="nav-link" href="/quanli/quanlilophoc">
                    Xếp lớp học
                </a>
            </li>
        </ul>
    </nav>
@endif
@if (Session::get('quyenhan')=='sv')
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/sinhvien">Dashboard</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
            <a class="nav-link" href="/sinhvien/thongtinsinhvien/xemlophoc/{{Session::get('maso')}}">
                    Lớp học
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sinhvien/thongtinsinhvien/thoikhoabieu/{{Session::get('maso')}}">
                    Thời khóa biểu
                </a>
            </li>
        </ul>
    </nav>
@endif
@if (Session::get('quyenhan')=='gv')
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/giangvien">Dashboard</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/giangvien/thongtingiangvien/tienluong/{{Session::get('maso')}}">
                    Tiền lương
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/giangvien/thongtingiangvien/thoikhoabieu/{{Session::get('maso')}}">
                    Thời khóa biểu
                </a>
            </li>
        </ul>
    </nav>
@endif
