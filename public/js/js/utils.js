var items = ['Isolation', 'Chauffage', 'Solaire', 'Rénovation globale', 'Aides \
\ et Primes'];

function get_element(element)
{
	return (angular.element(element)[0].target);
}

function changeOpacityId(string, value, translate)
{
	var elem = document.getElementById(string)
	if (elem)
	{
		elem.style.opacity = value;
		elem.style.transform = `translateX(${translate})`;
	}
}

function launch_toast(message, color)
{
	Toastify({
	  text: message,
	  style: {
		background: color,
	}
	}).showToast(); 
}

function updateProgressBar() {
		var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
		var scrollHeight = document.documentElement.scrollHeight || document.body.scrollHeight;
		var clientHeight = document.documentElement.clientHeight || window.innerHeight;
		var scrolled = (scrollTop / (scrollHeight - clientHeight)) * 100;

		// Mettre à jour la largeur de la barre de progression
		document.getElementById('scroll').style.width = scrolled + '%';
}

// Scroll
(function (){
	document.addEventListener('scroll', function (){
		// scroll position
		var wh = window.innerHeight;
		var rp = 150;
		var reveal = document.querySelectorAll('.reveal');
		
		updateProgressBar();
		if (window.scrollY > 300)
		{
			changeOpacityId("but", 1, 0);
			changeOpacityId("background", 0, 0);
		}
		else
		{
			changeOpacityId("but", 0, "150px");
			changeOpacityId("background", 1, 0);
		}
		reveal.forEach(function (e){
			// element position
			var rt = e.getBoundingClientRect().top;
			if (rt < wh - rp)
				e.style.opacity = 1;
			else
				e.style.opacity = 0;
			// Number increment animation 
			if (e.classList.contains('count') && (rt < wh - rp))
			{
				var counters = document.querySelectorAll('.counter');
				var speed = 100; // The lower the slower

				counters.forEach(function (counter) {
					function updateCount() {
						var target = +counter.getAttribute('data-target');
						var count = +counter.innerText;

						// Lower inc to slow and higher to slow
						var inc = target / speed;

						// Check if target is reached
						if (count < target) {
							// Add inc to count and output in counter
							counter.innerText = count + 1;
							// Call function every ms
							setTimeout(updateCount, 100);
						} else {
							counter.innerText = target;
						}
					};
					updateCount();
				});
			}
		});
	});
})()

app.controller("bodyBody", function ($scope, $timeout){
	// Preload
 	$scope.c = 45;
	
	$scope.draw = function ()
	{
	  document.documentElement.style.setProperty('--direction', $scope.c++ + 'deg');
	  if ($scope.c < 200)
		requestAnimationFrame($scope.draw);
	}
	requestAnimationFrame($scope.draw);
	
	$scope.goTop = function ()
	{
		 window.scrollTo({
				top: 0,
				behavior: 'smooth'
		});
	}

	$scope.drop = false;
	$scope.subdrop = false;
	$scope.showMainMenu = function (integer) {
		if (integer == 1)
			$scope.drop = true;
		else
			$scope.drop = false;
		$scope.subdrop = false;
	};
	$scope.templateUrl = '';
	$scope.showSubDrop = function (integer, url)
	{
		if (integer == 1)
			$scope.subdrop = true;
		else
			$scope.subdrop = false;
		$scope.templateUrl = url;
	}
	$scope.showPage = false;
	$timeout(function (){
		$scope.showPage = true;
	}, 0);
	$scope.items = items;
	$scope.header_click = function (e){
		var htmlElement = get_element(e);
	};
	$scope.header_mouseout = function (e)
	{
		var htmlElement = get_element(e);
	}
});
