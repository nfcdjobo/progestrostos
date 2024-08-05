<?php

namespace App\Http\Controllers;

use App\Constants\Messages;
use App\Models\Activite;
use App\Models\Produit;
use App\Models\Stocke;
use App\Models\Article;
use App\Models\Departement;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stockes = Stocke::withCount('articles')
            ->withSum('articles as prix_combinee', 'depense_combinee')
            ->withSum('articles as quantite', 'quantite')
            ->withSum('articles as prix_vente_unitaire', 'prix_vente_unitaire')
            ->withSum('articles as prix_vente_totale', 'prix_vente_totale')
            ->withSum('articles as revenu', 'revenu')
            ->orderBy('reference', 'asc')->orderBy('reference', 'asc')->get();

        $departements = Departement::where('activite_id', 1)->orderBy('name', 'asc')->get();

        return view('restauration.stocke', compact('stockes', 'departements'));
    }

    public function fetch_all()
    {
        $article = Article::where('status', '=', 'ACTIF')->where('etat', '=', 'ACTIF')->orderBy('name', 'asc')->get();
        return view('restauration.listing', ['article' => $article]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $formData = $request->all();
        // Initialiser un tableau pour stocker les données regroupées
        $groupedData = [];

        // Parcourir chaque élément du tableau de données du formulaire
        foreach ($formData as $key => $value) {
            // Ignorer le token CSRF
            if ($key === '_token') {
                continue;
            }

            // Extraire le suffixe de la clé
            preg_match('/_(\d+)$/', $key, $matches);
            if (isset($matches[1])) {
                $index = $matches[1];  // Le numéro à la fin de la clé
                $field = str_replace("_{$index}", '', $key);  // Le préfixe de la clé (libelle, designation, etc.)

                // Ajouter la valeur au tableau regroupé sous le bon suffixe
                $groupedData[$index][$field] = $value;
            }
        }


        if (!empty($groupedData)) {
            $newStocke = new Stocke();

            $dateTime = new DateTime();

            $fetchActivite = Activite::where('name', 'RESTAURANT')->first();

            $currentYear = $dateTime->format("Y");

            $newStocke->activite_id = $fetchActivite->id;

            $newStocke->departement_id  = $request->departement;

            $newStocke->save();

            $reference = "RES-" . (string)$currentYear . "-" . (string)$newStocke->id;

            $newStocke->reference = $reference;

            try {
                $montant = 0;

                $categorie = 0;

                $contenu = 0;

                foreach ($groupedData as $key => $value) {
                    $newArticle = new Article();

                    $newArticle->stocke_id = $newStocke->id;

                    $newArticle->name  = $value['libelle'];

                    $newArticle->reference  = $value['reference'];

                    $newArticle->quantite  = (int)$value['quantite'];

                    $newArticle->prix_achat  = (float)$value['prix_achat'];

                    $newArticle->frais_divers  = (float)$value['frais_divers'];

                    $newArticle->prix_achat_unitaire  = (float)$value['prix_achat_unitaire'];

                    $newArticle->depense_combinee  = (float)$value['depense_combinee'];

                    $newArticle->prix_vente_unitaire  = (float)$value['prix_vente_unitaire'];

                    $newArticle->prix_vente_totale  = (float)$value['prix_vente_totale'];

                    $newArticle->revenu_unitaire  = (float)$value['revenu_unitaire'];

                    $newArticle->revenu  = (float)$value['revenu'];

                    $newArticle->departement_id  = $request->departement;

                    if ($newArticle->save()) {
                        $montant += $newArticle->depense_combinee;
                        $categorie++;
                        $contenu += $newArticle->quantite;
                    }
                }

                $newStocke->montant = $montant;

                $newStocke->categorie = $categorie;

                $newStocke->contenu = $contenu;

                $newStocke->save();

                session()->flash('notification', [
                    'type' => Messages::TYPE_SUCCES,
                    'title' => Messages::SUCCES,
                    'message' => Messages::SUCCES_SAVE,
                ]);
                return redirect()->route("index.stocke_restauration");
            } catch (\Exception $e) {
                session()->flash('notification', [
                    'type' => Messages::TYPE_ERROR,
                    'title' => Messages::ERROR,
                    'message' => Messages::ERROR_SAVE,
                ]);
                return redirect()->back()->withInput();
            }
        } else {
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'title' => Messages::ERROR,
                'message' => Messages::ERROR_SAVE,
            ]);
            return redirect()->route("index.stocke_restauration");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Stocke $id)
    {
        $stocke = $id;

        $articles = Article::where('stocke_id', $stocke->id)->get();

        return view('restauration.detail_stocke', compact('stocke', 'articles'));
    }

    public function detail(Article $article)
    {
        return view('restauration.detail_article', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $id)
    {
        if ($id) {
            $article = $id;

            $article->name = $request->libelle_1;

            $article->reference = $request->reference_1;

            $article->designation = $request->designation_1;

            $article->prix_unitaire = (int)$request->prix_unitaire_1;

            $article->quantite = (int)$request->quantite_1;

            $article->prix_total = ((int)$request->prix_unitaire_1 * (int)$request->quantite_1);

            $article->save();

            session()->flash('notification', [
                'type' => Messages::TYPE_SUCCES,
                'message' => Messages::SUCCESS_UPDATE,
            ]);

            return redirect()->back();
        } else {
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'message' => Messages::ERROR_UPDATE,
            ]);
            return redirect()->back()->withInput();
        }
    }

    public function changeStatus(Article $id)
    {

        $article = $id;

        if ($article) {
            if ($article->status === 'ACTIF') {
                $article->status = "INACTIF";
            } else {
                $article->status = 'ACTIF';
            }

            $article->save();

            session()->flash('notification', [
                'type' => Messages::TYPE_SUCCES,
                'message' => 'Stocke ' . Messages::SUCCESS_DESACTIVED,
            ]);

            return redirect()->back()->withInput();
        } else {
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'message' => 'Stocke' . Messages::NOT_FOUND,
            ]);

            return redirect()->back()->withInput();
        }
    }

    public function changeEtat(Article $id)
    {

        $article = $id;

        if ($article) {
            if ($article->etat === 'ACTIF') {
                $article->etat = "INACTIF";
            } else {
                $article->etat = 'ACTIF';
            }

            $article->save();

            session()->flash('notification', [
                'type' => Messages::TYPE_SUCCES,
                'message' => 'Stocke ' . Messages::SUCCESS_DESACTIVED,
            ]);

            return redirect()->back()->withInput();
        } else {
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'message' => 'Stocke' . Messages::NOT_FOUND,
            ]);

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $id)
    {
        $article = $id;
        if ($article) {
            $article->delete();
            session()->flash('notification', [
                'type' => Messages::TYPE_SUCCES,
                'message' => Messages::SUCCESS_DELETED,
            ]);
        } else {
            session()->flash('notification', [
                'type' => Messages::TYPE_ERROR,
                'message' => 'Stocke' . Messages::NOT_FOUND,
            ]);

            return redirect()->back()->withInput();
        }
    }

    public function fetchStockesManquants()
    {
        $article = Article::where('etat', '=', 'INACTIF')->orderBy('name', 'asc')->get();

        $currentRouteName = Route::currentRouteName();

        return view('restauration.inatif', ['article' => $article, 'currentRouteName' => $currentRouteName]);
    }

    public function fetchStockesDesactives()
    {
        $article = Article::where('status', '=', 'INACTIF')->orderBy('name', 'asc')->get();
        $currentRouteName = Route::currentRouteName();
        return view('restauration.inatif', ['article' => $article, 'currentRouteName' => $currentRouteName]);
    }

    public function modifier(Request $request, Article $article)
    {
        // Begin transaction
        DB::beginTransaction();

        try {
            // Retrieve request data
            $requestData = $this->parseRequestData($request->all());

            // Define fields that can be updated
            $champsMiseAJour = [
                'name', 'reference', 'quantite', 'prix_achat', 'frais_divers', 'prix_achat_unitaire',
                'depense_combinee', 'prix_vente_unitaire', 'prix_vente_totale', 'revenu_unitaire', 'revenu'
            ];

            // Check for changes
            $changements = [];
            foreach ($champsMiseAJour as $champ) {
                if ($this->hasValueChanged($article, $requestData, $champ)) {
                    $changements[$champ] = $requestData[$champ];
                }
            }

            // No changes detected
            if (empty($changements)) {
                $this->handleNoChanges();
            }

            // Apply updated fields to article
            foreach ($changements as $champ => $valeur) {
                $article->$champ = $valeur;
            }

            // Save the article
            $this->saveArticle($article);

            // Update stock information
            $this->updateStockInformation($article);

            // Commit transaction
            DB::commit();

            // Success flash message and redirection
            return $this->handleSuccess();
        } catch (\Exception $e) {
            // Rollback transaction on error
            DB::rollBack();

            // Error flash message and redirection with input
            return $this->handleError();
        }
    }

    private function parseRequestData(array $requestData)
    {
        $parsedData = [];
        foreach ($requestData as $key => $value) {
            if (substr($key, -2) === '_1') {
                if (strpos($key, 'libelle') !== false) {
                    $key = "name_1";
                }
                $newKey = substr($key, 0, -2);
                $parsedData[$newKey] = $value;
            } else {
                $parsedData[$key] = $value;
            }
        }
        return $parsedData;
    }

    private function hasValueChanged(Article $article, array $requestData, string $field)
    {
        return array_key_exists($field, $requestData) && strcmp(trim($article->$field, ' '), trim($requestData[$field], ' '));
    }

    private function handleNoChanges()
    {
        session()->flash('notification', [
            'type' => Messages::TYPE_ERROR,
            'message' => Messages::ERROR_UPDATE,
        ]);
        return redirect()->back()->withInput();
    }

    private function saveArticle(Article $article)
    {
        if (!$article->save()) {
            throw new \Exception('Error saving the article.');
        }
    }

    private function updateStockInformation(Article $article)
    {
        $stocke = $article->stocke;
        $allArticles = Article::where('stocke_id', $stocke->id)->get();

        $sums = Article::select(
            DB::raw('SUM(quantite) as total_quantite'),
            DB::raw('SUM(prix_achat) as total_prix_achat'),
            DB::raw('SUM(frais_divers) as total_frais_divers'),
            DB::raw('SUM(prix_achat_unitaire) as total_prix_achat_unitaire'),
            DB::raw('SUM(depense_combinee) as total_depense_combinee'),
            DB::raw('SUM(prix_vente_unitaire) as total_prix_vente_unitaire'),
            DB::raw('SUM(prix_vente_totale) as total_prix_vente_totale'),
            DB::raw('SUM(revenu_unitaire) as total_revenu_unitaire'),
            DB::raw('SUM(revenu) as total_revenu')
        )->where('stocke_id', $stocke->id)->first();

        $stocke->montant = $sums->total_depense_combinee;
        $stocke->categorie = count($allArticles);
        $stocke->contenu = $sums->total_quantite;

        if (!$stocke->save()) {
            throw new \Exception('Error updating stock information.');
        }
    }

    private function handleSuccess()
    {
        session()->flash('notification', [
            'type' => Messages::TYPE_SUCCES,
            'message' => Messages::SUCCESS_UPDATE,
        ]);
        return redirect()->back();
    }

    private function handleError()
    {
        session()->flash('notification', [
            'type' => Messages::TYPE_ERROR,
            'message' => Messages::ERROR_INPUT, // Change this to a more appropriate error message
        ]);
        return redirect()->back()->withInput();
    }
}
