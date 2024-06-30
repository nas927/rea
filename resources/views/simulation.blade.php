@extends('template.features')
@section('css')
<link rel="stylesheet" href="{{ minify('css/simulation.css') }}" >
@endsection
@section('app', 'simulation')
@section('main')
	<!-- MAIN SECTION -->
	<div ng-controller="simulation_include">
		<form method="POST">
			@method('POST')
			<ng-include src="'/page/'+increment+''" onload="to_top()" class="fadein" autoscroll="" >
			</ng-include>
		</form>
	</div>
@endsection
@section('js', 'simulation')