@include('template.head')
<link rel="stylesheet" href="{{ asset('css/simulation.css') }}" />
<body ng-app="simulation" ng-controller="bodyBody">
@include('template.features')
<!-- MAIN SECTION -->
<div ng-controller="simulation_include">
	<ng-include src="'/templates/simulation-page/'+page+''">
	</ng-include>
</div>

<!-- FOOTER SECTION  -->
<ng-include
src="'/templates/footer.html'">
</ng-include>
@include('template.scripts')
<script src="{{ asset('js/simulation.js')}}"></script>
</body>