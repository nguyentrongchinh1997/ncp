@extends('layouts.app')

@section('content')
<style>
    button#myBtn{
        display: none!important;
    }
    .Tong{
        font-size: 50px;
        font-weight: bold;
    }
</style>
<div class="card">
        <div class="card-header text-center"><h2>Doanh thu</h2></div>
        <div class="card-header text-center">
        <form action="{{url()->current()}}" method="GET">
            <div class="row">
                <div class="col-lg-6">
                    <label for="">Từ</label>
                    <input value="@if(!empty($date_start)){{date('Y-m-d', strtotime($date_start))}}@endif" type="date" name="date_start" class="form-control">
                </div>
                <div class="col-lg-6">
                    <label for="">Đến</label>
                    <input value="@if(!empty($date_end)){{date('Y-m-d', strtotime($date_end))}}@endif" type="date" name="date_end" class="form-control">
                </div>
            </div>
            <br>
            <button class="btn btn-primary" type="submit">
                LỌC
            </button>
        </form>
        </div>
		<div class="card-body">
			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th>STT</th>
						<th>
							Khách hàng
						</th>
                        <th>Domain/Host</th>
                        <th>Giảm giá</th>
						<th>Thu</th>
					</tr>
				</thead>
				<tbody>
                    <?php $totalAll = 0; ?>
                    @foreach($revenues as $key => $revenueItem)
                        <tr>
                            <td>
                                {{$key+1}}
                            </td>
                            <td>
                                <p>
									Tên: <b>{{$revenueItem->nguoiDung->name}}</b>
								</p>
								<p>
									Email: <b>{{$revenueItem->nguoiDung->email}}</b>
								</p>
								<p>
									SĐT: <b>{{$revenueItem->nguoiDung->phone}}</b>
								</p>
                            </td>
                            <td>
                                <?php $tong = 0; ?>
                                @foreach ($revenueItem->khachHang as $item)
                                    <?php $tong+= $item->price; ?>
                                    @if($item->hosting_id !='')
                                        <p>{{$item->Hosting->diachiip}} - <b>{{number_format($item->price)}}</b></p>
                                    @else
                                        <p>{{$item->Domain->tendomain}} - <b>{{number_format($item->price)}}</b></p>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @if($revenueItem->discount)
                                    @php $discount = $revenueItem->discount @endphp
                                @else
                                @php $discount = 0 @endphp
                                @endif
                                {{$discount}} %
                            </td>
                            <td align="right">
                                <?php $totalItem = $tong - $tong * $discount/100; ?>
                                {{number_format($totalItem)}}
                            </td>
                        </tr>
                        <?php $totalAll+= $totalItem ?>
                    @endforeach
                    <tfoot>
                        <tr>
                            <td align="right" colspan="4">
                                <b>TỔNG</b>
                            </td>
                            <td align="right">
                                {{number_format($totalAll)}}
                            </td>
                        </tr>
                    </tfoot>
				</tbody>
			</table>
		</div>
	</div>
@endsection