<?php
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// bật, tắt đăng kí và đổi mật khẩu
Auth::routes(['register' => true, 'reset' => true]);

Route::group(['prefix' => 'cart', 'as' => 'cart.'], function(){
    Route::post('add', 'CartController@add')->name('add');
    Route::get('list', 'CartController@list')->name('list');
    Route::get('delete/{id}', 'CartController@delete')->name('delete');
    Route::get('send', 'CartController@send')->name('send');
});

Route::get('buy/domain', 'RegisHostingController@buyDomainForm')->name('buy-domain-form');
Route::post('buy/domain', 'RegisHostingController@buyDomain')->name('buy-domain');
// Welcome
Route::get('/contact', [
    'uses' => 'ContactUsFormController@createForm'
])->name('contact');

Route::post('/contact', [
    'uses' => 'ContactUsFormController@ContactUsForm',
    'as' => 'contact.store'
]);

Route::get('/facebook', [
    'uses' => 'FacebookFormController@createForm'
])->name('facebook');

Route::post('/facebook', [
    'uses' => 'FacebookFormController@FacebookForm',
    'as' => 'facebook.store'
]);

Route::get('/facebookdanhsach/', 'FacebookFormController@getDanhSach');
Route::get('/contactdanhsach/', 'ContactUsFormController@getDanhSach');

// Sản phẩm Domain
Route::get('/sanpham/sanphamdomain', 'SPDomainController@getHome')->name('sanphamdomain');
Route::get('/sanpham/sanphamdomain', 'SPDomainController@index')->name('sanphamdomain');

// Sản phẩm Hosting
Route::get('/sanpham/sanphamhosting', 'SPHostingController@getHome')->name('sanphamhosting');
Route::get('/sanpham/sanphamhosting', 'SPHostingController@index')->name('sanphamhosting');

// Đăng ký hosting
Route::get('/sanpham/regishosting', 'RegisHostingController@getHome')->name('regishosting');
Route::get('/sanpham/regishosting', 'RegisHostingController@index')->name('regishosting');

Route::get('/sanpham/giohang/', 'RegisHostingController@getDanhSach')->name('cart');
Route::get('/sanpham/duyetdon/{id}', 'RegisHostingController@accept')->name('accept-cart');

Route::get('/sanpham/regishosting', 'RegisHostingController@getThem');
Route::post('/sanpham/regishosting', 'CartController@postThem');

Route::get('/sanpham/giohang{id}', 'RegisHostingController@getSua');
Route::post('/sanpham/giohang{id}', 'RegisHostingController@postSua');

Route::get('/sanpham/giohang{id}', 'RegisHostingController@getXoa');
Route::post('/sanpham/giohang{id}', 'RegisHostingController@postXoa');

// welcome
Route::get('/', function () {
	return view('welcome');
});

Route::get('doanhthu', 'RegisHostingController@revenue')->name('doanhthu');

// Home
Route::get('/home', 'HomeController@getHome')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// Domain
Route::get('/domain', 'DomainController@getDanhSach');

Route::get('/domain/them', 'DomainController@getThem');
Route::post('/domain/them', 'DomainController@postThem');

Route::get('/domain/sua/{id}', 'DomainController@getSua');
Route::post('/domain/sua/{id}', 'DomainController@postSua');

Route::get('/domain/xoa/{id}', 'DomainController@getXoa');
Route::post('/domain/xoa/{id}', 'DomainController@postXoa');

Route::post('/domain/nhap', 'DomainController@postNhap');
Route::get('/domain/xuat', 'DomainController@getXuat');

// Khách hàng
Route::get('/khachhang', 'KhachHangController@getDanhSach');

Route::get('/khachhang/them', 'KhachHangController@getThem');
Route::post('/khachhang/them', 'KhachHangController@postThem');

Route::get('/khachhang/sua/{id}', 'KhachHangController@getSua');
Route::post('/khachhang/sua/{id}', 'KhachHangController@postSua');

Route::get('/khachhang/xoa/{id}', 'KhachHangController@getXoa');
Route::post('/khachhang/xoa/{id}', 'KhachHangController@postXoa');

Route::post('/khachhang/nhap', 'KhachHangController@postNhap');
Route::get('/khachhang/xuat', 'KhachHangController@getXuat');

//Hosting
Route::get('/hosting', 'HostingController@getDanhSach');

Route::get('/hosting/them', 'HostingController@getThem');
Route::post('/hosting/them', 'HostingController@postThem');

Route::get('/hosting/sua/{id}', 'HostingController@getSua');
Route::post('/hosting/sua/{id}', 'HostingController@postSua');

Route::get('/hosting/xoa/{id}', 'HostingController@getXoa');
Route::post('/hosting/xoa/{id}', 'HostingController@postXoa');

//Bai viet
Route::get('/baiviet', 'BaiVietController@getDanhSach')->name("baiviet");

Route::get('/baiviet/them', 'BaiVietController@getThem');
Route::post('/baiviet/them', 'BaiVietController@postThem');

Route::get('/baiviet/sua/{id}', 'BaiVietController@getSua');
Route::post('/baiviet/sua/{id}', 'BaiVietController@postSua');

Route::get('/baiviet/xoa/{id}', 'BaiVietController@getXoa');
Route::post('/baiviet/xoa/{id}', 'BaiVietController@postXoa');

//Nguoi Dung (tai khoan)
Route::get('/nguoidung', 'DSNguoiDungController@getDanhSach')->name("nguoidung");

Route::get('/nguoidung/them', 'DSNguoiDungController@getThem');
Route::post('/nguoidung/them', 'DSNguoiDungController@postThem');

Route::get('/nguoidung/sua/{id}', 'DSNguoiDungController@getSua');
Route::post('/nguoidung/sua/{id}', 'DSNguoiDungController@postSua');

Route::get('/nguoidung/xoa/{id}', 'DSNguoiDungController@getXoa');
Route::post('/nguoidung/xoa/{id}', 'DSNguoiDungController@postXoa');