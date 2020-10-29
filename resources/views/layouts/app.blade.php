<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('layouts.header')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="container-fluid">
		@include('layouts.container')
		
		<main class="pt-2">
				@yield('content')
		</main>
		
		@extends('layouts.footer')
	
	</div>
</body>
</html>