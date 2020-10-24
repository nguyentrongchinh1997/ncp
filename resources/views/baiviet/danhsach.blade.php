@extends('layouts.app')

@section('content')
    <style type="text/css">
        .title-post{
            text-align: center;
            font-weight: bold;
        }

        .created-post{
            color: #096865;
        }

        .card-header{
            text-align: center;
        }

        i.text-danger{
            margin: 20px;
        }
    </style>
    <div class="card">
        <div class="card-header text-center"><h1>Tin Tức</h1></div>
        <div class="card-body">
        @auth
            <p><a href="{{ url('/baiviet/them') }}" class="btn btn-primary"><i class="fal fa-plus"></i> Thêm mới</a></p>
        @endauth
            <table class="table table-bordered table-sm">
                <thead>
                   
                </thead>
                <tbody>
                    @foreach($baiviet as $value)
                        <div>
                            <div class="created-post">Ngày xuất bản {{ $value->created_at }}</div>
                            <div class="title-post"><h2>{{ $value->tieude }}</h2></div>
                            <div class="d-flex" style="width: 500; height: 320; align-items: center; justify-content: center;">
                                <img class="rounded" src="{{asset('/upload/'.$value->hinhanh)}}" width="500;" height="320;">
                            </div>
                            <div class="content-post">{!! $value->noidung !!}</div>
                        @auth
                            <div class="text-right">
                                <a href="{{ url('/baiviet/sua/' . $value->id) }}"><i class="fal fa-edit"></i></a>
                                <a href="{{ url('/baiviet/xoa/' . $value->id) }}"><i class="fal fa-trash-alt text-danger"></i></a>
                            </div>
                        @endauth
                        </div>
                        <hr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection