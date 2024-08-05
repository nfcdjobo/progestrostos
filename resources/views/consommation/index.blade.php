@extends('layouts.main')
@section('content')

    <!-- Breadcrumb Start -->
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Consommations
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Tableau de Bord /</a>
                </li>
                <li class="font-medium"> <a class="font-medium" href="{{ route('getUser') }}"> Gestion de Personnels /</a></li>
                <li class="font-medium text-primary">Consommations</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->


    <div class="flex flex-col mt-9 mb-2 gap-y-4 rounded-sm border border-stroke bg-white p-3 shadow-default dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h3 class="text-title-lx font-bold text-black dark:text-white">
                Consommations Non Payés
            </h3>
        </div>
        <div class="flex flex-col gap-4 2xsm:flex-row 2xsm:items-center"></div>
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
                                    <p>DATE</p>
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
                                    <p>DÉTAILS REPAS</p>
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
                                    <p>MONTANT <sup style="color: blue">(XOF)</sup></p>
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
                                    <p>FACTURE</p>
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
                                    <p>ACTION</p>
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
                        @forelse ($consommationsNoSolde as $conso)
                            @php
                                // Définir la locale en français
                                setlocale(LC_TIME, 'fr_FR.UTF-8');
                                // Créer une instance DateTime avec la date souhaitée et le fuseau horaire
                                $createdAt = new DateTime($conso->created_at, new DateTimeZone('Africa/Abidjan'));
                                // Utiliser IntlDateFormatter pour formater la date
                                $fmt = new IntlDateFormatter(
                                    'fr_FR',
                                    IntlDateFormatter::FULL,
                                    IntlDateFormatter::NONE,
                                    'Africa/Abidjan',
                                    IntlDateFormatter::GREGORIAN,
                                    'eeee, d MMMM yyyy',
                                );
                                $formattedDate = $fmt->format($createdAt);

                                // Capitaliser la première lettre de chaque mot
                                $formattedDate = mb_convert_case($formattedDate, MB_CASE_TITLE, 'UTF-8');
                                $montant = 0;

                            @endphp

                            <tr>
                                <td>{{ $formattedDate }}</td>
                                <td>
                                    <div x-data="{ popupOpen: false }">
                                        <button @click="popupOpen = true" class="inline-flex items-center rounded-md bg-meta-4 px-9 py-3 font-medium text-white hover:bg-opacity-90">
                                            Voir les plats
                                        </button>

                                        <!-- ===== Task Popup Start ===== -->
                                        <div x-show="popupOpen" x-transition=""
                                            class="fixed left-0 top-0 z-99999 flex h-screen w-full justify-center overflow-y-scroll bg-black/80 px-4 py-5"
                                            style="display: none;">
                                            <div @click.outside="popupOpen = false"
                                                class="relative m-auto w-full max-w-190 rounded-sm border border-stroke bg-gray p-4 shadow-default dark:border-strokedark dark:bg-meta-4 sm:p-8 xl:p-10">
                                                <button @click="popupOpen = false"
                                                    class="absolute right-1 top-1 sm:right-5 sm:top-5">
                                                    <svg class="fill-current" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M11.8913 9.99599L19.5043 2.38635C20.032 1.85888 20.032 1.02306 19.5043 0.495589C18.9768 -0.0317329 18.141 -0.0317329 17.6135 0.495589L10.0001 8.10559L2.38673 0.495589C1.85917 -0.0317329 1.02343 -0.0317329 0.495873 0.495589C-0.0318274 1.02306 -0.0318274 1.85888 0.495873 2.38635L8.10887 9.99599L0.495873 17.6056C-0.0318274 18.1331 -0.0318274 18.9689 0.495873 19.4964C0.717307 19.7177 1.05898 19.9001 1.4413 19.9001C1.75372 19.9001 2.13282 19.7971 2.40606 19.4771L10.0001 11.8864L17.6135 19.4964C17.8349 19.7177 18.1766 19.9001 18.5589 19.9001C18.8724 19.9001 19.2531 19.7964 19.5265 19.4737C20.0319 18.9452 20.0245 18.1256 19.5043 17.6056L11.8913 9.99599Z"
                                                            fill=""></path>
                                                    </svg>
                                                </button>

                                                <div class="flex flex-col mt-6 gap-9">
                                                    <!-- Survey Form -->
                                                    <div
                                                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                                        <!-- ====== Table Five Start -->
                                                        <div class="w-full overflow-x-auto">
                                                            <div class="min-w-[1170px]">

                                                                <!-- table header start -->
                                                                <div
                                                                    class="grid grid-cols-12 rounded-t-[10px] bg-black px-5 py-4 lg:px-7.5 2xl:px-11">
                                                                    <div class="col-span-3">
                                                                        <h5 class="font-medium text-white">Plat</h5>
                                                                    </div>

                                                                    <div class="col-span-3">
                                                                        <h5 class="font-medium text-white">Quantiré</h5>
                                                                    </div>

                                                                    <div class="col-span-3">
                                                                        <h5 class="font-medium text-white">Prix <sup style="color: blue">(XOF)</sup></h5>
                                                                    </div>

                                                                    <div class="col-span-3">
                                                                        <h5 class="font-medium text-white">Montant <sup style="color: blue">(XOF)</sup></h5>
                                                                    </div>

                                                                </div>
                                                                <!-- table header end -->

                                                                <!-- table body start -->
                                                                <div class="bg-white dark:bg-boxdark rounded-b-[10px]">
                                                                    <!-- table row item -->
                                                                    @foreach (json_decode($conso->vente->detail) as $value)
                                                                        @php
                                                                            $montant +=
                                                                                (int) $value->quantite *
                                                                                (int) $value->prix;
                                                                        @endphp
                                                                        <div
                                                                            class="grid grid-cols-12 border-t border-[#EEEEEE] px-5 py-4 dark:border-strokedark lg:px-7.5 2xl:px-11">
                                                                            <div class="col-span-3">
                                                                                <p
                                                                                    class="text-[#637381] dark:text-bodydark">
                                                                                    {{ $value->name }}</p>
                                                                            </div>
                                                                            <div class="col-span-3">
                                                                                <p
                                                                                    class="text-[#637381] dark:text-bodydark">
                                                                                    {{ $value->quantite }}</p>
                                                                            </div>
                                                                            <div class="col-span-3">
                                                                                <p
                                                                                    class="text-[#637381] dark:text-bodydark">
                                                                                    {{ $value->prix }}</p>
                                                                            </div>

                                                                            <div class="col-span-3">
                                                                                <p
                                                                                    class="text-[#637381] dark:text-bodydark">
                                                                                    {{ (int) $value->quantite * (int) $value->prix }}
                                                                                </p>
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
                                </td>
                                @php
                                    //dd($conso);
                                @endphp
                                <td>{{ $montant }}</td>
                                <td>
                                    <a href="{{ route('print_recu.vente', $conso->vente->id) }}" class="inline-flex items-center rounded-md bg-meta-1 px-9 py-3 font-medium text-white hover:bg-opacity-90">
                                        <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.3566 4.07803V1.96865C15.3566 1.15303 14.6816 0.478027 13.866 0.478027H4.10664C3.29102 0.478027 2.61602 1.15303 2.61602 1.96865V4.07803C1.82852 4.10615 1.18164 4.75303 1.18164 5.54053V9.59053C1.18164 10.378 1.82852 11.0249 2.61602 11.053V16.0312C2.61602 16.8468 3.29102 17.5218 4.10664 17.5218H13.8941C14.7098 17.5218 15.3848 16.8468 15.3848 16.0312V11.053C16.1723 11.0249 16.8191 10.378 16.8191 9.59053V5.54053C16.791 4.75303 16.1441 4.10615 15.3566 4.07803ZM3.90977 1.96865C3.90977 1.85615 3.99414 1.74365 4.13477 1.74365H13.9223C14.0348 1.74365 14.1473 1.82803 14.1473 1.96865V4.07803H3.90977V1.96865ZM14.091 16.0312C14.091 16.1437 14.0066 16.2562 13.866 16.2562H4.10664C3.99414 16.2562 3.88164 16.1718 3.88164 16.0312V11.053H14.091V16.0312V16.0312ZM15.5254 9.59053C15.5254 9.70303 15.441 9.81553 15.3004 9.81553H2.67227C2.55977 9.81553 2.44727 9.73115 2.44727 9.59053V5.54053C2.44727 5.42803 2.53164 5.31553 2.67227 5.31553H15.3004C15.4129 5.31553 15.5254 5.3999 15.5254 5.54053V9.59053V9.59053Z"
                                                fill="" />
                                            <path
                                                d="M6.89102 13.2186H11.1098C11.4473 13.2186 11.7566 12.9373 11.7566 12.5717C11.7566 12.2061 11.4754 11.9248 11.1098 11.9248H6.89102C6.55352 11.9248 6.24414 12.2061 6.24414 12.5717C6.24414 12.9373 6.55352 13.2186 6.89102 13.2186Z"
                                                fill="" />
                                            <path
                                                d="M14.0629 6.5249H11.9535C11.616 6.5249 11.3066 6.80615 11.3066 7.17178C11.3066 7.5374 11.5879 7.81865 11.9535 7.81865H14.0629C14.4004 7.81865 14.7098 7.5374 14.7098 7.17178C14.7098 6.80615 14.4285 6.5249 14.0629 6.5249Z"
                                                fill="" />
                                            <path
                                                d="M6.89102 15.3562H11.1098C11.4473 15.3562 11.7566 15.075 11.7566 14.7094C11.7566 14.3437 11.4754 14.0625 11.1098 14.0625H6.89102C6.55352 14.0625 6.24414 14.3437 6.24414 14.7094C6.24414 15.075 6.55352 15.3562 6.89102 15.3562Z"
                                                fill="" />
                                        </svg>
                                        Imprimer
                                    </a>
                                </td>


                                <td>
                                    <div x-data="{modalOpen: false}">
                                        <button
                                          @click="modalOpen = true"
                                          class="rounded-md bg-primary px-9 py-3 font-medium text-white"
                                        >
                                          Régler
                                        </button>
                                        <div
                                          x-show="modalOpen"
                                          x-transition
                                          class="fixed left-0 top-0 z-999999 flex h-full min-h-screen w-full items-center justify-center bg-black/90 px-4 py-5"
                                        >
                                          <div
                                            @click.outside="modalOpen = false"
                                            class="w-full max-w-142.5 rounded-lg bg-white px-8 py-12 text-center dark:bg-boxdark md:px-17.5 md:py-15"
                                          >
                                            <h3
                                              class="pb-2 text-xl font-bold text-black dark:text-white sm:text-2xl"
                                            >
                                              Voulez-vous régler cette facture ?
                                            </h3>
                                            <span
                                              class="mx-auto mb-6 inline-block h-1 w-22.5 rounded bg-primary"
                                            ></span>
                                            <p class="mb-10 font-medium"> </p>
                                            <div class="-mx-3 flex flex-wrap gap-y-4">
                                              <div class="w-full px-3 2xsm:w-1/2">
                                                <button
                                                  @click="modalOpen = false"
                                                  class="block w-full rounded border border-stroke bg-gray p-3 text-center font-medium text-black transition hover:border-meta-1 hover:bg-meta-1 hover:text-white dark:border-strokedark dark:bg-meta-4 dark:text-white dark:hover:border-meta-1 dark:hover:bg-meta-1"
                                                >
                                                  Annuler
                                                </button>
                                              </div>
                                              <div class="w-full px-3 2xsm:w-1/2">
                                                <form action="{{route('consommation.payer', $conso->id)}}" method="post">
                                                    @csrf
                                                    <input type="number" value="{{$conso->id}}" name="consommation" hidden readonly>
                                                    <button submit
                                                    class="block w-full rounded border border-primary bg-primary p-3 text-center font-medium text-white transition hover:bg-opacity-90"
                                                    >
                                                    Payer
                                                    </button>
                                                </form>

                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                </td>
                            </tr>

                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
        <!-- ====== Data Table One End consommationsSolde -->
    </div>

    <div class="flex flex-col mt-9 mb-2 gap-y-4 rounded-sm border border-stroke bg-white p-3 shadow-default dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h3 class="text-title-lx font-bold text-black dark:text-white">
                Consommations Payés
            </h3>
        </div>
        <div class="flex flex-col gap-4 2xsm:flex-row 2xsm:items-center"></div>
    </div>

    <div class="flex flex-col gap-5 md:gap-7 2xl:gap-10">
        <!-- ====== Data Table Two Start -->
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="data-table-common data-table-two max-w-full overflow-x-auto">
                <table class="table w-full table-auto" id="dataTableTwo">
                    <thead>
                        <tr>
                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>DATE</p>
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
                                    <p>DÉTAILS REPAS</p>
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
                                    <p>MONTANT <sup style="color: blue">(XOF)</sup></p>
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
                                    <p>FACTURE</p>
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
                        @forelse ($consommationsSolde as $conso)
                            @php
                                // Définir la locale en français
                                setlocale(LC_TIME, 'fr_FR.UTF-8');
                                // Créer une instance DateTime avec la date souhaitée et le fuseau horaire
                                $createdAt = new DateTime($conso->created_at, new DateTimeZone('Africa/Abidjan'));
                                // Utiliser IntlDateFormatter pour formater la date
                                $fmt = new IntlDateFormatter(
                                    'fr_FR',
                                    IntlDateFormatter::FULL,
                                    IntlDateFormatter::NONE,
                                    'Africa/Abidjan',
                                    IntlDateFormatter::GREGORIAN,
                                    'eeee, d MMMM yyyy',
                                );
                                $formattedDate = $fmt->format($createdAt);

                                // Capitaliser la première lettre de chaque mot
                                $formattedDate = mb_convert_case($formattedDate, MB_CASE_TITLE, 'UTF-8');
                                $montant = 0;

                            @endphp

                            <tr>
                                <td>{{ $formattedDate }}</td>
                                <td>
                                    <div x-data="{ popupOpen: false }">
                                        <button @click="popupOpen = true" class="inline-flex items-center rounded-md bg-meta-4 px-9 py-3 font-medium text-white hover:bg-opacity-90">
                                            Voir les plats
                                        </button>

                                        <!-- ===== Task Popup Start ===== -->
                                        <div x-show="popupOpen" x-transition=""
                                            class="fixed left-0 top-0 z-99999 flex h-screen w-full justify-center overflow-y-scroll bg-black/80 px-4 py-5"
                                            style="display: none;">
                                            <div @click.outside="popupOpen = false"
                                                class="relative m-auto w-full max-w-190 rounded-sm border border-stroke bg-gray p-4 shadow-default dark:border-strokedark dark:bg-meta-4 sm:p-8 xl:p-10">
                                                <button @click="popupOpen = false"
                                                    class="absolute right-1 top-1 sm:right-5 sm:top-5">
                                                    <svg class="fill-current" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M11.8913 9.99599L19.5043 2.38635C20.032 1.85888 20.032 1.02306 19.5043 0.495589C18.9768 -0.0317329 18.141 -0.0317329 17.6135 0.495589L10.0001 8.10559L2.38673 0.495589C1.85917 -0.0317329 1.02343 -0.0317329 0.495873 0.495589C-0.0318274 1.02306 -0.0318274 1.85888 0.495873 2.38635L8.10887 9.99599L0.495873 17.6056C-0.0318274 18.1331 -0.0318274 18.9689 0.495873 19.4964C0.717307 19.7177 1.05898 19.9001 1.4413 19.9001C1.75372 19.9001 2.13282 19.7971 2.40606 19.4771L10.0001 11.8864L17.6135 19.4964C17.8349 19.7177 18.1766 19.9001 18.5589 19.9001C18.8724 19.9001 19.2531 19.7964 19.5265 19.4737C20.0319 18.9452 20.0245 18.1256 19.5043 17.6056L11.8913 9.99599Z"
                                                            fill=""></path>
                                                    </svg>
                                                </button>

                                                <div class="flex flex-col mt-6 gap-9">
                                                    <!-- Survey Form -->
                                                    <div
                                                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                                        <!-- ====== Table Five Start -->
                                                        <div class="w-full overflow-x-auto">
                                                            <div class="min-w-[1170px]">

                                                                <!-- table header start -->
                                                                <div
                                                                    class="grid grid-cols-12 rounded-t-[10px] bg-black px-5 py-4 lg:px-7.5 2xl:px-11">
                                                                    <div class="col-span-3">
                                                                        <h5 class="font-medium text-white">Plat</h5>
                                                                    </div>

                                                                    <div class="col-span-3">
                                                                        <h5 class="font-medium text-white">Quantiré</h5>
                                                                    </div>

                                                                    <div class="col-span-3">
                                                                        <h5 class="font-medium text-white">Prix <sup style="color: blue">(XOF)</sup></h5>
                                                                    </div>

                                                                    <div class="col-span-3">
                                                                        <h5 class="font-medium text-white">Montant <sup style="color: blue">(XOF)</sup></h5>
                                                                    </div>

                                                                </div>
                                                                <!-- table header end -->

                                                                <!-- table body start -->
                                                                <div class="bg-white dark:bg-boxdark rounded-b-[10px]">
                                                                    <!-- table row item -->
                                                                    @foreach (json_decode($conso->vente->detail) as $value)
                                                                        @php
                                                                            $montant +=
                                                                                (int) $value->quantite *
                                                                                (int) $value->prix;
                                                                        @endphp
                                                                        <div
                                                                            class="grid grid-cols-12 border-t border-[#EEEEEE] px-5 py-4 dark:border-strokedark lg:px-7.5 2xl:px-11">
                                                                            <div class="col-span-3">
                                                                                <p
                                                                                    class="text-[#637381] dark:text-bodydark">
                                                                                    {{ $value->name }}</p>
                                                                            </div>
                                                                            <div class="col-span-3">
                                                                                <p
                                                                                    class="text-[#637381] dark:text-bodydark">
                                                                                    {{ $value->quantite }}</p>
                                                                            </div>
                                                                            <div class="col-span-3">
                                                                                <p
                                                                                    class="text-[#637381] dark:text-bodydark">
                                                                                    {{ $value->prix }}</p>
                                                                            </div>

                                                                            <div class="col-span-3">
                                                                                <p
                                                                                    class="text-[#637381] dark:text-bodydark">
                                                                                    {{ (int) $value->quantite * (int) $value->prix }}
                                                                                </p>
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
                                </td>
                                @php
                                    //dd($conso);
                                @endphp
                                <td>{{ $montant }}</td>
                                <td>
                                    <a href="{{ route('print_recu.vente', $conso->vente->id) }}" class="inline-flex items-center rounded-md bg-meta-1 px-9 py-3 font-medium text-white hover:bg-opacity-90">
                                        <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.3566 4.07803V1.96865C15.3566 1.15303 14.6816 0.478027 13.866 0.478027H4.10664C3.29102 0.478027 2.61602 1.15303 2.61602 1.96865V4.07803C1.82852 4.10615 1.18164 4.75303 1.18164 5.54053V9.59053C1.18164 10.378 1.82852 11.0249 2.61602 11.053V16.0312C2.61602 16.8468 3.29102 17.5218 4.10664 17.5218H13.8941C14.7098 17.5218 15.3848 16.8468 15.3848 16.0312V11.053C16.1723 11.0249 16.8191 10.378 16.8191 9.59053V5.54053C16.791 4.75303 16.1441 4.10615 15.3566 4.07803ZM3.90977 1.96865C3.90977 1.85615 3.99414 1.74365 4.13477 1.74365H13.9223C14.0348 1.74365 14.1473 1.82803 14.1473 1.96865V4.07803H3.90977V1.96865ZM14.091 16.0312C14.091 16.1437 14.0066 16.2562 13.866 16.2562H4.10664C3.99414 16.2562 3.88164 16.1718 3.88164 16.0312V11.053H14.091V16.0312V16.0312ZM15.5254 9.59053C15.5254 9.70303 15.441 9.81553 15.3004 9.81553H2.67227C2.55977 9.81553 2.44727 9.73115 2.44727 9.59053V5.54053C2.44727 5.42803 2.53164 5.31553 2.67227 5.31553H15.3004C15.4129 5.31553 15.5254 5.3999 15.5254 5.54053V9.59053V9.59053Z"
                                                fill="" />
                                            <path
                                                d="M6.89102 13.2186H11.1098C11.4473 13.2186 11.7566 12.9373 11.7566 12.5717C11.7566 12.2061 11.4754 11.9248 11.1098 11.9248H6.89102C6.55352 11.9248 6.24414 12.2061 6.24414 12.5717C6.24414 12.9373 6.55352 13.2186 6.89102 13.2186Z"
                                                fill="" />
                                            <path
                                                d="M14.0629 6.5249H11.9535C11.616 6.5249 11.3066 6.80615 11.3066 7.17178C11.3066 7.5374 11.5879 7.81865 11.9535 7.81865H14.0629C14.4004 7.81865 14.7098 7.5374 14.7098 7.17178C14.7098 6.80615 14.4285 6.5249 14.0629 6.5249Z"
                                                fill="" />
                                            <path
                                                d="M6.89102 15.3562H11.1098C11.4473 15.3562 11.7566 15.075 11.7566 14.7094C11.7566 14.3437 11.4754 14.0625 11.1098 14.0625H6.89102C6.55352 14.0625 6.24414 14.3437 6.24414 14.7094C6.24414 15.075 6.55352 15.3562 6.89102 15.3562Z"
                                                fill="" />
                                        </svg>
                                        Imprimer
                                    </a>
                                </td>
                            </tr>

                        @empty
                        @endforelse

                    </tbody>

                </table>
            </div>
        </div>
        <!-- ====== Data Table Two End -->
    </div>

@endsection
