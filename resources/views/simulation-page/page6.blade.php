@extends('simulation-page.page')

@section('width', '43,5')
@section('title', 'Quel sont vos projets de rénovation ?')

@section('main')
<div class="h-full flex justify-center">
	<div class="w-1/2 lg:w-full lg:mx-4 grid grid-cols-1 sm:grid-cols-1 place-content-center gap-4">
	@for($i = 0 ; $i < 5 ; $i++)
		<span class="text-center font-bold text-md">{{ travaux_index[<?= $i ?>] }}</span>
		<label ng-repeat="t in travaux[travaux_index[{{$i}}]]" class="inside-grid more-than-2 flex flex-col justify-center items-center rounded-xl cursor-pointer shadow-xl" style="height: 50px;">
			<input type="radio" ng-model="confirm" ng-change="update('@{{ travaux_index[<?=$i?>] }}', confirm)" value="@{{ t }}"/>
			<span>@{{ t }}</span>
		</label>
	@endfor
	</div>
</div>
@endsection

@section('function', 'next()')