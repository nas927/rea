<!DOCTYPE html>
<html lang="fr">
@extends('template.head')
<link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
<title>REA</title>
<body class="h-full font-sans antialiased dark:bg-black dark:text-white/50 overflow-x-hidden" ng-app="begin" ng-controller="bodyBody" data-url="{{ asset('templates/w.html') }}">
@extends('template.features')

@section('main')
  <ng-include ng-class="{'ng-hide': !showPage}" src="'/templates/w.html'">
  </ng-include>
@endsection

@section('js', 'app')
<script>
@session('error')
  @foreach (session()->get('error') as $err)
     Toastify({
      text: '{{ $err }}',
      style: {
            background: 'red'
        }
    }).showToast();  
  @endforeach 
@endsession
</script>
</body>
</html>
