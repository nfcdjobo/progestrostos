<?php

namespace App\Providers;

use App\Http\Utils\OrderPlatsPorperties;
use App\Http\Utils\OrderVentePropeerties;
use App\Models\Plat;
use App\Models\User;
use App\Models\Vente;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use DateTime;
use Faker\Core\Number;
use Illuminate\Support\ServiceProvider;
use IntlDateFormatter;
use InvalidArgumentException;



class DataFormattingServiceProvider extends ServiceProvider
{

    /**
     * Generate JSON form
     *
     * @param mixed $params
     * @return array|string
     */
    public static function generate_json_form($params)
    {
        $chaine = "azertyuiopqsdfghjklmwxcvbn0123654789";
        $repasId = $params['repas_id'];
        $date = $params['date'];
        $today = date('yy-m-d');

        $option = json_decode($date) === json_decode($today) ? "OUVERT" : 'EN ATTENTE';

        $numberOfPlats = count(array_filter(array_keys($params), function ($key) {
            return strpos($key, 'libelle') === 0;
        }));

        $reference = json_encode("{$date}-{$numberOfPlats}-{$repasId}-".UtilServiceProvider::generateRandomString($chaine, 5));

        $detail = [];
        for ($i = 1; $i <= $numberOfPlats; $i++) {
            $platName = $params["libelle_{$i}"] ?? null;
            $prixUnitaire = $params["prix_unitaire_{$i}"] ?? null;

            if ((double)$prixUnitaire <= 0) {
                return "Le prix minimum du plat {$platName} doit être inférieur au prix maximum.";
            }

            if ($platName && $prixUnitaire !== null) {
                $detail[] = [
                    "plat_name" => $platName,
                    "date" => $date,
                    "prix_unitaire" => (int)$prixUnitaire,
                ];
            }
        }

        return [
            "date" => $date,
            "etat" => $option,
            "status" => $option,
            "reference" => $reference,
            "repas_id" => (int)$repasId,
            "details" => json_encode($detail),
        ];
    }

    public static function orderPropertiesOfPlats($request){
        $orderItems = [];
        foreach ($request as $key => $value) {
            // Utilisation d'une expression régulière pour correspondre aux clés avec id et index
            if (preg_match('/^name_(\d+)_(\d+)$/', $key, $matches)) {
                $id = $matches[1];
                $index = $matches[2];
                $name = $value;
                $quantite = (int)$request["quantite_{$id}_{$index}"];
                $prix = (int)$request["prix_unitaire_{$id}_{$index}"];

                // Créer et ajouter un nouvel objet OrderPlatsProperties
                $orderItems[] = new OrderPlatsPorperties($name, $quantite, $prix);
            }
        }

        return $orderItems;
    }


    public static function orderPropertyOfVente($request){
        $orderItems = [];

        foreach($request as $key => $value){

            if(preg_match('/^command_number_(\d+)$/', $key, $matches)){
                if((boolean)$value){
                    $plat = Plat::where('id',$matches[1])->first();

                    $quantite = $value;

                    $plat->quantite = ($plat->quantite - $quantite);

                    $plat->prix_total = $plat->prix_total - ($plat->prix * $quantite);

                    if($plat->prix_total == 0){
                        $plat->etat = 'INACTIF';
                    }

                    $orderItems[] = new OrderVentePropeerties($plat, $plat->name, $plat->prix, $quantite);
                }
            }
        }

        return $orderItems;
    }

    public static function generated_pdf($template, $data, $pdf_name, $width = 148, $height = 350, $orientation = 'portrait', $mode = 'utf-8'){
        if ($template && $data) {
            $pdf = Pdf::loadView($template, ['data' => $data])
            ->setPaper([0, 0, $width * 2.83465, $height * 2.83465], $orientation) // Convertir mm en points
            ->setOptions([
                'defaultFont' => 'sans-serif',
                'isHtml5ParserEnabled' => true,
                'isRemoteEnabled' => true,
            ]);

            $date = date('yy-m-d');
            $heure = date('h:m:s');

            $file_name = $pdf_name.'-'.$date.'-'.$heure.'.pdf';

            return $pdf->download($file_name);
        }
    }

    public static function fetch_user_to_show_on_dasboard(){
        $all_users = User::with('role')->whereHas('role', function($query) {
            $query->where('name', '=', 'SERVEUR')->where('status', '=', 'ACTIF');
        })->get();

        $diso_users = User::with('role')->whereHas('role', function($query) {
            $query->where('name', '=', 'SERVEUR')->where('status', '=', 'ACTIF')->where('etat', '=', 'ACTIF');
        })->get();

        $not_diso_users = User::with('role')->whereHas('role', function($query) {
            $query->where('name', '=', 'SERVEUR')->where('status', '=', 'ACTIF')->where('etat', '=', 'INACTIF');
        })->get();

        return [
            'all_users' => $all_users,
            'diso_users' => $diso_users,
            'not_diso_users' => $not_diso_users,
        ];
    }

    public static function fetch_vent_to_show_dashboard($periode = null){
        // Définir la plage de dates pour aujourd'hui
        $debut_de_journee = Carbon::today();
        $fin_de_journee = Carbon::tomorrow()->subSecond();

        // Définir la plage de dates pour la semaine actuelle
        $debut_de_semaine = Carbon::now()->startOfWeek();
        $find_de_semaine = Carbon::now()->endOfWeek();

        // Définir la plage de dates pour le mois en cours
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        // Définir la plage de dates pour l'année en cours
        $startOfYear = Carbon::now()->startOfYear();
        $endOfYear = Carbon::now()->endOfYear();

        $result = [];

        if($periode === 'quotidient'){
            // Récupérer les ventes d'aujourd'hui
            $result = Vente::whereBetween('created_at', [$debut_de_journee, $fin_de_journee])->get();
        }elseif($periode === 'herbdomataire'){
            // Récupérer les ventes de la semaine
            $result = Vente::whereBetween('created_at', [$debut_de_semaine, $find_de_semaine])->get();
        }elseif($periode === 'mensuel'){
            // Récupérer les ventes du mois en cours
            $result = Vente::whereBetween('created_at', [$startOfMonth, $endOfMonth])->get();
        }elseif($periode === 'annuel'){
            // Récupérer les ventes de l'année en cours
            $result = Vente::whereBetween('created_at', [$startOfYear, $endOfYear])->get();
        }else{
            // Récupérer toutes les ventes
            $result = Vente::all();
        }

        return $result;
    }

    public static function fetch_plat_to_show_dashboard($periode = null){
        // Définir la plage de dates pour aujourd'hui
        $debut_de_journee = Carbon::today();
        $fin_de_journee = Carbon::tomorrow()->subSecond();

        // Définir la plage de dates pour la semaine actuelle
        $debut_de_semaine = Carbon::now()->startOfWeek();
        $find_de_semaine = Carbon::now()->endOfWeek();

        // Définir la plage de dates pour le mois en cours
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        // Définir la plage de dates pour l'année en cours
        $startOfYear = Carbon::now()->startOfYear();
        $endOfYear = Carbon::now()->endOfYear();

        $result = [];

        if($periode === 'tody'){
            // Récupérer les ventes d'aujourd'hui
            $result = Plat::whereBetween('date', [$debut_de_journee, $fin_de_journee])->get();
        }elseif($periode === 'week'){
            // Récupérer les ventes de la semaine
            $result = Plat::whereBetween('date', [$debut_de_semaine, $find_de_semaine])->get();
        }elseif($periode === 'mooth'){
            // Récupérer les ventes du mois en cours
            $result = Plat::whereBetween('date', [$startOfMonth, $endOfMonth])->get();
        }elseif($periode === 'year'){
            // Récupérer les ventes de l'année en cours
            $result = Plat::whereBetween('date', [$startOfYear, $endOfYear])->get();
        }else{
            // Récupérer toutes les ventes
            $result = Plat::all();
        }

        return $result;
    }

    public static function calcul_vente_sommation($data){
        $sommation = 0;
        if(!empty($data)){
            foreach($data as $vente){
                $sommation += $vente->montant;
            }
        }
        return $sommation.' XOF';
    }

    public static function translatedDateInFrench($dateStr){
        // Créer une instance de DateTime avec la date donnée
        $date = new DateTime($dateStr);

        // Créer un formateur de date Intl pour le format français
        $formatter = new IntlDateFormatter(
            'fr_FR',
            IntlDateFormatter::FULL,
            IntlDateFormatter::NONE,
            'Europe/Paris',
            IntlDateFormatter::GREGORIAN,
            'EEEE dd MMMM yyyy'
        );

        // Formater la date
        $date_fr = $formatter->format($date);

        // Mettre la première lettre de chaque mot en majuscule
        $date_fr = ucwords($date_fr);

        return $date_fr;
    }

}
