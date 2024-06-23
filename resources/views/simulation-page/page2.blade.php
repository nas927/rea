@extends('simulation-page.page')

@section('width', 18.75)
@section('title', "Quel est la surface de votre habitation ?")

@section('main')
<div class="h-full flex justify-center">
	<div class="w-1/2 flex justify-center">
		<input type="number" ng-model="confirm" ng-change="update( '@{{ tab_index[increment] }}', confirm)" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 font-bold text-gray-900 text-sm lg:text-lg text-center rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-20" placeholder="Surface en mètre carré" required />
	</div>
</div>
@endsection

@section('function', 'next()')