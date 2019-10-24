<!DOCTYPE html>
<html lang="vi">
@include('templete.headTag')
<body>
    @section('top-area')
    @include('templete.statusBar')
    @include('templete.navbar')
    @show
    @section('main-area')
    <main role="main" class="container my-1">
        @section('content')
            <h1>Trang quản lý thông tin</h1>
            <h5>Mời sử dụng các tính năng trên thanh điều hướng</h5>
        @show
    </main>
    @show
    @section('bottom-area')
    @include('templete.footer')
    @show
    @section('script')
    @include('templete.scriptTag')
    @show
</body>
</html>