@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Thêm bài viết</div>
		<div class="card-body">
			<form action="{{ url('/baiviet/them') }}" method="post" enctype="multipart/form-data">
				@csrf

				<div class="form-group">
					<label for="hinhanh">Hình ảnh</label>
					<input  type="file" class="form-control @error('hinhanh') is-invalid @enderror" id="hinhanh" name="hinhanh" />
				</div>
				
				<div class="form-group">
					<label for="tieude">Tiêu đề bài viết</label>
					<input type="text" class="form-control @error('tieude') is-invalid @enderror" id="tieude" name="tieude" />
					@error('tieude')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="noidung">Nội dung bài viết</label>
					<textarea type="text" class="form-control @error('noidung') is-invalid @enderror" id="noidung" name="noidung" rows="10" cols="50"></textarea>
					@error('noidung')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm bài viết</button>
			</form>
		</div>
	</div>
@endsection