@extends('template.features')
@section('css')
	<link rel="stylesheet" href="{{ minify('css/politique/politique.css') }}" >
@endsection
@section('app', 'politique')
@section('main')
	<div class="flex flex-col justify-center items-center mt-20 gap-5 mx-10 mb-10">
		@section('in-main')
		
		@show
	</div>
@endsection
@section('js', 'politique')
