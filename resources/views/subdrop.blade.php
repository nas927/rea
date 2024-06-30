@extends('template.features')
@section('css')
<link rel="stylesheet" href="{{ minify('css/subdrop.css') }}" >
@endsection
@section('app', 'subdrop')
@section('main')
	<!-- MAIN SECTION -->
	<div class="flex justify-center gap-5" ng-if="showpage"
	style="margin-top: 150px;height: 1000px;">
		@include('template.about_skeleton.left')
		@include('template.about_skeleton.right')
	</div>
@endsection
@section('js', 'subdrop')
</body>