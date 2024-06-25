@extends('simulation-page.page')

@section('width', '66')
@section('title', 'Combien de personne occupe le logement ?')

@section('main')
<div class="h-full flex justify-center">
	<div class="w-1/2 flex justify-center">
		<input type="number" ng-model="confirm" ng-change="update( '@{{ tab_index[increment] }}', confirm)" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 font-bold text-gray-900 text-sm lg:text-lg text-center rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 h-20" placeholder="Nombre de personne" required name="@{{ tab_index[increment] }}" />
	</div>
</div>
@endsection

@section('function', 'next()')