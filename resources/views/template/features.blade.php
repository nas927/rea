<!-- LOAD SECTION     -->
<div id="preload" class="flex justify-center items-center w-full h-full w-full fixed inset-x-0 inset-y-0" ng-class="{'ng-hide': showPage}"
style="z-index: 60"> 
<div class="sub-preload background"></div>
<div class="sub-preload foreground"></div>
</div>
<!-- HEADER SECTION  -->
<ng-include
src="'/templates/header.html'">
</ng-include>
<!-- DROPDOWN SECTION -->
<ng-include
src="'/templates/dropdown.html'">
</ng-include>
<!-- SUBDROPDOWN SECTION -->
<ng-include ng-if="templateUrl" class="fadein absolute z-30"
src="'/templates/subdrop/'+templateUrl+'.html'">
</ng-include>
<!-- GO UP -->
<ng-include
src="'/templates/goup.html'">
</ng-include>

@section('main')

@show

<div ng-if="!$cookies.get('cookies')"
  class="fixed inset-x-0 bottom-0 z-50 flex flex-col items-center justify-center bg-gray-800 text-white p-4 sm:p-6 lg:p-8">
  <p class="text-lg md:text-xl text-center mb-4">
    Ce site utilise des cookies
  </p>
  <div class="flex flex-col md:flex-row gap-2">
    <button ng-click="setCookiesOn(1)" class="bg-teal-600 w-full min-w-[200px] hover:bg-teal-700 px-4 py-2 text-sm md:text-base font-semibold rounded-lg mb-2 md:mb-0">
      J'accepte
    </button>
    <button ng-click="setCookiesOn(0)" class="bg-gray-600 w-full min-w-[200px] hover:bg-gray-700 px-4 py-2 text-sm md:text-base font-semibold rounded-lg">
      Je décline
    </button>
  </div>
  <!-- <button class="mt-2 text-sm text-gray-300 underline">Change my preferences</button> -->
</div>

<!-- FOOTER SECTION  -->
<ng-include
src="'/templates/footer.html'">
</ng-include>
@include('template.scripts')
<script src="{{ asset('js/controllers') }}/@yield('js').js"></script>