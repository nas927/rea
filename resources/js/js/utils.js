var items = ['Isolation', 'Chauffage', 'Solaire', 'Rénovation globale', 'Aides \
\ et Primes'];

function get_element(element)
{
	return (angular.element(element)[0].target);
}

function changeOpacityId(string, value, translate)
{
	var elem = document.getElementById(string);
	if (elem)
	{
		elem.style.opacity = value;
		elem.style.transform = `translateX(${translate})`;
	}
}

function escapeOff (input)
{
	if (input.match(/&#39;/gi))
		return input.replace(/&#39;/g, "'");
	return input;
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
		if (window.scrollY > 400)
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
})();

app.controller("bodyBody", ['$scope', '$http', '$timeout', '$cookies', function ($scope, $http, $timeout, $cookies) {
	// set cookies preferences
	$scope.setCookiesOn = function (value){
		if (value)
			$cookies.put('cookies', 1);
		else
			$cookies.put('cookies', 0);
	};
	$scope.cook = function (){
		if ($cookies.get('cookies'))
			return 0;
		else
			return 1;
	};
	// Preload
 	$scope.c = 45;
	
 	$scope.draw = function ()
	{
	  document.documentElement.style.setProperty('--direction', $scope.c++ + 'deg');
	  if ($scope.c < 200)
		requestAnimationFrame($scope.draw);
	};
	requestAnimationFrame($scope.draw);
	
	$scope.goTop = function ()
	{
		 window.scrollTo({
				top: 0,
				behavior: 'smooth'
		});
	};

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
	};
	// show page
	$scope.showpage = false;
	$timeout(function (){
		$scope.showpage = true;
	}, 3000);
	$scope.items = items;
	$scope.header_click = function (e){
		var htmlElement = get_element(e);
	};
	$scope.header_mouseout = function (e)
	{
		var htmlElement = get_element(e);
	};
	// send mail to newsletter
	$scope.sendNews = function (email){
		$http.post('/contact', JSON.stringify({'email': email})).then(
		function (){
			console.log("succes");
			launch_toast('Vous avez bien été inscrit à la newsletter !');
		},
		function () {
			console.log("problème");
			launch_toast("Un problème est survenu réessayez utérieurement !", 'red');
		});
		document.getElementById("UserEmail").value = "";
	};
	
}]);