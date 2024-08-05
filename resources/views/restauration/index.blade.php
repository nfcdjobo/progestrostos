@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Restaurations
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Tableau de Bord /</a>
                </li>
                <li class="font-medium text-primary">Restaurations</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <!-- File Details List Start -->
    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4">
            <div class="flex justify-between border-b border-r border-stroke px-7.5 py-7 dark:border-strokedark xl:border-b-0">
                <a href="{{route('table')}}">
                    <div class="flex items-center gap-5.5">
                        <div class="flex h-15 w-14.5 items-center justify-center rounded-lg bg-[#9B51E0]/[0.08]">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.01313 5.3272C4.76381 5.3272 4.52469 5.42625 4.34839 5.60254C4.17209 5.77884 4.07305 6.01796 4.07305 6.26728V23.8154C4.07305 24.0648 4.17209 24.3039 4.34839 24.4802C4.52469 24.6565 4.76381 24.7555 5.01313 24.7555H25.0682C25.3175 24.7555 25.5566 24.6565 25.7329 24.4802C25.9092 24.3039 26.0082 24.0648 26.0082 23.8154V10.0276C26.0082 9.77828 25.9092 9.53916 25.7329 9.36286C25.5566 9.18656 25.3175 9.08752 25.0682 9.08752H13.7872C13.2633 9.08752 12.7741 8.82571 12.4835 8.38983L10.4418 5.3272H5.01313ZM2.13261 3.38676C2.89657 2.62279 3.93272 2.1936 5.01313 2.1936H11.2803C11.8042 2.1936 12.2934 2.45542 12.584 2.8913L14.6257 5.95392H25.0682C26.1486 5.95392 27.1847 6.38311 27.9487 7.14707C28.7126 7.91104 29.1418 8.94719 29.1418 10.0276V23.8154C29.1418 24.8958 28.7126 25.932 27.9487 26.696C27.1847 27.4599 26.1486 27.8891 25.0682 27.8891H5.01313C3.93272 27.8891 2.89657 27.4599 2.13261 26.696C1.36864 25.932 0.939453 24.8958 0.939453 23.8154V6.26728C0.939453 5.18688 1.36864 4.15072 2.13261 3.38676Z"
                                    fill="#9B51E0" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-lg font-medium text-[#9B51E0]">TABLES</p>
                            <span class="text-lg font-medium">{{$countAllTables}}</span>
                        </div>
                    </div>
                </a>

                <div>Disponibles
                    <p class="mt-1.5 font-medium text-black dark:text-white">
                        {{$countFreeTables}}
                    </p>
                </div>

            </div>

            <div class="flex justify-between border-b border-r border-stroke px-7.5 py-7 dark:border-strokedark xl:border-b-0">
                <a href="{{route('index.repas')}}">
                    <div class="flex items-center gap-5.5">
                        <div class="flex h-15 w-14.5 items-center justify-center rounded-lg bg-[#219653]/[0.08]">

                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M6.84516 5.3272C6.32597 5.3272 5.90508 5.74809 5.90508 6.26728V23.8154C5.90508 24.3346 6.32597 24.7555 6.84516 24.7555H24.3933C24.9125 24.7555 25.3334 24.3346 25.3334 23.8154V6.26728C25.3334 5.74809 24.9125 5.3272 24.3933 5.3272H6.84516ZM2.77148 6.26728C2.77148 4.01745 4.59533 2.1936 6.84516 2.1936H24.3933C26.6431 2.1936 28.467 4.01745 28.467 6.26728V23.8154C28.467 26.0653 26.6431 27.8891 24.3933 27.8891H6.84516C4.59533 27.8891 2.77148 26.0653 2.77148 23.8154V6.26728Z"
                                    fill="#219653" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.2323 9.71414C10.7132 9.71414 10.2923 10.135 10.2923 10.6542C10.2923 11.1734 10.7132 11.5943 11.2323 11.5943C11.7515 11.5943 12.1724 11.1734 12.1724 10.6542C12.1724 10.135 11.7515 9.71414 11.2323 9.71414ZM8.41211 10.6542C8.41211 9.09665 9.67477 7.83398 11.2323 7.83398C12.7899 7.83398 14.0526 9.09665 14.0526 10.6542C14.0526 12.2118 12.7899 13.4745 11.2323 13.4745C9.67477 13.4745 8.41211 12.2118 8.41211 10.6542Z"
                                    fill="#219653" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.528 11.4264C20.1399 10.8146 21.1319 10.8146 21.7438 11.4264L28.011 17.6936C28.6228 18.3055 28.6228 19.2975 28.011 19.9094C27.3991 20.5213 26.4071 20.5213 25.7952 19.9094L20.6359 14.7501L7.95594 27.4301C7.34407 28.0419 6.35203 28.0419 5.74015 27.4301C5.12828 26.8182 5.12828 25.8261 5.74015 25.2143L19.528 11.4264Z"
                                    fill="#219653" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-lg font-medium text-[#219653]">REPAS</p>
                            <span class="text-lg font-medium">{{$countAllRepas}}</span>
                        </div>
                    </div>
                </a>

                <div>Disponible
                    <p class="mt-1.5 font-medium text-black dark:text-white">{{$countFreeRepas}}</p>
                </div>
            </div>

            <div class="flex justify-between border-b border-r border-stroke px-7.5 py-7 dark:border-strokedark sm:border-b-0">
                <a href="{{route('index.plats')}}">
                    <div class="flex items-center gap-5.5">
                        <div class="flex h-15 w-14.5 items-center justify-center rounded-lg bg-[#2F80ED]/[0.08]">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M27.9372 2.56492C28.2886 2.86261 28.4913 3.29985 28.4913 3.76041V20.0551C28.4913 20.9204 27.7898 21.6219 26.9245 21.6219C26.0592 21.6219 25.3577 20.9204 25.3577 20.0551V5.60996L13.45 7.59457V22.562C13.45 23.4273 12.7485 24.1288 11.8832 24.1288C11.0179 24.1288 10.3164 23.4273 10.3164 22.562V6.26729C10.3164 5.50138 10.8701 4.84773 11.6256 4.72181L26.6669 2.21493C27.1212 2.13922 27.5858 2.26722 27.9372 2.56492Z"
                                    fill="#2F80ED" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.12204 20.3685C6.91059 20.3685 5.92852 21.3505 5.92852 22.562C5.92852 23.7734 6.91059 24.7555 8.12204 24.7555C9.33349 24.7555 10.3156 23.7734 10.3156 22.562C10.3156 21.3505 9.33349 20.3685 8.12204 20.3685ZM2.79492 22.562C2.79492 19.6199 5.17995 17.2349 8.12204 17.2349C11.0641 17.2349 13.4492 19.6199 13.4492 22.562C13.4492 25.5041 11.0641 27.8891 8.12204 27.8891C5.17995 27.8891 2.79492 25.5041 2.79492 22.562Z"
                                    fill="#2F80ED" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M23.1631 17.8615C21.9516 17.8615 20.9695 18.8436 20.9695 20.055C20.9695 21.2665 21.9516 22.2485 23.1631 22.2485C24.3745 22.2485 25.3566 21.2665 25.3566 20.055C25.3566 18.8436 24.3745 17.8615 23.1631 17.8615ZM17.8359 20.055C17.8359 17.1129 20.221 14.7279 23.1631 14.7279C26.1051 14.7279 28.4902 17.1129 28.4902 20.055C28.4902 22.9971 26.1051 25.3821 23.1631 25.3821C20.221 25.3821 17.8359 22.9971 17.8359 20.055Z"
                                    fill="#2F80ED" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-lg font-medium text-[#2F80ED]">PLATS</p>
                            <span class="font-medium">{{$countAllPlats}}</span>
                        </div>
                    </div>
                </a>

                <div>Restants
                    <p class="mt-1.5 font-medium text-black dark:text-white">{{$countFreePlats}}</p>
                </div>
            </div>

            <div class="flex justify-between px-7.5 py-7">
                <a href="">
                    <div class="flex items-center gap-5.5">
                        <div class="flex h-15 w-14.5 items-center justify-center rounded-lg bg-[#F2994A]/[0.08]">
                            <svg width="31" height="31" viewBox="0 0 31 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5.27128 2.13334C6.03524 1.36938 7.0714 0.940186 8.1518 0.940186H18.1793C18.5949 0.940186 18.9934 1.10526 19.2872 1.39909L26.8078 8.91973C27.1017 9.21356 27.2668 9.61208 27.2668 10.0276V25.0689C27.2668 26.1493 26.8376 27.1855 26.0736 27.9494C25.3096 28.7134 24.2735 29.1426 23.1931 29.1426H8.1518C7.0714 29.1426 6.03524 28.7134 5.27128 27.9494C4.50731 27.1855 4.07812 26.1493 4.07812 25.0689V5.01386C4.07812 3.93346 4.50731 2.8973 5.27128 2.13334ZM8.1518 4.07378C7.90248 4.07378 7.66337 4.17283 7.48707 4.34913C7.31077 4.52543 7.21172 4.76454 7.21172 5.01386V25.0689C7.21172 25.3182 7.31077 25.5573 7.48707 25.7336C7.66337 25.9099 7.90248 26.009 8.1518 26.009H23.1931C23.4424 26.009 23.6815 25.9099 23.8578 25.7336C24.0341 25.5573 24.1332 25.3182 24.1332 25.0689V10.6766L17.5303 4.07378H8.1518Z"
                                    fill="#F2994A" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.1801 0.940186C19.0454 0.940186 19.7469 1.64167 19.7469 2.50698V8.46082H25.7007C26.566 8.46082 27.2675 9.1623 27.2675 10.0276C27.2675 10.8929 26.566 11.5944 25.7007 11.5944H18.1801C17.3148 11.5944 16.6133 10.8929 16.6133 10.0276V2.50698C16.6133 1.64167 17.3148 0.940186 18.1801 0.940186Z"
                                    fill="#F2994A" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.0918 16.2947C9.0918 15.4294 9.79328 14.7279 10.6586 14.7279H20.6861C21.5514 14.7279 22.2529 15.4294 22.2529 16.2947C22.2529 17.16 21.5514 17.8615 20.6861 17.8615H10.6586C9.79328 17.8615 9.0918 17.16 9.0918 16.2947Z"
                                    fill="#F2994A" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.0918 21.3085C9.0918 20.4432 9.79328 19.7417 10.6586 19.7417H20.6861C21.5514 19.7417 22.2529 20.4432 22.2529 21.3085C22.2529 22.1738 21.5514 22.8753 20.6861 22.8753H10.6586C9.79328 22.8753 9.0918 22.1738 9.0918 21.3085Z"
                                    fill="#F2994A" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9.0918 11.281C9.0918 10.4157 9.79328 9.71423 10.6586 9.71423H13.1655C14.0308 9.71423 14.7323 10.4157 14.7323 11.281C14.7323 12.1464 14.0308 12.8478 13.1655 12.8478H10.6586C9.79328 12.8478 9.0918 12.1464 9.0918 11.281Z"
                                    fill="#F2994A" />
                            </svg>
                        </div>

                        <div>
                            <p class="text-lg font-medium text-[#F2994A]">SERVEURS</p>
                            <span class="font-medium">{{$countAllServeurs}}</span>
                        </div>
                    </div>
                </a>

                <div>Disponible
                    <p class="mt-1.5 font-medium text-black dark:text-white">{{$countFreeServeurs}}</p>
                </div>
            </div>
        </div>

    </div>
    <!-- File Details List End -->

    <div class="flex flex-col mt-9 gap-y-4 rounded-sm border border-stroke bg-white p-3 shadow-default dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h3 class="text-title-lx font-bold text-black dark:text-white">
                GESTION DU STOCKE
            </h3>
        </div>

        <div class="flex flex-col gap-4 2xsm:flex-row 2xsm:items-center">
            <a href="{{route('index.stocke_restauration')}}">
                <button class="flex items-center gap-2 rounded bg-success px-4.5 py-2 font-medium text-white hover:bg-opacity-80">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 7H9V1C9 0.4 8.6 0 8 0C7.4 0 7 0.4 7 1V7H1C0.4 7 0 7.4 0 8C0 8.6 0.4 9 1 9H7V15C7 15.6 7.4 16 8 16C8.6 16 9 15.6 9 15V9H15C15.6 9 16 8.6 16 8C16 7.4 15.6 7 15 7Z" fill=""></path>
                    </svg>
                    AJOUTER STOCKE
                </button>
            </a>

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
                                    <p>LIBELLE</p>
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
                                    <p>PRIX UNITAIRE</p>
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
                                    <p>PRIX TOTAL</p>
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
                        @forelse ($article as $value)
                            <tr>
                                <td>{{$value->reference}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->quantite}}</td>
                                <td>{{$value->prix_unitaire}}</td>
                                <td>{{$value->prix_total}}</td>
                                <td>{{$value->etat}}</td>
                                <td>{{$value->status}}</td>
                                <td>Choisir ?</td>
                            </tr>
                        @empty

                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!-- ====== Data Table One End -->
    </div>
    <!-- ====== Table Section End -->
    <script>
        setTimeout(() => {
            const generate_elements = document.querySelectorAll('td');
            if(generate_elements.length){
                Array.from(generate_elements).filter(item => item.textContent == "Choisir ?").map(item => item.addEventListener('click', event => create_forms(event)))
            }

            const create_forms = event => {
                const id = event.target.closest('tr').querySelector('td').textContent;
                const route = `{{route('edite.stocke_restauration', '')}}/${id}`;
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
                                    <a href="${route}" class="flex w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
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
@endsection
