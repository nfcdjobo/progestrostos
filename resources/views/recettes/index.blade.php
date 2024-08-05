@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white"> Contenus Repas </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Tableau de Bord /</a>
                </li>
                <li class="font-medium text-primary">Contenus Repas</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <div class="grid grid-cols-12 gap-4 md:gap-6 2xl:gap-7.5">
        <!-- ====== Chart Four Start -->
        <div class="col-span-12 flex flex-wrap items-center justify-between gap-3">
            <!-- Datepicker built with flatpickr -->
            <div class="relative">
                <input
                    class="datepicker w-[120%] rounded border border-stroke bg-white py-2 pl-10 pr-4 text-sm font-medium shadow-card-2 focus-visible:outline-none dark:border-strokedark dark:bg-boxdark"
                    placeholder="Select dates" data-class="flatpickr-right" />
                <div class="pointer-events-none absolute inset-0 left-4 right-auto flex items-center">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.75 3.75C3.33579 3.75 3 4.08579 3 4.5V15C3 15.4142 3.33579 15.75 3.75 15.75H14.25C14.6642 15.75 15 15.4142 15 15V4.5C15 4.08579 14.6642 3.75 14.25 3.75H3.75ZM1.5 4.5C1.5 3.25736 2.50736 2.25 3.75 2.25H14.25C15.4926 2.25 16.5 3.25736 16.5 4.5V15C16.5 16.2426 15.4926 17.25 14.25 17.25H3.75C2.50736 17.25 1.5 16.2426 1.5 15V4.5Z"
                            fill="#64748B" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12 0.75C12.4142 0.75 12.75 1.08579 12.75 1.5V4.5C12.75 4.91421 12.4142 5.25 12 5.25C11.5858 5.25 11.25 4.91421 11.25 4.5V1.5C11.25 1.08579 11.5858 0.75 12 0.75Z"
                            fill="#64748B" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6 0.75C6.41421 0.75 6.75 1.08579 6.75 1.5V4.5C6.75 4.91421 6.41421 5.25 6 5.25C5.58579 5.25 5.25 4.91421 5.25 4.5V1.5C5.25 1.08579 5.58579 0.75 6 0.75Z"
                            fill="#64748B" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.5 7.5C1.5 7.08579 1.83579 6.75 2.25 6.75H15.75C16.1642 6.75 16.5 7.08579 16.5 7.5C16.5 7.91422 16.1642 8.25 15.75 8.25H2.25C1.83579 8.25 1.5 7.91422 1.5 7.5Z"
                            fill="#64748B" />
                    </svg>
                </div>
            </div>
            <div class="relative z-20 inline-block rounded bg-white shadow-card-2 dark:bg-boxdark">
                <select name="" id=""
                    class="relative z-20 inline-flex appearance-none rounded border border-stroke bg-transparent py-2 pl-4 pr-9 text-sm outline-none dark:border-strokedark">
                    <option value="">Annuel</option>
                    <option value="">Mensuel</option>
                    <option value="">Quotidient</option>
                </select>
                <span class="absolute right-3 top-1/2 z-10 -translate-y-1/2">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M3.96967 6.21967C4.26256 5.92678 4.73744 5.92678 5.03033 6.21967L9 10.1893L12.9697 6.21967C13.2626 5.92678 13.7374 5.92678 14.0303 6.21967C14.3232 6.51256 14.3232 6.98744 14.0303 7.28033L9.53033 11.7803C9.23744 12.0732 8.76256 12.0732 8.46967 11.7803L3.96967 7.28033C3.67678 6.98744 3.67678 6.51256 3.96967 6.21967Z"
                            fill="#64748B" />
                    </svg>
                </span>
            </div>
        </div>

        <!-- ====== Chart Three Start -->
        <div
            class="col-span-12 rounded-sm border border-stroke bg-white px-5 pb-5 pt-7.5 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5 xl:col-span-5">
            <div class="mb-3 justify-between gap-4 sm:flex">
                <div>
                    <h4 class="text-xl font-bold text-black dark:text-white">
                        Statistique des Repas
                    </h4>
                </div>
                <div>
                    <div class="relative z-20 inline-block">
                        <select name="" id=""
                            class="relative z-20 inline-flex appearance-none bg-transparent py-1 pl-3 pr-8 text-sm font-medium outline-none">
                            <option value="">Mensuelle</option>
                            <option value="">Annuelle</option>
                        </select>
                        <span class="absolute right-3 top-1/2 z-10 -translate-y-1/2">
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.47072 1.08816C0.47072 1.02932 0.500141 0.955772 0.54427 0.911642C0.647241 0.808672 0.809051 0.808672 0.912022 0.896932L4.85431 4.60386C4.92785 4.67741 5.06025 4.67741 5.14851 4.60386L9.09079 0.896932C9.19376 0.793962 9.35557 0.808672 9.45854 0.911642C9.56151 1.01461 9.5468 1.17642 9.44383 1.27939L5.50155 4.98632C5.22206 5.23639 4.78076 5.23639 4.51598 4.98632L0.558981 1.27939C0.50014 1.22055 0.47072 1.16171 0.47072 1.08816Z"
                                    fill="#637381" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.22659 0.546578L5.00141 4.09604L8.76422 0.557869C9.08459 0.244537 9.54201 0.329403 9.79139 0.578788C10.112 0.899434 10.0277 1.36122 9.77668 1.61224L9.76644 1.62248L5.81552 5.33722C5.36257 5.74249 4.6445 5.7544 4.19352 5.32924C4.19327 5.32901 4.19377 5.32948 4.19352 5.32924L0.225953 1.61241C0.102762 1.48922 -4.20186e-08 1.31674 -3.20269e-08 1.08816C-2.40601e-08 0.905899 0.0780105 0.712197 0.211421 0.578787C0.494701 0.295506 0.935574 0.297138 1.21836 0.539529L1.22659 0.546578ZM4.51598 4.98632C4.78076 5.23639 5.22206 5.23639 5.50155 4.98632L9.44383 1.27939C9.5468 1.17642 9.56151 1.01461 9.45854 0.911642C9.35557 0.808672 9.19376 0.793962 9.09079 0.896932L5.14851 4.60386C5.06025 4.67741 4.92785 4.67741 4.85431 4.60386L0.912022 0.896932C0.809051 0.808672 0.647241 0.808672 0.54427 0.911642C0.500141 0.955772 0.47072 1.02932 0.47072 1.08816C0.47072 1.16171 0.50014 1.22055 0.558981 1.27939L4.51598 4.98632Z"
                                    fill="#637381" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
            <div class="mb-2">
                <canvas id="visitorsChart" class="mx-auto flex justify-center"></canvas>
            </div>
            <div class="-mx-8 flex flex-wrap items-center justify-center gap-y-3">
                <div class="w-full px-8 sm:w-1/2">
                    <div class="flex w-full items-center">
                        <span class="mr-2 block h-3 w-full max-w-3 rounded-full" id="span-{{ $repas[0]->id }}"></span>
                        <p class="flex w-full justify-between text-sm font-medium text-black dark:text-white">
                            <span> {{ $repas[0]->name }} </span>
                            <span id="percent-{{ $repas[0]->id }}"> 0% </span>
                        </p>
                    </div>
                </div>
                <div class="w-full px-8 sm:w-1/2">
                    <div class="flex w-full items-center">
                        <span class="mr-2 block h-3 w-full max-w-3 rounded-full" id="span-{{ $repas[1]->id }}"></span>
                        <p class="flex w-full justify-between text-sm font-medium text-black dark:text-white">
                            <span> {{ $repas[1]->name }} </span>
                            <span id="percent-{{ $repas[1]->id }}"> 0% </span>
                        </p>
                    </div>
                </div>
                <div class="w-full px-8 sm:w-1/2">
                    <div class="flex w-full items-center">
                        <span class="mr-2 block h-3 w-full max-w-3 rounded-full" id="span-{{ $repas[2]->id }}"></span>
                        <p class="flex w-full justify-between text-sm font-medium text-black dark:text-white">
                            <span> {{ $repas[2]->name }} </span>
                            <span id="percent-{{ $repas[2]->id }}"> 0% </span>
                        </p>
                    </div>
                </div>
                <div class="w-full px-8 sm:w-1/2">
                    <div class="flex w-full items-center">
                        <span class="mr-2 block h-3 w-full max-w-3 rounded-full" id="span-{{ $repas[3]->id }}"></span>
                        <p class="flex w-full justify-between text-sm font-medium text-black dark:text-white">
                            <span> {{ $repas[3]->name }} </span>
                            <span id="percent-{{ $repas[3]->id }}"> 0% </span>
                        </p>
                    </div>
                </div>

                <div class="w-full px-8 sm:w-1/2">
                    <div class="flex w-full items-center">
                        <span class="mr-2 block h-3 w-full max-w-3 rounded-full " id="span-{{ $repas[4]->id}}"></span>
                        <p class="flex w-full justify-between text-sm font-medium text-black dark:text-white">
                            <span> {{ $repas[4]->name }} </span>
                            <span id="percent-{{ $repas[4]->id }}"> 0% </span>
                        </p>
                    </div>
                </div>
                <div class="w-full px-8 sm:w-1/2">
                    <div class="flex w-full items-center">
                        {{-- <span class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#0FADCF]"></span> --}}
                        <p class="flex w-full justify-between text-sm font-medium text-black dark:text-white">
                            <span>  </span>
                            <span>  </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <script>



            setTimeout(() => {

                const vip = {!! json_encode($vip) !!};
                const repas = {!! json_encode($repas) !!};
                const menus = {!! json_encode($menus) !!};
                const passMenus = {!! json_encode($passMenus) !!};

                const data = {};
                const dataPasse = {};
                data["PETIT DEJEUNE AFRICAIN"] = 0;
                data["PETIT DEJEUNER OCCIDENTAL"] = 0;
                data["DEJEUNER"] = 0;
                data["DOUTER"] = 0;
                data["DINER"] = 0;

                dataPasse["PETIT DEJEUNE AFRICAIN"] = 0;
                dataPasse["PETIT DEJEUNER OCCIDENTAL"] = 0;
                dataPasse["DEJEUNER"] = 0;
                dataPasse["DOUTER"] = 0;
                dataPasse["DINER"] = 0;

                passMenus.forEach(element => {
                    JSON.parse(element.details).forEach(item => {
                        if(element.repas.id === 1){
                            data["PETIT DEJEUNE AFRICAIN"] += item.prix_unitaire;
                        }else if(element.repas.id === 2){
                            data["PETIT DEJEUNER OCCIDENTAL"] += item.prix_unitaire;
                        }else if(element.repas.id === 3){
                            data["DEJEUNER"] += item.prix_unitaire;
                        }else if(element.repas.id === 4){
                            data["DOUTER"] += item.prix_unitaire;
                        }else if(element.repas.id === 5){
                            data["DINER"] += item.prix_unitaire;
                        }
                    })

                });

                let somme = 0;
                for (const key in data) {
                    somme += data[key];

                }


                document.getElementById("span-1").style.border = '1px solid rgba(255, 99, 132, 1)';
                document.getElementById("span-2").style.border = '1px solid rgba(54, 162, 235, 1)';
                document.getElementById("span-3").style.border = '1px solid rgba(255, 206, 86, 1)';
                document.getElementById("span-4").style.border = '1px solid rgba(75, 192, 192, 1)';
                document.getElementById("span-5").style.border = '1px solid rgba(75, 150, 200, 1)';



                document.getElementById("span-1").style.backgroundColor = 'rgba(255, 99, 132, 0.2)';
                document.getElementById("span-2").style.backgroundColor = 'rgba(54, 162, 235, 0.2)';

                document.getElementById("span-3").style.backgroundColor = 'rgba(255, 206, 86, 0.2)';
                document.getElementById("span-4").style.backgroundColor = 'rgba(75, 192, 192, 0.2)';
                document.getElementById("span-5").style.backgroundColor = 'rgba(75, 150, 200, 0.2)';

                document.getElementById("percent-1").textContent = (Math.round(data["PETIT DEJEUNE AFRICAIN"] * 100 / somme)) + ' %';
                document.getElementById("percent-2").textContent = (Math.round(data["PETIT DEJEUNER OCCIDENTAL"] * 100 / somme)) + ' %';
                document.getElementById("percent-3").textContent = (Math.round(data["DEJEUNER"] * 100 / somme)) + ' %';
                document.getElementById("percent-4").textContent = (Math.round(data["DOUTER"] * 100 / somme)) + ' %';
                document.getElementById("percent-5").textContent = (Math.round(data["DINER"] * 100 / somme)) + ' %';

                const ctx = document.getElementById('visitorsChart').getContext('2d');
                const visitorsChart = new Chart(ctx, {
                    type: 'doughnut', // Changer le type de graphique en 'doughnut' pour un graphique en anneau
                    data: {
                        labels: Object.keys(data),
                        datasets: [{
                            label: 'Visitors Analytics',
                            data: Object.values(data),
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(75, 150, 200, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(75, 150, 200, 1)'
                            ],
                            borderWidth: 1
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
                                    label: function(tooltipItem) {
                                        return tooltipItem.label + ': ' + tooltipItem.raw.toLocaleString();
                                    }
                                }
                            }
                        }
                    }
                });
            }, 500);

            const printici = () => {
                windows.print()
            };
        </script>

        <!-- ====== Chart Three End -->

        <!-- ====== Table Two Start -->
        <div class="col-span-12 xl:col-span-7">
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="px-4 py-6 md:px-6 xl:px-7.5">
                    <h4 class="text-xl font-bold text-black dark:text-white">
                        CONTENU DU JOUR
                    </h4>
                </div>

                <!-- ====== Data Table Two Start -->
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="data-table-common data-table-two max-w-full overflow-x-auto">
                        <table class="table w-full table-auto" id="dataTableTwo">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="flex items-center justify-between gap-1.5">
                                            <p>REPAS</p>
                                            <div class="inline-flex flex-col space-y-[2px]">
                                                <span class="inline-block">
                                                    <svg class="fill-current" width="10" height="5"
                                                        viewBox="0 0 10 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 0L0 5H10L5 0Z" fill="" />
                                                    </svg>
                                                </span>
                                                <span class="inline-block">
                                                    <svg class="fill-current" width="10" height="5"
                                                        viewBox="0 0 10 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="flex items-center justify-between gap-1.5">
                                            <p>DÉTAILS</p>
                                            <div class="inline-flex flex-col space-y-[2px]">
                                                <span class="inline-block">
                                                    <svg class="fill-current" width="10" height="5"
                                                        viewBox="0 0 10 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 0L0 5H10L5 0Z" fill="" />
                                                    </svg>
                                                </span>
                                                <span class="inline-block">
                                                    <svg class="fill-current" width="10" height="5"
                                                        viewBox="0 0 10 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="flex items-center justify-between gap-1.5">
                                            <p>RÉFÉRENCE</p>
                                            <div class="inline-flex flex-col space-y-[2px]">
                                                <span class="inline-block">
                                                    <svg class="fill-current" width="10" height="5"
                                                        viewBox="0 0 10 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 0L0 5H10L5 0Z" fill="" />
                                                    </svg>
                                                </span>
                                                <span class="inline-block">
                                                    <svg class="fill-current" width="10" height="5"
                                                        viewBox="0 0 10 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </th>

                                    <th data-type="date" data-format="YYYY/DD/MM">
                                        <div class="flex items-center justify-between gap-1.5">
                                            <p>DATE</p>
                                            <div class="inline-flex flex-col space-y-[2px]">
                                                <span class="inline-block">
                                                    <svg class="fill-current" width="10" height="5"
                                                        viewBox="0 0 10 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 0L0 5H10L5 0Z" fill="" />
                                                    </svg>
                                                </span>
                                                <span class="inline-block">
                                                    <svg class="fill-current" width="10" height="5"
                                                        viewBox="0 0 10 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </th>
                                    <th>
                                        <div class="flex items-center justify-between gap-1.5">
                                            <p>IMPRESSION</p>
                                            <div class="inline-flex flex-col space-y-[2px]">
                                                <span class="inline-block">
                                                    <svg class="fill-current" width="10" height="5"
                                                        viewBox="0 0 10 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 0L0 5H10L5 0Z" fill="" />
                                                    </svg>
                                                </span>
                                                <span class="inline-block">
                                                    <svg class="fill-current" width="10" height="5"
                                                        viewBox="0 0 10 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($menus as $value)
                                    <tr>
                                        <td>{{ $value->repas->name }}</td>
                                        <?php
                                            // Décoder les détails JSON
                                            $details = json_decode($value->details, true);
                                            $reference = json_decode($value->reference, true);
                                        ?>
                                        <td>
                                            @if (is_array($details))
                                                <div x-data="{ popupOpen: false }">
                                                    <button @click="popupOpen = true" class="flex items-center gap-2 rounded bg-primary px-4.5 py-2 font-medium text-white hover:bg-opacity-80">
                                                        Détails
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
                                                                        <div class="grid grid-cols-12 rounded-t-[10px] bg-primary px-5 py-4 lg:px-7.5 2xl:px-11">
                                                                            <div class="col-span-3">
                                                                                <h5 class="font-medium text-white">PLAT</h5>
                                                                            </div>

                                                                            <div class="col-span-3">
                                                                                <h5 class="font-medium text-white">PRIX <sup style="color: blue">(XOF)</sup></h5>
                                                                            </div>

                                                                            <div class="col-span-3">
                                                                                <h5 class="font-medium text-white">DATE</h5>
                                                                            </div>
                                                                        </div>
                                                                        <!-- table header end -->

                                                                        <!-- table body start -->
                                                                        <div class="bg-white dark:bg-boxdark rounded-b-[10px]">
                                                                            @foreach ($details as $detail)
                                                                                <!-- table row item -->
                                                                                <div class="grid grid-cols-12 border-t border-[#EEEEEE] px-5 py-4 dark:border-strokedark lg:px-7.5 2xl:px-11">
                                                                                    <div class="col-span-3">
                                                                                        <p class="text-[#637381] dark:text-bodydark">{{ $detail['plat_name'] }}</p>
                                                                                    </div>

                                                                                    <div class="col-span-3">
                                                                                        <p class="text-[#637381] dark:text-bodydark">{{ $detail['prix_unitaire'] }}</p>
                                                                                    </div>

                                                                                    <div class="col-span-3">

                                                                                        <?php
                                                                                            // Définir la locale en français
                                                                                            setlocale(LC_TIME, 'fr_FR.UTF-8');

                                                                                            // Créer une instance de DateTime avec la date donnée
                                                                                            $date = new DateTime($detail['prix_unitaire']);

                                                                                            // Formater la date en français
                                                                                            $date_fr = strftime('%A %d %B %Y', $date->getTimestamp());

                                                                                            // Convertir en UTF-8 si nécessaire
                                                                                            $date_fr = utf8_encode($date_fr);

                                                                                            // Mettre la première lettre de chaque mot en majuscule
                                                                                            $date_fr = ucwords($date_fr);

                                                                                            // Corriger les caractères accentués
                                                                                            $date_fr = utf8_decode($date_fr);
                                                                                        ?>


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
                                        <td>{{ $reference }}</td>
                                        <td>{{ $value->date }}</td>
                                        <td>
                                            <div class="flex flex-wrap items-center justify-end gap-3.5">
                                                <a href="{{ route('generatePDF.menu', $value->id) }}"
                                                    class="inline-flex items-center gap-2.5 rounded bg-meta-3 px-4 py-[7px] font-medium text-white hover:bg-opacity-90">
                                                    <svg class="fill-current" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.3566 4.07803V1.96865C15.3566 1.15303 14.6816 0.478027 13.866 0.478027H4.10664C3.29102 0.478027 2.61602 1.15303 2.61602 1.96865V4.07803C1.82852 4.10615 1.18164 4.75303 1.18164 5.54053V9.59053C1.18164 10.378 1.82852 11.0249 2.61602 11.053V16.0312C2.61602 16.8468 3.29102 17.5218 4.10664 17.5218H13.8941C14.7098 17.5218 15.3848 16.8468 15.3848 16.0312V11.053C16.1723 11.0249 16.8191 10.378 16.8191 9.59053V5.54053C16.791 4.75303 16.1441 4.10615 15.3566 4.07803ZM3.90977 1.96865C3.90977 1.85615 3.99414 1.74365 4.13477 1.74365H13.9223C14.0348 1.74365 14.1473 1.82803 14.1473 1.96865V4.07803H3.90977V1.96865ZM14.091 16.0312C14.091 16.1437 14.0066 16.2562 13.866 16.2562H4.10664C3.99414 16.2562 3.88164 16.1718 3.88164 16.0312V11.053H14.091V16.0312V16.0312ZM15.5254 9.59053C15.5254 9.70303 15.441 9.81553 15.3004 9.81553H2.67227C2.55977 9.81553 2.44727 9.73115 2.44727 9.59053V5.54053C2.44727 5.42803 2.53164 5.31553 2.67227 5.31553H15.3004C15.4129 5.31553 15.5254 5.3999 15.5254 5.54053V9.59053V9.59053Z"
                                                            fill=""></path>
                                                        <path
                                                            d="M6.89102 13.2186H11.1098C11.4473 13.2186 11.7566 12.9373 11.7566 12.5717C11.7566 12.2061 11.4754 11.9248 11.1098 11.9248H6.89102C6.55352 11.9248 6.24414 12.2061 6.24414 12.5717C6.24414 12.9373 6.55352 13.2186 6.89102 13.2186Z"
                                                            fill=""></path>
                                                        <path
                                                            d="M14.0629 6.5249H11.9535C11.616 6.5249 11.3066 6.80615 11.3066 7.17178C11.3066 7.5374 11.5879 7.81865 11.9535 7.81865H14.0629C14.4004 7.81865 14.7098 7.5374 14.7098 7.17178C14.7098 6.80615 14.4285 6.5249 14.0629 6.5249Z"
                                                            fill=""></path>
                                                        <path
                                                            d="M6.89102 15.3562H11.1098C11.4473 15.3562 11.7566 15.075 11.7566 14.7094C11.7566 14.3437 11.4754 14.0625 11.1098 14.0625H6.89102C6.55352 14.0625 6.24414 14.3437 6.24414 14.7094C6.24414 15.075 6.55352 15.3562 6.89102 15.3562Z"
                                                            fill=""></path>
                                                    </svg>
                                                    PDF
                                                </a>
                                            </div>
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
        </div>
        <!-- ====== Table Two End -->
    </div>


    <div class="grid mt-6 grid-cols-1 gap-9 sm:grid-cols-1" id="form_for_menus">
        <div class="flex flex-col gap-9">
            <!-- Contact Form -->
            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">

                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                    <div class="flex flex-col rounded-sm  bg-white p-3  dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
                        <div>
                            <div href="#" class="flex items-center cursor-pointer gap-2 rounded bg-[#212B36] px-4.5 py-2 font-medium text-white hover:bg-opacity-80" id="toggle_button">
                                Voir la Liste des Menus
                            </div>
                        </div>

                        <div class="flex flex-col gap-4 2xsm:flex-row 2xsm:items-center">
                            <button type="submit" class="flex items-center gap-2 rounded bg-primary px-4.5 py-2 font-medium text-white hover:bg-opacity-80" id="btn-submited1">
                                Sauvégarder le nenu
                            </button>
                        </div>
                    </div>
                </div>

                {{-- <form action="{{route('create.menu')}}" id="data_formulare" method="post">
                    <input type="hidden" name="_token" value="7TdIE7hewhzjCBpEMRR4zeQbBuUIMSMpgzLGWEeq" autocomplete="off">                    <div class="p-6.5" id="in_the_div">
                        <div class="flex flex-col mb-6 border-b-2 border-primary pb-6 gap-6 rounded-sm bg-white dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
                            <div class="w-full xl:w-1/2">
                                <label for="repas_id" class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Repas </label>
                                <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent dark:bg-form-input">
                                    <select required="" id="repas_id" name="repas_id" class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" :class="isOptionSelected &amp; amp; &amp; amp; 'text-black dark:text-white'" @change="isOptionSelected = true">
                                        <option value="" class="text-body" selected="" disabled="">Choisir un repas </option>
                                        @foreach ($repas as $value)
                                            <option value="{{$value->id}}" class="text-body">{{$value->name}}</option>
                                        @endforeach
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

                        <div class="w-full xl:w-1/2">
                            <label for="date" class="mb-3 block text-sm font-medium text-black dark:text-white"> Date prévue </label>
                            <input type="date" required="" id="date" name="date" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>

                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row form_group_input" id="form_group_input_1">
                        <div class="w-full xl:w-1/2">
                            <label for="libelle_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Nom du Plat </label>
                            <input type="text" id="libelle_1" name="libelle_1" required="" placeholder="Libelle produit" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>


                        <div class="w-full xl:w-1/2">
                            <label for="prix_unitaire_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Prix Unitaire <sup style="color: blue"> (XOF)</sup></label>
                            <input type="number" min="1" required="" id="prix_unitaire_1" name="prix_unitaire_1" placeholder="Entrer le prix unitaire" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>

                    </div>
                        <div class="flex flex-col mb-6 border-b border-gray-300 pb-6 rounded-sm bg-white dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between delete_form" id="delete_form_1">
                        <button type="button" class="text-meta-1 hover:text-primary btn-deleted" id="btn-delete-form_1">
                            <svg class="mx-auto fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.8094 3.02498H14.1625V2.4406C14.1625 1.40935 13.3375 0.584351 12.3062 0.584351H9.65935C8.6281 0.584351 7.8031 1.40935 7.8031 2.4406V3.02498H5.15623C4.15935 3.02498 3.33435 3.84998 3.33435 4.84685V5.8781C3.33435 6.63435 3.78123 7.2531 4.43435 7.5281L4.98435 18.9062C5.0531 20.3156 6.22185 21.4156 7.63123 21.4156H14.3C15.7093 21.4156 16.8781 20.3156 16.9469 18.9062L17.5312 7.49372C18.1844 7.21872 18.6312 6.5656 18.6312 5.84373V4.81248C18.6312 3.84998 17.8062 3.02498 16.8094 3.02498ZM9.38435 2.4406C9.38435 2.26873 9.52185 2.13123 9.69373 2.13123H12.3406C12.5125 2.13123 12.65 2.26873 12.65 2.4406V3.02498H9.41873V2.4406H9.38435ZM4.9156 4.84685C4.9156 4.70935 5.01873 4.57185 5.1906 4.57185H16.8094C16.9469 4.57185 17.0844 4.67498 17.0844 4.84685V5.8781C17.0844 6.0156 16.9812 6.1531 16.8094 6.1531H5.1906C5.0531 6.1531 4.9156 6.04998 4.9156 5.8781V4.84685V4.84685ZM14.3344 19.8687H7.6656C7.08123 19.8687 6.59998 19.4218 6.5656 18.8031L6.04998 7.6656H15.9844L15.4687 18.8031C15.4 19.3875 14.9187 19.8687 14.3344 19.8687Z" fill=""></path>
                                <path d="M11 11.1375C10.5875 11.1375 10.2094 11.4812 10.2094 11.9281V16.2937C10.2094 16.7062 10.5531 17.0843 11 17.0843C11.4125 17.0843 11.7906 16.7406 11.7906 16.2937V11.9281C11.7906 11.4812 11.4125 11.1375 11 11.1375Z" fill=""></path>
                                <path d="M13.7499 11.825C13.303 11.7906 12.9593 12.1 12.9249 12.5469L12.7187 15.5719C12.6843 15.9844 12.9937 16.3625 13.4405 16.3969C13.4749 16.3969 13.4749 16.3969 13.5093 16.3969C13.9218 16.3969 14.2655 16.0875 14.2655 15.675L14.4718 12.65C14.4718 12.2031 14.1624 11.8594 13.7499 11.825Z" fill=""></path>
                                <path d="M8.21558 11.825C7.80308 11.8594 7.45933 12.2375 7.49371 12.65L7.73433 15.675C7.76871 16.0875 8.11246 16.3969 8.49058 16.3969C8.52496 16.3969 8.52496 16.3969 8.55933 16.3969C8.97183 16.3625 9.31558 15.9844 9.28121 15.5719L9.04058 12.5469C9.04058 12.1 8.66246 11.7906 8.21558 11.825Z" fill=""></path>
                            </svg>
                        </button>
                    </div>


                    <div class="flex justify-between">
                        <button type="button" class="flex items-center gap-2 rounded bg-success px-4.5 py-2 font-medium text-gray hover:bg-opacity-90" id="dynamicButton">
                            Ajouter un autre plat
                        </button>

                        <button type="submit" class="flex items-center gap-2 rounded bg-primary px-4.5 py-2 font-medium text-white hover:bg-opacity-80" id="btn-submited2">
                            Sauvégarder
                        </button>
                    </div>




                </div> --}}


                <form action="{{route('create.menu')}}" id="data_formulare" method="POST">
                    @csrf
                    <div class="p-6.5" id="in_the_div">
                        <div class="flex flex-col mb-6 border-b-2 border-primary pb-6 gap-6 rounded-sm bg-white dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
                            <div class="w-full xl:w-1/2">
                                <label for="repas_id" class="mb-3 block text-sm font-medium text-black dark:text-white">
                                    Repas </label>
                                <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent dark:bg-form-input">


                                    <select required="" id="repas_id" name="repas_id" class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" :class="isOptionSelected &amp; amp; &amp; amp; 'text-black dark:text-white'" @change="isOptionSelected = true">
                                        <option value="" class="text-body" selected="" disabled="">Choisir un repas </option>
                                        @foreach ($repas as $value)
                                            <option value="{{$value->id}}" class="text-body">{{$value->name}}</option>
                                        @endforeach
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

                        <div class="w-full xl:w-1/2">
                            <label for="date" class="mb-3 block text-sm font-medium text-black dark:text-white"> Prévu pour </label>
                            <input type="date" required value="{{ now()->format('M d, Y') }}" id="date" name="date" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>

                    </div>
                    <div class="mb-4.5 flex flex-col gap-6 xl:flex-row form_group_input" id="form_group_input_1">
                        <div class="w-full xl:w-1/2">
                            <label for="libelle_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Nom du Plat </label>
                            <input type="text" id="libelle_1" name="libelle_1" required="" placeholder="Libelle produit" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>

                        <div class="w-full xl:w-1/2">
                            <label for="prix_unitaire_1" class="mb-3 block text-sm font-medium text-black dark:text-white"> Prix Unitaire<sup style="color: blue;">(XOF)</sup></label>
                            <input type="number" min="1" id="prix_unitaire_1" name="prix_unitaire_1" required="" placeholder="Entrer prix max " class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                        </div>

                    </div>
                        <div class="flex flex-col mb-6 border-b border-gray-300 pb-6 rounded-sm bg-white dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between delete_form" id="delete_form_1">
                        <button type="button" class="text-meta-1 hover:text-primary btn-deleted" id="btn-delete-form_1">
                            <svg class="mx-auto fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.8094 3.02498H14.1625V2.4406C14.1625 1.40935 13.3375 0.584351 12.3062 0.584351H9.65935C8.6281 0.584351 7.8031 1.40935 7.8031 2.4406V3.02498H5.15623C4.15935 3.02498 3.33435 3.84998 3.33435 4.84685V5.8781C3.33435 6.63435 3.78123 7.2531 4.43435 7.5281L4.98435 18.9062C5.0531 20.3156 6.22185 21.4156 7.63123 21.4156H14.3C15.7093 21.4156 16.8781 20.3156 16.9469 18.9062L17.5312 7.49372C18.1844 7.21872 18.6312 6.5656 18.6312 5.84373V4.81248C18.6312 3.84998 17.8062 3.02498 16.8094 3.02498ZM9.38435 2.4406C9.38435 2.26873 9.52185 2.13123 9.69373 2.13123H12.3406C12.5125 2.13123 12.65 2.26873 12.65 2.4406V3.02498H9.41873V2.4406H9.38435ZM4.9156 4.84685C4.9156 4.70935 5.01873 4.57185 5.1906 4.57185H16.8094C16.9469 4.57185 17.0844 4.67498 17.0844 4.84685V5.8781C17.0844 6.0156 16.9812 6.1531 16.8094 6.1531H5.1906C5.0531 6.1531 4.9156 6.04998 4.9156 5.8781V4.84685V4.84685ZM14.3344 19.8687H7.6656C7.08123 19.8687 6.59998 19.4218 6.5656 18.8031L6.04998 7.6656H15.9844L15.4687 18.8031C15.4 19.3875 14.9187 19.8687 14.3344 19.8687Z" fill=""></path>
                                <path d="M11 11.1375C10.5875 11.1375 10.2094 11.4812 10.2094 11.9281V16.2937C10.2094 16.7062 10.5531 17.0843 11 17.0843C11.4125 17.0843 11.7906 16.7406 11.7906 16.2937V11.9281C11.7906 11.4812 11.4125 11.1375 11 11.1375Z" fill=""></path>
                                <path d="M13.7499 11.825C13.303 11.7906 12.9593 12.1 12.9249 12.5469L12.7187 15.5719C12.6843 15.9844 12.9937 16.3625 13.4405 16.3969C13.4749 16.3969 13.4749 16.3969 13.5093 16.3969C13.9218 16.3969 14.2655 16.0875 14.2655 15.675L14.4718 12.65C14.4718 12.2031 14.1624 11.8594 13.7499 11.825Z" fill=""></path>
                                <path d="M8.21558 11.825C7.80308 11.8594 7.45933 12.2375 7.49371 12.65L7.73433 15.675C7.76871 16.0875 8.11246 16.3969 8.49058 16.3969C8.52496 16.3969 8.52496 16.3969 8.55933 16.3969C8.97183 16.3625 9.31558 15.9844 9.28121 15.5719L9.04058 12.5469C9.04058 12.1 8.66246 11.7906 8.21558 11.825Z" fill=""></path>
                            </svg>
                        </button>
                    </div>
                    <div class="flex justify-between">
                        <div class="flex justify-start">
                            <button type="button" class="flex items-center gap-2 w-auto justify-center rounded bg-success px-4.5 py-2 font-medium text-gray hover:bg-opacity-90" id="dynamicButton">
                                Ajouter un autre plat
                            </button>
                        </div>

                        <div class="flex justify-end">
                            <button type="button" class="flex items-center gap-2 w-auto justify-center rounded bg-primary px-4.5 py-2 font-medium text-gray hover:bg-opacity-90 btn-submited" id="btn-submited2">
                                Sauvégarder le nemu
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="flex flex-col mt-6 gap-5 md:gap-7 2xl:gap-10" id="listing" style="display: none">
    <!-- ====== Data Table One Start -->
    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="data-table-common data-table-one max-w-full overflow-x-auto">
            <table class="table w-full table-auto" id="dataTableOne">
                <thead>
                    <tr>
                        <th>
                            <div class="flex items-center gap-1.5">
                                <p>REPAS</p>
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
                                <p>DÉTAILS</p>
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
                                <p>RÉFÉRENCES</p>
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
                                <p>IMPRIMER</p>
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
                    @forelse ($passMenus as $value)
                        <?php
                            // Décoder les détails JSON
                            $details = json_decode($value->details, true);
                            $reference = json_decode($value->reference, true);

                            // Définir la locale en français
                            setlocale(LC_TIME, 'fr_FR.UTF-8');

                            // Créer une instance de DateTime avec la date donnée
                            $date = new DateTime($value->date);

                            // Formater la date en français
                            $date_fr = strftime('%A %d %B %Y', $date->getTimestamp());

                            // Convertir en UTF-8 si nécessaire
                            $date_fr = utf8_encode($date_fr);

                            // Mettre la première lettre de chaque mot en majuscule
                            $date_fr = ucwords($date_fr);

                            // Corriger les caractères accentués
                            $date_fr = utf8_decode($date_fr);
                        ?>





                        <tr>
                            <td>{{ $value->repas->name }}</td>

                            <td>
                                @if (is_array($details))
                                    <div x-data="{ popupOpen: false }">
                                        <button @click="popupOpen = true" class="flex items-center gap-2 rounded bg-primary px-4.5 py-1 font-medium text-white hover:bg-opacity-80">
                                            Voir les plats
                                            <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 7H9V1C9 0.4 8.6 0 8 0C7.4 0 7 0.4 7 1V7H1C0.4 7 0 7.4 0 8C0 8.6 0.4 9 1 9H7V15C7 15.6 7.4 16 8 16C8.6 16 9 15.6 9 15V9H15C15.6 9 16 8.6 16 8C16 7.4 15.6 7 15 7Z" fill="" />
                                            </svg>
                                        </button>

                                        <!-- ===== Task Popup Start ===== -->
                                        <div x-show="popupOpen" x-transition class="fixed left-0 top-0 z-99999 flex h-screen w-full justify-center overflow-y-scroll bg-black/80 px-4 py-5">
                                            <div @click.outside="popupOpen = false" class="relative m-auto w-full max-w-[120%] rounded-sm border border-stroke bg-gray p-4 shadow-default dark:border-strokedark dark:bg-meta-4 sm:p-8 xl:p-10">
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
                                                            <div class="max-w-[570px]">
                                                                <!-- table header start -->
                                                                <div class="grid grid-cols-12 rounded-t-[10px] bg-black px-5 py-4 lg:px-7.5 2xl:px-11">
                                                                    <div class="col-span-5">
                                                                        <h5 class="font-medium text-white">PLAT</h5>
                                                                    </div>

                                                                    <div class="col-span-2">
                                                                        <h5 class="font-medium text-white">PRIX</h5>
                                                                    </div>

                                                                    <div class="col-span-2">
                                                                        <h5 class="font-medium text-white">QUANTITÉ</h5>
                                                                    </div>
                                                                </div>
                                                                <!-- table header end -->

                                                                <!-- table body start -->
                                                                <div class="bg-white dark:bg-boxdark rounded-b-[10px]">
                                                                    @foreach ($details as $detail)
                                                                        <!-- table row item -->
                                                                        <div class="grid grid-cols-12 border-t border-[#EEEEEE] px-5 py-4 dark:border-strokedark lg:px-7.5 2xl:px-11">
                                                                            <div class="col-span-5">
                                                                                <p class="text-[#637381] dark:text-bodydark">{{ $detail['plat_name'] }}</p>
                                                                            </div>

                                                                            <div class="col-span-2">
                                                                                <p class="text-[#637381] dark:text-bodydark">{{ $detail['prix_unitaire'] }}</p>
                                                                            </div>

                                                                            <div class="col-span-2">
                                                                                <?php

                                                                                    // Définir la locale en français
                                                                                    setlocale(LC_TIME, 'fr_FR.UTF-8');

                                                                                    // Créer une instance de DateTime avec la date donnée
                                                                                    $date = new DateTime($detail['date']);

                                                                                    // Formater la date en français
                                                                                    $date_fr = strftime('%A %d %B %Y', $date->getTimestamp());

                                                                                    // Convertir en UTF-8 si nécessaire
                                                                                    $date_fr = utf8_encode($date_fr);

                                                                                    // Mettre la première lettre de chaque mot en majuscule
                                                                                    $date_fr = ucwords($date_fr);

                                                                                    // Corriger les caractères accentués
                                                                                    $date_fr = utf8_decode($date_fr);
                                                                                ?>
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

                            <td>{{ $reference }}</td>

                            <td>{{ $date_fr }}</td>

                            <td>
                                <div class="flex flex-wrap items-center justify-end gap-3.5">
                                    <a href="{{ route('generatePDF.menu', $value->id) }}" class="inline-flex items-center gap-2.5 rounded bg-meta-1 px-4 py-[7px] font-medium text-white hover:bg-opacity-90">
                                        <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.3566 4.07803V1.96865C15.3566 1.15303 14.6816 0.478027 13.866 0.478027H4.10664C3.29102 0.478027 2.61602 1.15303 2.61602 1.96865V4.07803C1.82852 4.10615 1.18164 4.75303 1.18164 5.54053V9.59053C1.18164 10.378 1.82852 11.0249 2.61602 11.053V16.0312C2.61602 16.8468 3.29102 17.5218 4.10664 17.5218H13.8941C14.7098 17.5218 15.3848 16.8468 15.3848 16.0312V11.053C16.1723 11.0249 16.8191 10.378 16.8191 9.59053V5.54053C16.791 4.75303 16.1441 4.10615 15.3566 4.07803ZM3.90977 1.96865C3.90977 1.85615 3.99414 1.74365 4.13477 1.74365H13.9223C14.0348 1.74365 14.1473 1.82803 14.1473 1.96865V4.07803H3.90977V1.96865ZM14.091 16.0312C14.091 16.1437 14.0066 16.2562 13.866 16.2562H4.10664C3.99414 16.2562 3.88164 16.1718 3.88164 16.0312V11.053H14.091V16.0312V16.0312ZM15.5254 9.59053C15.5254 9.70303 15.441 9.81553 15.3004 9.81553H2.67227C2.55977 9.81553 2.44727 9.73115 2.44727 9.59053V5.54053C2.44727 5.42803 2.53164 5.31553 2.67227 5.31553H15.3004C15.4129 5.31553 15.5254 5.3999 15.5254 5.54053V9.59053V9.59053Z" fill=""></path>
                                            <path d="M6.89102 13.2186H11.1098C11.4473 13.2186 11.7566 12.9373 11.7566 12.5717C11.7566 12.2061 11.4754 11.9248 11.1098 11.9248H6.89102C6.55352 11.9248 6.24414 12.2061 6.24414 12.5717C6.24414 12.9373 6.55352 13.2186 6.89102 13.2186Z" fill=""></path>
                                            <path d="M14.0629 6.5249H11.9535C11.616 6.5249 11.3066 6.80615 11.3066 7.17178C11.3066 7.5374 11.5879 7.81865 11.9535 7.81865H14.0629C14.4004 7.81865 14.7098 7.5374 14.7098 7.17178C14.7098 6.80615 14.4285 6.5249 14.0629 6.5249Z" fill=""></path>
                                            <path d="M6.89102 15.3562H11.1098C11.4473 15.3562 11.7566 15.075 11.7566 14.7094C11.7566 14.3437 11.4754 14.0625 11.1098 14.0625H6.89102C6.55352 14.0625 6.24414 14.3437 6.24414 14.7094C6.24414 15.075 6.55352 15.3562 6.89102 15.3562Z" fill=""></path>
                                        </svg>
                                        PDF
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
            <div class="border-b border-stroke dark:border-strokedark">
                <div class="flex flex-col rounded-sm  bg-white p-3  dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <div href="#" class="flex items-center cursor-pointer gap-2 rounded bg-success px-4.5 py-2 font-medium text-white hover:bg-opacity-80" id="toggle_button_close">
                            Aller au précédent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const today = new Date();
            const formattedDate = today.toISOString().split('T')[0];
            document.getElementById('date').value = formattedDate;
        });
    </script>

    <script src="{{ asset('js/menu-script.js') }}"></script>
    <!-- ====== Data Table One End -->

</div>
@endsection
