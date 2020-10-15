@extends('layouts.app')

@section('content')
<style type="text/css">
	li.tab{
		width: 33%;
	}
	.design{
		font-size: 20px;
	}
	.searchdomain{
		display: flex;
		align-items: center;
		justify-content: center;
	}
	form.form-inline{
		display: flex;
		align-items: center;
		justify-content: center;
	}
	
</style>

<div class="container w-100 h-100">
	<div class="row w-100 h-100 searchdomain">
		<form class="form-inline md-form mb-4 border border-secondary rounded" method="get" action="{{url()->current()}}">
			<h3 class="text-dark text-center w-100 font-weight-bold rounded">Tìm kiếm tên miền</h3>
	  		<input class="form-control mr-sm-2 mr mb-1" name="query" type="text" placeholder="Tìm kiếm" aria-label="Search">
	  		<button class="btn btn-success btn-rounded btn-sm my-0 mb-1" type="submit">Tìm kiếm</button>
		</form>
	</div>
	{{-- <div class="row w-100 h-100 searchdomain">
		<form class="form-inline md-form mb-4 border border-secondary rounded" method="post" action="https://domain.z.com/vn/domains/result/">
			<h3 class="text-dark text-center w-100 font-weight-bold rounded">Tìm kiếm tên miền</h3>
	  		<input class="form-control mr-sm-2 mr mb-1" type="text" placeholder="Tìm kiếm" aria-label="Search">
	  		<button class="btn btn-success btn-rounded btn-sm my-0 mb-1" type="submit">Tìm kiếm</button>
		</form>
	</div> --}}

	<div class="row w-100 h-100">
		@if(session('error'))
			<div class="col-lg-12 alert alert-danger">
				{{session('error')}}
			</div>
		@endif
	</div>
	@if(!empty($query))
		@foreach(config('config.domain') as $key => $domain)
			<div class="row row-item{{$loop->iteration}}">
				<div class="col-lg-6">
					{{$query}}.{{$key}}
				</div>
				<div class="col-lg-6">
					<table>
						<tr>
							<td style="width: 100px">
								<input type="hidden" name="price" value="{{$domain}}">
								<input type="hidden" name="domain" value="{{$query}}.{{$key}}">
								<span>
									{{number_format($domain)}}
								</span>
							</td>
							<td>
								<button class="buy-domain" data-id="{{$loop->iteration}}" data-price="{{$domain}}" data-domain="{{$query}}.{{$key}}">Chọn mua</button>
							</td>
						</tr>
					</table>
				</div>
			</div>
		@endforeach
	@endif
</div>
<script>
	$(function(){
		$('.buy-domain').click(function(){
			me = $(this);
			dataPost = {
                product:   me.data('domain'),
                price: me.data('price'),
				time: 12,
				type: 0,
                _token: "{{csrf_token()}}"
            };
			$.ajax({
                url: "{{route('cart.add')}}",
                method: 'POST',
                data: dataPost,
                success: function(e) {
					if (e == 1) {
						Swal.fire({
							title: 'Cho vào giỏ hàng thành công',
							icon: 'success',
							confirmButtonText: 'OK'
						});
						$('.row-item' + me.data('id')).remove();
					} else {
						Swal.fire({
							title: 'Tên miền này đã có người đăng ký',
							icon: 'error',
							confirmButtonText: 'OK'
						});
					}
                }
            })
		})
	})
</script>
@endsection