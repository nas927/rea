<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="REA spécialiste en réniation énergétique">
    <meta name="keywords" content="mot-clé1, mot-clé2, mot-clé3">
    <meta name="robots" content="index, follow">
    <meta name="language" content="fr">

    <!-- Open Graph Meta Tags twitter, insta... -->
    <meta property="og:title" content="REA">
    <meta property="og:description" content="Description de la page">
    <meta property="og:image" content="URL de l'image">
    <meta property="og:url" content="URL de la page">
    <meta property="og:type" content="website">
    
    <!-- Geo Meta Tags -->
    <meta name="geo.position" content="49.39145241444017;2.7896771516710066">
    <meta name="geo.placename" content="Compiègne">
    <meta name="geo.region" content="FR-O">
    <meta name="ICBM" content="49.39145241444017, 2.7896771516710066" />
    
    <!-- Verification site google -->
    <meta name="google-site-verification" content="Votre-code-de-verification">
    
    <!-- Pinterest -->
    <meta name="pinterest-rich-pin" content="true">
    <meta name="pinterest:title" content="Titre de l'épingle">
    <meta name="pinterest:description" content="Description de l'épingle">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="REA">
    <meta name="twitter:description" content="Description de la page">
    <meta name="twitter:image" content="URL de l'image">
    <meta name="twitter:url" content="URL de la page">

    <!-- Canonical Link -->
    <link rel="canonical" href="https://localhost:8000/index.html">

    <!-- Dublin Core Meta Tags -->
    <meta name="DC.title" content="REA">
    <meta name="DC.creator" content="REA">
    <meta name="DC.description" content="Description de la page">
    <meta name="DC.publisher" content="Nom de l'éditeur">
    <meta name="DC.date" content="2024-06-13">

        <title>REA</title>
        <!-- Fonts -->

        <!-- Styles -->
        <link href="{{asset('css/tail.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" >
        <!-- A envlever -->
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
        
        <!-- scripts -->
    </head>
<body class="h-full font-sans antialiased dark:bg-black dark:text-white/50 overflow-x-hidden" ng-app="begin" ng-controller="bodyBody" data-url="{{ asset('templates/w.html') }}">
    
    <!-- LOAD SECTION     -->
<div id="preload" class="flex justify-center items-center h-full w-full absolute inset-x-0 inset-y-0 -z-1" ng-class="{'ng-hide': showPage}"> 
<div class="sub-preload background"></div>
<div class="sub-preload foreground"></div>
</div>
    
  <div ng-class="{'ng-hide': !showPage}" ng-view ></div>
  
@include('template.scripts')
<script src="{{ asset('js/angular-route.js') }}"></script>
<script src="{{asset('js/angular-animate.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
