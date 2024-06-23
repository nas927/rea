<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SimulationRequest extends FormRequest
{
    private $tab = [
    	"house_type" => ["maison" , "appartement"],
        "house_time" => ["moins de 2 ans" , "entre 2 et 15 ans" , "plus de 15 ans"],
        "surface" => "",
        "chauffage" => ["Chauffage au fioul" , "Chauffage électrique" , "Chauffage au gaz" , "Chauffage au bois" , "Pombe à chaleur" , "Chauffage au charbon"],
        "systeme" => ["Chaudière à condensation" , "Chaudière classique" , "Poêle" , "Je ne sais pas"],
        "etiquette" => ["Etiquette A-F" , "je ne sais pas"],
        "travaux" => [
            "Rénovation globale" => ["Combo Isolation/Chauffage/Ventilation"],
            "Isolation" => ["Isolation des combles", "Isolation des murs", "Isolation du sol", "Fenêres/Porte-fenêtres", "Isolation d\'une toiture terrasse", "VMC double flux"],
            "Pompe à chaleur et climatisation" => ["Pompe à chaleur Air/Eau", "Pompe à chaleur géothermique", "Climatisation réversible", "Pompe à chaleur Hybride"],
            "Chauffage traditionnel" => ["Chaudière fioul à condensation", "Chaudière gaz à condensation", "Radiateur électrique"],
            "Chauffage Bois" => ["Chaudière bois (granulés ou bûches)", "insert cheminée", "Poêle à bois (granulés ou bûche)"],
            "Solaire" => ["Panneaux solaire photovoltaïques", "Système solaire combiné"],
            "Chauffe eau" => ["Chauffe-eau thermodynamique", "Chauffe-eau solaire individuel"],
        ],
        "isolation-mur" => ["Isolation intérieure" , "Isolation extérieure" , "Je ne sais pas"],
        "surface-mur" => "",
        "projet" => ["Je réfléchis à mes travaux" , "Je cherche un artisan RGE" , "Je vais signer mon devis" , "J\'ai déjà signé mon devis"],
        "adresse" => "",
        "personne" => ["Propriétaire occupant" , "Propriétaire d\'une résidence secondaire" , "Propriétaire bailleur" , "Locataire"],
        "personne-nombre" => "",
        "revenu" => ["Inférieur à 34 551" , "Entre 34 551 et 42 058" , "Entre 42 058 et 58 827" , "Supérieur à 58 827"],
        "tel" => "",
        "email" => ""
    ];
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $arr = [];
        foreach ($this->tab as $key => $value)
        {
            if ($value == "" && $value != "surface" && $value != "surface-mur")
                $arr[$key] = "required|max:255";
            else if ($key == "email")
                $arr[$key] = "email:rfc,dns";
            else if ($key == "surface" || $key == "surface-mur")
                $arr[$key] = "required|num";
            else if ($key == "travaux")
            {
                foreach($value as $v => $array)
                {
                    $arr[$v] = [
                        "required",
                        Rule::in($array)
                    ];
                }
            }
            else
                $arr[$key] = [
                        "required",
                        Rule::in($value)
                    ];
        }
        return $arr;
    }
    
    
    public function messages()
    {
        return [
            
        ];
    }
}
