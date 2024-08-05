@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Gestion de Personnels
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Tableau de Bord /</a>
                </li>
                <li class="font-medium text-primary">Gestion de Personnels</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <!-- Task Header Start -->
    <div
        class="flex flex-col gap-y-4 rounded-sm border border-stroke bg-white p-3 shadow-default dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h3 class="text-title-lx font-bold text-black dark:text-white">
                CRÉER UN COLLABORATEUR
            </h3>

            @error('error')
                <div
                    class="flex w-full h-32 md:h-40 border-l-6 border-[#F87171] bg-[#F87171] bg-opacity-[15%]  shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-9">
                    <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#F87171]">
                        <svg width="10" height="10" viewBox="0 0 13 13" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M6.4917 7.65579L11.106 12.2645C11.2545 12.4128 11.4715 12.5 11.6738 12.5C11.8762 12.5 12.0931 12.4128 12.2416 12.2645C12.5621 11.9445 12.5623 11.4317 12.2423 11.1114C12.2422 11.1113 12.2422 11.1113 12.2422 11.1113C12.242 11.1111 12.2418 11.1109 12.2416 11.1107L7.64539 6.50351L12.2589 1.91221L12.2595 1.91158C12.5802 1.59132 12.5802 1.07805 12.2595 0.757793C11.9393 0.437994 11.4268 0.437869 11.1064 0.757418C11.1063 0.757543 11.1062 0.757668 11.106 0.757793L6.49234 5.34931L1.89459 0.740581L1.89396 0.739942C1.57364 0.420019 1.0608 0.420019 0.740487 0.739944C0.42005 1.05999 0.419837 1.57279 0.73985 1.89309L6.4917 7.65579ZM6.4917 7.65579L1.89459 12.2639L1.89395 12.2645C1.74546 12.4128 1.52854 12.5 1.32616 12.5C1.12377 12.5 0.906853 12.4128 0.758361 12.2645L1.1117 11.9108L0.758358 12.2645C0.437984 11.9445 0.437708 11.4319 0.757539 11.1116C0.757812 11.1113 0.758086 11.111 0.75836 11.1107L5.33864 6.50287L0.740487 1.89373L6.4917 7.65579Z"
                                fill="#ffffff" stroke="#ffffff"></path>
                        </svg>
                    </div>
                    <div class="w-full">
                        <ul>
                            <li class="leading-relaxed text-[#CD5D5D]">
                                {{ $message }}
                            </li>
                        </ul>
                    </div>
                </div>
            @enderror

            @if (session('success'))
                <div
                    class="flex w-full h-32 md:h-40 border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[15%] px-7 py-8 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-9">
                    <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399]">
                        <svg width="16" height="12" viewBox="0 0 16 12" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z"
                                fill="white" stroke="white"></path>
                        </svg>
                    </div>
                    <div class="w-full">
                        <p class="text-base leading-relaxed text-body">
                            {{ session('success') }}
                        </p>
                    </div>
                </div>
            @endif

        </div>
        <div class="flex flex-col gap-4 2xsm:flex-row 2xsm:items-center">
            <div x-data="{ popupOpen: false }">
                <button @click="popupOpen = true"
                    class="flex items-center gap-2 rounded bg-primary px-4.5 py-2 font-medium text-white hover:bg-opacity-80">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 7H9V1C9 0.4 8.6 0 8 0C7.4 0 7 0.4 7 1V7H1C0.4 7 0 7.4 0 8C0 8.6 0.4 9 1 9H7V15C7 15.6 7.4 16 8 16C8.6 16 9 15.6 9 15V9H15C15.6 9 16 8.6 16 8C16 7.4 15.6 7 15 7Z"
                            fill="" />
                    </svg>
                    Ajouter un collaborateur
                </button>

                <!-- ===== Task Popup Start ===== -->
                <div x-show="popupOpen" x-transition
                    class="fixed left-0 top-0 z-99999 flex h-screen w-full justify-center overflow-y-scroll bg-black/80 px-4 py-5">
                    <div @click.outside="popupOpen = false"
                        class="relative m-auto w-full max-w-180 rounded-sm border border-stroke bg-gray p-4 shadow-default dark:border-strokedark dark:bg-meta-4 sm:p-8 xl:p-10">
                        <button @click="popupOpen = false" class="absolute right-1 top-1 sm:right-5 sm:top-5">
                            <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.8913 9.99599L19.5043 2.38635C20.032 1.85888 20.032 1.02306 19.5043 0.495589C18.9768 -0.0317329 18.141 -0.0317329 17.6135 0.495589L10.0001 8.10559L2.38673 0.495589C1.85917 -0.0317329 1.02343 -0.0317329 0.495873 0.495589C-0.0318274 1.02306 -0.0318274 1.85888 0.495873 2.38635L8.10887 9.99599L0.495873 17.6056C-0.0318274 18.1331 -0.0318274 18.9689 0.495873 19.4964C0.717307 19.7177 1.05898 19.9001 1.4413 19.9001C1.75372 19.9001 2.13282 19.7971 2.40606 19.4771L10.0001 11.8864L17.6135 19.4964C17.8349 19.7177 18.1766 19.9001 18.5589 19.9001C18.8724 19.9001 19.2531 19.7964 19.5265 19.4737C20.0319 18.9452 20.0245 18.1256 19.5043 17.6056L11.8913 9.99599Z"
                                    fill="" />
                            </svg>
                        </button>

                        <div class="flex flex-col mt-6 gap-9">
                            <!-- Survey Form -->
                            <div
                                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                                    <h3 class="font-medium text-black dark:text-white">
                                        AJOUTER UN COLLABORATEUR
                                    </h3>
                                </div>
                                <form action="{{ route('add_user') }}" method="POST">
                                    @csrf
                                    <div class="p-6.5">
                                        <div class="mb-5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                                for="fullname">Nom & Prénom </label>
                                            <input type="text" id="fullname" name="fullname" required
                                                placeholder="Enter your full name"
                                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                            @error('fullname')
                                                <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                                for="email">Email </label>
                                            <input type="email" id="email" name="email" required
                                                placeholder="Enter your email address"
                                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                            @error('email')
                                                <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                                for="telephone">Téléphone </label>
                                            <input type="text" id="telephone" name="telephone" required
                                                placeholder="Enter your age"
                                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                            @error('telephone')
                                                <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                                for="residence">Lieu de Résidence </label>
                                            <input type="text" id="residence" name="residence" required
                                                placeholder="Enter your age"
                                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                            @error('residence')
                                                <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-5.5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                                for="date_prise_de_fonction">Date de prise de fonction </label>
                                            <div class="relative">
                                                <input type="date" required id="date_prise_de_fonction"
                                                    name="date_prise_de_fonction" placeholder="mm/dd/yyyy"
                                                    class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                                    data-class="flatpickr-right" />
                                            </div>
                                            @error('date_prise_de_fonction')
                                                <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-5.5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                                for="role">Rôle </label>
                                            <div x-data="{ isOptionSelected: false }"
                                                class="relative z-20 bg-transparent dark:bg-form-input">
                                                <select required
                                                    class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                                    :class="isOptionSelected && 'text-black dark:text-white'"
                                                    @change="isOptionSelected = true" id="role" name="role">
                                                    <option value="" class="text-body" selected> Affecter un rôle
                                                    </option>
                                                    @foreach ($fetchRoles as $value)
                                                        @if ($value->name !== 'SERVEUR' && $value->name !== 'GESTIONNAIRE')
                                                            <option value="{{ $value->id }}" class="text-body">
                                                                {{ $value->name }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                <span class="absolute right-4 top-1/2 z-30 -translate-y-1/2">
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
                                            @error('role')
                                                <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <button
                                            class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                                            Send Message </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ===== Task Popup End ===== -->

            </div>
        </div>
    </div>
    <!-- Task Header End -->








    <div class="rounded-sm mt-6 border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div x-data="{ accordionOpen: false }" @click.outside="accordionOpen = false"
            class="rounded-md border border-stroke p-4 shadow-9 dark:border-strokedark dark:shadow-none md:p-6 xl:p-7.5">
            <button @click="accordionOpen = !accordionOpen" class="flex w-full items-center justify-between gap-2">
                <div class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-9">
                    <h3 class="font-medium text-title-md2 text-black dark:text-white">
                        Membres d'Administration
                    </h3>
                </div>

                <div
                    class="flex h-9 w-full max-w-9 items-center justify-center rounded-full border border-primary dark:border-white">
                    <svg :class="accordionOpen && 'hidden'" class="fill-primary dark:fill-white" width="15"
                        height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.2969 6.51563H8.48438V1.70312C8.48438 1.15625 8.04688 0.773438 7.5 0.773438C6.95313 0.773438 6.57031 1.21094 6.57031 1.75781V6.57031H1.75781C1.21094 6.57031 0.828125 7.00781 0.828125 7.55469C0.828125 8.10156 1.26563 8.48438 1.8125 8.48438H6.625V13.2969C6.625 13.8438 7.0625 14.2266 7.60938 14.2266C8.15625 14.2266 8.53906 13.7891 8.53906 13.2422V8.42969H13.3516C13.8984 8.42969 14.2813 7.99219 14.2813 7.44531C14.2266 6.95312 13.7891 6.51563 13.2969 6.51563Z"
                            fill="" />
                    </svg>

                    <svg :class="accordionOpen === true ? 'block' : 'hidden'" class="fill-primary dark:fill-white"
                        width="15" height="3" viewBox="0 0 15 3" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.503 0.447144C13.446 0.447144 13.503 0.447144 13.503 0.447144H1.49482C0.925718 0.447144 0.527344 0.902427 0.527344 1.47153C0.527344 2.04064 0.982629 2.43901 1.55173 2.43901H13.5599C14.129 2.43901 14.5273 1.98373 14.5273 1.41462C14.4704 0.902427 14.0151 0.447144 13.503 0.447144Z"
                            fill="" />
                    </svg>
                </div>
            </button>

            <div x-show="accordionOpen" class="mt-5 duration-200 ease-in-out">
                <!-- ====== Data Table One Start -->
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="data-table-common data-table-one max-w-full overflow-x-auto">
                        <table class="table w-full table-auto" id="dataTableOne">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="flex items-center gap-1.5">
                                            <p>NOM</p>
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
                                        <div class="flex items-center gap-1.5">
                                            <p>RÔLE</p>
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
                                        <div class="flex items-center gap-1.5">
                                            <p>TÉLÉPHONES</p>
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
                                        <div class="flex items-center gap-1.5">
                                            <p>EMAIL</p>
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
                                        <div class="flex items-center gap-1.5">
                                            <p>CONSOMMATION</p>
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
                                        <div class="flex items-center gap-1.5">
                                            <p>DÉPARTEMENT</p>
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
                                        <div class="flex items-center gap-1.5">
                                            <p>ESPACE</p>
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
                                        <div class="flex items-center gap-1.5">
                                            <p>STATUS</p>
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
                                        <div class="flex items-center gap-1.5">
                                            <p>EDITE</p>
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
                                @forelse ($fetchUsers as $value)
                                    <tr>
                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            {{ $value->fullname }}</td>
                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            {{ $value->role->name }}</td>
                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            {{ $value->telephone }}</td>
                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            {{ $value->email }}</td>

                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            <a href="{{route('consommation', $value->id)}}"  class="flex h-10 w-full max-w-10 items-center justify-center rounded-md bg-primary text-white hover:bg-opacity-90 edited">
                                                <svg  width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22 2L11 13" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </td>

                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            <div>
                                                <div x-data="{ isOptionSelected: false }"
                                                    class="relative z-20 bg-white dark:bg-form-input">
                                                    <select name="departement" id="departement_{{$value->id}}" class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input" :class="isOptionSelected && 'text-black dark:text-white'" @change="isOptionSelected = true">
                                                        @if (!$value->departement_id)
                                                            <option value="" selected @disabled(true)
                                                                class="text-body">Affectation</option>
                                                        @endif
                                                        @foreach ($departements as $departement)
                                                            @if ($value->departement_id === $departement->id)
                                                                <option selected value="{{ $departement->id }}"
                                                                    class="text-body">{{ $departement->name }}</option>
                                                            @else
                                                                <option value="{{ $departement->id }}" class="text-body">
                                                                    {{ $departement->name }}</option>
                                                            @endif
                                                        @endforeach

                                                    </select>
                                                    <span class="absolute right-4 top-1/2 z-20 -translate-y-1/2">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g opacity="0.8">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                                    fill="#637381"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            <div>
                                                <div x-data="{ isOptionSelected: false }"
                                                    class="relative z-20 bg-white dark:bg-form-input">
                                                    <select name="espace" id="espace_{{$value->id}}" class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input" :class="isOptionSelected && 'text-black dark:text-white'" @change="isOptionSelected = true">
                                                        @if (!$value->departement_id)
                                                            <option value="" selected @disabled(true)
                                                                class="text-body">Affectation</option>
                                                        @endif
                                                        @foreach ($espaces as $espace)
                                                            @if ($value->espace_id === $espace->id)
                                                                <option selected value="{{ $espace->id }}"
                                                                    class="text-body">{{ $espace->name }}</option>
                                                            @else
                                                                <option value="{{ $espace->id }}" class="text-body">
                                                                    {{ $espace->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <span class="absolute right-4 top-1/2 z-20 -translate-y-1/2">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g opacity="0.8">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                                    fill="#637381"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">

                                            <div class="flex items-center">
                                                <input @if ($value->status === "ACTIF") checked @endif name="status" value="1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </div>
                                        </td>
                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            <button id="edited_{{$value->id}}" class="flex h-10 w-full max-w-10 items-center justify-center rounded-md bg-primary text-white hover:bg-opacity-90 edited">
                                                <svg id="edited_{{$value->id}}" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22 2L11 13" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                        </td>
                                        <form action="{{route('edite.user', $value->id)}}" method="post" id="formulaire_{{$value->id}}">
                                            @csrf
                                        </form>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- ====== Data Table One End -->
            </div>
        </div>
    </div>



    <!-- Task Header Start -->
    <div
        class="flex flex-col mt-9 gap-y-4 rounded-sm border border-stroke bg-white p-3 shadow-default dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h3 class="text-title-lx font-bold text-black dark:text-white">
                CRÉER UN TECHNICIEN
            </h3>
        </div>
        <div class="flex flex-col gap-4 2xsm:flex-row 2xsm:items-center">
            <div x-data="{ popupOpen: false }">
                <button @click="popupOpen = true"
                    class="flex items-center gap-2 rounded bg-success px-4.5 py-2 font-medium text-white hover:bg-opacity-80">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15 7H9V1C9 0.4 8.6 0 8 0C7.4 0 7 0.4 7 1V7H1C0.4 7 0 7.4 0 8C0 8.6 0.4 9 1 9H7V15C7 15.6 7.4 16 8 16C8.6 16 9 15.6 9 15V9H15C15.6 9 16 8.6 16 8C16 7.4 15.6 7 15 7Z"
                            fill="" />
                    </svg>
                    AJOUTER UN TECHNICIEN
                </button>

                <!-- ===== Task Popup Start ===== -->
                <div x-show="popupOpen" x-transition
                    class="fixed left-0 top-0 z-99999 flex h-screen w-full justify-center overflow-y-scroll bg-black/80 px-4 py-5">
                    <div @click.outside="popupOpen = false"
                        class="relative m-auto w-full max-w-180 rounded-sm border border-stroke bg-gray p-4 shadow-default dark:border-strokedark dark:bg-meta-4 sm:p-8 xl:p-10">
                        <button @click="popupOpen = false" class="absolute right-1 top-1 sm:right-5 sm:top-5">
                            <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.8913 9.99599L19.5043 2.38635C20.032 1.85888 20.032 1.02306 19.5043 0.495589C18.9768 -0.0317329 18.141 -0.0317329 17.6135 0.495589L10.0001 8.10559L2.38673 0.495589C1.85917 -0.0317329 1.02343 -0.0317329 0.495873 0.495589C-0.0318274 1.02306 -0.0318274 1.85888 0.495873 2.38635L8.10887 9.99599L0.495873 17.6056C-0.0318274 18.1331 -0.0318274 18.9689 0.495873 19.4964C0.717307 19.7177 1.05898 19.9001 1.4413 19.9001C1.75372 19.9001 2.13282 19.7971 2.40606 19.4771L10.0001 11.8864L17.6135 19.4964C17.8349 19.7177 18.1766 19.9001 18.5589 19.9001C18.8724 19.9001 19.2531 19.7964 19.5265 19.4737C20.0319 18.9452 20.0245 18.1256 19.5043 17.6056L11.8913 9.99599Z"
                                    fill="" />
                            </svg>
                        </button>

                        <div class="flex flex-col mt-6 gap-9">
                            <!-- Survey Form -->
                            <div
                                class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                                    <h3 class="font-medium text-black dark:text-white">
                                        AJOUTER UN TECHNICIEN
                                    </h3>
                                </div>

                                <form action="{{ route('add_user') }}" method="POST">
                                    @csrf
                                    <div class="p-6.5">
                                        <div class="mb-5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                                for="fullname">Nom</label>
                                            <input type="text" id="fullname" name="fullname" required
                                                placeholder="Enter your full name"
                                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                            @error('fullname')
                                                <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                                for="email">Email </label>
                                            <input type="email" id="email" name="email" required
                                                placeholder="Enter your email address"
                                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                            @error('email')
                                                <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                                for="telephone">Téléphone </label>
                                            <input type="text" id="telephone" name="telephone" required
                                                placeholder="Enter your age"
                                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                            @error('telephone')
                                                <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                                for="residence">Lieu de Résidence </label>
                                            <input type="text" id="residence" name="residence" required
                                                placeholder="Enter your age"
                                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                            @error('residence')
                                                <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-5.5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                                for="date_prise_de_fonction">Date de prise de fonction </label>
                                            <div class="relative">
                                                <input type="date" required id="date_prise_de_fonction" name="date_prise_de_fonction" placeholder="mm/dd/yyyy" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />
                                            </div>
                                            @error('date_prise_de_fonction')
                                                <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="mb-5.5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="role">Rôle </label>
                                            <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent dark:bg-form-input">
                                                <select required id="role" name="role" class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" :class="isOptionSelected && 'text-black dark:text-white'" @change="isOptionSelected = true">
                                                    @foreach ($fetchRolesServeur as $value)
                                                        <option value="{{ $value->id }}" selected class="text-body">
                                                            {{ $value->name }}</option>
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
                                            @error('role')
                                                <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <button
                                            class="flex w-full justify-center rounded bg-success p-3 font-medium text-gray hover:bg-opacity-90">
                                            Sauvegarder </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ===== Task Popup End ===== -->
            </div>
        </div>
    </div>
    <!-- Task Header End -->

    <div class="rounded-sm mt-6 border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div x-data="{ accordionOpen: false }" @click.outside="accordionOpen = false"
            class="rounded-md border border-stroke p-4 shadow-9 dark:border-strokedark dark:shadow-none md:p-6 xl:p-7.5">
            <button @click="accordionOpen = !accordionOpen" class="flex w-full items-center justify-between gap-2">
                <div class="border-b border-stroke px-4 py-4 dark:border-strokedark sm:px-6 xl:px-9">
                    <h3 class="font-medium text-title-md2 text-black dark:text-white">
                        Membres de services Techniques
                    </h3>
                </div>

                <div
                    class="flex h-9 w-full max-w-9 items-center justify-center rounded-full border border-primary dark:border-white">
                    <svg :class="accordionOpen && 'hidden'" class="fill-primary dark:fill-white" width="15"
                        height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.2969 6.51563H8.48438V1.70312C8.48438 1.15625 8.04688 0.773438 7.5 0.773438C6.95313 0.773438 6.57031 1.21094 6.57031 1.75781V6.57031H1.75781C1.21094 6.57031 0.828125 7.00781 0.828125 7.55469C0.828125 8.10156 1.26563 8.48438 1.8125 8.48438H6.625V13.2969C6.625 13.8438 7.0625 14.2266 7.60938 14.2266C8.15625 14.2266 8.53906 13.7891 8.53906 13.2422V8.42969H13.3516C13.8984 8.42969 14.2813 7.99219 14.2813 7.44531C14.2266 6.95312 13.7891 6.51563 13.2969 6.51563Z"
                            fill="" />
                    </svg>

                    <svg :class="accordionOpen === true ? 'block' : 'hidden'" class="fill-primary dark:fill-white"
                        width="15" height="3" viewBox="0 0 15 3" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.503 0.447144C13.446 0.447144 13.503 0.447144 13.503 0.447144H1.49482C0.925718 0.447144 0.527344 0.902427 0.527344 1.47153C0.527344 2.04064 0.982629 2.43901 1.55173 2.43901H13.5599C14.129 2.43901 14.5273 1.98373 14.5273 1.41462C14.4704 0.902427 14.0151 0.447144 13.503 0.447144Z"
                            fill="" />
                    </svg>
                </div>
            </button>

            <div x-show="accordionOpen" class="mt-5 duration-200 ease-in-out">
                <!-- ====== Data Table Two Start -->
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="data-table-common data-table-two max-w-full overflow-x-auto">
                        <table class="table w-full table-auto" id="dataTableTwo">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="flex items-center justify-between gap-1.5">
                                            <p>NOM & PRÉNOM</p>
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
                                            <p>RÔLE</p>
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
                                            <p>TÉLÉPHONE</p>
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
                                            <p>EMAIL</p>
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
                                    <th class="flex items-center justify-between gap-1.5">
                                        <div class="flex items-center justify-between gap-1.5">
                                            <p>CONSOMMATION</p>
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
                                            <p>DÉPARTEMENT</p>
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
                                <th>
                                    <div class="flex items-center justify-between gap-1.5">
                                        <p>ESPACE</p>
                                        <div class="inline-flex flex-col space-y-[2px]">
                                            <span class="inline-block">
                                                <svg class="fill-current" width="10" height="5"
                                                    viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 0L0 5H10L5 0Z" fill="" />
                                                </svg>
                                            </span>
                                            <span class="inline-block">
                                                <svg class="fill-current" width="10" height="5"
                                                    viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </th>

                                <th>
                                    <div class="flex items-center justify-between gap-1.5">
                                        <p>STATUS</p>
                                        <div class="inline-flex flex-col space-y-[2px]">
                                            <span class="inline-block">
                                                <svg class="fill-current" width="10" height="5"
                                                    viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 0L0 5H10L5 0Z" fill="" />
                                                </svg>
                                            </span>
                                            <span class="inline-block">
                                                <svg class="fill-current" width="10" height="5"
                                                    viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </th>

                                <th>
                                    <div class="flex items-center justify-between gap-1.5">
                                        <p>EDITE</p>
                                        <div class="inline-flex flex-col space-y-[2px]">
                                            <span class="inline-block">
                                                <svg class="fill-current" width="10" height="5"
                                                    viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 0L0 5H10L5 0Z" fill="" />
                                                </svg>
                                            </span>
                                            <span class="inline-block">
                                                <svg class="fill-current" width="10" height="5"
                                                    viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill="" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </th>
                            </thead>
                            <tbody>
                                @forelse ($fetchUsersHasServeur as $value)
                                    <tr>
                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            {{ $value->fullname }}</td>
                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            {{ $value->role->name }}</td>
                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            {{ $value->telephone }}</td>
                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            {{ $value->email }}</td>
                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            <a href="{{route('consommation', $value->id)}}"  class="flex h-10 w-full max-w-10 items-center justify-center rounded-md bg-primary text-white hover:bg-opacity-90 edited">
                                                <svg  width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22 2L11 13" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </a>
                                        </td>
                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            <div>
                                                <div x-data="{ isOptionSelected: false }"
                                                    class="relative z-20 bg-white dark:bg-form-input">
                                                    <select name="departement" class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input" :class="isOptionSelected && 'text-black dark:text-white'" @change="isOptionSelected = true">
                                                        @if (!$value->departement_id)
                                                            <option value="" selected @disabled(true)
                                                                class="text-body">Affectation</option>
                                                        @endif
                                                        @foreach ($departements as $departement)
                                                            @if ($value->departement_id === $departement->id)
                                                                <option selected value="{{ $departement->id }}"
                                                                    class="text-body">{{ $departement->name }}</option>
                                                            @else
                                                                <option value="{{ $departement->id }}" class="text-body">
                                                                    {{ $departement->name }}</option>
                                                            @endif
                                                        @endforeach

                                                    </select>
                                                    <span class="absolute right-4 top-1/2 z-20 -translate-y-1/2">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g opacity="0.8">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                                    fill="#637381"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            <div>
                                                <div x-data="{ isOptionSelected: false }"
                                                    class="relative z-20 bg-white dark:bg-form-input">
                                                    <select name="espace" class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent py-3 pl-5 pr-12 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input" :class="isOptionSelected && 'text-black dark:text-white'" @change="isOptionSelected = true">
                                                        @if (!$value->espace_id)
                                                            <option value="" selected @disabled(true)
                                                                class="text-body">Affectation</option>
                                                        @endif
                                                        @foreach ($espaces as $espace)
                                                            @if ($value->espace_id === $espace->id)
                                                                <option selected value="{{ $espace->id }}"
                                                                    class="text-body">{{ $espace->name }}</option>
                                                            @else
                                                                <option value="{{ $espace->id }}" class="text-body">
                                                                    {{ $espace->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                    <span class="absolute right-4 top-1/2 z-20 -translate-y-1/2">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g opacity="0.8">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                                    fill="#637381"></path>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            <div class="flex items-center">
                                                <input @if ($value->status === "ACTIF") checked @endif value="1" name="status" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            </div>
                                        </td>
                                        <td class="border-b border-[#eee] px-1 py-1 dark:border-strokedark">
                                            <button id="edited_{{$value->id}}" class="flex h-10 w-full max-w-10 items-center justify-center rounded-md bg-primary text-white hover:bg-opacity-90 edited">
                                                <svg id="edited_{{$value->id}}" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22 2L11 13" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                    <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="white" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </button>
                                            <form action="{{route('edite.user', $value->id)}}" method="post" id="formulaire_{{$value->id}}" hidden>
                                                @csrf
                                            </form>
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

    </div>




    @if ($user)
        <!-- ====== Form Layout Section Start -->
        <div class="grid grid-cols-1 mt-6 gap-9" id="update-data">
            <div class="flex flex-col gap-9">
                <!-- Contact Form Two -->
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                        <h3 class="font-medium text-black dark:text-white">
                            MODIFIER DES DETAIL DE {{ $user->fullname }}
                        </h3>
                    </div>
                    <form action="{{ route('update.user', $user->id) }}" method="POST">
                        @csrf
                        <div class="p-6.5">
                            <div class="mb-5 flex flex-col gap-6 xl:flex-row">
                                <div class="w-full xl:w-1/2">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                        for="fullname">Nom & Prénom </label>
                                    <input type="text" id="fullname" name="fullname" required
                                        value="{{ $user->fullname }}" placeholder="Enter your full name"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                    @error('fullname')
                                        <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                        for="email">Email </label>
                                    <input type="email" id="email" name="email" required
                                        value="{{ $user->email }}" placeholder="Enter your email address"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                    @error('email')
                                        <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                        for="telephone">Téléphone </label>
                                    <input type="text" id="telephone" name="telephone" required
                                        value="{{ $user->telephone }}" placeholder="Enter your age"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                    @error('telephone')
                                        <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-5.5 flex flex-col gap-6 xl:flex-row">
                                <div class="w-full xl:w-1/2">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                        for="residence">Lieu de Résidence </label>
                                    <input type="text" id="residence" name="residence" required
                                        value="{{ $user->residence }}" placeholder="Enter your age"
                                        class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary" />
                                    @error('residence')
                                        <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                        for="date_prise_de_fonction">Date de prise de fonction </label>
                                    <div class="relative">
                                        <input type="date" required id="date_prise_de_fonction"
                                            name="date_prise_de_fonction" value="{{ $user->date_prise_de_fonction }}"
                                            placeholder="mm/dd/yyyy"
                                            class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                            data-class="flatpickr-right" />
                                    </div>
                                    @error('date_prise_de_fonction')
                                        <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="w-full xl:w-1/2">
                                    <label class="mb-3 block text-sm font-medium text-black dark:text-white"
                                        for="role">Fonction </label>
                                    <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent dark:bg-form-input">
                                        <select required
                                            class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                            :class="isOptionSelected && 'text-black dark:text-white'"
                                            @change="isOptionSelected = true" id="role" name="role">
                                            @if ($user->role->name === 'SERVEUR')
                                                <option value="{{ $user->role_id }}" selected class="text-body">
                                                    {{ $user->role->name }}</option>
                                            @else
                                                @foreach ($fetchRoles as $value)
                                                    @if ($user->role_id == $value->id)
                                                        <option value="{{ $user->role_id }}" selected class="text-body">
                                                            {{ $value->name }}</option>
                                                    @else
                                                        <option value="{{ $value->id }}" class="text-body">
                                                            {{ $value->name }}</option>
                                                    @endif
                                                @endforeach
                                            @endif

                                        </select>
                                        <span class="absolute right-4 top-1/2 z-30 -translate-y-1/2">
                                            <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.8">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z"
                                                        fill=""></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                    @error('role')
                                        <span class="" @class(['p-4', 'font-bold' => true])>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-5.5" x-data="{ isChecked: '' }">
                                <label for="roleSelect"
                                    class="mb-4.5 block text-sm font-medium text-black dark:text-white">
                                    Rôles
                                </label>

                                <div class="mb-5 flex flex-col gap-6 xl:flex-row">
                                    <div class="w-full xl:w-1/2">
                                        <div x-data="{ checkboxToggle: false }">
                                            <label for="checkboxLabelTwo1"
                                                class="flex cursor-pointer select-none items-center text-sm font-medium">
                                                <div class="relative">
                                                    <input type="checkbox" id="checkboxLabelTwo1" class="sr-only"
                                                        @change="checkboxToggle = !checkboxToggle">
                                                    <div :class="checkboxToggle & amp; & amp;
                                                    'border-primary bg-gray dark:bg-transparent'"
                                                        class="mr-4 flex h-5 w-5 items-center justify-center rounded border">
                                                        <span :class="checkboxToggle & amp; & amp;
                                                        '!opacity-100'"
                                                            class="opacity-0">
                                                            <svg width="11" height="8" viewBox="0 0 11 8"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                                                                    fill="#3056D3" stroke="#3056D3" stroke-width="0.4">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                Checkbox Text
                                            </label>
                                        </div>
                                    </div>

                                    <div class="w-full xl:w-1/2">
                                        <div x-data="{ checkboxToggle: false }">
                                            <label for="checkboxLabelTwo2"
                                                class="flex cursor-pointer select-none items-center text-sm font-medium">
                                                <div class="relative">
                                                    <input type="checkbox" id="checkboxLabelTwo2" value="1" class="sr-only"
                                                        @change="checkboxToggle = !checkboxToggle">
                                                    <div :class="checkboxToggle & amp; & amp;
                                                    'border-primary bg-gray dark:bg-transparent'"
                                                        class="mr-4 flex h-5 w-5 items-center justify-center rounded border">
                                                        <span :class="checkboxToggle & amp; & amp;
                                                        '!opacity-100'"
                                                            class="opacity-0">
                                                            <svg width="11" height="8" viewBox="0 0 11 8"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                                                                    fill="#3056D3" stroke="#3056D3" stroke-width="0.4">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                Checkbox Text
                                            </label>
                                        </div>
                                    </div>

                                    <div class="w-full xl:w-1/2">
                                        <div x-data="{ checkboxToggle: false }">
                                            <label for="checkboxLabelTwo3"
                                                class="flex cursor-pointer select-none items-center text-sm font-medium">
                                                <div class="relative">
                                                    <input type="checkbox" id="checkboxLabelTwo3" class="sr-only"
                                                        @change="checkboxToggle = !checkboxToggle">
                                                    <div :class="checkboxToggle & amp; & amp;
                                                    'border-primary bg-gray dark:bg-transparent'"
                                                        class="mr-4 flex h-5 w-5 items-center justify-center rounded border">
                                                        <span :class="checkboxToggle & amp; & amp;
                                                        '!opacity-100'"
                                                            class="opacity-0">
                                                            <svg width="11" height="8" viewBox="0 0 11 8"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                                                                    fill="#3056D3" stroke="#3056D3" stroke-width="0.4">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                Checkbox Text
                                            </label>
                                        </div>
                                    </div>

                                    <div class="w-full xl:w-1/2">
                                        <div x-data="{ checkboxToggle: false }">
                                            <label for="checkboxLabelTwo4"
                                                class="flex cursor-pointer select-none items-center text-sm font-medium">
                                                <div class="relative">
                                                    <input type="checkbox" id="checkboxLabelTwo4" class="sr-only"
                                                        @change="checkboxToggle = !checkboxToggle">
                                                    <div :class="checkboxToggle & amp; & amp;
                                                    'border-primary bg-gray dark:bg-transparent'"
                                                        class="mr-4 flex h-5 w-5 items-center justify-center rounded border">
                                                        <span :class="checkboxToggle & amp; & amp;
                                                        '!opacity-100'"
                                                            class="opacity-0">
                                                            <svg width="11" height="8" viewBox="0 0 11 8"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                                                                    fill="#3056D3" stroke="#3056D3" stroke-width="0.4">
                                                                </path>
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                Checkbox Text
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button
                                class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                                Modifier
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- ====== Form Layout Section End -->
    @endif



    <script src="{{asset('js/usermanagement.js')}}"></script>


@endsection
