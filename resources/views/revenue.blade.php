@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header text-center"><h2>Doanh thu</h2></div>
        <div class="card-header text-center">
        <form action="{{url()->current()}}" method="GET">
            <input value="{{$date}}" type="date" name="date" class="form-control">
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
                            <td align="right">
                                {{number_format($revenueItem->price)}}
                            </td>
                        </tr>
                    @endforeach
                    <tfoot>
                        <tr>
                            <td align="right" colspan="3">
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