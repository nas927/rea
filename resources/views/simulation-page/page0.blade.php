@extends('simulation-page.page')

@section('width', 6.25)
@section('title', "Quel est votre type d'habitation ?")

@section('main')
<div class="h-full flex justify-center">
	<div class="w-1/2 grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 place-content-center gap-4 change-width">
		<label class="inside-grid flex flex-col justify-center items-center rounded-xl cursor-pointer shadow-xl">
			<input type="radio" ng-model="confirm" ng-change="update('@{{ tab_index[increment]}}', confirm)" id="maison" value="@{{ tab[tab_index[increment]][0] }}" ng-checked="check('@{{tab_index[increment]}}', '@{{tab[tab_index[increment]][0]}}')"/>
			<span>Une maison</span>
		</label>
		<label class="inside-grid flex flex-col justify-center items-center rounded-xl cursor-pointer shadow-xl">
			<input type="radio" id="appartement" ng-model="confirm" value="@{{ tab[tab_index[increment]][1] }}" name="@{{ tab_index[increment] }}" ng-change="update('@{{ tab_index[increment] }}', confirm)"/>
			<span>Un appartement</span>
		</label>
	</div>
</div>
@endsection

@section('function', 'next()')