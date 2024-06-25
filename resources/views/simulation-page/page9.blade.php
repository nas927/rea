@extends('simulation-page.page')

@section('width', '59.75')
@section('title', 'Quel est votre projet pour l\'avenir ?')

@section('main')
<div class="h-full flex justify-center">
	<div class="w-1/2 lg:w-full lg:mx-4 grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 place-content-center gap-4 change-width">
		<label ng-repeat="t in tab[tab_index[increment]]" class="inside-grid more-than-2 flex flex-col justify-center items-center rounded-xl cursor-pointer shadow-xl">
			<input type="radio" ng-model="confirm" ng-change="update('@{{ tab_index[increment] }}', confirm)" value="@{{ t }}" name="@{{ tab_index[increment] }}"/>
			<span>@{{ t }}</span>
		</label>
	</div>
</div>
@endsection

@section('function', 'next()')