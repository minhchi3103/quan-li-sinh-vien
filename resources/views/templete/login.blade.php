<!DOCTYPE html>
<html lang="vi">
@include('templete.headTag')
<body>
    @section('top-area')
    @include('templete.header')
    @show
    @section('main-area')
    <main role="main" class="container">
        @yield('content')
    </main>
    @show
    @section('bottom-area')
    @show
    @section('script')
    @include('templete.scriptTag')
    @show
</body>
</html>