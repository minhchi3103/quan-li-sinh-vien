<nav class="navbar navbar-dark py-0 bg-primary navbar-expand-lg py-md-0">
    <ul class="navbar-nav ml-auto">
        @if (Session::has('maso'))
        <li class="nav-item py-0"><a href="#" class="nav-link">Xin chào, {{Session::get('maso')}}</a></li>
        <li class="nav-item py-0"><a href="/dangxuat" class="nav-link">Đăng xuất</a></li>
        @else
        <li class="nav-item py-0"><a href="/dangnhap" class="nav-link">Đăng nhập</a></li>
        @endif

    </ul>
</nav>
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible m-0">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{Session::get('success')}}</strong>
</div>
@endif
