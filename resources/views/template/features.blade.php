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
<ng-include ng-if="templateUrl"
src="'/templates/subdrop/'+templateUrl+'.html'">
</ng-include>
<!-- GO UP -->
<ng-include
src="'/templates/goup.html'">
</ng-include>