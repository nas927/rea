var app = angular.module("begin", ['ngRoute', 'ngAnimate']);

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider
	.when('/', { templateUrl: function (){
		return (document.body.dataset.url);
	}})
	.otherwise({redirectTo: '/'});
}]);

