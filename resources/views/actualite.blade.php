@include('template.head')
<body ng-app="actu" ng-controller="bodyBody">
<!-- HEADER SECTION  -->
<ng-include
src="'http://localhost:8000/templates/header.html'">
</ng-include>
<!-- MAIN SECTION -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-10 md:px-20">
    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x360">
            <div class="absolute top-0 right-0 bg-indigo-500 text-white font-bold px-2 py-1 m-2 rounded-md">nouveau
            </div>
            <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">3 minutes de lecture
            </div>
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Titre</div>
            <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                egestas tincidunt, libero dolor bibendum nisl, non aliquam quam massa id lacus.</p>
        </div>
    </div>


    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x360">
            <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">3 minutes de lecture
            </div>
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Titre</div>
            <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                egestas tincidunt, libero dolor bibendum nisl, non aliquam quam massa id lacus.</p>
        </div>
    </div>


    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x360">
            <div class="absolute top-0 right-0 bg-indigo-500 text-white font-bold px-2 py-1 m-2 rounded-md">nouveau</div>
            <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">3 minutes de lecture
            </div>
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Titre</div>
            <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                egestas tincidunt, libero dolor bibendum nisl, non aliquam quam massa id lacus.</p>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x360">
            <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">3 minutes de lecture
            </div>
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Titre</div>
            <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                egestas tincidunt, libero dolor bibendum nisl, non aliquam quam massa id lacus.</p>
        </div>
    </div>


    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x360">
            <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">3 minutes de lecture
            </div>
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Titre</div>
            <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                egestas tincidunt, libero dolor bibendum nisl, non aliquam quam massa id lacus.</p>
        </div>
    </div>


    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <div class="relative">
            <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x360">
            <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">3 minutes de lecture
            </div>
        </div>
        <div class="p-4">
            <div class="text-lg font-medium text-gray-800 mb-2">Titre</div>
            <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                egestas tincidunt, libero dolor bibendum nisl, non aliquam quam massa id lacus.</p>
        </div>
    </div>
</div>
	<!-- FOOTER SECTION  -->
	<ng-include
	src="'http://localhost:8000/templates/footer.html'">
	</ng-include>
	@include('template.scripts')
	<script src="{{asset('js/actu.js')}}"></script>
</body>