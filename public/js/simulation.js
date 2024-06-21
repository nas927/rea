var app = angular.module("simulation", ['ngAnimate']);

app.controller("simulation_include", function ($scope, $http){
	$scope.increment = 1;
	$scope.data = {};
	$scope.update = function (e, confirme) {
		console.log(e);
		console.log(confirme);
		$scope.data[e] = confirme;
	}
	$scope.next = function (){
		$scope.increment++;
	}
	$scope.prev = function () {
		$scope.increment--;
	}
 	$scope.send = function ()
	{
		var data = {
			"house_type": $scope.data.house_type,
			"house_time": $scope.data.house_time,
			"hey": "hey"
		};
		$http.post('/send', JSON.stringify(data)).then(function (){
			console.log("succes");
		}, 
		function () {
			console.log("problème");
		});
	}
});
