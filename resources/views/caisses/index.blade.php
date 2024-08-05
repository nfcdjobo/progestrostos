@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white"> Caisses </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Tableau de Bord /</a>
                </li>
                <li class="font-medium text-primary">Caisses</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->
    @php
        $currentUrl = url()->current();
    @endphp

    <div class="h-[calc(100vh-186px)] overflow-hidden sm:h-[calc(100vh-174px)]">
        <div x-data="{ inboxSidebarToggle: false }"
            class="h-full rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark lg:flex">
            <div :class="inboxSidebarToggle && '!translate-x-0 duration-300 ease-linear'"
                class="fixed bottom-0 top-22.5 flex w-[230px] -translate-x-[120%] flex-col rounded-md border border-stroke bg-white dark:border-strokedark dark:bg-boxdark lg:static lg:w-1/5 lg:translate-x-0 lg:border-none">
                <button :class="inboxSidebarToggle && '!-right-9'"
                    class="absolute -right-20 z-99999 block rounded-md border border-stroke bg-white p-1.5 shadow-sm dark:border-strokedark dark:bg-boxdark lg:hidden"
                    @click="inboxSidebarToggle = !inboxSidebarToggle">
                    <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path
                            d="M 22.1875 2.28125 L 20.78125 3.71875 L 25.0625 8 L 4 8 L 4 10 L 25.0625 10 L 20.78125 14.28125 L 22.1875 15.71875 L 28.90625 9 Z M 9.8125 16.28125 L 3.09375 23 L 9.8125 29.71875 L 11.21875 28.28125 L 6.9375 24 L 28 24 L 28 22 L 6.9375 22 L 11.21875 17.71875 Z" />
                    </svg>
                </button>

                <div class="px-4 pt-4">
                    <button class="flex w-full rounded-md bg-primary px-5.5 py-2.5 font-medium text-white">
                        Session
                    </button>
                </div>
                @if (count($fetchAllRepas) !== 0)
                    <div class="no-scrollbar max-h-full overflow-auto py-6">
                        <ul class="flex flex-col gap-2" x-data="{ isActive: 'inbox' }">
                            @foreach ($fetchAllRepas as $repas)
                                <li>
                                    <a href="{{ route('index.caisses', $repas->id) }}"
                                        class="relative flex items-center gap-2.5 px-5 py-2.5 font-medium duration-300 ease-linear before:absolute before:left-0 before:h-0 before:w-1 before:bg-primary before:duration-300 before:ease-linear hover:bg-primary/5 hover:before:h-full hover:text-primary is-active"
                                        :class="isActive === 'started' ? 'bg-primary/5 before:!h-full' : ''">
                                        <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_4348_2007)">
                                                <path
                                                    d="M5.03112 19.4375C4.74987 19.4375 4.46862 19.3437 4.24987 19.1875C3.81237 18.875 3.56237 18.3125 3.65612 17.7812L4.46862 12.75L0.968622 9.15625C0.593622 8.78125 0.468622 8.21875 0.624872 7.6875C0.781122 7.1875 1.21862 6.8125 1.71862 6.75L6.56237 5.96875L8.74987 1.375C8.99987 0.875 9.46862 0.5625 9.99987 0.5625C10.5311 0.5625 11.0311 0.875 11.2499 1.375L13.4374 5.9375L18.2499 6.6875C18.7499 6.78125 19.1874 7.125 19.3436 7.625C19.5311 8.15625 19.3749 8.71875 18.9999 9.09375L15.5311 12.7187L16.3436 17.7812C16.4374 18.3437 16.2186 18.875 15.7499 19.1875C15.3124 19.5 14.7811 19.5312 14.3124 19.2812L9.99987 16.9375L5.68737 19.2812C5.49987 19.4062 5.24987 19.4375 5.03112 19.4375ZM1.96862 8.125C1.96862 8.125 1.96862 8.15625 1.96862 8.1875L5.62487 11.9375C5.84362 12.1562 5.93737 12.5 5.90612 12.8125L5.06237 18.0312C5.06237 18.0312 5.06237 18.0312 5.06237 18.0625L9.56237 15.625C9.84362 15.4687 10.1874 15.4687 10.4999 15.625L14.9999 18.0625C14.9999 18.0625 14.9999 18.0625 14.9999 18.0312L14.1561 12.7812C14.0936 12.4687 14.2186 12.1562 14.4374 11.9062L18.0936 8.15625C18.1249 8.125 18.0936 8.09375 18.0936 8.09375L13.0624 7.3125C12.7499 7.25 12.4686 7.0625 12.3436 6.75L9.99987 2L7.74987 6.78125C7.62487 7.0625 7.34362 7.28125 7.03112 7.34375L1.96862 8.125Z"
                                                    fill="" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4348_2007">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        {{ $repas->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>


            <div class="flex h-full flex-col border-l border-stroke dark:border-strokedark lg:w-4/5">
                <div class="flex flex-col gap-5 md:gap-7 2xl:gap-10 overflow-auto">
                    <!-- ====== Data Table Two Start -->
                    <div
                        class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                        <div class="data-table-common data-table-two max-w-full overflow-x-auto p-3">
                            <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
                                <table class="w-full table-auto">
                                    <thead class="rounded-md bg-black px-5.5 py-2.5 font-medium text-white">
                                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                            <th class="py-3 px-6 text-left">PLATS {{ request()->get('repas') }}</th>
                                            <th class="py-3 px-6 text-left">QUANTITÉS</th>
                                            <th class="py-3 px-6 text-center">DISPONIBLE</th>
                                            <th class="py-3 px-6 text-center">AJOUTER</th>
                                            <th class="py-3 px-6 text-center">N.COMMANDES</th>
                                            <th class="py-3 px-6 text-center">MONTANT</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-600 text-sm font-light">
                                        @if (isset($fetchAllPlat) && !$fetchAllPlat->isEmpty())
                                            @foreach ($fetchAllPlat as $value)
                                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <span class="font-medium">{{ $value->name }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-6 text-left">
                                                        <div class="flex items-center">
                                                            <span
                                                                id="quantite_{{ $value->id }}">{{ $value->quantite }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="py-3 px-6 text-center">
                                                        <span id="prix_{{ $value->id }}">{{ $value->prix }}</span><span>
                                                            XOF</span>
                                                    </td>
                                                    <td class="py-3 px-6 text-center">
                                                        <span>
                                                            <div x-data="{ switcherToggle: false }">
                                                                <label for="toggle_{{ $value->id }}"
                                                                    class="flex cursor-pointer select-none items-center">
                                                                    <div class="relative">
                                                                        <input type="checkbox"
                                                                            id="toggle_{{ $value->id }}"
                                                                            onchange="inputCheckedBox(event)"
                                                                            class="sr-only input-checked-box"
                                                                            @change="switcherToggle = !switcherToggle" />
                                                                        <div
                                                                            class="block h-8 w-14 rounded-full bg-meta-9 dark:bg-[#5A616B]">
                                                                        </div>
                                                                        <div :class="switcherToggle &&
                                                                            '!right-1 !translate-x-full !bg-primary dark:!bg-white'"
                                                                            class="dot absolute left-1 top-1 flex h-6 w-6 items-center justify-center rounded-full bg-white transition">
                                                                            <span :class="switcherToggle && '!block'"
                                                                                class="hidden text-white dark:text-bodydark">
                                                                                <svg class="fill-current stroke-current"
                                                                                    width="11" height="8"
                                                                                    viewBox="0 0 11 8" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                                                                                        fill="" stroke=""
                                                                                        stroke-width="0.4"></path>
                                                                                </svg>
                                                                            </span>
                                                                            <span :class="switcherToggle && 'hidden'">
                                                                                <svg class="h-4 w-4 stroke-current"
                                                                                    fill="none" viewBox="0 0 24 24"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="2"
                                                                                        d="M6 18L18 6M6 6l12 12"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </span>
                                                    </td>
                                                    <td class="py-3 px-6 text-center">
                                                        <div id="div_command_number_{{ $value->id }}" hidden>
                                                            <input type="number" id="command_number_{{ $value->id }}"
                                                                name="command_number_{{ $value->id }}" min="1"
                                                                placeholder="1"
                                                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-1.5 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                                        </div>
                                                    </td>

                                                    <td class="py-3 px-6 text-center">
                                                        <div id="div_values_{{ $value->id }}" hidden>
                                                            <input id="values_{{ $value->id }}" type="number"
                                                                min="1" placeholder="1" readonly
                                                                class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-1.5 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary sous-montant">
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr class="p-6 text-center">
                                                <td colspan="6" class="text-center">Aucun plat trouvé ! </td>
                                            </tr>
                                            <!-- Ajouter plus de lignes si nécessaire -->
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



                    @if (isset($fetchAllPlat) && !$fetchAllPlat->isEmpty())
                        <div class="col-span-12 flex flex-wrap items-center justify-between gap-3">
                            <!-- Datepicker built with flatpickr -->
                            <div class="relative">
                                <div class="grid grid-cols-1 gap-9 sm:grid-cols-1">
                                    <div class="flex flex-col gap-9">
                                        <!-- Select input -->
                                        <div
                                            class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                            <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                                                <h3 class="font-medium text-black dark:text-white">MANAGER</h3>
                                            </div>
                                            <div class="flex flex-col gap-5.5 p-6.5">
                                                <div>
                                                    <div x-data="{ isOptionSelected: false }"
                                                        class="relative z-20 bg-white dark:bg-form-input">
                                                        <span class="absolute left-4 top-1/2 z-30 -translate-y-1/2">
                                                            <svg class="fill-current" width="18" height="18"
                                                                viewBox="0 0 18 18" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.0002 7.79065C11.0814 7.79065 12.7689 6.1594 12.7689 4.1344C12.7689 2.1094 11.0814 0.478149 9.0002 0.478149C6.91895 0.478149 5.23145 2.1094 5.23145 4.1344C5.23145 6.1594 6.91895 7.79065 9.0002 7.79065ZM9.0002 1.7719C10.3783 1.7719 11.5033 2.84065 11.5033 4.16252C11.5033 5.4844 10.3783 6.55315 9.0002 6.55315C7.62207 6.55315 6.49707 5.4844 6.49707 4.16252C6.49707 2.84065 7.62207 1.7719 9.0002 1.7719Z"
                                                                    fill=""></path>
                                                                <path
                                                                    d="M10.8283 9.05627H7.17207C4.16269 9.05627 1.71582 11.5313 1.71582 14.5406V16.875C1.71582 17.2125 1.99707 17.5219 2.3627 17.5219C2.72832 17.5219 3.00957 17.2407 3.00957 16.875V14.5406C3.00957 12.2344 4.89394 10.3219 7.22832 10.3219H10.8564C13.1627 10.3219 15.0752 12.2063 15.0752 14.5406V16.875C15.0752 17.2125 15.3564 17.5219 15.7221 17.5219C16.0877 17.5219 16.3689 17.2407 16.3689 16.875V14.5406C16.2846 11.5313 13.8377 9.05627 10.8283 9.05627Z"
                                                                    fill=""></path>
                                                            </svg>
                                                        </span>
                                                        <select name="manager" id="manager"
                                                            class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-12 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input":class="isOptionSelected & amp; & amp; 'text-black dark:text-white'"
                                                            @change="isOptionSelected = true">
                                                            <option value="" class="text-body">Choisir le manager
                                                            </option>
                                                            @foreach ($serveurs as $server)
                                                                <option value="{{ $server->id }}" class="text-body">
                                                                    {{ $server->fullname }}
                                                                </option>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="relative ">
                                <div class="grid grid-cols-1 gap-9 sm:grid-cols-1">
                                    <div class="flex flex-col gap-9">
                                        <!-- Select input -->
                                        <div
                                            class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                            <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                                                <h3 class="font-medium text-black dark:text-white">CLIENT</h3>
                                            </div>
                                            <div class="flex flex-col gap-5.5 p-6.5">
                                                <div>
                                                    <div class="mb-5.5" x-data="{ isChecked: '' }">

                                                        <div class="flex flex-wrap items-center gap-5.5">
                                                            <div>
                                                                <label
                                                                    class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white">
                                                                    <input class="sr-only" value="0" type="radio"
                                                                        name="client" id="inconnu"
                                                                        @change="isChecked = 'inconnu'">
                                                                    <span
                                                                        class="flex h-5 w-5 items-center justify-center rounded-full border border-primary"
                                                                        :class="isChecked === 'inconnu' ?
                                                                            'border-primary' : 'border-body'">
                                                                        <span
                                                                            :class="isChecked === 'inconnu' ? 'flex' :
                                                                                'hidden'"
                                                                            class="h-2.5 w-2.5 rounded-full bg-primary flex"></span>
                                                                    </span>
                                                                    Client Inconnu
                                                                </label>
                                                            </div>

                                                            <div>
                                                                <label
                                                                    class="relative flex cursor-pointer select-none items-center gap-2 text-sm font-medium text-black dark:text-white">
                                                                    <input class="sr-only" type="radio"
                                                                        name="client" value="1" id="personnel"
                                                                        @change="isChecked = 'personnel'">
                                                                    <span
                                                                        class="flex h-5 w-5 items-center justify-center rounded-full border border-primary"
                                                                        :class="isChecked === 'personnel' ?
                                                                            'border-primary' : 'border-body'">
                                                                        <span
                                                                            :class="isChecked === 'personnel' ? 'flex' :
                                                                                'hidden'"
                                                                            class="h-2.5 w-2.5 rounded-full bg-primary flex"></span>
                                                                    </span>
                                                                    Personnel
                                                                </label>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="relative inline-block rounded bg-white shadow-card-2 dark:bg-boxdark">
                                <!-- Select input -->
                                <div
                                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                    <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                                        <h3 class="font-medium text-black dark:text-white">DESTINÉ À LA TABLE </h3>
                                    </div>
                                    <div class="flex flex-col gap-5.5 p-6.5">
                                        <div>
                                            <div x-data="{ isOptionSelected: false }"
                                                class="relative z-20 bg-white dark:bg-form-input">

                                                <select name="table" id="table"
                                                    class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-3 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input":class="isOptionSelected & amp; & amp; 'text-black dark:text-white'"
                                                    @change="isOptionSelected = true">
                                                    <option value="" class="text-body">Choisir la table</option>
                                                    @foreach ($tables as $table)
                                                        <option value="{{ $table->id }}" class="text-body">
                                                            {{ $table->name }}: [{{ $table->numero }}]
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <span class="absolute right-4 top-1/2 z-20 -translate-y-1/2">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g opacity="0.8">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z" fill="#637381"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div
                            class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                            <div
                                class="mb-10 rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="border-b border-stroke px-7 py-4 dark:border-strokedark">
                                    <h3 class="font-bold text-black dark:text-white text-center">
                                        RESUMÉ
                                    </h3>
                                </div>

                                <div class="p-4 md:p-6 xl:p-9">
                                    <div class="mb-7.5 flex flex-wrap gap-5 xl:gap-7.5">
                                        <a href="#" class="inline-flex items-center justify-center p-2 font-bold gap-2.5 border border-primary  text-center font-medium text-primary hover:bg-opacity-90">
                                            <span>
                                                <svg width="34" height="34" viewBox="0 0 34 34" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M25.925 11.9C21.7813 11.9 18.7532 10.0938 18.7532 7.65002C18.7532 5.20627 21.7813 3.40002 25.925 3.40002C30.0688 3.40002 33.0969 5.20627 33.0969 7.65002C33.0969 10.0938 30.0688 11.9 25.925 11.9ZM25.925 5.79065C22.95 5.79065 21.1438 6.90627 21.1438 7.65002C21.1438 8.39377 22.95 9.5094 25.925 9.5094C28.9 9.5094 30.7063 8.39377 30.7063 7.65002C30.7063 6.90627 28.8469 5.79065 25.925 5.79065Z" fill="rgb(60 80 224)"></path>
                                                    <path d="M25.9251 16.575C22.5782 16.575 19.922 15.4062 19.072 13.6C18.8063 13.0156 19.072 12.2719 19.6563 12.0062C20.2407 11.7406 20.9845 12.0062 21.2501 12.5906C21.622 13.3875 23.3751 14.1844 25.9782 14.1844C27.2001 14.1844 28.3157 13.9719 29.2188 13.6531C30.0157 13.3344 30.547 12.9094 30.7063 12.5375C30.9188 11.9 31.6095 11.5812 32.247 11.8469C32.8845 12.0594 33.2032 12.75 32.9376 13.3875C32.5657 14.45 31.5563 15.3531 30.0688 15.9375C28.847 16.3625 27.4126 16.575 25.9251 16.575Z" fill="rgb(60 80 224)"></path>
                                                    <path d="M25.9251 21.25C22.5782 21.25 19.922 20.0813 19.072 18.275C18.8063 17.6907 19.072 16.9469 19.6563 16.6813C20.2407 16.4157 20.9845 16.6813 21.2501 17.2657C21.622 18.0625 23.3751 18.8594 25.9782 18.8594C27.2001 18.8594 28.3157 18.6469 29.2188 18.3282C30.0157 18.0094 30.547 17.5844 30.7063 17.2125C30.9188 16.575 31.6095 16.2563 32.247 16.5219C32.8845 16.7344 33.2032 17.425 32.9376 18.0625C32.5657 19.125 31.5563 20.0282 30.0688 20.6125C28.847 21.0375 27.4126 21.25 25.9251 21.25Z" fill="rgb(60 80 224)"></path>
                                                    <path d="M25.9251 25.925C22.5782 25.925 19.922 24.7562 19.072 22.95C18.8063 22.3656 19.072 21.6218 19.6563 21.3562C20.2407 21.0906 20.9845 21.3562 21.2501 21.9406C21.622 22.7375 23.3751 23.5343 25.9782 23.5343C27.2001 23.5343 28.3157 23.3218 29.2188 23.0031C30.0157 22.6843 30.547 22.2593 30.7063 21.8875C30.9188 21.25 31.6095 20.9312 32.247 21.1968C32.8845 21.4093 33.2032 22.1 32.9376 22.7375C32.5657 23.8 31.5563 24.7031 30.0688 25.2875C28.847 25.7125 27.4126 25.925 25.9251 25.925Z" fill="rgb(60 80 224)"></path>
                                                    <path d="M25.9251 30.6C22.5782 30.6 19.922 29.4313 19.072 27.625C18.8063 27.0406 19.072 26.2969 19.6563 26.0313C20.2407 25.7656 20.9845 26.0313 21.2501 26.6156C21.622 27.4125 23.3751 28.2094 25.9782 28.2094C27.2001 28.2094 28.3157 27.9969 29.2188 27.6781C30.0157 27.3594 30.547 26.9344 30.7063 26.5625C30.9188 25.925 31.6095 25.6063 32.247 25.8719C32.8845 26.0844 33.2032 26.775 32.9376 27.4125C32.5657 28.475 31.5563 29.3781 30.0688 29.9625C28.847 30.3875 27.4126 30.6 25.9251 30.6Z" fill="rgb(60 80 224)"></path>
                                                    <path d="M8.07495 21.25C3.9312 21.25 0.903076 19.4437 0.903076 17C0.903076 14.5031 3.9312 12.75 8.07495 12.75C12.2187 12.75 15.2468 14.5563 15.2468 17C15.2468 19.4969 12.2187 21.25 8.07495 21.25ZM8.07495 15.1406C5.09995 15.1406 3.2937 16.2563 3.2937 17C3.2937 17.7437 5.09995 18.8594 8.07495 18.8594C11.05 18.8594 12.8562 17.7437 12.8562 17C12.8562 16.2563 11.05 15.1406 8.07495 15.1406Z" fill="rgb(60 80 224)"></path>
                                                    <path d="M8.07498 25.925C4.72811 25.925 2.07186 24.7562 1.22186 22.95C0.956234 22.3656 1.22186 21.6218 1.80623 21.3562C2.39061 21.0906 3.13436 21.3562 3.39998 21.9406C3.77186 22.7375 5.52498 23.5343 8.12811 23.5343C9.34999 23.5343 10.4656 23.3218 11.3687 23.0031C12.1656 22.6843 12.6969 22.2593 12.8562 21.8875C13.0687 21.25 13.7594 20.9312 14.3969 21.1968C15.0344 21.4093 15.3531 22.1 15.0875 22.7375C14.7156 23.8 13.7062 24.7031 12.2187 25.2875C11.05 25.7125 9.61561 25.925 8.07498 25.925Z" fill="rgb(60 80 224)"></path>
                                                    <path d="M8.07498 30.6C4.78123 30.6 2.07186 29.4313 1.22186 27.625C0.956234 27.0406 1.22186 26.2969 1.80623 26.0313C2.39061 25.7656 3.13436 26.0313 3.39998 26.6156C3.77186 27.4125 5.52498 28.2094 8.12811 28.2094C9.34999 28.2094 10.4656 27.9969 11.3687 27.6781C12.1656 27.3594 12.6969 26.9344 12.8562 26.5625C13.0687 25.925 13.7594 25.6063 14.3969 25.8719C15.0344 26.0844 15.3531 26.775 15.0875 27.4125C14.7156 28.475 13.7062 29.3781 12.2187 29.9625C11.05 30.3875 9.56249 30.6 8.07498 30.6Z" fill="rgb(60 80 224)"></path>
                                                </svg>
                                            </span> MONTANT TOTAL : <button class="bg-primary text-white p-2 border-black" id="montant"></button> <span class="text-black">XOF</span>
                                        </a>
                                    </div>

                                    <div class="mb-7.5 flex flex-wrap gap-5 xl:gap-7.5">
                                        <button type="submit" id="submitData"
                                            class="inline-flex items-center justify-center gap-2.5 rounded-md bg-primary p-2 text-center font-medium text-white hover:bg-opacity-90">
                                            <span>
                                                <svg class="fill-current" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M18.0758 0.849976H16.0695C15.819 0.851233 15.5774 0.942521 15.3886 1.10717C15.1999 1.27183 15.0766 1.49887 15.0414 1.74685L14.4789 5.80935H13.3976V3.4031C13.3952 3.1654 13.3002 2.93802 13.1327 2.76935C12.9652 2.60068 12.7384 2.50403 12.5008 2.49998H10.082C10.0553 2.27763 9.94981 2.07221 9.78472 1.92089C9.61964 1.76956 9.40584 1.68233 9.18202 1.67498H6.45389C6.32885 1.67815 6.20571 1.70632 6.09172 1.75782C5.97773 1.80932 5.8752 1.8831 5.79017 1.97484C5.70513 2.06657 5.63932 2.17439 5.59659 2.29195C5.55387 2.40951 5.5351 2.53443 5.54139 2.65935V3.32498H3.15077C2.91396 3.32162 2.68544 3.41207 2.51507 3.57659C2.3447 3.7411 2.24632 3.96632 2.24139 4.2031V5.81248C2.0999 5.81539 1.96078 5.84937 1.83387 5.91201C1.70697 5.97466 1.59538 6.06443 1.50702 6.17498C1.41616 6.29094 1.35267 6.42593 1.32128 6.56986C1.2899 6.7138 1.29143 6.86297 1.32577 7.00623C1.32443 7.02182 1.32443 7.0375 1.32577 7.0531L3.23827 12.9375C3.29323 13.1432 3.4153 13.3247 3.58513 13.4532C3.75496 13.5818 3.96282 13.6499 4.17577 13.6468H13.3883C13.7379 13.6464 14.0756 13.5197 14.3391 13.29C14.6027 13.0603 14.7744 12.7431 14.8226 12.3968L16.2508 2.09998H18.0726C18.2384 2.09998 18.3974 2.03413 18.5146 1.91692C18.6318 1.79971 18.6976 1.64074 18.6976 1.47498C18.6976 1.30922 18.6318 1.15024 18.5146 1.03303C18.3974 0.915824 18.2384 0.849976 18.0726 0.849976H18.0758ZM12.1383 5.79373H10.0945V3.74998H12.1476L12.1383 5.79373ZM6.79139 2.9156H8.84452V3.39998V5.7906H6.79139V2.9156ZM3.49139 4.5656H5.54139V5.79373H3.49139V4.5656ZM13.5851 12.225C13.579 12.2727 13.5556 12.3166 13.5193 12.3483C13.4831 12.38 13.4364 12.3972 13.3883 12.3968H4.37577L2.65389 7.04998H14.3039L13.5851 12.225Z"
                                                        fill=""></path>
                                                    <path
                                                        d="M5.31172 15.1125C4.9118 15.1094 4.51997 15.2252 4.18594 15.4451C3.85191 15.665 3.59073 15.9792 3.43553 16.3478C3.28034 16.7164 3.23813 17.1228 3.31425 17.5154C3.39037 17.908 3.58139 18.2692 3.86309 18.5531C4.14478 18.837 4.50445 19.0308 4.89647 19.11C5.28849 19.1891 5.6952 19.1501 6.06499 18.9978C6.43477 18.8454 6.75099 18.5867 6.97351 18.2544C7.19603 17.9221 7.31483 17.5312 7.31485 17.1312C7.31608 16.8671 7.26522 16.6053 7.16518 16.3608C7.06515 16.1164 6.91789 15.894 6.73184 15.7065C6.5458 15.519 6.3246 15.3701 6.08092 15.2681C5.83725 15.1662 5.57586 15.1133 5.31172 15.1125ZM5.31172 17.9C5.15905 17.9031 5.00891 17.8607 4.88045 17.7781C4.75199 17.6955 4.65103 17.5766 4.59045 17.4364C4.52986 17.2962 4.51239 17.1412 4.54026 16.9911C4.56814 16.8409 4.64009 16.7025 4.74695 16.5934C4.85382 16.4843 4.99075 16.4096 5.14028 16.3786C5.28981 16.3477 5.44518 16.3619 5.58656 16.4196C5.72794 16.4773 5.84894 16.5758 5.93412 16.7026C6.0193 16.8293 6.06481 16.9785 6.06484 17.1312C6.06651 17.3329 5.9882 17.5271 5.84705 17.6712C5.70589 17.8152 5.51341 17.8975 5.31172 17.9Z"
                                                        fill=""></path>
                                                    <path
                                                        d="M12.9504 15.1125C12.5505 15.1094 12.1586 15.2252 11.8246 15.4451C11.4906 15.665 11.2294 15.9792 11.0742 16.3478C10.919 16.7164 10.8768 17.1228 10.9529 17.5154C11.029 17.908 11.2201 18.2692 11.5018 18.5531C11.7835 18.837 12.1431 19.0308 12.5351 19.11C12.9272 19.1891 13.3339 19.1501 13.7037 18.9978C14.0734 18.8454 14.3897 18.5867 14.6122 18.2544C14.8347 17.9221 14.9535 17.5312 14.9535 17.1312C14.9552 16.598 14.7452 16.086 14.3696 15.7075C13.994 15.329 13.4836 15.115 12.9504 15.1125ZM12.9504 17.9C12.7977 17.9031 12.6476 17.8607 12.5191 17.7781C12.3907 17.6955 12.2897 17.5766 12.2291 17.4364C12.1685 17.2962 12.1511 17.1412 12.1789 16.9911C12.2068 16.8409 12.2788 16.7025 12.3856 16.5934C12.4925 16.4843 12.6294 16.4096 12.779 16.3786C12.9285 16.3477 13.0838 16.3619 13.2252 16.4196C13.3666 16.4773 13.4876 16.5758 13.5728 16.7026C13.658 16.8293 13.7035 16.9785 13.7035 17.1312C13.7052 17.3329 13.6269 17.5271 13.4857 17.6712C13.3446 17.8152 13.1521 17.8975 12.9504 17.9Z"
                                                        fill=""></path>
                                                </svg>
                                            </span>
                                            Confirmer
                                        </button>

                                        @if (session('vente'))
                                            <a href="{{ route('print_recu.vente', session('vente')->id) }}"
                                                class="inline-flex items-center gap-2.5 rounded bg-meta-3 p-2 py-[7px] font-medium text-white hover:bg-opacity-90">
                                                <svg class="fill-current" width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
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
                                                Print
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- ====== Inbox List End -->
                    @endif
                </div>
            </div>
        </div>

        <form action="{{ route('create.caisses') }}" method="POST" id="send-command" hidden>
            @csrf
        </form>

        <script src="{{ asset('js/caissesscript.js') }}"></script>

    @endsection
