<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="REA spécialiste en réniation énergétique">
    <meta name="keywords" content="mot-clé1, mot-clé2, mot-clé3">
    <meta name="robots" content="index, follow">
    <meta name="language" content="fr">
    
	<!-- Manifest et dns-fetch -->
    <link rel="manifest" href="{{ route('manifest') }}">
    <link rel="dns-prefetch" href="//rea-enr.fr">
    
    <!-- Icon -->
	<link rel="shortcut icon" href="">
	<link rel="apple-touch-icon" href="">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    
    <!-- Microsoft -->
    <meta name="msapplication-TileColor" content="#b0d139">
    <meta name="msapplication-TileImage" content="chemin/pinned-favicon.png">
    <meta name="application-name" content="Alsacréations">

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
	<!-- Fonts -->

	<!-- Styles -->
	<link href="{{ minify('css/tail.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ minify('css/style.css') }}" >
	<link rel="stylesheet" href="{{ minify('css/toast.css') }}" >
    @section('css')

    @show
	<!-- A envlever -->
	<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
	
	<!-- scripts -->
	@include('template.scripts')
	<noscript>
		<meta http-equiv="refresh" content="0;URL=https://support.google.com/adsense/answer/12654?hl=fr"> 
	</noscript>
	@stack('script')
	<script src="{{ minify('js/controllers') }}/@yield('js').js"></script>
</head>

@section('body')

@show
</html>