@include('template.head')
<link rel="stylesheet" href="{{ asset('css/actu.css') }}" >
<body ng-app="actu" ng-controller="bodyBody">
@include('template.features')
    <!-- MAIN SECTION -->
    <div ng-show="!showpage" class="p-10 md:px-20 mt-20 lg:mt-40 text-center ng-hide">
        <h1 class="hyphens-auto">Toutes les nouveautés</h1>
        <p class="w-full truncate">bllllllllllllllaaaaaaaaaaaablaaaaaaaaaaaaaaaaaaaaaaa</p>
    <div>
    <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-3 gap-4 lg:p-10 mt-20 reveal">
        @for ($i = 1; $i <= 15; $i++)
        <div class="bg-white rounded-xl shadow-md overflow-hidden shadow-lg">
            <div class="relative cursor-pointer overflow-hidden">
                <img class="transition-transform ease-in-out img w-full h-48 object-cover hover:opacity-50" src="https://via.placeholder.com/600x360">
                <div class="absolute top-0 right-0 bg-indigo-500 text-white font-bold px-2 py-1 m-2 rounded-md">nouveau
                </div>
                <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">3 minutes de lecture
                </div>
            </div>
            <div class="p-4">
                <div class="text-lg font-medium mb-2 text">Titre {{ $i }}</div>
                <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                    egestas tincidunt, libero dolor bibendum nisl, non aliquam quam massa id lacus.</p>
            </div>
        </div>
        @endfor
    </div>
<!-- FOOTER SECTION  -->
<ng-include
src="'/templates/footer.html'">
</ng-include>
@include('template.scripts')
<script src="{{asset('js/actu.js')}}"></script>
</body>