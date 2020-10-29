@extends('layouts.app')

@section('content')
        <style>
            html, body {
                background-color: #BEEEED;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            nav{
                display: none!important;
            }
            main{
                min-height: 365px!important;
            }
        </style>

<div class="flex-center position-ref">
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
@endsection
