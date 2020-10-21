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
						<th>Khách hàng</th>
						<th>Domain/Host</th>
                        <th>Thời hạn</th>
						<th>Thu</th>
					</tr>
				</thead>
				<tbody>
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
                                @if($revenueItem->hosting_id !='')
                                    {{$revenueItem->Hosting->diachiip}}
                                @else
                                    {{$revenueItem->Domain->tendomain}}
                                @endif
                            </td>
                            <td>
                                từ
                                    <b>{{date('d/m/Y', strtotime($revenueItem->date_register))}}</b>
                                đến
                                    <b>{{date('d/m/Y', strtotime($revenueItem->date_exprie))}}</b>
                            </td>
                            <td align="right">
                                {{number_format($revenueItem->price)}}
                            </td>
                        </tr>
                    @endforeach
                    <tfoot>
                        <tr class="Tong">
                            <td align="right" colspan="4">
                                <b>TỔNG</b>
                            </td>
                            <td align="right">
                                {{number_format($total)}}
                            </td>
                        </tr>
                    </tfoot>
				</tbody>
			</table>
		</div>
	</div>
@endsection