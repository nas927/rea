@extends('template.features')
@section('css')
<link rel="stylesheet" href="{{ minify('css/index.css') }}" >
@endsection
@section('app', 'begin')
@section('class', 'h-full font-sans antialiased dark:bg-black dark:text-white/50 overflow-x-hidden')
@section('main')
  <ng-include ng-class="" src="'/templates/w.html'">
  </ng-include>
@endsection
@section('js', 'app')
