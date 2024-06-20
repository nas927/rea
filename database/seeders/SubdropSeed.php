<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubdropSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tab = [
            "combles-perdus.html" =>  "Les combles perdus",
            "combles-amenageable.html" => "Combles aménageable",
            "toiture-terrasse.html" => "Toiture terrasse",
            "ite.html" => "Isolation extérieur",
            "iti.html" => "Isolation intérieur",
            "isolation-du-sol.html" => "Isolation du sol",
            "isolation-des-fenetres.html" => "Isolation des fenêtre",
            "vmc-double-flux.html" => "VMC double flux",
            "pac-air-air.html" => "Pompe à chaleur air-air",
            "pac-air-eau.html" => "Pompe à chaleur air-eau",
            "pac-geo.html" => "Pompe à chaleur géothermique",
            "chaudiere-condensation.html" => "Chaudière à condensation",
            "chaudiere-granule.html" => "Chaudière à granûlés",
            "chaudiere-buche.html" => "Chaudière à bûche",
            "poele-granule.html" => "Poële à granulés",
            "poele-buche.html" => "Poële à bûche",
            "insert-cheminee.html" => "Insert Cheminée",
            "chauffe-eau-thermo.html" => "Chauffe-eau thermodynamique",
            "radiateur-electrique.html" => "Radiateur Éléctrique",
            "thermostat.html" => "Thermostat",
            "caracteristique-technique.html" => "Caractéristique Technique Solaire",
            "comment-ca-marche.html" => "Comment ça marche",
            "installation-rea.html" => "Installation chez REA",
            "panneaux-solaire.html" => "Panneaux Solaire",
            "systeme-solaire.html" => "Système Solaire",
            "chauffe-eau-solaire.html" => "Chauffe-eau Solaire",
            "bilan.html" => "Bilan Énergétique",
            "audit.html" => "Audit Énergétique",
            "renovation-globale.html" => "Rénovation globale",
            "trouver-mon-accompagnateur.html" => "Trouver Mon Accompagnateur",
            "prime-energie.html" => "Prime Énergie",
            "mpr.html" => "Ma Prime Rénov",
            "cheque-energie.html" => "Chèque énergie",
            "tva.html" => "Taux à Valeur Ajoutée",
            "eco-ptz.html" => "Éco Ptz",
            "aide-co-propriete.html" => "Aide à la copropriété"
        ];
        
        foreach($tab as $key => $value)
        {
             DB::table('subdrop')->insert([
                'url' => $key,
                'title' => $value,
                'content' => $value.' contenu',
                'sommaire' => json_encode(['sommaire1', 'sommaire2', 'sommaire3']),
                'img' => 'house.jpg',
                'button' => 'Estimer',
                'right-title' => 'blabla',
                'right-button' => 'J\'estime mon dpe'
            ]); 
            
        }
    }
}
