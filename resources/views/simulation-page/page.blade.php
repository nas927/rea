<div ng-show="!showsim" class="ng-hide">
	<div class="abolute z-20 flex-none w-full bar-state">
	  <div class="scroll" id="scroll1" style="width: @yield('width')%!important"></div>
	</div>
	<div class="flex justify-between w-full" style="height: 100vh">
		<!-- ASIDE SECTION -->
		<div class="aside hidden relative lg:flex items-center justify-center pt-50 h-full w-1/2 bg-white text-xl">
			<p>Depuis 3 ans, nos clients sont satisfait !</p>
		</div>
		<!-- SIMULATION SECTION -->
		<div class="rightside h-full w-full bg-indigo-100 overflow-y-scroll">
			<button ng-click="prev()" ng-if="increment > 0" class="flex-none block font-bold text-md float-left h-5">◄ Retour</button>
			<div class="h-full w-full grid grid-cols-1 items-content-center gap-4">
				<div class="flex flex-col justify-end items-center">
					<p class="">@yield('title')</p>
				</div>
				@section('main')
				
				@show
				<div class="w-full flex justify-center">
					<button class="btn w-1/2" ng-click="@yield('function')">Suivant</button>
				</div>
			</div>
		</div>
	</div>
</div>