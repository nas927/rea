@include('template.head')
<link rel="stylesheet" href="{{ asset('css/simulation.css') }}" />
<body ng-app="simulation" ng-controller="bodyBody">
@extends('template.features')
@section('main')
	<!-- MAIN SECTION -->
	<div ng-controller="simulation_include">
		<form method="POST">
			@method('POST')
			<ng-include src="'/page/'+increment+''" onload="to_top()" autoscroll="" class="fadein" >
			</ng-include>
		</form>
	</div>
@endsection
@include('template.scripts')
<script src="{{ asset('js/simulation.js')}}"></script>
</body>