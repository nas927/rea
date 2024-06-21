@include('template.head')
<link rel="stylesheet" href="{{ asset('css/simulation.css') }}" />
<body ng-app="simulation" ng-controller="bodyBody">
@include('template.features')
<!-- MAIN SECTION -->
<div ng-controller="simulation_include">
<form method="POST">
	@csrf
	@method('POST')
	<ng-include src="'/page/'+increment+''">
	</ng-include>
</form>
</div>
<!-- FOOTER SECTION  -->
<ng-include
src="'/templates/footer.html'">
</ng-include>
@include('template.scripts')
<script src="{{ asset('js/simulation.js')}}"></script>
</body>