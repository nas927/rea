@include('template.head')
<link rel="stylesheet" href="{{ asset('css/subdrop.css') }}">
<body ng-app="subdrop" ng-controller="bodyBody">
@include('template.features')
<!-- MAIN SECTION -->

<div ng-show="!showpage" class="flex justify-center gap-5 ng-hide" 
style="margin-top: 150px;height: 1000px;">
	@include('template.about_skeleton.left')
	@include('template.about_skeleton.right')
</div>

<!-- FOOTER SECTION  -->
<ng-include
src="'/templates/footer.html'">
</ng-include>
@include('template.scripts')
<script src="{{ asset('js/subdrop.js') }}" async></script>
</body>