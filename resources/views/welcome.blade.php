<!DOCTYPE html>
<html lang="fr">
@include('template.head')
<link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
<title>REA</title>
<body class="h-full font-sans antialiased dark:bg-black dark:text-white/50 overflow-x-hidden" ng-app="begin" ng-controller="bodyBody" data-url="{{ asset('templates/w.html') }}">
@extends('template.features')

@section('main')
  <ng-include ng-class="{'ng-hide': !showPage}" src="'/templates/w.html'">
  </ng-include>
@endsection

@include('template.scripts')
<script src="{{ asset('js/angular-route.js') }}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script>
Toastify({
  text: "hey"
}).showToast();    
</script>
</body>
</html>
