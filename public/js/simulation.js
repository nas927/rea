var app = angular.module("simulation", ['ngAnimate']);

app.controller("simulation_include", function ($scope){
	$scope.increment = 1;
	$scope.page = 'page1.html';
	$scope.next = function (){
		$scope.increment++;
		console.log($scope.increment);
		// $scope.page = 'page'+$scope.increment+'.html';
	}
	$scope.prev = function () {
		$scope.increment--;
		// $scope.page = 'page'+$scope.increment+'.html';
	}
});
