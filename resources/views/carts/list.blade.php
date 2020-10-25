@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
		<div class="card-header">Giỏ hàng</div>
		<div class="card-body">
			<div class="row">
                <div class="col-lg-12">
                <form action="{{route('cart.send')}}" method="post">
                        @csrf
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
                        <tr>
                            <td style="text-align: right" colspan="2">Mã giảm giá (nếu có)</td>
                            <td>
                                @foreach($discountCodes as $code)
                                    <label for="">
                                        <input name="code" onclick="pick({{$code->discount}})" type="radio" value="{{$code->discount}}">
                                        {{$code->name}}
                                    </label>
                                    <br>
                                @endforeach
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td style="text-align: right" colspan="2">Thành tiền</td>
                            <td style="text-align: right">
                                <span id="last-price">{{number_format($total)}}</span>
                                
                            </td>
                            <td></td>
                        </tr>
                    </table>
                    <br><br>
                    <center>
                        <button type="submit" class="btn btn-primary">Gửi đơn hàng</button>
                    </center>
                </form>
                    
                </div>
                <div class="col-lg-4">
                    
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
    function pick(discount)
    {
        total = "{{$total}}";
        lastPrice =  total - total * discount/100;
        $('#last-price').html(lastPrice);
        //alert(discount);

    }
	@if(session('success'))
		Swal.fire({
			title: "{{session('success')}}",
			icon: "success",
			confirmButtonText: 'OK'
		});
	@endif
</script>
@endsection