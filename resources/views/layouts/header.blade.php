<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
	
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}" />
<base href="{{asset('')}}">
<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
{{-- <script src="{{ asset('/js/jquery-3.5.1.slim.min.js') }}" defer></script> --}}
<script src="{{ asset('/js/popper.min.js') }}" defer></script>
<script src="{{ asset('/js/bootstrap.min.js') }}" defer></script>
@yield('javascript')

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com" />
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />

<!-- Favicon -->
<link href="{{ asset('/images/logo.png') }}" rel="shortcut icon" type="image/x-icon" />

<!-- Styles -->
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/css/fontawesome.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/css/custom.css') }}" rel="stylesheet" />
<script src="{{ asset('ckeditor_full/ckeditor.js') }}"></script>
<script>
	CKEDITOR.replace('noidung', {height: 1000});
</script>
<script src="{{ asset('/js/alert.js') }}"></script>

@include('layouts.css')