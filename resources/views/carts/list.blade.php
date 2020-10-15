@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
		<div class="card-header">Giỏ hàng</div>
		<div class="card-body">
			<div class="row">
                <div class="col-lg-12">
                    <table style="width: 100%">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Thời gian</th>
                            <th>Giá</th>
                            <th>
                                Thao tác
                            </th>
                        </tr>
                        @foreach($carts as $item)
                            <tr>
                                <td>
                                    {{$item->product}}
                                </td>
                                <td>
                                    {{$item->time}} tháng
                                </td>
                                <td style="text-align: right">
                                    {{number_format($item->price)}}
                                </td>
                                <td>
                                    <a  href="{{route('cart.delete', ['id' => $item->id])}}">
                                        <button class="btn btn-danger">Xóa</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="2" style="text-align: right">
                                Tổng: 
                            </td>
                            <td style="text-align: right">
                                {{number_format($total)}}
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <br><br>
                    <center>
                        <a href="{{route('cart.send')}}">
                            <button class="btn btn-primary">Gửi đơn hàng</button>
                        </a>
                    </center>
                </div>
                <div class="col-lg-4">
                    l
                </div>
            </div>
		</div>
	</div>
</div>
<style>
    table tr td, table tr th{
        padding: 20px;
        border: 1px solid #ccc;
    }
</style>
<script>
	@if(session('success'))
		Swal.fire({
			title: "{{session('success')}}",
			icon: "success",
			confirmButtonText: 'OK'
		});
	@endif
</script>
@endsection