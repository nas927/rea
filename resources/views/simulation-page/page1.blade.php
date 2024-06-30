@extends('simulation-page.page')

@section('width', 12.5)
@section('title', "Depuis quand habitez-vous dans votre logement ?")

@section('main')
<div class="h-full flex justify-center">
	<div class="w-1/2 lg:w-full lg:mx-4 grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 place-content-center gap-4 change-width">
		<label class="inside-grid flex flex-col more-than-2 justify-center items-center rounded-xl cursor-pointer shadow-xl">
			<input type="radio" ng-model="confirm" ng-checked="check('@{{tab_index[increment]}}', '@{{tab[tab_index[increment]][0]}}')" ng-change="update('@{{ tab_index[increment] }}', confirm)" value="@{{ tab[tab_index[increment]][0] }}" name="@{{ tab_index[increment] }}"/>
			<span>Moins de 2 ans</span>
		</label>
		<label class="inside-grid flex flex-col more-than-2 justify-center items-center rounded-xl cursor-pointer shadow-xl">
			<input type="radio" ng-model="confirm" value="@{{ tab[tab_index[increment]][1] }}"  ng-checked="check('@{{tab_index[increment]}}', '@{{tab[tab_index[increment]][1]}}')" ng-change="update('@{{ tab_index[increment] }}', confirm)" name="@{{ tab_index[increment] }}"/>
			<span>Entre 2 et 15 ans</span>
		</label>						
		<label class="inside-grid flex flex-col more-than-2 justify-center items-center rounded-xl cursor-pointer shadow-xl">
			<input type="radio" ng-model="confirm" value="@{{ tab[tab_index[increment]][2] }}"  ng-checked="check('@{{tab_index[increment]}}', '@{{tab[tab_index[increment]][2]}}')" ng-change="update('@{{ tab_index[increment] }}', confirm)" name="@{{ tab_index[increment] }}"/>
			<span>Plus de 15 ans</span>
		</label>
	</div>
</div>
@endsection

@section('function', 'next()')