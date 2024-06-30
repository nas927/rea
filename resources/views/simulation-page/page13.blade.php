@extends('simulation-page.page')

@section('width', '100')
@section('title', 'Renseignez vos coordonnées afin d\'être recontacté ?')

@section('main')
<div class="h-full w-full flex flex-col gap-5 justify-center px-5">
	<div class="w-full relative">
		<input type="address" id="address" ng-model="confirm_adress" ng-value="value('@{{ tab_index[increment] }}')" ng-change="update( '@{{ tab_index[increment] }}', confirm_adress); updateAddress(confirm_adress)" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 font-bold text-gray-900 text-sm lg:text-lg text-center rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-20" placeholder="Renseignez votre adresse" required name="@{{ tab_index[increment] }}" />
		<div ng-show="address.length > 0" class="w-full flex flex-col justify-center items-center font-bold ng-hide absolute">
			<span class="bg-white cursor-pointer w-full p-4 text-center" ng-click="updateVal($event)" ng-repeat="a in address">@{{ a.properties.label }}, @{{ a.properties.city }}</span>
		</div>
	</div>
	<div class="w-full">
		<input type="tel" ng-model="confirm_tel" ng-value="value('@{{ tab_index[increment+1] }}')" ng-change="update( '@{{ tab_index[increment+1] }}', confirm_tel)" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 font-bold text-gray-900 text-sm lg:text-lg text-center rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-20" placeholder="Renseignez votre numéro" required name="@{{ tab_index[increment+1] }}" />
	</div>	
	<div class="w-full">
		<input type="email" ng-model="confirm_email" ng-value="value('@{{ tab_index[increment+2] }}')" ng-change="update( '@{{ tab_index[increment+2] }}', confirm_email)" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 font-bold text-gray-900 text-sm lg:text-lg text-center rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-20" placeholder="Renseignez votre email" required name="@{{ tab_index[increment+2] }}" />
	</div>
</div>
@endsection

@section('function', 'send()')