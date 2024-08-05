@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white"> Ajouter Plats </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Tableau de Bord /</a>
                </li>
                <li>
                    <a class="font-medium" href="{{ route('index.repas') }}">Contenus Repas /</a>
                </li>
                <li class="font-medium text-primary">Ajouter Plats</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <div class="grid mt-6 grid-cols-1 gap-9 sm:grid-cols-1" id="form_for_menus">
        <div class="flex flex-col gap-9">
            <!-- Contact Form -->
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                    <div class="flex flex-col rounded-sm  bg-white p-3  dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <div x-data="{openDropDown: false}" class="relative inline-block">
                                <a href="#" @click.prevent="openDropDown = !openDropDown" class="inline-flex items-center gap-2.5 rounded-md bg-success px-5.5 py-3 font-medium text-white hover:bg-opacity-95">
                                    Voir la Liste des Repas du jours
                                  <svg class="fill-current duration-200 ease-linear" :class="openDropDown &amp;&amp; 'rotate-180'" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.564864 0.879232C0.564864 0.808624 0.600168 0.720364 0.653125 0.667408C0.776689 0.543843 0.970861 0.543844 1.09443 0.649756L5.82517 5.09807C5.91343 5.18633 6.07229 5.18633 6.17821 5.09807L10.9089 0.649756C11.0325 0.526192 11.2267 0.543844 11.3502 0.667408C11.4738 0.790972 11.4562 0.985145 11.3326 1.10871L6.60185 5.55702C6.26647 5.85711 5.73691 5.85711 5.41917 5.55702L0.670776 1.10871C0.600168 1.0381 0.564864 0.967492 0.564864 0.879232Z" fill=""></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.4719 0.229332L6.00169 4.48868L10.5171 0.24288C10.9015 -0.133119 11.4504 -0.0312785 11.7497 0.267983C12.1344 0.652758 12.0332 1.2069 11.732 1.50812L11.7197 1.52041L6.97862 5.9781C6.43509 6.46442 5.57339 6.47872 5.03222 5.96853C5.03192 5.96825 5.03252 5.96881 5.03222 5.96853L0.271144 1.50833C0.123314 1.3605 -5.04223e-08 1.15353 -3.84322e-08 0.879226C-2.88721e-08 0.660517 0.0936127 0.428074 0.253705 0.267982C0.593641 -0.0719548 1.12269 -0.0699964 1.46204 0.220873L1.4719 0.229332ZM5.41917 5.55702C5.73691 5.85711 6.26647 5.85711 6.60185 5.55702L11.3326 1.10871C11.4562 0.985145 11.4738 0.790972 11.3502 0.667408C11.2267 0.543844 11.0325 0.526192 10.9089 0.649756L6.17821 5.09807C6.07229 5.18633 5.91343 5.18633 5.82517 5.09807L1.09443 0.649756C0.970861 0.543844 0.776689 0.543843 0.653125 0.667408C0.600168 0.720364 0.564864 0.808624 0.564864 0.879232C0.564864 0.967492 0.600168 1.0381 0.670776 1.10871L5.41917 5.55702Z" fill=""></path>
                                  </svg>
                                </a>
                                <div x-show="openDropDown" @click.outside="openDropDown = false" class="absolute left-0 top-full z-40 mt-2 w-full rounded-md border border-stroke bg-white py-3 shadow-card dark:border-strokedark dark:bg-boxdark" style="display: none;">
                                    <ul class="flex flex-col">
                                        @forelse ($menus as $menu)
                                            <li>
                                                <a href="{{route('listing.plats', [$menu->id, $menu->repas->id])}}" class="flex px-5 py-2 font-medium hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                                {{$menu->repas->name}}
                                                </a>
                                            </li>
                                        @empty
                                            <li class="px-2 ajouter">
                                                Auncun repas enregisté pour ce jour
                                            </li>
                                        @endforelse

                                    </li>
                                  </ul>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-4 2xsm:flex-row 2xsm:items-center">
                            <div x-data="{openDropDown: false}" class="relative inline-block">
                                <a href="#" @click.prevent="openDropDown = !openDropDown" class="inline-flex items-center gap-2.5 rounded-md bg-primary px-5.5 py-3 font-medium text-white hover:bg-opacity-95">
                                    Ajouter Les Repas
                                  <svg class="fill-current duration-200 ease-linear" :class="openDropDown &amp;&amp; 'rotate-180'" width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.564864 0.879232C0.564864 0.808624 0.600168 0.720364 0.653125 0.667408C0.776689 0.543843 0.970861 0.543844 1.09443 0.649756L5.82517 5.09807C5.91343 5.18633 6.07229 5.18633 6.17821 5.09807L10.9089 0.649756C11.0325 0.526192 11.2267 0.543844 11.3502 0.667408C11.4738 0.790972 11.4562 0.985145 11.3326 1.10871L6.60185 5.55702C6.26647 5.85711 5.73691 5.85711 5.41917 5.55702L0.670776 1.10871C0.600168 1.0381 0.564864 0.967492 0.564864 0.879232Z" fill=""></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.4719 0.229332L6.00169 4.48868L10.5171 0.24288C10.9015 -0.133119 11.4504 -0.0312785 11.7497 0.267983C12.1344 0.652758 12.0332 1.2069 11.732 1.50812L11.7197 1.52041L6.97862 5.9781C6.43509 6.46442 5.57339 6.47872 5.03222 5.96853C5.03192 5.96825 5.03252 5.96881 5.03222 5.96853L0.271144 1.50833C0.123314 1.3605 -5.04223e-08 1.15353 -3.84322e-08 0.879226C-2.88721e-08 0.660517 0.0936127 0.428074 0.253705 0.267982C0.593641 -0.0719548 1.12269 -0.0699964 1.46204 0.220873L1.4719 0.229332ZM5.41917 5.55702C5.73691 5.85711 6.26647 5.85711 6.60185 5.55702L11.3326 1.10871C11.4562 0.985145 11.4738 0.790972 11.3502 0.667408C11.2267 0.543844 11.0325 0.526192 10.9089 0.649756L6.17821 5.09807C6.07229 5.18633 5.91343 5.18633 5.82517 5.09807L1.09443 0.649756C0.970861 0.543844 0.776689 0.543843 0.653125 0.667408C0.600168 0.720364 0.564864 0.808624 0.564864 0.879232C0.564864 0.967492 0.600168 1.0381 0.670776 1.10871L5.41917 5.55702Z" fill=""></path>
                                  </svg>
                                </a>
                                <div x-show="openDropDown" @click.outside="openDropDown = false" class="absolute left-0 top-full z-40 mt-2 w-full rounded-md border border-stroke bg-white py-3 shadow-card dark:border-strokedark dark:bg-boxdark" style="display: none;">
                                    <ul class="flex flex-col">
                                        @forelse ( $menus as $menu )
                                            <li id="ajouter_{{$menu->id}}" class="ajouter">
                                                <a class="flex px-5 py-2 font-medium hover:bg-whiter hover:text-primary dark:hover:bg-meta-4 cursor-pointer" id="ajouter_{{$menu->id}}">
                                                {{$menu->repas->name}}
                                                </a>
                                            </li>

                                        @empty
                                            <li class="px-2 ajouter">
                                                Auncun ménu enregisté pour ce jour
                                            </li>
                                        @endforelse

                                    </li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($menus as $menu)
        <div class="grid mt-6 grid-cols-1 gap-9 sm:grid-cols-1 form_for_menus" id="form_for_menus_{{$menu->id}}" style="display: none">
            <div class="flex flex-col gap-9">
                <!-- Contact Form -->
                <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <form action="{{route('create.plats',[$menu->id, $menu->repas->id])}}" id="data_formulare_{{$menu->repas->id}}" method="POST" class="data_formulare">
                        @csrf
                        <div class="p-6.5" id="in_the_div">
                            <div class="flex flex-col mb-6 border-b-2 border-red pb-6 gap-6 rounded-sm bg-white dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
                                <div class="w-full xl:w-1/2"> {{$menu->repas->name}}</div>
                            </div>
                            @php
                                $details = json_decode($menu->details)
                            @endphp

                            @foreach ($details as $detail=>$index)
                                <div class="mb-4.5 flex flex-col gap-6 border-b border-gray-300 xl:flex-row pb-2 form_group_input" id="form_group_input_{{$menu->id}}_{{$detail+1}}">
                                    <div class="w-full xl:w-1/2">
                                        <label for="name_{{$menu->id}}_{{$detail+1}}"  class="mb-3 block text-sm font-medium text-black dark:text-white"> Nom du Plat </label>
                                        <input type="text" id="name_{{$menu->id}}_{{$detail+1}}" value="{{$index->plat_name}}" name="name_{{$menu->id}}_{{$detail+1}}" hidden required placeholder="Libelle produit" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal font-medium text-black text-sm font-medium text-black dark:text-white outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                        <input type="text" value="{{$index->plat_name}}" required placeholder="Libelle produit" disabled class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal font-medium text-black text-sm font-medium text-black dark:text-white outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                    </div>

                                    <div class="w-full xl:w-1/2">
                                        <label for="quantite_{{$menu->id}}_{{$detail+1}}" class="mb-3 block text-sm font-medium text-black dark:text-white"> Nombre de Plat disponible </label>
                                        <input type="number" id="quantite_{{$menu->id}}_{{$detail+1}}" min="1" name="quantite_{{$menu->id}}_{{$detail+1}}" required placeholder="1" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal font-medium text-black text-sm font-medium text-black dark:text-white outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                    </div>

                                    <div class="w-full xl:w-1/2">
                                        <label for="prix_unitaire_{{$menu->id}}_{{$detail+1}}" class="mb-3 block text-sm font-medium text-black dark:text-white"> Prix Unitaire </label>
                                        <input readonly type="number" id="prix_unitaire_{{$menu->id}}_{{$detail+1}}" value="{{$index->prix_unitaire}}" min="{{$index->prix_unitaire}}" max="{{$index->prix_unitaire}}" name="prix_unitaire_{{$menu->id}}_{{$detail+1}}" required placeholder="{{$index->prix_unitaire}} XOF" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal font-medium text-black text-sm font-medium text-black dark:text-white outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                    </div>

                                    <div class="w-full xl:w-1/2">
                                        <label for="prix_total_{{$menu->id}}_{{$detail+1}}" class="mb-3 block text-sm font-medium text-black dark:text-white"> Prix Total </label>
                                        <input readonly type="number" id="prix_total_{{$menu->id}}_{{$detail+1}}" value="{{$index->prix_unitaire}}" min="{{$index->prix_unitaire}}}" name="prix_total_{{$menu->id}}_{{$detail+1}}" required placeholder="1" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal font-medium text-black text-sm font-medium text-black dark:text-white outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                    </div>
                                </div>
                            @endforeach

                            <div class="flex justify-end">
                                <button type="submit" class="flex items-center gap-2 w-auto justify-center rounded bg-success px-4.5 py-2 font-medium text-gray hover:bg-opacity-90" id="dynamicButton">
                                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15 7H9V1C9 0.4 8.6 0 8 0C7.4 0 7 0.4 7 1V7H1C0.4 7 0 7.4 0 8C0 8.6 0.4 9 1 9H7V15C7 15.6 7.4 16 8 16C8.6 16 9 15.6 9 15V9H15C15.6 9 16 8.6 16 8C16 7.4 15.6 7 15 7Z" fill=""></path>
                                    </svg>
                                    Ajouter un autre plat
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach




    <div class="flex mt-9 flex-col gap-5 md:gap-7 2xl:gap-10">
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
                            <p>ORDRE</p>
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
                        <p>PLAT</p>
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
                        <p>QUANTITE</p>
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
                        <p>PRIX</p>
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
                        <p>ACTIVITE</p>
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
                        <p>MENUS</p>
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
                        <p>REPAS</p>
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
                        <p>DATE</p>
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

                </tr>
              </thead>
              <tbody>
                @forelse ($plats as $plat)
                    <tr>
                        <td>{{$plat->id}}</td>
                        <td>{{$plat->name}}</td>
                        <td>{{$plat->quantite}}</td>
                        <td>{{$plat->prix}}</td>
                        <td>{{$plat->activite->name}}</td>
                        <td>
                            @if (is_array(json_decode($plat->menu->details)))
                                <div x-data="{ popupOpen: false }">
                                    <button @click="popupOpen = true" class="flex items-center gap-2 rounded bg-primary px-4.5 py-1 font-medium text-white hover:bg-opacity-80">
                                        Voir détail
                                    </button>

                                    <!-- ===== Task Popup Start ===== -->
                                    <div x-show="popupOpen" x-transition class="fixed left-0 top-0 z-99999 flex h-screen w-full justify-center overflow-y-scroll bg-black/80 px-4 py-5">
                                        <div @click.outside="popupOpen = false"
                                            class="relative m-auto w-full max-w-190 rounded-sm border border-stroke bg-gray p-4 shadow-default dark:border-strokedark dark:bg-meta-4 sm:p-8 xl:p-10">
                                            <button @click="popupOpen = false" class="absolute right-1 top-1 sm:right-5 sm:top-5">
                                                <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8913 9.99599L19.5043 2.38635C20.032 1.85888 20.032 1.02306 19.5043 0.495589C18.9768 -0.0317329 18.141 -0.0317329 17.6135 0.495589L10.0001 8.10559L2.38673 0.495589C1.85917 -0.0317329 1.02343 -0.0317329 0.495873 0.495589C-0.0318274 1.02306 -0.0318274 1.85888 0.495873 2.38635L8.10887 9.99599L0.495873 17.6056C-0.0318274 18.1331 -0.0318274 18.9689 0.495873 19.4964C0.717307 19.7177 1.05898 19.9001 1.4413 19.9001C1.75372 19.9001 2.13282 19.7971 2.40606 19.4771L10.0001 11.8864L17.6135 19.4964C17.8349 19.7177 18.1766 19.9001 18.5589 19.9001C18.8724 19.9001 19.2531 19.7964 19.5265 19.4737C20.0319 18.9452 20.0245 18.1256 19.5043 17.6056L11.8913 9.99599Z" fill="" />
                                                </svg>
                                            </button>

                                            <div class="flex flex-col mt-6 gap-9">
                                                <!-- Survey Form -->
                                                <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                                    <!-- ====== Table Five Start -->
                                                    <div class="w-full overflow-x-auto">
                                                        <div class="min-w-[1170px]">
                                                        <!-- table header start -->
                                                        <div class="grid grid-cols-12 rounded-t-[10px] bg-black px-5 py-4 lg:px-7.5 2xl:px-11">
                                                            <div class="col-span-3">
                                                                <h5 class="font-medium text-white">PLAT</h5>
                                                            </div>

                                                            <div class="col-span-3">
                                                                <h5 class="font-medium text-white">PRIX<sup style="color: blue">(XOF)</sup></h5>
                                                            </div>

                                                            <div class="col-span-3">
                                                                <h5 class="font-medium text-white">DATE</h5>
                                                            </div>
                                                        </div>
                                                        <!-- table header end -->

                                                        <!-- table body start -->
                                                        <div class="bg-white dark:bg-boxdark rounded-b-[10px]">
                                                            @foreach (json_decode($plat->menu->details) as $detail)
                                                                <?php
                                                                    // Définir la locale en français
                                                                    setlocale(LC_TIME, 'fr_FR.UTF-8');

                                                                    // Créer une instance de DateTime avec la date donnée
                                                                    $date = new DateTime($detail->date);

                                                                    // Formater la date en français
                                                                    $date_fr = strftime('%A %d %B %Y', $date->getTimestamp());

                                                                    // Convertir en UTF-8 si nécessaire
                                                                    $date_fr = utf8_encode($date_fr);

                                                                    // Mettre la première lettre de chaque mot en majuscule
                                                                    $date_fr = ucwords($date_fr);

                                                                    // Corriger les caractères accentués
                                                                    $date_fr = utf8_decode($date_fr);
                                                                ?>
                                                                <!-- table row item -->
                                                                <div class="grid grid-cols-12 border-t border-[#EEEEEE] px-5 py-4 dark:border-strokedark lg:px-7.5 2xl:px-11">
                                                                    <div class="col-span-3">
                                                                        <p class="text-[#637381] dark:text-bodydark">{{ $detail->plat_name }}</p>
                                                                    </div>

                                                                    <div class="col-span-3">
                                                                        <p class="text-[#637381] dark:text-bodydark">{{ $detail->prix_unitaire }}</p>
                                                                    </div>

                                                                    <div class="col-span-3">
                                                                        {{ $date_fr }}
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                        <!-- table body end -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ===== Task Popup End ===== -->
                                </div>
                            @else
                                Aucun détail disponible
                            @endif
                        </td>
                        <td>{{$plat->repas->name}}</td>
                        <td>

                            <?php
                                // Définir la locale en français
                                setlocale(LC_TIME, 'fr_FR.UTF-8');

                                // Créer une instance de DateTime avec la date donnée
                                $date = new DateTime($plat->date);

                                // Formater la date en français
                                $date_fr = strftime('%A %d %B %Y', $date->getTimestamp());

                                // Convertir en UTF-8 si nécessaire
                                $date_fr = utf8_encode($date_fr);

                                // Mettre la première lettre de chaque mot en majuscule
                                $date_fr = ucwords($date_fr);

                                // Corriger les caractères accentués
                                $date_fr = utf8_decode($date_fr);
                            ?>
                            {{$date_fr}}</td>
                    </tr>
                @empty
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
        <!-- ====== Data Table One End -->


      </div>


    <script src="{{ asset('js/plats_script.js') }}"></script>
@endsection
