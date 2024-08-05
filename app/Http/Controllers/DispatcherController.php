<?php

namespace App\Http\Controllers;

use App\Constants\Messages;
use App\Models\Article;
use App\Models\Departement;
use App\Models\Dispatcher;
use App\Models\Espace;
use App\Models\Repas;
use App\Models\Stocke;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DispatcherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Departement $departement = null, Stocke $stocke = null)
    {
        $departements = Departement::where('etat', 'ACTIF')->get();
        $espaces = Espace::get();
        $repas = Repas::get();
        if ($departement && !$stocke) {
            $detect = 1;
            $stockes = Stocke::whereHas('activite', function ($query) {
                $query->where('name', 'RESTAURANT');
            })->where('departement_id', $departement->id)->where('etat', 'ACTIF')->get();
            $stockes_ids = Stocke::where('departement_id', $departement->id)->where('etat', 'ACTIF')->pluck('id');
            $articles = Article::whereIn('stocke_id', $stockes_ids->toArray())->where('etat', 'ACTIF')->where('quantite', '>', 0)->get();
            $view = view('restauration.dispatch', compact('departements', 'departement', 'stockes', 'articles', 'espaces', 'detect', 'repas'));
        } elseif ($departement && $stocke) {
            $detect = 2;
            $stockes = Stocke::whereHas('activite', function ($query) {
                $query->where('name', 'RESTAURANT');
            })->where('departement_id', $departement->id)->where('etat', 'ACTIF')->get();
            $articles = Article::where('stocke_id', $stocke->id)->where('etat', 'ACTIF')->where('quantite', '>', 0)->get();
            $view = view('restauration.dispatch', compact('departements', 'departement', 'stockes', 'stocke', 'articles', 'espaces', 'detect', 'repas'));
        } else {
            $detect = 3;
            $stockes = Stocke::whereHas('activite', function ($query) {
                $query->where('name', 'RESTAURANT');
            })->where('etat', 'ACTIF')->get();
            $stockes_ids = Stocke::whereHas('activite', function ($query) {
                $query->where('name', 'RESTAURANT');
            })->where('etat', 'ACTIF')->pluck('id');
            $articles = Article::whereIn('stocke_id', $stockes_ids->toArray())->where('etat', 'ACTIF')->where('quantite', '>', 0)->get();
            $view =  view('restauration.dispatch', compact('departements', 'stockes', 'articles', 'espaces', 'detect', 'repas'));
        }

        $allDispatchs = Dispatcher::whereHas('espace', function ($query) {
            $query->whereIn('name', ["Espace Restaurant", "Espace Plein Aire"])->where('etat', true);
        })->get();

        $view->dispatchs = $allDispatchs;

        return $view;
    }

    public function getRecettes($espace = null, Repas $repas = null, $date = null)
    {
        $artiles = [];
        $AllRepas = Repas::get();

        if($espace && $repas){
            $dispatchs = Dispatcher::whereHas('espace', function ($query) use ($espace) {$query->where('id', $espace);})
            ->whereHas('repas', function ($query) use ($repas) {$query->where('id', $repas->id);})
            ->where('etat', 1)->orderBy('date', 'asc')->get();
            //dd($dispatchs);
        }else{
            $dispatchs = Dispatcher::where('etat', 1)->orderBy('date', 'asc')->get();
        }

        if(count($dispatchs)){
            foreach($dispatchs as $dispatch){
                foreach (json_decode($dispatch->detail) as $detail) {

                    $artiles["article"] = Article::whereHas('departement')->where("id", (int)$detail->articleId);
                    $artiles["quantite"] = $detail->quantite;
                    $artiles["montant"] = $detail->montant;
                }
            }
        }

        $espaces = Espace::all();

        // Pass transformed dispatches to your view
        return view('restauration.recette', compact('dispatchs', 'espaces', 'artiles', 'AllRepas', 'repas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        dd();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Commencez la transaction
        DB::beginTransaction();

        try {
            $data = $request->all();

            $transformedData = [
                "repas" => (int)$data['repas'],
                "espace" => (int)$data['espace'],
                "date" => date('Y-m-d H:i:s', strtotime($data['date'])),
                "detail" => []
            ];

            $details = [];
            $montant = 0;

            foreach ($data as $key => $value) {
                if (strpos($key, 'quantite_') === 0) {
                    $index = substr($key, 9); // get the index from the key
                    $details[$index]['quantite'] = (int)$value;
                } elseif (strpos($key, 'montant_') === 0) {
                    $index = substr($key, 8);
                    $details[$index]['montant'] = (float)$value;
                    $montant += (float)$value;
                } elseif (strpos($key, 'article_') === 0) {
                    $index = substr($key, 8);
                    $details[$index]['articleId'] = (int)$value;
                }
            }

            $transformedData['detail'] = json_encode(array_values($details));
            $transformedData['montant'] = $montant;

            $newDispatch = new Dispatcher();

            $newDispatch->detail = $transformedData['detail'];
            $newDispatch->date = $transformedData['date'];
            $newDispatch->espace_id = $transformedData['espace'];
            $newDispatch->repas_id = $transformedData['repas'];
            $newDispatch->montant = $transformedData['montant'];


            if ($newDispatch->save()) {
                foreach (json_decode($newDispatch->detail) as $detail) {
                    //$getDetail = $detail;
                    $findArticle = Article::where('id', $detail->articleId)->first();
                    $findArticle->quantite = $findArticle->quantite - $detail->quantite;
                    if ($findArticle->save()) {
                        //$getStocke_id = $findArticle->stocke_id;
                        $fetchStocke = $findArticle->stocke;
                        $fetchStocke->contenu = (int)$fetchStocke->contenu - (int)$detail->quantite;
                        $fetchStocke->save();
                    }
                }
            }

            // Si tout s'est bien passé, on valide la transaction
            DB::commit();
            session()->flash('notification', [
                'type' => Messages::TYPE_SUCCES,
                'title' => 'Succès',
                'message' => Messages::SUCCES_SAVE
            ]);
            return redirect()->back()->withInput();
        } catch (\Exception $e) {
            // En cas d'erreur, on annule la transaction
            DB::rollBack();

            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'title' => 'Érreur',
                'message' => Messages::ERROR_SAVE
            ]);
            return redirect()->back()->withInput();
        }
    }

    public function saveRecette(Request $request){
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dispatcher $dispatcher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dispatcher $dispatcher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dispatcher $dispatcher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dispatcher $dispatcher)
    {
        //
    }
}
