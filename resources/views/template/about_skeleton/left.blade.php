<div class="main-left lg:w-1/4">
	<h1 class="">{{ $all->title }}</h1>
	@include('template.about_skeleton.summary')
	<p class="text-center">{{ $all->content}}</p>
	<button class="btn">Je teste ma simulation</button>
	<div class="w-full relative overflow-hidden">
	<img class="w-full rounded-xl" id="img-sub" src="/img/{{ $all->img }}" />
	<!--?xml version="1.0" standalone="no"?-->              
	<svg class="svg-shape absolute" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">                    
		<defs>                         
			<linearGradient id="sw-gradient6" x1="0" x2="1" y1="1" y2="0">                           
				<stop id="stop1" stop-color="rgba(0, 168, 165, 1)" offset="0%"></stop>                            <stop id="stop2" stop-color="rgba(116, 240, 167, 1)" offset="100%"></stop>                        </linearGradient>                   
				</defs>               
			<path fill="url(#sw-gradient6)" d="M14.1,-26.1C16.6,-23.1,15.5,-15.7,17.4,-10.7C19.2,-5.6,23.9,-2.8,22.9,-0.6C21.9,1.6,15.1,3.2,13.8,9.3C12.5,15.3,16.8,25.9,15.4,26.8C14.1,27.7,7,18.8,1,17C-4.9,15.2,-9.9,20.5,-15.5,22C-21.1,23.6,-27.5,21.6,-28.4,17.3C-29.3,13,-24.8,6.5,-23.8,0.6C-22.8,-5.3,-25.3,-10.7,-23,-12.6C-20.7,-14.6,-13.8,-13.2,-9.1,-14.9C-4.5,-16.6,-2.3,-21.5,1.8,-24.6C5.9,-27.7,11.7,-29.1,14.1,-26.1Z" width="100%" height="100%" transform="translate(50 50)" style="transition: 0.3s;" stroke-width="0" stroke="url(#sw-gradient)"></path>              
		</svg>
		<div class="absolute flex justify-around items-center inset-x-0 bottom-0 under_svg">
				<span>Simuler mes aides</span>
				<span>►</span>
		</div>
	</div>
	<button class="btn">{{ $all->button }}</button>
</div>
	