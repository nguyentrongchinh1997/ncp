<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Trang Quản Lý</a>
                    @else
                        <a href="{{ route('login') }}">Đăng Nhập</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Đăng Ký</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    NCP Xin Chào !!!
                </div>

                <div class="links">
                    <a href="{{route('sanphamdomain')}}">Mua Domain</a>
                    <a href="{{route('sanphamhosting')}}">Mua Hosting</a>
                    <a href="{{route('contact')}}">Liên Hệ</a>
                    <a href="{{route('baiviet')}}">Tin Tức</a>
                </div>
            </div>
        </div>