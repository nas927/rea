var app = angular.module("simulation", ['ngAnimate']);

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
    "adresse": "",
    "personne": ["Propriétaire occupant", "Propriétaire d'une résidence secondaire", "Propriétaire bailleur", "Locataire"],
    "personne-nombre": "",
    "revenu": ["Inférieur à 34 551", "Entre 34 551 et 42 058", "Entre 42 058 et 58 827", "Supérieur à 58 827"],
    "tel": "",
    "email": ""
};

var tab_index = Object.keys(tab);

var travaux = tab["travaux"];
var travaux_index = Object.keys(travaux);


app.controller("simulation_include", function ($scope, $http){
	$scope.increment = 0;
	$scope.tab_index = tab_index;
	$scope.travaux = travaux;
	$scope.travaux_index = travaux_index;
	$scope.tab = tab;
	$scope.data = {};
	$scope.update = function (e, confirme) {
		console.log(e);
		console.log(confirme, $scope.increment);
		$scope.data[e] = confirme;
	}
	$scope.next = function (){
		if ($scope.data[$scope.tab_index[$scope.increment]])
			$scope.increment++;
		else
			launch_toast('Veuillez sélectionner ou remplir un champ !','red');
	}
	$scope.prev = function () {
		$scope.increment--;
	}
 	$scope.send = function ()
	{
		$http.post('/send', JSON.stringify($scope.data)).then(function (){
			console.log("succes");
			window.location.replace("/");
		}, 
		function () {
			console.log("problème");
			Toastify({
			  text: "Les données ont bien été envoyé"
			}).showToast(); 
			//window.location.replace("/");
		});
	}
	$scope.to_top = function (){
		window.scrollTo({
				top: 0,
				behavior: 'smooth'
		});
	}
});
