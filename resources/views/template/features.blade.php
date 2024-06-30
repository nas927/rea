@extends('template.head')
@section('body')
<body ng-app="@yield('app')" class="@yield('class')" ng-controller="bodyBody">
    
<!-- LOAD SECTION     -->
<div id="preload" ng-show="!showpage" class="flex justify-center items-center w-full h-full w-full fixed inset-x-0 inset-y-0 ng-hide"
style="z-index: 60"> 
<div class="sub-preload background"></div>
<div class="sub-preload foreground"></div>
</div>
    <!-- HIDDEN SECTION -->
<div ng-if="showpage">
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
    <div class="mt-20">
        @section('main')

        @show
    </div>



    <!-- COOKIES SECTION  -->
    <ng-include
    src="'/templates/cookie.html'">
    </ng-include>
    <!-- FOOTER SECTION  -->
    <ng-include
    src="'/templates/footer.html'">
    </ng-include>
</div>
</body>
@endsection