@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Détail Article
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('show.stocke_restauration', $article->stocke->id) }}">Détail Stocke
                        /</a>
                </li>
                <li class="font-medium text-primary">Détail Article</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <div
        class="flex flex-col mt-9 gap-y-4 rounded-sm border border-stroke bg-white p-3 shadow-default dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h3 class="text-title-lx font-bold text-black dark:text-white">
                DETAIL ARTICLE ({{ $article->stocke->name }} | {{ $article->reference }})
            </h3>
        </div>

    </div>

    <div class="flex flex-col gap-5 md:gap-7 2xl:gap-10">
        <!-- ====== Data Table One Start -->
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="data-table-common data-table-one max-w-full overflow-x-auto">
                <table class="table w-full table-auto" id="dataTableOne">
                    <thead>
                        <tr>

                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>ARTICLE</p>
                                    <div class="inline-flex flex-col space-y-[2px]">
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill="" />
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>RÉFÉRENCE</p>
                                    <div class="inline-flex flex-col space-y-[2px]">
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill="" />
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>QUANTITÉ</p>
                                    <div class="inline-flex flex-col space-y-[2px]">
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill="" />
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>Px.ACHAT<sup style="color: blue">(XOF)</sup></p>
                                    <div class="inline-flex flex-col space-y-[2px]">
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill="" />
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>Fr.DIVERS<sup style="color: blue">(XOF)</sup></p>
                                    <div class="inline-flex flex-col space-y-[2px]">
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill="" />
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>Pr.Ac.UNITAIRE<sup style="color: blue">(XOF)</sup></p>
                                    <div class="inline-flex flex-col space-y-[2px]">
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill="" />
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>Ds.COMBINÉE<sup style="color: blue">(XOF)</sup></p>
                                    <div class="inline-flex flex-col space-y-[2px]">
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill="" />
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>Pr.Vt.UNITAIRE<sup style="color: blue">(XOF)</sup></p>
                                    <div class="inline-flex flex-col space-y-[2px]">
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill="" />
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>Pr.Vt.TOTALE<sup style="color: blue">(XOF)</sup></p>
                                    <div class="inline-flex flex-col space-y-[2px]">
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill="" />
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>Rvn.UNITAIRE<sup style="color: blue">(XOF)</sup></p>
                                    <div class="inline-flex flex-col space-y-[2px]">
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill="" />
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>Rvn.TOTAL<sup style="color: blue">(XOF)</sup></p>
                                    <div class="inline-flex flex-col space-y-[2px]">
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill="" />
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @if ($article)
                            <tr>
                                <td>{{ $article->name }}</td>
                                <td>{{ $article->stocke->reference }}</td>
                                <td>{{ $article->quantite }}</td>
                                <td>{{ $article->prix_achat }}</td>
                                <td>{{ $article->frais_divers }}</td>
                                <td>{{ $article->prix_achat_unitaire }}</td>
                                <td>{{ $article->depense_combinee }}</td>
                                <td>{{ $article->prix_vente_unitaire }}</td>
                                <td>{{ $article->prix_vente_totale }}</td>
                                <td>{{ $article->revenu_unitaire }}</td>
                                <td>{{ $article->revenu }}</td>

                            </tr>
                        @else
                        @endif


                    </tbody>
                </table>
            </div>
        </div>
        <!-- ====== Data Table One End -->
    </div>



    <!-- ====== Form Layout Section Start -->
    <div class="grid mt-6 grid-cols-1 gap-9 sm:grid-cols-1">
        <div class="flex flex-col gap-9">
            <!-- Contact Form -->
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <form action="{{route('modifier.article', $article->id)}}" id="form_add_produit" method="POST">
                    @csrf
                    <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                        <div class="flex flex-col rounded-sm  bg-white p-3  dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
                            <div>
                                Modifier le produit
                            </div>

                            <div class="flex flex-col gap-4 2xsm:flex-row 2xsm:items-center">
                                <button type="submit" class="flex items-center gap-2 rounded bg-primary px-4.5 py-2 font-medium text-white hover:bg-opacity-80" id="btn-submited">
                                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 7H9V1C9 0.4 8.6 0 8 0C7.4 0 7 0.4 7 1V7H1C0.4 7 0 7.4 0 8C0 8.6 0.4 9 1 9H7V15C7 15.6 7.4 16 8 16C8.6 16 9 15.6 9 15V9H15C15.6 9 16 8.6 16 8C16 7.4 15.6 7 15 7Z" fill=""></path>
                                    </svg>
                                    Sauvégarder
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="p-6.5">
                        <div class="form_group_input" id="form_group_input_1">
                            <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                                <div class="w-full xl:w-1/2">
                                    <label for="libelle_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Libelle <sup style="color: blue;">*</sup></label>
                                    <input type="text" id="libelle_1" name="libelle_1" value="{{$article->name}}" required placeholder="Libelle produit" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label for="reference_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Référence <sup style="color: blue;">*</sup></label>
                                    <input type="text" required id="reference_1" name="reference_1" value="{{$article->reference}}" placeholder="Enter reference" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label for="quantite_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Quantité <sup style="color: blue;">*</sup></label>
                                    <input type="number" min="1" required id="quantite_1" name="quantite_1" value="{{$article->quantite}}" placeholder="Quantité" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label for="prix_achat_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Prix de d'achat <sup style="color: blue;">(XOF) *</sup></label>
                                    <input type="number" min="1" id="prix_achat_1" name="prix_achat_1" value="{{$article->prix_achat}}" required placeholder="Prix d'achat" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label for="frais_divers_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Frais Divers <sup style="color: blue;">(XOF) *</sup></label>
                                    <input type="number" min="1" required id="frais_divers_1" name="frais_divers_1" value="{{$article->frais_divers}}" placeholder="Frais Divers" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                            </div>

                            <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                                <div class="w-full xl:w-1/2">
                                    <label for="prix_achat_unitaire_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Prix d'achat unitaire  <sup style="color: blue;">(XOF)</label>
                                    <input type="number" readonly min="1" required id="prix_achat_unitaire_1" name="prix_achat_unitaire_1" value="{{$article->prix_achat_unitaire}}" placeholder="Prix d'achat unitaire" class="w-full rounded border-[1.5px] border-stroke bg-gray px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label for="depense_combinee_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Dépense Combinée  <sup style="color: blue;">(XOF)</sup></label>
                                    <input type="number" min="1" readonly required id="depense_combinee_1" name="depense_combinee_1" value="{{$article->depense_combinee}}" placeholder="Dépense" class="w-full rounded border-[1.5px] border-stroke bg-gray px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label for="prix_vente_unitaire__1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Prix de vente unitaire  <sup style="color: blue;">(XOF) *</sup></label>
                                    <input type="number" min="1" required id="prix_vente_unitaire_1" name="prix_vente_unitaire_1" value="{{$article->prix_vente_unitaire}}" placeholder="Prix de vente unitaire" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label for="prix_vente_totale_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Prix de vente totale <sup style="color: blue;">(XOF)</sup></label>
                                    <input type="number" min="1" readonly required id="prix_vente_totale_1" name="prix_vente_totale_1" value="{{$article->prix_vente_totale}}" placeholder="Prix vente totale" class="w-full rounded border-[1.5px] border-stroke bg-gray px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label for="revenu_unitaire_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Revenu par unité <sup style="color: blue;">(XOF)</sup></label>
                                    <input type="number" min="1" readonly required id="revenu_unitaire_1" name="revenu_unitaire_1" value="{{$article->revenu_unitaire}}" placeholder="Revenu par unité" class="w-full rounded border-[1.5px] border-stroke bg-gray px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label for="revenu_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Revenu <sup style="color: blue;">(XOF)</sup></label>
                                    <input type="number" min="1" readonly required id="revenu_1" name="revenu_1" value="{{$article->revenu}}" placeholder="Revenu" class="w-full rounded border-[1.5px] border-stroke bg-gray px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ====== Form Layout Section End -->



    <!-- ====== Settings Section Start -->
    <div class="grid mt-6 grid-cols-5 gap-8">
        <script src="{{asset('js/script_to_stocke.js')}}"></script>
        <script>
            const Modifier = document.getElementById('Modifier').querySelectorAll('button');
            const AnnulerSauvegarder = document.getElementById('AnnulerSauvegarder').querySelectorAll('button');
            const form_group_input_1 = document.getElementById('form_group_input_1');

            Array.from(Modifier).map(item => {
                item.addEventListener('click', event => {
                    document.getElementById('AnnulerSauvegarder').style.opacity = '1';
                    document.getElementById('Modifier').style.opacity = '0';
                })
            });

            Array.from(AnnulerSauvegarder).map(item => {
                item.addEventListener('click', event => {
                    if (event.target.textContent = 'Annuler') {
                        document.getElementById('AnnulerSauvegarder').style.opacity = '0';
                        document.getElementById('Modifier').style.opacity = '1';
                    }

                })
            })

            const Luc = {
                Lundi: 500,
                Mardi: 1200,
                Mercredi: 800,
                Jeudi: 300,
                Vendredi: 210,
                Samedi: 2000,
                Dimanche: 2350,

            };

            const Robert = {
                Lundi: 500,
                Mardi: 1200,
                Mercredi: 800,
                Jeudi: 300,
                Vendredi: 210,
                Samedi: 2000,
                Dimanche: 2350,

            };

            const Paul = {
                Lundi: 500,
                Mardi: 1200,
                Mercredi: 800,
                Jeudi: 300,
                Vendredi: 210,
                Samedi: 2000,
                Dimanche: 2350,

            };

            const Adeline = {
                Lundi: 1000,
                Mardi: 1500,
                Mercredi: 700,
                Jeudi: 500,
                Vendredi: 300,
                Samedi: 200,
                Dimanche: 500,

            };

            const Flore = {
                Lundi: 5000,
                Mardi: 2500,
                Mercredi: 3500,
                Jeudi: 2000,
                Vendredi: 1500,
                Samedi: 2100,
                Dimanche: 1000,

            };

            const months = [
                "janvier",
                "fevrier",
                "mars",
                "avril",
                "mai",
                "juin",
                "juillet",
                "aout",
                "septembre",
            ];

            // Calculate the total expenditures for each person
            const totalDepenseLuc = Object.values(Luc).reduce((a, b) => a + b, 0);
            const totalDepenseRobert = Object.values(Robert).reduce((a, b) => a + b, 0);
            const totalDepensePaul = Object.values(Paul).reduce((a, b) => a + b, 0);
            const totalDepenseAdeline = Object.values(Adeline).reduce((a, b) => a + b, 0);
            const totalDepenseFlore = Object.values(Flore).reduce((a, b) => a + b, 0);

            setTimeout(() => {
                const ctx = document.getElementById('expenditurePieChart').getContext('2d');
                const expenditurePieChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Luc', 'Robert', 'Paul', 'Adeline', 'Flore'],
                        datasets: [{
                            data: [totalDepenseLuc, totalDepenseRobert, totalDepensePaul,
                                totalDepenseAdeline, totalDepenseFlore
                            ],
                            backgroundColor: [
                                'rgba(0, 0, 255, 0.5)', // Blue with 50% opacity
                                'rgba(0, 128, 0, 0.5)', // Green with 50% opacity
                                'rgba(255, 0, 0, 0.5)', // Red with 50% opacity
                                'rgba(128, 0, 128, 0.5)', // Purple with 50% opacity
                                'rgba(255, 165, 0, 0.5)' // Orange with 50% opacity
                            ],
                            hoverBackgroundColor: [
                                'rgba(0, 0, 255, 0.7)', // Blue with 70% opacity
                                'rgba(0, 128, 0, 0.7)', // Green with 70% opacity
                                'rgba(255, 0, 0, 0.7)', // Red with 70% opacity
                                'rgba(128, 0, 128, 0.7)', // Purple with 70% opacity
                                'rgba(255, 165, 0, 0.7)' // Orange with 70% opacity
                            ]
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        const label = context.label || '';
                                        const value = context.raw;
                                        return `${label}: ${value} €`;
                                    }
                                }
                            }
                        }
                    }
                });


            }, 500);
        </script>

        <script src="{{ asset('js/script.js') }}"></script>
    </div>

    <!-- ====== Settings Section End -->
@endsection
