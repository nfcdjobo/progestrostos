@extends('layouts.main')
@section('content')
    @php
        use App\Models\Article;
        use Illuminate\Support\Facades\DB;
    @endphp
    <!-- Breadcrumb Start -->
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Dispatcher
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Tableau de Bord /</a>
                </li>
                <li class="font-medium text-primary">Dispatcher</li>
            </ol>
        </nav>
    </div>


    <div
        class="flex flex-col mb-2 gap-y-4 rounded-sm border border-stroke bg-white p-3 shadow-default dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h3 class="text-title-lx font-bold text-black dark:text-white">

            </h3>
        </div>

        <div class="flex flex-col gap-4 2xsm:flex-row 2xsm:items-center">
            <button
                class="flex items-center gap-2 rounded bg-success px-4.5 py-2 font-medium text-white hover:bg-opacity-80"><svg
                    class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_130_9728)">
                        <path
                            d="M3.45928 0.984375H1.6874C1.04053 0.984375 0.478027 1.51875 0.478027 2.19375V3.96563C0.478027 4.6125 1.0124 5.175 1.6874 5.175H3.45928C4.10615 5.175 4.66865 4.64063 4.66865 3.96563V2.16562C4.64053 1.51875 4.10615 0.984375 3.45928 0.984375ZM3.3749 3.88125H1.77178V2.25H3.3749V3.88125Z"
                            fill=""></path>
                        <path
                            d="M7.22793 3.71245H16.8748C17.2123 3.71245 17.5217 3.4312 17.5217 3.06558C17.5217 2.69995 17.2404 2.4187 16.8748 2.4187H7.22793C6.89043 2.4187 6.58105 2.69995 6.58105 3.06558C6.58105 3.4312 6.89043 3.71245 7.22793 3.71245Z"
                            fill=""></path>
                        <path
                            d="M3.45928 6.75H1.6874C1.04053 6.75 0.478027 7.28437 0.478027 7.95937V9.73125C0.478027 10.3781 1.0124 10.9406 1.6874 10.9406H3.45928C4.10615 10.9406 4.66865 10.4062 4.66865 9.73125V7.95937C4.64053 7.28437 4.10615 6.75 3.45928 6.75ZM3.3749 9.64687H1.77178V8.01562H3.3749V9.64687Z"
                            fill=""></path>
                        <path
                            d="M16.8748 8.21252H7.22793C6.89043 8.21252 6.58105 8.49377 6.58105 8.8594C6.58105 9.22502 6.86231 9.47815 7.22793 9.47815H16.8748C17.2123 9.47815 17.5217 9.1969 17.5217 8.8594C17.5217 8.5219 17.2123 8.21252 16.8748 8.21252Z"
                            fill=""></path>
                        <path
                            d="M3.45928 12.8531H1.6874C1.04053 12.8531 0.478027 13.3875 0.478027 14.0625V15.8344C0.478027 16.4813 1.0124 17.0438 1.6874 17.0438H3.45928C4.10615 17.0438 4.66865 16.5094 4.66865 15.8344V14.0625C4.64053 13.3875 4.10615 12.8531 3.45928 12.8531ZM3.3749 15.75H1.77178V14.1188H3.3749V15.75Z"
                            fill=""></path>
                        <path
                            d="M16.8748 14.2875H7.22793C6.89043 14.2875 6.58105 14.5687 6.58105 14.9344C6.58105 15.3 6.86231 15.5812 7.22793 15.5812H16.8748C17.2123 15.5812 17.5217 15.3 17.5217 14.9344C17.5217 14.5687 17.2123 14.2875 16.8748 14.2875Z"
                            fill=""></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_130_9728">
                            <rect width="18" height="18" fill="white"></rect>
                        </clipPath>
                    </defs>
                </svg>
                AJOUTER STOCKE
            </button>
        </div>
    </div>


    <!-- Breadcrumb End -->
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

                <div class="">
                    <div x-data="{ openDropDown: false }" class="relative inline-block">
                        <a href="#" @click.prevent="openDropDown = !openDropDown"
                            class="inline-flex items-center gap-2.5 rounded-md bg-primary px-5.5 py-3 font-medium text-white hover:bg-opacity-95">
                            <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_130_9728)">
                                    <path
                                        d="M3.45928 0.984375H1.6874C1.04053 0.984375 0.478027 1.51875 0.478027 2.19375V3.96563C0.478027 4.6125 1.0124 5.175 1.6874 5.175H3.45928C4.10615 5.175 4.66865 4.64063 4.66865 3.96563V2.16562C4.64053 1.51875 4.10615 0.984375 3.45928 0.984375ZM3.3749 3.88125H1.77178V2.25H3.3749V3.88125Z"
                                        fill=""></path>
                                    <path
                                        d="M7.22793 3.71245H16.8748C17.2123 3.71245 17.5217 3.4312 17.5217 3.06558C17.5217 2.69995 17.2404 2.4187 16.8748 2.4187H7.22793C6.89043 2.4187 6.58105 2.69995 6.58105 3.06558C6.58105 3.4312 6.89043 3.71245 7.22793 3.71245Z"
                                        fill=""></path>
                                    <path
                                        d="M3.45928 6.75H1.6874C1.04053 6.75 0.478027 7.28437 0.478027 7.95937V9.73125C0.478027 10.3781 1.0124 10.9406 1.6874 10.9406H3.45928C4.10615 10.9406 4.66865 10.4062 4.66865 9.73125V7.95937C4.64053 7.28437 4.10615 6.75 3.45928 6.75ZM3.3749 9.64687H1.77178V8.01562H3.3749V9.64687Z"
                                        fill=""></path>
                                    <path
                                        d="M16.8748 8.21252H7.22793C6.89043 8.21252 6.58105 8.49377 6.58105 8.8594C6.58105 9.22502 6.86231 9.47815 7.22793 9.47815H16.8748C17.2123 9.47815 17.5217 9.1969 17.5217 8.8594C17.5217 8.5219 17.2123 8.21252 16.8748 8.21252Z"
                                        fill=""></path>
                                    <path
                                        d="M3.45928 12.8531H1.6874C1.04053 12.8531 0.478027 13.3875 0.478027 14.0625V15.8344C0.478027 16.4813 1.0124 17.0438 1.6874 17.0438H3.45928C4.10615 17.0438 4.66865 16.5094 4.66865 15.8344V14.0625C4.64053 13.3875 4.10615 12.8531 3.45928 12.8531ZM3.3749 15.75H1.77178V14.1188H3.3749V15.75Z"
                                        fill=""></path>
                                    <path
                                        d="M16.8748 14.2875H7.22793C6.89043 14.2875 6.58105 14.5687 6.58105 14.9344C6.58105 15.3 6.86231 15.5812 7.22793 15.5812H16.8748C17.2123 15.5812 17.5217 15.3 17.5217 14.9344C17.5217 14.5687 17.2123 14.2875 16.8748 14.2875Z"
                                        fill=""></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_130_9728">
                                        <rect width="18" height="18" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                            LISTE DE STOCKES
                            <svg class="fill-current duration-200 ease-linear" :class="openDropDown && 'rotate-180'"
                                width="12" height="7" viewBox="0 0 12 7" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.564864 0.879232C0.564864 0.808624 0.600168 0.720364 0.653125 0.667408C0.776689 0.543843 0.970861 0.543844 1.09443 0.649756L5.82517 5.09807C5.91343 5.18633 6.07229 5.18633 6.17821 5.09807L10.9089 0.649756C11.0325 0.526192 11.2267 0.543844 11.3502 0.667408C11.4738 0.790972 11.4562 0.985145 11.3326 1.10871L6.60185 5.55702C6.26647 5.85711 5.73691 5.85711 5.41917 5.55702L0.670776 1.10871C0.600168 1.0381 0.564864 0.967492 0.564864 0.879232Z"
                                    fill="" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.4719 0.229332L6.00169 4.48868L10.5171 0.24288C10.9015 -0.133119 11.4504 -0.0312785 11.7497 0.267983C12.1344 0.652758 12.0332 1.2069 11.732 1.50812L11.7197 1.52041L6.97862 5.9781C6.43509 6.46442 5.57339 6.47872 5.03222 5.96853C5.03192 5.96825 5.03252 5.96881 5.03222 5.96853L0.271144 1.50833C0.123314 1.3605 -5.04223e-08 1.15353 -3.84322e-08 0.879226C-2.88721e-08 0.660517 0.0936127 0.428074 0.253705 0.267982C0.593641 -0.0719548 1.12269 -0.0699964 1.46204 0.220873L1.4719 0.229332ZM5.41917 5.55702C5.73691 5.85711 6.26647 5.85711 6.60185 5.55702L11.3326 1.10871C11.4562 0.985145 11.4738 0.790972 11.3502 0.667408C11.2267 0.543844 11.0325 0.526192 10.9089 0.649756L6.17821 5.09807C6.07229 5.18633 5.91343 5.18633 5.82517 5.09807L1.09443 0.649756C0.970861 0.543844 0.776689 0.543843 0.653125 0.667408C0.600168 0.720364 0.564864 0.808624 0.564864 0.879232C0.564864 0.967492 0.600168 1.0381 0.670776 1.10871L5.41917 5.55702Z"
                                    fill="" />
                            </svg>
                        </a>
                        <div x-show="openDropDown" @click.outside="openDropDown = false"
                            class="absolute left-0 top-full z-40 mt-2 w-full rounded-md border border-stroke bg-white py-3 shadow-card dark:border-strokedark dark:bg-boxdark">
                            <ul class="flex flex-col">
                                @forelse ($departements as $departement)
                                    <li>
                                        <a href="{{ route('dispatcher.index', $departement->id) }}" class="flex px-5 py-2 font-medium hover:bg-whiter hover:text-primary dark:hover:bg-meta-4"> {{ $departement->name }} </a>
                                    </li>
                                @empty
                                    <li>
                                        <a class="flex px-5 py-2 font-medium hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">Aucun département disponible</a>
                                    </li>
                                @endforelse

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="no-scrollbar max-h-full py-6">
                    <ul class="flex flex-col gap-2" x-data="{ isActive: 'inbox' }">
                        @if ($detect === 1)
                            @forelse ($stockes as $stock)
                                @php
                                    $isActive =
                                        Route::currentRouteName() === 'dispatcher.index' &&
                                        request()->segment(2) == $stock->departement_id &&
                                        request()->segment(3) == $stock->id;
                                @endphp
                                <li>
                                    <a href="{{ route('dispatcher.index', [$stock->departement_id, $stock->id]) }}"
                                        class="relative flex items-center gap-2.5 px-5 py-2.5 font-medium duration-300 ease-linear {{ $isActive ? 'before:absolute before:left-0 before:h-0 before:w-1 before:bg-primary  before:duration-300 before:ease-linear' : '' }}  hover:bg-primary/5 hover:text-primary hover:before:h-full"
                                        :class="isActive === 'inbox' ? 'bg-primary/5 before:!h-full' : ''">
                                        <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.46875 10.5625H6.78125C6.40625 10.5625 6.0625 10.875 6.0625 11.2812C6.0625 11.6875 6.375 12 6.78125 12H8.46875C8.84375 12 9.1875 11.6875 9.1875 11.2812C9.1875 10.875 8.875 10.5625 8.46875 10.5625Z"
                                                fill="" />
                                            <path
                                                d="M13.1875 10.5625H11.5C11.125 10.5625 10.7812 10.875 10.7812 11.2812C10.7812 11.6875 11.0937 12 11.5 12H13.1875C13.5625 12 13.9062 11.6875 13.9062 11.2812C13.9062 10.875 13.5938 10.5625 13.1875 10.5625Z"
                                                fill="" />
                                            <path
                                                d="M17.8125 8.84375V5.15625C18.125 5.09375 18.3438 4.8125 18.3438 4.46875C18.3438 4.09375 18.0312 3.75 17.625 3.75H16.5625C16.1875 3.75 15.8438 4.0625 15.8438 4.46875C15.8438 4.78125 16.0625 5.0625 16.375 5.15625V8.6875H16C15.625 7.34375 14.375 6.3125 12.9062 6.3125H7.125C5.65625 6.3125 4.40625 7.3125 4.03125 8.6875H3.0625C1.6875 8.6875 0.53125 9.8125 0.53125 11.2188V11.3438C0.53125 12.7188 1.65625 13.875 3.0625 13.875H4.03125C4.40625 15.2188 5.65625 16.25 7.125 16.25H12.9375C14.4062 16.25 15.6562 15.25 16.0312 13.875H16.9375C18.3125 13.875 19.4688 12.75 19.4688 11.3438V11.2188C19.4688 10.125 18.75 9.1875 17.8125 8.84375ZM1.96875 11.3438V11.2188C1.96875 10.5938 2.46875 10.0938 3.09375 10.0938H3.9375V12.4375H3.0625C2.4375 12.4375 1.96875 11.9375 1.96875 11.3438ZM12.9375 14.8125H7.125C6.125 14.8125 5.3125 14 5.3125 13V9.53125C5.3125 8.53125 6.125 7.71875 7.125 7.71875H12.9375C13.9375 7.71875 14.75 8.53125 14.75 9.53125V13C14.7188 14 13.9062 14.8125 12.9375 14.8125ZM18.0625 11.3438C18.0625 11.9688 17.5625 12.4688 16.9375 12.4688H16.125V10.125H16.9375C17.5625 10.125 18.0625 10.625 18.0625 11.25V11.3438Z"
                                                fill="" />
                                        </svg>
                                        {{ $stock->reference }}
                                    </a>
                                </li>
                            @empty
                                <li>
                                    <a class="flex px-5 py-2 font-medium hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">Aucun stocke disponible</a>
                                </li>
                            @endforelse
                        @elseif ($detect === 2)
                            @forelse ($stockes as $stock)
                                @php
                                    $isActive =
                                        Route::currentRouteName() === 'dispatcher.index' &&
                                        request()->segment(2) == $stock->departement_id &&
                                        request()->segment(3) == $stock->id;
                                @endphp
                                <li>
                                    <a href="{{ route('dispatcher.index', [$stock->departement_id, $stock->id]) }}"
                                        class="relative flex items-center gap-2.5 px-5 py-2.5 font-medium duration-300 ease-linear  {{ $isActive ? 'before:absolute before:left-0 before:h-0 before:w-1 before:bg-primary  before:duration-300 before:ease-linear' : '' }} hover:bg-primary/5 hover:text-primary hover:before:h-full"
                                        :class="isActive === 'inbox' ? 'bg-primary/5 before:!h-full' : ''">
                                        <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.46875 10.5625H6.78125C6.40625 10.5625 6.0625 10.875 6.0625 11.2812C6.0625 11.6875 6.375 12 6.78125 12H8.46875C8.84375 12 9.1875 11.6875 9.1875 11.2812C9.1875 10.875 8.875 10.5625 8.46875 10.5625Z"
                                                fill="" />
                                            <path
                                                d="M13.1875 10.5625H11.5C11.125 10.5625 10.7812 10.875 10.7812 11.2812C10.7812 11.6875 11.0937 12 11.5 12H13.1875C13.5625 12 13.9062 11.6875 13.9062 11.2812C13.9062 10.875 13.5938 10.5625 13.1875 10.5625Z"
                                                fill="" />
                                            <path
                                                d="M17.8125 8.84375V5.15625C18.125 5.09375 18.3438 4.8125 18.3438 4.46875C18.3438 4.09375 18.0312 3.75 17.625 3.75H16.5625C16.1875 3.75 15.8438 4.0625 15.8438 4.46875C15.8438 4.78125 16.0625 5.0625 16.375 5.15625V8.6875H16C15.625 7.34375 14.375 6.3125 12.9062 6.3125H7.125C5.65625 6.3125 4.40625 7.3125 4.03125 8.6875H3.0625C1.6875 8.6875 0.53125 9.8125 0.53125 11.2188V11.3438C0.53125 12.7188 1.65625 13.875 3.0625 13.875H4.03125C4.40625 15.2188 5.65625 16.25 7.125 16.25H12.9375C14.4062 16.25 15.6562 15.25 16.0312 13.875H16.9375C18.3125 13.875 19.4688 12.75 19.4688 11.3438V11.2188C19.4688 10.125 18.75 9.1875 17.8125 8.84375ZM1.96875 11.3438V11.2188C1.96875 10.5938 2.46875 10.0938 3.09375 10.0938H3.9375V12.4375H3.0625C2.4375 12.4375 1.96875 11.9375 1.96875 11.3438ZM12.9375 14.8125H7.125C6.125 14.8125 5.3125 14 5.3125 13V9.53125C5.3125 8.53125 6.125 7.71875 7.125 7.71875H12.9375C13.9375 7.71875 14.75 8.53125 14.75 9.53125V13C14.7188 14 13.9062 14.8125 12.9375 14.8125ZM18.0625 11.3438C18.0625 11.9688 17.5625 12.4688 16.9375 12.4688H16.125V10.125H16.9375C17.5625 10.125 18.0625 10.625 18.0625 11.25V11.3438Z"
                                                fill="" />
                                        </svg>
                                        {{ $stock->reference }}
                                    </a>
                                </li>
                            @empty
                                <li>
                                    <a class="flex px-5 py-2 font-medium hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">Aucun stocke disponible</a>
                                </li>
                            @endforelse
                        @else
                            @forelse ($stockes as $stock)
                                @php
                                    $isActive =
                                        Route::currentRouteName() === 'dispatcher.index' &&
                                        request()->segment(2) == $stock->departement_id &&
                                        request()->segment(3) == $stock->id;
                                @endphp
                                <li>
                                    <a href="{{ route('dispatcher.index', [$stock->departement_id, $stock->id]) }}"
                                        class="relative flex items-center gap-2.5 px-5 py-2.5 font-medium duration-300 ease-linear {{ $isActive ? 'before:absolute before:left-0 before:h-0 before:w-1 before:bg-primary  before:duration-300 before:ease-linear' : '' }} hover:bg-primary/5 hover:text-primary hover:before:h-full"
                                        :class="isActive === 'inbox' ? 'bg-primary/5 before:!h-full' : ''">
                                        <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.46875 10.5625H6.78125C6.40625 10.5625 6.0625 10.875 6.0625 11.2812C6.0625 11.6875 6.375 12 6.78125 12H8.46875C8.84375 12 9.1875 11.6875 9.1875 11.2812C9.1875 10.875 8.875 10.5625 8.46875 10.5625Z"
                                                fill="" />
                                            <path
                                                d="M13.1875 10.5625H11.5C11.125 10.5625 10.7812 10.875 10.7812 11.2812C10.7812 11.6875 11.0937 12 11.5 12H13.1875C13.5625 12 13.9062 11.6875 13.9062 11.2812C13.9062 10.875 13.5938 10.5625 13.1875 10.5625Z"
                                                fill="" />
                                            <path
                                                d="M17.8125 8.84375V5.15625C18.125 5.09375 18.3438 4.8125 18.3438 4.46875C18.3438 4.09375 18.0312 3.75 17.625 3.75H16.5625C16.1875 3.75 15.8438 4.0625 15.8438 4.46875C15.8438 4.78125 16.0625 5.0625 16.375 5.15625V8.6875H16C15.625 7.34375 14.375 6.3125 12.9062 6.3125H7.125C5.65625 6.3125 4.40625 7.3125 4.03125 8.6875H3.0625C1.6875 8.6875 0.53125 9.8125 0.53125 11.2188V11.3438C0.53125 12.7188 1.65625 13.875 3.0625 13.875H4.03125C4.40625 15.2188 5.65625 16.25 7.125 16.25H12.9375C14.4062 16.25 15.6562 15.25 16.0312 13.875H16.9375C18.3125 13.875 19.4688 12.75 19.4688 11.3438V11.2188C19.4688 10.125 18.75 9.1875 17.8125 8.84375ZM1.96875 11.3438V11.2188C1.96875 10.5938 2.46875 10.0938 3.09375 10.0938H3.9375V12.4375H3.0625C2.4375 12.4375 1.96875 11.9375 1.96875 11.3438ZM12.9375 14.8125H7.125C6.125 14.8125 5.3125 14 5.3125 13V9.53125C5.3125 8.53125 6.125 7.71875 7.125 7.71875H12.9375C13.9375 7.71875 14.75 8.53125 14.75 9.53125V13C14.7188 14 13.9062 14.8125 12.9375 14.8125ZM18.0625 11.3438C18.0625 11.9688 17.5625 12.4688 16.9375 12.4688H16.125V10.125H16.9375C17.5625 10.125 18.0625 10.625 18.0625 11.25V11.3438Z"
                                                fill="" />
                                        </svg>
                                        {{ $stock->reference }}
                                    </a>
                                </li>
                            @empty
                            @endforelse
                        @endif
                    </ul>
                </div>
            </div>

            <div class="flex h-full flex-col border-l border-stroke dark:border-strokedark lg:w-4/5 overflow-y-auto">
                <!-- ====== Data Table One Start -->
                <div
                    class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                    <div class="data-table-common data-table-one max-w-full overflow-x-auto">
                        <table class="table w-full table-auto" id="dataTableOne">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="flex items-center gap-1.5">
                                            <p>ARTICLE</p>
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
                                            <p>RESTANT<sup style="color: blue;">(XOF)</sup></p>
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
                                            <p>PRIX<sup style="color: blue;">(XOF)</sup></p>
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
                                            <p>ACTION</p>
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
                                            <p>QUANTIÉ</p>
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
                                            <p>MONTANT<sup style="color: blue;">(XOF)</sup></p>
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
                                @forelse ($articles as $article)
                                    <tr>
                                        <td>{{ $article->name }}</td>
                                        <td>
                                            <span id="span_{{ $article->id }}">{{ $article->quantite }}</span>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <span
                                                    id="prix_{{ $article->id }}">{{ $article->prix_vente_unitaire }}</span>
                                            </a>

                                        </td>
                                        <td>
                                            <div x-data="{ switcherToggle: false }">
                                                <label for="article_{{ $article->id }}"
                                                    class="flex cursor-pointer select-none items-center">
                                                    <div class="relative">
                                                        <input type="checkbox" name="article_{{ $article->id }}"
                                                            value="{{ $article->id }}" id="article_{{ $article->id }}"
                                                            class="sr-only" @change="switcherToggle = !switcherToggle" />
                                                        <div
                                                            class="block h-8 w-14 rounded-full bg-meta-9 dark:bg-[#5A616B]">
                                                        </div>
                                                        <div :class="switcherToggle &&
                                                            '!right-1 !translate-x-full !bg-primary dark:!bg-white'"
                                                            class="dot absolute left-1 top-1 flex h-6 w-6 items-center justify-center rounded-full bg-white transition">
                                                            <span :class="switcherToggle && '!block'"
                                                                class="hidden text-white dark:text-bodydark">
                                                                <svg class="fill-current stroke-current" width="11"
                                                                    height="8" viewBox="0 0 11 8" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                                                                        fill="" stroke="" stroke-width="0.4">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <span :class="switcherToggle && 'hidden'">

                                                                <svg class="h-4 w-4 stroke-current" fill="none"
                                                                    viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <input hidden type="number" min="0" max="{{ $article->quantite }}"
                                                name="quantite_{{ $article->id }}" id="quantite_{{ $article->id }}"
                                                placeholder="Enter your full name"
                                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-2 py-2 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                        </td>
                                        <td>
                                            <input hidden type="number" readonly value="montant_{{ $article->id }}"
                                                name="montant_{{ $article->id }}" id="montant_{{ $article->id }}"
                                                placeholder="Enter your full name"
                                                class="w-full rounded border-[1.5px] border-stroke bg-transparent px-2 py-2 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- ====== Data Table One End -->

                <div class="flex flex-col mt-9 gap-9">
                    <!-- Contact Form -->
                    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">

                        <form action="#">
                            <div class="p-6.5">
                                <div class="mb-4.5 flex flex-col gap-6 xl:flex-row">
                                    <div class="w-full  xl:w-1/2">
                                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                            Définir la date
                                        </label>
                                        <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent dark:bg-form-input">
                                            <div class="relative">
                                                <input name="date" value="{{ now()->format('M d, Y') }}" required
                                                    id="date"
                                                    class="form-datepicker w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                                    placeholder="mm/dd/yyyy" data-class="flatpickr-right" />
                                                <div
                                                    class="pointer-events-none absolute inset-0 left-auto right-5 flex items-center">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.7504 2.9812H14.2879V2.36245C14.2879 2.02495 14.0066 1.71558 13.641 1.71558C13.2754 1.71558 12.9941 1.99683 12.9941 2.36245V2.9812H4.97852V2.36245C4.97852 2.02495 4.69727 1.71558 4.33164 1.71558C3.96602 1.71558 3.68477 1.99683 3.68477 2.36245V2.9812H2.25039C1.29414 2.9812 0.478516 3.7687 0.478516 4.75308V14.5406C0.478516 15.4968 1.26602 16.3125 2.25039 16.3125H15.7504C16.7066 16.3125 17.5223 15.525 17.5223 14.5406V4.72495C17.5223 3.7687 16.7066 2.9812 15.7504 2.9812ZM1.77227 8.21245H4.16289V10.9968H1.77227V8.21245ZM5.42852 8.21245H8.38164V10.9968H5.42852V8.21245ZM8.38164 12.2625V15.0187H5.42852V12.2625H8.38164V12.2625ZM9.64727 12.2625H12.6004V15.0187H9.64727V12.2625ZM9.64727 10.9968V8.21245H12.6004V10.9968H9.64727ZM13.8379 8.21245H16.2285V10.9968H13.8379V8.21245ZM2.25039 4.24683H3.71289V4.83745C3.71289 5.17495 3.99414 5.48433 4.35977 5.48433C4.72539 5.48433 5.00664 5.20308 5.00664 4.83745V4.24683H13.0504V4.83745C13.0504 5.17495 13.3316 5.48433 13.6973 5.48433C14.0629 5.48433 14.3441 5.20308 14.3441 4.83745V4.24683H15.7504C16.0316 4.24683 16.2566 4.47183 16.2566 4.75308V6.94683H1.77227V4.75308C1.77227 4.47183 1.96914 4.24683 2.25039 4.24683ZM1.77227 14.5125V12.2343H4.16289V14.9906H2.25039C1.96914 15.0187 1.77227 14.7937 1.77227 14.5125ZM15.7504 15.0187H13.8379V12.2625H16.2285V14.5406C16.2566 14.7937 16.0316 15.0187 15.7504 15.0187Z"
                                                            fill="#64748B" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="w-full xl:w-1/2">
                                        <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                                            Espace
                                        </label>
                                        <div class="relative">
                                            <div>
                                                <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-white dark:bg-form-input">
                                                    <select name="espace" id="espace" required
                                                        class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                                        @change="isOptionSelected = true">
                                                        <option value="" selected disabled class="text-body">Choisir une
                                                            espace</option>
                                                        @foreach ($espaces as $espace)
                                                            <option value="{{ $espace->id }}" class="text-body">
                                                                {{ $espace->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <span class="absolute right-4 top-1/2 z-20 -translate-y-1/2">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
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

                                    <div class="w-full xl:w-1/2">
                                        <label for="repas" class="mb-3 block text-sm font-medium text-black dark:text-white">
                                            Repas
                                        </label>
                                        <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent dark:bg-form-input">
                                            <select name="repas" id="repas" required
                                                class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary"
                                                :class="isOptionSelected && 'text-black dark:text-white'"
                                                @change="isOptionSelected = true">
                                                <option value="" class="text-body" @disabled(true) @selected(true)>
                                                    Choisir le repas
                                                </option>
                                                @foreach ($repas as $value)
                                                    <option value="{{$value->id}}" class="text-body">{{$value->name}}</option>
                                                @endforeach

                                            </select>
                                            <span class="absolute right-4 top-1/2 z-30 -translate-y-1/2">
                                                <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g opacity="0.8">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.29289 8.29289C5.68342 7.90237 6.31658 7.90237 6.70711 8.29289L12 13.5858L17.2929 8.29289C17.6834 7.90237 18.3166 7.90237 18.7071 8.29289C19.0976 8.68342 19.0976 9.31658 18.7071 9.70711L12.7071 15.7071C12.3166 16.0976 11.6834 16.0976 11.2929 15.7071L5.29289 9.70711C4.90237 9.31658 4.90237 8.68342 5.29289 8.29289Z" fill=""></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" id="submitData" class="flex w-full justify-center rounded bg-primary p-3 font-medium text-gray hover:bg-opacity-90">
                                    Sauvegarder
                                </button>
                            </div>
                        </form>
                    </div>
                </div>





                <form action="{{ route('dispatcher.store') }}" method="post" id="formToSave">
                    @csrf
                </form>


            </div>
        </div>
    </div>


    <!-- ====== Data Table Two Start -->
    <div class="rounded-sm mt-9 border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="data-table-common data-table-two max-w-full overflow-x-auto">
            <table class="table w-full table-auto" id="dataTableTwo">
                <thead>
                    <tr>
                        <th>
                            <div class="flex items-center justify-between gap-1.5">
                                <p>ESPACE</p>
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
                            <div class="flex items-center justify-between gap-1.5">
                                <p>DÉTAIL</p>
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
                            <div class="flex items-center justify-between gap-1.5">
                                <p>MONTANT<sup style="color: rgb(255, 0, 0)">(XOF)</sup></p>
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
                            <div class="flex items-center justify-between gap-1.5">
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

                    </tr>
                </thead>
                <tbody>
                    @forelse ($dispatchs as $dispatch)
                        <tr>
                            <td>{{ $dispatch->espace->name }}</td>
                            <td>
                                <div x-data="{ popupOpen: false }">
                                    <button @click="popupOpen = true"
                                        class="flex items-center gap-2 rounded bg-primary px-4.5 py-2 font-medium text-white hover:bg-opacity-80">

                                        Voir Détails
                                    </button>

                                    <!-- ===== Task Popup Start ===== -->
                                    <div x-show="popupOpen" x-transition
                                        class="fixed left-0 top-0 z-99999 flex h-screen w-full justify-center overflow-y-scroll bg-black/80 px-4 py-5">
                                        <div @click.outside="popupOpen = false"
                                            class="relative m-auto w-full rounded-sm border border-stroke bg-gray p-4 shadow-default dark:border-strokedark dark:bg-meta-4 sm:p-8 xl:p-10">
                                            <button @click="popupOpen = false"
                                                class="absolute right-1 top-1 sm:right-5 sm:top-5">
                                                <svg class="fill-current" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M11.8913 9.99599L19.5043 2.38635C20.032 1.85888 20.032 1.02306 19.5043 0.495589C18.9768 -0.0317329 18.141 -0.0317329 17.6135 0.495589L10.0001 8.10559L2.38673 0.495589C1.85917 -0.0317329 1.02343 -0.0317329 0.495873 0.495589C-0.0318274 1.02306 -0.0318274 1.85888 0.495873 2.38635L8.10887 9.99599L0.495873 17.6056C-0.0318274 18.1331 -0.0318274 18.9689 0.495873 19.4964C0.717307 19.7177 1.05898 19.9001 1.4413 19.9001C1.75372 19.9001 2.13282 19.7971 2.40606 19.4771L10.0001 11.8864L17.6135 19.4964C17.8349 19.7177 18.1766 19.9001 18.5589 19.9001C18.8724 19.9001 19.2531 19.7964 19.5265 19.4737C20.0319 18.9452 20.0245 18.1256 19.5043 17.6056L11.8913 9.99599Z"
                                                        fill="" />
                                                </svg>
                                            </button>

                                            <div class="flex flex-col gap-10">
                                                <!-- ====== Table Five Start -->
                                                <div class="w-full overflow-x-auto">
                                                    <div class="min-w-[1170px]">
                                                        <!-- table header start -->
                                                        <div
                                                            class="grid grid-cols-12 rounded-t-[10px] bg-black px-5 py-4 lg:px-7.5 2xl:px-11">
                                                            <div class="col-span-3">
                                                                <h5 class="font-medium text-white">NOM</h5>
                                                            </div>

                                                            <div class="col-span-3">
                                                                <h5 class="font-medium text-white">QUANTITÉ</h5>
                                                            </div>

                                                            <div class="col-span-3">
                                                                <h5 class="font-medium text-white">PRIX<sup
                                                                        style="color: rgb(255, 0, 0)">(XOF)</sup></h5>
                                                            </div>

                                                            <div class="col-span-2">
                                                                <h5 class="font-medium text-white">ESPACE</h5>
                                                            </div>

                                                            <div class="col-span-1">
                                                                <h5 class="text-right font-medium text-white">STOCKE</h5>
                                                            </div>
                                                        </div>
                                                        <!-- table header end -->

                                                        <!-- table body start -->
                                                        <div class="bg-white dark:bg-boxdark rounded-b-[10px]">
                                                            @php
                                                                $details = json_decode($dispatch->detail, true);
                                                            @endphp

                                                            @forelse ($details as $detail)
                                                                @php
                                                                    $getArticle = DB::table('articles')
                                                                        ->where('id', $detail['articleId'])
                                                                        ->first();
                                                                    $getArticle = Article::whereHas('stocke')
                                                                        ->where('id', $detail['articleId'])
                                                                        ->first();
                                                                @endphp

                                                                <!-- table row item -->
                                                                <div
                                                                    class="grid grid-cols-12 border-t border-[#EEEEEE] px-5 py-4 dark:border-strokedark lg:px-7.5 2xl:px-11">
                                                                    <div class="col-span-3">
                                                                        <p class="text-[#637381] dark:text-bodydark">
                                                                            {{ $getArticle->name }}
                                                                        </p>
                                                                    </div>

                                                                    <div class="col-span-3">
                                                                        <p class="text-[#637381] dark:text-bodydark">
                                                                            {{ $detail['quantite'] }}
                                                                        </p>
                                                                    </div>

                                                                    <div class="col-span-3">
                                                                        <p class="text-[#637381] dark:text-bodydark">
                                                                            {{ $getArticle->prix_vente_unitaire }}
                                                                        </p>
                                                                    </div>

                                                                    <div class="col-span-2">
                                                                        <p class="text-[#637381] dark:text-bodydark">
                                                                            {{ $dispatch->espace->name }}</p>
                                                                    </div>

                                                                    <div class="col-span-1">
                                                                        <p class="text-[#637381] dark:text-bodydark">
                                                                            {{ $getArticle->reference }}</p>
                                                                    </div>
                                                                </div>
                                                            @empty
                                                            @endforelse

                                                        </div>
                                                        <!-- table body end -->
                                                    </div>
                                                </div>

                                                <!-- ====== Table Five End -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- ===== Task Popup End ===== -->
                                </div>
                            </td>
                            <td>{{ $dispatch->montant }}</td>
                            <td>{{ $dispatch->date }}</td>
                        </tr>

                    @empty
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
    <!-- ====== Data Table Two End -->
    <script src="{{ asset('js/script_dispatch.js') }}"></script>
@endsection
