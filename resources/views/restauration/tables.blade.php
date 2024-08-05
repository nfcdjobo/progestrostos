@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Tables
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Tableau de Bord /</a>
                </li>
                <li>
                    <a class="font-medium" href="{{ route('listing.restauration') }}">Restauration /</a>
                </li>
                <li class="font-medium text-primary">Tables</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <div
        class="flex flex-col mt-9 gap-y-4 rounded-sm border border-stroke bg-white p-3 shadow-default dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h3 class="text-title-lx font-bold text-black dark:text-white">
                TABLES
            </h3>
        </div>

        @error('error')
            <div class="flex w-full border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[15%] px-7 py-8 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-9">
                {{$message}}
            </div>
        @enderror

        <div class="flex flex-col gap-4 2xsm:flex-row 2xsm:items-center">
            <div x-data="{ popupOpen: false }">
                <button @click="popupOpen = true" class="flex items-center gap-2 rounded bg-success px-4.5 py-2 font-medium text-white hover:bg-opacity-80">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 7H9V1C9 0.4 8.6 0 8 0C7.4 0 7 0.4 7 1V7H1C0.4 7 0 7.4 0 8C0 8.6 0.4 9 1 9H7V15C7 15.6 7.4 16 8 16C8.6 16 9 15.6 9 15V9H15C15.6 9 16 8.6 16 8C16 7.4 15.6 7 15 7Z"
                            fill=""></path>
                    </svg>
                    AJOUTER LE NOMBRE DE TABLES
                </button>

                <!-- ===== Task Popup Start ===== -->
                <div x-show="popupOpen" x-transition=""
                    class="fixed left-0 top-0 z-99999 flex h-screen w-full justify-center overflow-y-scroll bg-black/80 px-4 py-5"
                    style="display: none;">
                    <div @click.outside="popupOpen = false"
                        class="relative m-auto w-full max-w-180 rounded-sm border border-stroke bg-gray p-4 shadow-default dark:border-strokedark dark:bg-meta-4 sm:p-8 xl:p-10">
                        <button @click="popupOpen = false" class="absolute right-1 top-1 sm:right-5 sm:top-5">
                            <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
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
                                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                                    <h3 class="font-medium text-black dark:text-white">
                                        AJOUTER TABLES
                                    </h3>
                                </div>

                                @if (count($fetchAllVIP) !== 0)
                                    <form action="{{ route('store.table') }}" method="POST">
                                        @foreach ($fetchAllVIP as $value)
                                            <div class="flex flex-col gap-6">
                                                <!-- Accordion Item -->
                                                <div x-data="{ accordionOpen: false }" @click.outside="accordionOpen = false"
                                                    class="rounded-md border border-stroke p-4 shadow-9 dark:border-strokedark dark:shadow-none sm:p-6">
                                                    <button type="button" @click="accordionOpen = !accordionOpen"
                                                        class="flex w-full items-center gap-1.5 sm:gap-3 xl:gap-6">
                                                        <div
                                                            class="flex h-10.5 w-full max-w-10.5 items-center justify-center rounded-md bg-[#F3F5FC] dark:bg-meta-4">
                                                            <svg :class="accordionOpen & amp; & amp;
                                                            'rotate-180'"
                                                                class="fill-primary stroke-primary duration-200 ease-in-out dark:fill-white dark:stroke-white"
                                                                width="18" height="10" viewBox="0 0 18 10" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M8.28882 8.43257L8.28874 8.43265L8.29692 8.43985C8.62771 8.73124 9.02659 8.86001 9.41667 8.86001C9.83287 8.86001 10.2257 8.69083 10.5364 8.41713L10.5365 8.41721L10.5438 8.41052L16.765 2.70784L16.771 2.70231L16.7769 2.69659C17.1001 2.38028 17.2005 1.80579 16.8001 1.41393C16.4822 1.1028 15.9186 1.00854 15.5268 1.38489L9.41667 7.00806L3.3019 1.38063L3.29346 1.37286L3.28467 1.36548C2.93287 1.07036 2.38665 1.06804 2.03324 1.41393L2.0195 1.42738L2.00683 1.44184C1.69882 1.79355 1.69773 2.34549 2.05646 2.69659L2.06195 2.70196L2.0676 2.70717L8.28882 8.43257Z"
                                                                    fill="" stroke=""></path>
                                                            </svg>
                                                        </div>

                                                        <div>
                                                            <h4 class="text-left text-title-xsm font-medium text-black dark:text-white">
                                                                {{$value->name}}
                                                            </h4>
                                                        </div>
                                                    </button>

                                                    <div x-show="accordionOpen" class="ml-16.5 mt-5 duration-200 ease-in-out"
                                                        style="display: none;">
                                                        <div class="p-6.5">
                                                            <div class="mb-4.5">
                                                                <label for="vip{{$value->id}}"
                                                                    class="mb-3 block text-sm font-medium text-black dark:text-white">
                                                                    Niveau 0{{$value->id}} </label>
                                                                <div x-data="{ isOptionSelected: false }"
                                                                    class="relative z-20 bg-transparent dark:bg-form-input">
                                                                    <select id="vip{{$value->id}}" name="vip{{$value->id}}"
                                                                        class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                                                        :class="isOptionSelected & amp; & amp;
                                                                        'text-black dark:text-white'"
                                                                        @change="isOptionSelected = true">
                                                                        <option value="{{$value->id}}" class="text-body">{{$value->name}}</option>
                                                                    </select>
                                                                    <span
                                                                        class="absolute right-4 top-1/2 z-30 -translate-y-1/2">
                                                                        <svg class="fill-current" width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g opacity="0.8">
                                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                    d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                                                    fill=""></path>
                                                                            </g>
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="mb-5">
                                                                <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="prefix_vip1">Préfix des numéros de table </label>
                                                                <input type="text" id="prefix_vip{{$value->id}}" name="prefix_vip{{$value->id}}" @if($value->name === 'VIP1') required @endif placeholder="Exemple: TBL-" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                                            </div>

                                                            <div class="mb-5">
                                                                <label
                                                                    class="mb-3 block text-sm font-medium text-black dark:text-white"
                                                                    for="number_vip{{$value->id}}">Nombre de tables à ajouter </label>
                                                                <input type="number" min="1" id="number_vip{{$value->id}}"
                                                                    name="number_vip{{$value->id}}" @if($value->name === 'VIP1') required @endif
                                                                    placeholder="Enter number_vip1"
                                                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        @csrf

                                        <div class="p-6.5">
                                            <button type="submit" class="flex w-full justify-center rounded bg-success p-3 font-medium text-gray hover:bg-opacity-90"> Sauvegarder </button>
                                        </div>
                                    </form>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== Task Popup End ===== -->
            </div>
        </div>

    </div>

    <!-- ====== Table Section Start -->
    <div class="flex flex-col mt-9 gap-5 md:gap-7 2xl:gap-10">
        <!-- ====== Data Table One Start -->
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="data-table-common data-table-one max-w-full overflow-x-auto">
                <table class="table w-full table-auto" id="dataTableOne">
                    <thead>
                        <tr>
                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>NUMÉRO</p>
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

                            <th data-type="date" data-format="YYYY/DD/MM">
                                <div class="flex items-center gap-1.5">
                                    <p>CATÉGORIE</p>
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
                                    <p>ACTIVITÉ</p>
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
                                    <p>ETAT</p>
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
                                    <p>STATUS</p>
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

                                    </div>
                                </div>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($fetchAllTables as $value)
                            <tr>
                                <td>{{$value->numero}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->activite->name}}</td>
                                <td>
                                    <button class="inline-flex rounded-full bg-[#{{$value->etat == 'ACTIF' ? '3CA745' : 'DC3545' }}] px-3 py-1 text-sm font-medium text-white hover:bg-opacity-90" id="{{$value->id}}">{{$value->etat}}</button>
                                </td>
                                <td>
                                    <button class="inline-flex rounded-full bg-[#{{$value->status == 'ACTIF' ? '13C296' : 'F9C107' }}] px-3 py-1 text-sm font-medium text-white hover:bg-opacity-90">{{$value->status}}</button>
                                </td>
                                <td class="choisir-{{$value->id}}">
                                    <form action="{{route('edite.table', $value->id)}}" method="post">
                                        @csrf
                                        <button href="" class="inline-flex bg-[#{{$value->etat == 'ACTIF' ? '3CA745' : 'DC3545' }}] px-3 py-2 text-sm font-medium text-white hover:bg-opacity-90" id="{{$value->id}}">{{$value->etat == 'ACTIF' ? 'Liberer la place' : 'Place occupée' }}</button>
                                    </form>

                                </td>
                            </tr>
                        @empty
                        place.update
                        @endforelse

                    </tbody>
                </table>

            </div>
        </div>
        <!-- ====== Data Table One End -->
    </div>
    <script>
        setTimeout(() => {
            const generate_elements = document.querySelectorAll('td');
            if(generate_elements.length){
                Array.from(generate_elements).filter(item => item.textContent == "Choisir ?").map(item => item.addEventListener('click', event => create_forms(event)))
            }

            const create_forms = event => {
                const id = event.target.closest('tr').querySelector('button').id;
                const route = `{{route('show.table', ':id')}}`.replace(":id", bx${id});
                const target = event.target;
                if(target.textContent === "Choisir ?"){
                    Array.from(generate_elements).filter(item => item.textContent.includes("Choisir ?") || item.textContent.includes("Details")).map(item => item.textContent = "Choisir ?")
                    target.innerHTML = `
                    <div class="col-span-1 relative">
                            <div x-data="{ isOpen: false }">
                                <button @click.prevent="isOpen = !isOpen" class="float-right inline-flex items-center gap-1.5 rounded-md px-3 py-1.5 text-sm text-black shadow-11 hover:text-primary dark:bg-meta-4 dark:text-white dark:shadow-none">
                                    Déplier ?
                                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.00039 11.4C7.85039 11.4 7.72539 11.35 7.60039 11.25L1.85039 5.60005C1.62539 5.37505 1.62539 5.02505 1.85039 4.80005C2.07539 4.57505 2.42539 4.57505 2.65039 4.80005L8.00039 10.025L13.3504 4.75005C13.5754 4.52505 13.9254 4.52505 14.1504 4.75005C14.3754 4.97505 14.3754 5.32505 14.1504 5.55005L8.40039 11.2C8.27539 11.325 8.15039 11.4 8.00039 11.4Z" fill=""></path>
                                    </svg>
                                </button>

                                <div @click.outside="isOpen = false" x-show="isOpen" class="absolute right-0 top-full z-1 mt-1 w-full max-w-39.5 rounded-[5px] bg-white py-2.5 shadow-12 dark:bg-boxdark" style="display: none;">
                                    <a href="${route}" @click="popupOpen = true" class="flex w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                        Details
                                    </a>

                                </div>
                            </div>
                        </div>
                    `
                }else{
                    Array.from(generate_elements).filter(item => item.textContent == "Choisir ?").map(item => item.textContent = "Choisir ?");
                    target.textContent = "Choisir ?";
                }

            }
        }, 1000);


    </script>
    <!-- ====== Table Section End -->
@endsection
