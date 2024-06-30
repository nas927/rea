var app = angular.module("simulation", ['ngAnimate', 'ngCookies']);

var tab = {
    "house_type": ["maison", "appartement"],
    "house_time": ["moins de 2 ans", "entre 2 et 15 ans", "plus de 15 ans"],
    "surface": "",
    "chauffage": ["Chauffage au fioul", "Chauffage électrique", "Chauffage au gaz", "Chauffage au bois", "Pombe à chaleur", "Chauffage au charbon"],
    "systeme": ["Chaudière à condensation", "Chaudière classique", "Poêle", "Je ne sais pas"],
    "etiquette": ["Etiquette A","Etiquette B","Etiquette C","Etiquette D","Etiquette E","Etiquette F", "je ne sais pas"],
    "travaux": {
        "Rénovation globale": ["Combo Isolation/Chauffage/Ventilation"],
        "Isolation": ["Isolation des combles", "Isolation des murs", "Isolation du sol", "Fenêres/Porte-fenêtres", "Isolation d'une toiture terrasse", "VMC double flux"],
        "Pompe à chaleur et climatisation": ["Pompe à chaleur Air/Eau", "Pompe à chaleur géothermique", "Climatisation réversible", "Pompe à chaleur Hybride"],
        "Chauffage traditionnel": ["Chaudière fioul à condensation", "Chaudière gaz à condensation", "Radiateur électrique"],
        "Chauffage Bois": ["Chaudière bois (granulés ou bûches)", "insert cheminée", "Poêle à bois (granulés ou bûche)"],
        "Solaire": ["Panneaux solaire photovoltaïques", "Système solaire combiné"],
        "Chauffe eau": ["Chauffe-eau thermodynamique", "Chauffe-eau solaire individuel"]
    },
    "isolation-mur": ["Isolation intérieure", "Isolation extérieure", "Je ne sais pas"],
    "surface-mur": "",
    "projet": ["Je réfléchis à mes travaux", "Je cherche un artisan RGE", "Je vais signer mon devis", "J'ai déjà signé mon devis"],
    "personne": ["Propriétaire occupant", "Propriétaire d'une résidence secondaire", "Propriétaire bailleur", "Locataire"],
    "personne-nombre": "",
    "revenu": ["Inférieur à 34 551", "Entre 34 551 et 42 058", "Entre 42 058 et 58 827", "Supérieur à 58 827"],
	"adresse": "",
	"tel": "",
    "email": ""
};

var tab_index = Object.keys(tab);

var travaux = tab["travaux"];
var travaux_index = Object.keys(travaux);

app.filter('escapeApostrophe', function() {
    return function(input) {
      if (!input) return input;
      return input.replace(/'/g, '&#39;');
    };
  });

app.controller("simulation_include", ['$scope', '$http', '$timeout', '$cookies', function ($scope, $http, $timeout, $cookies){
	// show the page
	$scope.increment = 0;
	$scope.showsim = true;
	$scope.tab_index = tab_index;
	$scope.travaux = travaux;
	$scope.travaux_index = travaux_index;
	$scope.tab = tab;
	$scope.data = {};
	// store to data
	$scope.update = function (e, confirme, page = 0) {
		if ($cookies.get(e))
			$cookies.remove(e);
		$cookies.put(e, confirme);
		if (page)
			$scope.data[e] = [page, confirme];
		else
			$scope.data[e] = confirme;
	};
	// go next page
	$scope.next = function (){
 		if ($scope.data[$scope.tab_index[$scope.increment]] || $cookies.get($scope.tab_index[$scope.increment]))
			$scope.increment++;
		else
			launch_toast('Veuillez sélectionner ou remplir un champ !','red');
	};
	// go back
	$scope.prev = function () {
		$scope.increment--;
	};
	// send to page 
 	$scope.send = function ()
	{
		$http.post('/send', JSON.stringify($scope.data)).then(function (){
			console.log("succes");
			if ($scope.data[$scope.tab_index[$scope.increment]] && $scope.data[$scope.tab_index[$scope.increment+1]] && $scope.data[$scope.tab_index[$scope.increment+2]])
			{
				launch_toast('Le formulaire a bien été envoyé !');
				$timeout(function (){
					/*window.location.replace("/");*/console.log('okay');
				}, 1000);
			}
			else
				launch_toast("Veuillez remplir tous les champs !", 'red');
		}, 
		function () {
			console.log("problème");
			launch_toast("Une erreur est survenu vérifiez vos champs ou vous avez déjà soumis le formulaire !", 'red');
		});
	};
	// go to up page
	$scope.to_top = function (){
		window.scrollTo({
				top: 0,
				behavior: 'smooth'
		});
	};
	// check cookie
	$scope.check = function (index, confirme){
		if($cookies.get(index) == escapeOff(confirme))
			return 1;
	};
	// check input
	$scope.value = function (confirme)
	{
		return $cookies.get(confirme);
	};
	// update address on field address
	$scope.address = [];
	$scope.updateAddress = function (confirme){
		var config = {
			headers: {
				'Access-Control-Allow-Origin': 'https://api-adresse.data.gouv.fr/search/*',
				'Access-Control-Allow-Headers': '*',
				'Access-Control-Allow-Methods': '*'
			}
		};
		$http.get('https://api-adresse.data.gouv.fr/search/?q='+confirme, {}, config).then(function (data){
			$scope.address = data.data.features;
		}, 
		function () {
			console.log("problème");
		});
	};
	// update address value 
	$scope.updateVal = function ($e){
		document.getElementById("address").value = $e.target.innerText;
		$scope.data['adress'] = $e.target.innerText;
		$cookies.put('adress', $e.target.innerText);
		$scope.address = [];
	};
}]);
