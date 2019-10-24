<!DOCTYPE html>
<html lang="vi">
@include('templete.headTag')
<body>
    @section('top-area')
    @include('templete.statusBar')
    @include('templete.header')
    @show
    @section('main-area')
    <main role="main" class="container my-1">
        @yield('content')
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