@extends('simulation-page.page')

@section('width', '100')
@section('title', 'Renseignez vos coordonnées afin d\'être recontacté ?')

@section('main')
<div class="h-full w-full flex flex-col gap-5 justify-center px-5">
	<div class="w-full">
		<input type="adress" ng-model="confirm_adress" ng-change="update( '@{{ tab_index[increment] }}', confirm_adress)" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 font-bold text-gray-900 text-sm lg:text-lg text-center rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-20" placeholder="Renseignez votre adresse" required name="@{{ tab_index[increment] }}" />
	</div>
	<div class="w-full">
		<input type="tel" ng-model="confirm_tel" ng-change="update( '@{{ tab_index[increment+1] }}', confirm_tel)" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 font-bold text-gray-900 text-sm lg:text-lg text-center rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-20" placeholder="Renseignez votre numéro" required name="@{{ tab_index[increment+1] }}" />
	</div>	
	<div class="w-full">
		<input type="email" ng-model="confirm_email" ng-change="update( '@{{ tab_index[increment+2] }}', confirm_email)" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 font-bold text-gray-900 text-sm lg:text-lg text-center rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-20" placeholder="Renseignez votre email" required name="@{{ tab_index[increment+2] }}" />
	</div>
</div>
@endsection

@section('function', 'send()')