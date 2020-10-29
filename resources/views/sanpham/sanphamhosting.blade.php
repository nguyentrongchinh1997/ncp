@extends('layouts.app')

@section('content')
    <style>
   
    .carousel-sub-item
    {
        width: 100%;
        height: 5%;
        padding: 2%;
        color: white;
    }

    .carousel-sub-item-imge
    {
        width: 10%;
        height: 10%;
    }

    .scroll-none-width::-webkit-scrollbar { 
        display: none;
    }

    .tour_item
    {
        background-color: #84e8ff;    
        width: 32%; /*x3 = 96*/
        margin: 1%;
    }

    .tour-item-text
    {
        font-size: 14px;
    }

    .tour-item-title
    {
        font-size: 20px;
    }


</style>
    <div id="main_tours_list">

        <div id="carouselExampleInterval" class="carousel slide " data-ride="carousel">

            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="1000">
                        <div class="d-flex justify-content-center" style="height: 100%; background-color: #555; border-bottom: 2px solid #ffa500;">
                            <div class="text-center carousel-sub-item">
                                <img src="{{ asset('/images/icon/company.svg')}}" class=" carousel-sub-item-imge" >
                                <p class="card-title">Doanh nghiệp</p>
                            </div>
                            <div class="text-center carousel-sub-item">
                                <img src="{{ asset('/images/icon/wordpress.svg')}}" class=" carousel-sub-item-imge" >
                                <p class="card-title">Wordpress Hosting</p>
                            </div>
                            <div class="text-center carousel-sub-item">
                                <img src="{{ asset('/images/icon/vps.svg')}}" class=" carousel-sub-item-imge">
                                <p class="card-title">VPS</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item" data-interval="10000">
                        <div class="d-flex justify-content-center" style="height: 100%; width: 100%; background-color: #555; border-bottom: 2px solid #ffa500;">
                            <div class="text-center carousel-sub-item">
                                <img src="{{ asset('/images/icon/caocap.svg')}}" class=" carousel-sub-item-imge">
                                <p class="card-title">Cao cấp</p>
                            </div>
                            <div class="text-center carousel-sub-item">
                                <img src="{{ asset('/images/icon/tieuchuan.svg')}}" class=" carousel-sub-item-imge">
                                <p class="card-title">Tiêu chuẩn</p>
                            </div>
                            <div class="text-center carousel-sub-item">
                                <img src="{{ asset('/images/icon/sale.svg')}}" class=" carousel-sub-item-imge">
                                <p class="card-title">Khuyến mãi</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="d-flex w-100 p-5 h-75">    
        <div class="d-flex w-100 m-0 col-12" style="height:32%;">
                <div class="d-flex col-4" style="display: flex; justify-content: center;">
                    <div class="col-md-8 p-0 m-0 w-100">
                        <div class="card">
                            <div class="card-header text-center">
                                <h2>Start</h2>
                                <p class="price text-danger"><a class="font-weight-bold h3">75.000</a>VND/tháng</p>
                                <p class="price text-danger"><del>100.000<a class="price-vnd">VND/tháng</a></del></p>
                                <a href="{{asset('/sanpham/regishosting')}}?option=75">
                                    <button type="submit" class="btn btn-danger">Đăng ký ngay <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                </a>
                            </div>
                            <div class="card-footer">
                               
                                    <p>Thêm nhiều tính năng cho website</p>
                                    <hr>
                                    <p><i class="fa fa-database" aria-hidden="true"></i><a class="text-danger"> 10GB</a> Dung lượng SSD</p>
                                    <p><i class="fa fa-globe" aria-hidden="true"></i><a class="text-danger"> 1</a> Website</p>
                                    <p><i class="fa fa-globe" aria-hidden="true"></i><a class="text-danger"> 10</a>Sub Domain</p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i><a class="text-danger"> 20</a>Tài khoản email</p>
                                    <p><i class="fa fa-flag" aria-hidden="true"></i><a class="text-danger"> 65.000VND/tháng</a> IP Address</p>
                                    <p><i class="fa fa-unlock-alt" aria-hidden="true"></i><a class="text-danger"> 40.000VND/tháng</a> Chứng chỉ SSL</p>
                               

                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex col-4" style="display: flex; justify-content: center;">
                    <div class="col-md-8 p-0 m-0 w-100">
                        <div class="card">
                            <div class="card-header text-center">
                                <h2>Professional</h2>
                                <p class="price text-danger"><a class="font-weight-bold h3">175.000</a>VND/tháng</p>
                                <p class="price text-danger"><del>250.000<a class="price-vnd">VND/tháng</a></del></p>
                                <a href="{{asset('/sanpham/regishosting')}}?option=175">
                                    <button type="submit" class="btn btn-danger">Đăng ký ngay <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                </a>
                            </div>
                            <div class="card-footer">
                               
                                    <p>Thêm nhiều tính năng cho website</p>
                                    <hr>
                                    <p><i class="fa fa-database" aria-hidden="true"></i><a class="text-danger"> 10GB</a> Dung lượng SSD</p>
                                    <p><i class="fa fa-globe" aria-hidden="true"></i><a class="text-danger"> 1</a> Website</p>
                                    <p><i class="fa fa-globe" aria-hidden="true"></i><a class="text-danger"> 10</a>Sub Domain</p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i><a class="text-danger"> </a>Tài khoản email</p>
                                    <p><i class="fa fa-flag" aria-hidden="true"></i><a class="text-danger"> 65.000VND/tháng</a> IP Address</p>
                                    <p><i class="fa fa-unlock-alt" aria-hidden="true"></i><a class="text-danger"> 40.000VND/tháng</a> Chứng chỉ SSL</p>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="d-flex col-4" style="display: flex; justify-content: center;">
                    <div class="col-md-8 p-0 m-0 w-100">
                        <div class="card">
                            <div class="card-header text-center">
                                    <h2>Enterprise</h2>
                                    <p class="price text-danger"><a class="font-weight-bold h3">350.000</a>VND/tháng</p>
                                    <p class="price text-danger"><del>500.000<a class="price-vnd">VND/tháng</a></del></p>
                                    <a href="{{asset('/sanpham/regishosting')}}?option=350">
                                        <button type="submit" class="btn btn-danger">Đăng ký ngay <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                                    </a>
                            </div>
                            <div class="card-footer">
                               
                                    <p>Thêm nhiều tính năng cho website</p>
                                    <hr>
                                    <p><i class="fa fa-database" aria-hidden="true"></i><a class="text-danger"> 10GB</a> Dung lượng SSD</p>
                                    <p><i class="fa fa-globe" aria-hidden="true"></i><a class="text-danger"> 1</a> Website</p>
                                    <p><i class="fa fa-globe" aria-hidden="true"></i><a class="text-danger"> 10</a>Sub Domain</p>
                                    <p><i class="fa fa-envelope" aria-hidden="true"></i><a class="text-danger"> 20</a>Tài khoản email</p>
                                    <p><i class="fa fa-flag" aria-hidden="true"></i><a class="text-danger"> 65.000VND/tháng</a> IP Address</p>
                                    <p><i class="fa fa-unlock-alt" aria-hidden="true"></i><a class="text-danger"> 40.000VND/tháng</a> Chứng chỉ SSL</p>
                               

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection