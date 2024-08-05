@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Détail Stocke
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('index.stocke_restauration') }}">Stocke /</a>
                </li>
                <li class="font-medium text-primary">Détail Stocke</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <div
        class="flex flex-col mt-9 gap-y-4 rounded-sm border border-stroke bg-white p-3 shadow-default dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h3 class="text-title-lx font-bold text-black dark:text-white">
                DETAIL STOCKE ({{ $stocke->activite->name }} | {{ $stocke->reference }})
            </h3>
        </div>

    </div>

    <div class="flex flex-col gap-5 md:gap-7 2xl:gap-10">
        <!-- ====== Data Table One Start -->
        <div
          class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark"
        >
          <div
            class="data-table-common data-table-one max-w-full overflow-x-auto"
          >
            <table class="table w-full table-auto" id="dataTableOne">
              <thead>
                <tr>

                  <th>
                    <div class="flex items-center gap-1.5">
                      <p>ARTICLE</p>
                      <div class="inline-flex flex-col space-y-[2px]">
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
                          </svg>
                        </span>
                      </div>
                    </div>
                  </th>

                  <th>
                    <div class="flex items-center gap-1.5">
                      <p>ACTION</sup></p>
                      <div class="inline-flex flex-col space-y-[2px]">
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
                          </svg>
                        </span>
                      </div>
                    </div>
                  </th>

                </tr>
              </thead>
              <tbody>
                @forelse ($articles as $article)
                    <tr>
                        <td>{{$article->name}}</td>
                        <td>{{$article->stocke->reference}}</td>
                        <td>{{$article->quantite}}</td>
                        <td>{{$article->prix_achat}}</td>

                        <td>{{$article->frais_divers}}</td>
                        <td>{{$article->prix_achat_unitaire}}</td>
                        <td>{{$article->depense_combinee}}</td>
                        <td>{{$article->prix_vente_unitaire}}</td>
                        <td>{{$article->prix_vente_totale}}</td>
                        <td>{{$article->revenu_unitaire}}</td>
                        <td>{{$article->revenu}}</td>
                        <td>
                            <a href="{{route('detail.articles', $article->id)}}" class="inline-flex rounded bg-[#212B36] px-2 py-1 text-sm font-medium text-white hover:bg-opacity-90">
                                Details
                            </a>
                        </td>
                    </tr>
                @empty

                @endforelse

              </tbody>
            </table>
          </div>
        </div>
        <!-- ====== Data Table One End -->

      </div>

    <!-- ====== Settings Section Start -->
    <div class="grid mt-6 grid-cols-5 gap-8">
        <div class="col-span-5 xl:col-span-3">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                    <h3 class="font-medium text-black dark:text-white">
                        Personal Information
                    </h3>
                </div>
                <div class="p-7">
                    <form action="{{route('update.stocke_restauration', $stocke->id)}}"  method="POST" id="form_add_produit">
                        @csrf
                        <div class="form_group_input" id="form_group_input_1">
                            <div class="mb-4.5 flex flex-col gap-6 xl:flex-row" >
                                <div class="w-full xl:w-1/2">
                                    <label for="libelle_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Libelle </label>
                                    <input value="{{$stocke->name}}" type="text" id="libelle_1" name="libelle_1" required placeholder="Libelle produit" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label for="reference_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Référence </label>
                                    <input value="{{$stocke->reference}}" type="text" required id="reference_1" name="reference_1" placeholder="Enter reference" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label for="designation_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Désignation </label>
                                    <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent dark:bg-form-input">
                                    <select required id="designation_1" name="designation_1" class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" :class="isOptionSelected &amp;&amp; 'text-black dark:text-white'" @change="isOptionSelected = true">
                                        <option value="Kilogramme" @if ($stocke->designation == 'Kilogramme') selected @endif class="text-body">En kilogramme</option>
                                        <option value="Unite" @if ($stocke->designation == 'Unite') selected @endif class="text-body">En unité</option>
                                    </select>
                                    <span class="absolute right-4 top-1/2 z-30 -translate-y-1/2">
                                        <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.8">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z" fill=""></path>
                                        </g>
                                        </svg>
                                    </span>
                                    </div>
                                </div>

                            </div>

                            <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                                <div class="w-full xl:w-1/2">
                                    <label for="quantite_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Quantité </label>
                                    <input value="{{$stocke->quantite}}" type="number" min="1" required id="quantite_1" name="quantite_1" placeholder="Enter your last name" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label for="prix_unitaire_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Prix Unitaire (XOF)</label>
                                    <input value="{{$stocke->prix_unitaire}}" type="number" min="1" id="prix_unitaire_1" name="prix_unitaire_1" required placeholder="Enter your last name" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label for="prix_total_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Prix Total (XOF)</label>
                                    <input value="{{$stocke->prix_total}}" type="number" min="1" required id="prix_total_1" name="prix_total_1" placeholder="Enter your last name" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                </div>

                            </div>
                        </div>

                        <div class="flex justify-end gap-4.5" id="AnnulerSauvegarder" style="opacity: 0">
                            <button class="flex justify-center rounded border bg-danger border-stroke px-6 py-2 font-medium text-white hover:shadow-1 dark:border-strokedark dark:text-white" type="button" id="Annuler"> Annuler</button>
                            <button class="flex justify-center rounded bg-success px-6 py-2 font-medium text-gray hover:bg-opacity-90" type="submit" id="Sauvegarder"> Sauvegarder</button>
                        </div>

                        <div class="flex justify-end gap-4.5" id="Modifier">
                            <button class="flex justify-center rounded bg-primary px-6 py-2 font-medium text-gray hover:bg-opacity-90" type="button" id="Modifier"> Modifier</button>
                        </div>
                        <div @error('error') class="w-full mt-2 bg-danger text-center text-white" @enderror @if(session('success')) class="w-full mt-2 bg-success text-center text-white" @endif>
                            @error('error') {{$message}} @enderror
                            @if(session('success')) {{session('success')}} @endif

                        </div>
                    </form>
                    <div class="p-7">
                        <canvas class="mx-auto flex justify-center" id="expenditurePieChart"></canvas>
                    </div>

                </div>
            </div>

        </div>


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
                    if(event.target.textContent = 'Annuler'){
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
                            data: [totalDepenseLuc, totalDepenseRobert, totalDepensePaul, totalDepenseAdeline, totalDepenseFlore],
                            backgroundColor: [
                        'rgba(0, 0, 255, 0.5)',    // Blue with 50% opacity
                        'rgba(0, 128, 0, 0.5)',    // Green with 50% opacity
                        'rgba(255, 0, 0, 0.5)',    // Red with 50% opacity
                        'rgba(128, 0, 128, 0.5)',  // Purple with 50% opacity
                        'rgba(255, 165, 0, 0.5)'   // Orange with 50% opacity
                    ],
                    hoverBackgroundColor: [
                        'rgba(0, 0, 255, 0.7)',    // Blue with 70% opacity
                        'rgba(0, 128, 0, 0.7)',    // Green with 70% opacity
                        'rgba(255, 0, 0, 0.7)',    // Red with 70% opacity
                        'rgba(128, 0, 128, 0.7)',  // Purple with 70% opacity
                        'rgba(255, 165, 0, 0.7)'   // Orange with 70% opacity
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

        <script src="{{asset('js/script.js')}}"></script>
    </div>

    <!-- ====== Settings Section End -->
@endsection
