@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Rôles Personnalisés
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Tableau de Bord /</a>
                </li>
                <li class="font-medium text-primary">Rôles Personnalisés</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->



    <div class="mt-4 grid grid-cols-12 gap-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5">

        <!-- ====== Map One End -->

        <!-- ====== Table One Start -->
        <div class="col-span-12 xl:col-span-8">

            <!-- ====== Data Table One Start -->
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="data-table-common data-table-one max-w-full overflow-x-auto">
                    <table class="table w-full table-auto" id="dataTableOne">
                        <thead>
                          <tr>
                            <th>
                              <div class="flex items-center gap-1.5">
                                <p>NOM</p>
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
                                      <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                                        fill=""
                                      />
                                    </svg>
                                  </span>
                                </div>
                              </div>
                            </th>
                            <th>
                              <div class="flex items-center gap-1.5">
                                <p>STATUT</p>
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
                                      <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                                        fill=""
                                      />
                                    </svg>
                                  </span>
                                </div>
                              </div>
                            </th>
                            <th data-type="date" data-format="YYYY/DD/MM">
                              <div class="flex items-center gap-1.5">
                                <p>ETAT</p>
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
                                      <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                                        fill=""
                                      />
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
                                      <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
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
                            @foreach ($allRoles as $key => $indix)
                                <tr>
                                    <td>{{$indix->name}}</td>

                                    <td>{{$indix->etat}}</td>
                                    <td>{{$indix->status}}</td>
                                    <td>
                                        <div class="col-span-1 relative">
                                            <div x-data="{ isOpen: false }">
                                                <button @click.prevent="isOpen = !isOpen"
                                                    class="float-right inline-flex items-center gap-1.5 rounded-md px-3 py-1.5 text-sm text-black shadow-11 hover:text-primary dark:bg-meta-4 dark:text-white dark:shadow-none">
                                                    Action
                                                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M8.00039 11.4C7.85039 11.4 7.72539 11.35 7.60039 11.25L1.85039 5.60005C1.62539 5.37505 1.62539 5.02505 1.85039 4.80005C2.07539 4.57505 2.42539 4.57505 2.65039 4.80005L8.00039 10.025L13.3504 4.75005C13.5754 4.52505 13.9254 4.52505 14.1504 4.75005C14.3754 4.97505 14.3754 5.32505 14.1504 5.55005L8.40039 11.2C8.27539 11.325 8.15039 11.4 8.00039 11.4Z"
                                                            fill="" />
                                                    </svg>
                                                </button>

                                                <div @click.outside="isOpen = false" x-show="isOpen"
                                                    class="absolute right-0 top-full z-1 mt-1 w-full max-w-39.5 rounded-[5px] bg-white py-2.5 shadow-12 dark:bg-boxdark">
                                                    <a href=""
                                                        class="flex w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                                        {{ $indix->status == 'ACTIF' ? 'Désactiver' : 'Activer' }}
                                                    </a>
                                                    <a href="#"
                                                        class="flex w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">Delete
                                                    </a>
                                                    <a href="#"
                                                        class="flex w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">Suppression
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                      </table>
                </div>
            </div>
            <!-- ====== Data Table One End -->

        </div>
        <!-- ====== Table One End -->

        <!-- ====== Chat Card Start -->
        <div
            class="col-span-12 rounded-sm border border-stroke bg-white py-6 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4">
            <h4 class="mb-6 px-7.5 text-xl font-bold text-black dark:text-white">
                Personnels en Activité
            </h4>

            <div>
                @foreach ($fetchServers as $key => $indix)
                    <a href="messages.html" class="flex items-center gap-5 px-7.5 py-3 hover:bg-gray-3 dark:hover:bg-meta-4">
                        <div class="relative h-14 w-14 rounded-full">
                            <img src="src/images/user/user-03.png" alt="User">
                            <span class="absolute bottom-0 right-0 h-3.5 w-3.5 rounded-full border-2 border-white bg-meta-{{$indix->etat === "ACTIF" ? 3 : 1 }}"></span>
                        </div>

                        <div class="flex flex-1 items-center justify-between">
                            <div>
                                <h5 class="font-medium text-black dark:text-white">
                                    {{$indix->fullname}}
                                </h5>
                                <p>
                                    <span class="text-sm font-medium text-black dark:text-white">Je suis {{$indix->role->name}}</span>
                                    <span class="text-xs">  {{$indix->date_prise_de_fonction}}</span> ||
                                    <span class="text-xs">  {{$indix->date_prise_de_fonction}}</span>
                                </p>
                            </div>
                            <div class="flex h-6 w-6 items-center justify-center rounded-full bg-primary">
                                <span class="text-sm font-medium text-white">3</span>
                            </div>
                        </div>
                    </a>

                @endforeach
            </div>
        </div>
        <!-- ====== Chat Card End -->
    </div>
@endsection
