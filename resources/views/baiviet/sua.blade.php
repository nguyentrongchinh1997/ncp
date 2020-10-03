@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Sửa bài viết</div>
		<div class="card-body">
			<form action="{{ url('/baiviet/sua/' . $baiviet->id) }}" method="post">
				@csrf
				<div class="form-group">
					<label for="id">Mã bài viết</label>
					<input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ $baiviet->id }}" disabled="true" />
					@error('id')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<div class="form-group">
					<label for="tieude">Tiêu đề bài viết</label>
					<input type="text" class="form-control @error('tieude') is-invalid @enderror" id="tieude" name="tieude" value="{{$baiviet->tieude}}"/>
					@error('tieude')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="noidung">Nội dung bài viết</label>
					<textarea type="text" class="form-control @error('noidung') is-invalid @enderror" id="noidung" name="noidung" rows="10" cols="50">{{$baiviet->noidung}}</textarea>
					@error('noidung')
						<span class="invalid-feedback" role="alert">{{ $message }}</span>
					@enderror
				</div>
				
				<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Cập nhật</button>
			</form>
		</div>
	</div>
@endsection