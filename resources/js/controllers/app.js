var app = angular.module("begin", ['ngAnimate', 'ngCookies']);

function make_scope_tab_false(tab, tab_index){
	Object.keys(tab).forEach(function (e){
		if (e != tab_index)
			tab[e] = false;
	});
	return tab;
}

app.controller('tab', ['$scope', function ($scope){
	$scope.tab_list = {
		'tab1': true,
		'tab2': false,
		'tab3': false
	};
	$scope.changeTab = function (tab_index){
		$scope.tab_list[tab_index] = true;
		make_scope_tab_false($scope.tab_list, tab_index);
	};
}]);