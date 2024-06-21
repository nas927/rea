<div ng-show="!showpage" class="flex justify-between w-full ng-hide" style="height: 100vh">
	<!-- ASIDE SECTION -->
	<div class="aside hidden relative lg:flex items-center justify-center pt-50 h-full w-1/2 bg-white text-xl">
		<p>Depuis 3 ans, nos clients sont satisfait !</p>
	</div>
	<!-- SIMULATION SECTION -->
	<div class="rightside h-full w-full bg-indigo-100">
		<div class="h-full grid grid-cols-1 items-content-center gap-4">
			<div class="flex flex-col justify-end items-center">
				<div class="flex-none w-full">
				  <div class="scroll" id="scroll1" style="width: 100%!important"></div>
				</div>
				<p class="">Votre simulation en <span>2 minutes</span></p>
			</div>
			<div class="h-full flex justify-center">
				<div class="w-1/2 grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 place-content-center gap-4">
					<label class="inside-grid flex flex-col justify-center items-center rounded-xl cursor-pointer shadow-xl">
						<input type="radio" id="moins15" value="moins15" name="house_time" ng-model="house" ng-model-options="{ getterSetter: true }"/>
						<span for="moins15">Moins de 2 ans</span>
					</label>
					<label class="inside-grid flex flex-col justify-center items-center rounded-xl cursor-pointer shadow-xl">
						<input type="radio" id="plus15" value="plus15" name="house_time" ng-model="house" ng-model-options="{ getterSetter: true }"/>
						<span>Plus de 15 ans</span>
					</label>
				</div>
			</div>
			<div class="w-full flex justify-center">
				<button class="btn w-1/2" ng-click="send()">Suivant</button>
			</div>
		</div>
	</div>
</div>