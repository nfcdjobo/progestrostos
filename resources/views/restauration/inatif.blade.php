@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white"> Liste Stockes @if ($currentRouteName === "fetchStockesManquants.stocke_restauration") Manquants @else Suspendus  @endif </h2>
        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Tableau de Bord /</a>
                </li>
                <li>
                    <a class="font-medium" href="{{ route('listing.restauration') }}">Restauration /</a>
                </li>
                <li class="font-medium text-primary">
                    Stockes @if ($currentRouteName === "fetchStockesManquants.stocke_restauration") Manquants @else Suspendus  @endif
                </li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

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
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill=""/>
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill=""/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </th>

                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>NOM</p>
                                    <div class="inline-flex flex-col space-y-[2px]">
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill=""/>
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill=""/>
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
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill=""/>
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill=""/>
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
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill=""/>
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill=""/>
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
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill=""/>
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill=""/>
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
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill=""/>
                                            </svg>
                                        </span>
                                        <span class="inline-block">
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z" fill=""/>
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
                                            <svg class="fill-current" width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M5 0L0 5H10L5 0Z" fill=""/>
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
                                <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">{{$value->reference}}</td>
                                <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">{{$value->name}}</td>
                                <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark"> {{$value->quantite}}</td>
                                <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">{{$value->prix_unitaire}} XOF</td>
                                <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">{{$value->prix_total}} XOF</td>
                                <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark">{{$value->activite->name}}</td>
                                <td class="border-b border-[#eee] px-4 py-5 dark:border-strokedark tdaction" index="tdaction_{{$value->id}}">
                                    <div class="col-span-1 relative">
                                        <div x-data="{ isOpen: false }">
                                            <button @click.prevent="isOpen = !isOpen" class="float-right inline-flex items-center gap-1.5 rounded-md px-3 py-1.5 text-sm text-black shadow-11 hover:text-primary dark:bg-meta-4 dark:text-white dark:shadow-none">
                                                Choisir...
                                                <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.00039 11.4C7.85039 11.4 7.72539 11.35 7.60039 11.25L1.85039 5.60005C1.62539 5.37505 1.62539 5.02505 1.85039 4.80005C2.07539 4.57505 2.42539 4.57505 2.65039 4.80005L8.00039 10.025L13.3504 4.75005C13.5754 4.52505 13.9254 4.52505 14.1504 4.75005C14.3754 4.97505 14.3754 5.32505 14.1504 5.55005L8.40039 11.2C8.27539 11.325 8.15039 11.4 8.00039 11.4Z" fill=""></path>
                                                </svg>
                                            </button>

                                            <div @click.outside="isOpen = false" x-show="isOpen" class="absolute right-0 top-full z-1 mt-1 w-full max-w-39.5 rounded-[5px] bg-white py-2.5 shadow-12 dark:bg-boxdark">
                                                <a href="{{route('show.stocke_restauration', $value->id)}}" class="flex w-full px-4 py-2 text-sm hover:bg-whiter hover:text-primary dark:hover:bg-meta-4">
                                                    Details
                                                </a>
                                                <div x-data="{ modalOpen: false }">
                                                    <button @click="modalOpen = true" class="flex w-full bg-{{ $value->status === 'ACTIF' ? 'danger' : 'success' }} bg-opacity-10 px-3 py-1 text-sm font-medium text-{{ $value->status === 'ACTIF' ? 'danger' : 'success' }}">
                                                        {{ $value->status === 'ACTIF' ? 'Désactivé' : 'Activé' }}
                                                    </button>
                                                    <div x-show="modalOpen" x-transition class="fixed left-0 top-0 z-999999 flex h-full min-h-screen w-full items-center justify-center bg-black/90 px-4 py-5">
                                                        <div @click.outside="modalOpen = false" class="w-full max-w-142.5 rounded-lg bg-white px-8 py-12 text-center dark:bg-boxdark md:px-17.5 md:py-15">
                                                            <span class="mx-auto inline-block">
                                                                <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.1" width="60" height="60" rx="30" fill="#DC2626" />
                                                                    <path d="M30 27.2498V29.9998V27.2498ZM30 35.4999H30.0134H30ZM20.6914 41H39.3086C41.3778 41 42.6704 38.7078 41.6358 36.8749L32.3272 20.3747C31.2926 18.5418 28.7074 18.5418 27.6728 20.3747L18.3642 36.8749C17.3296 38.7078 18.6222 41 20.6914 41Z" stroke="#DC2626" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" />
                                                                </svg>
                                                            </span>
                                                            <h3 class="mt-5.5 pb-2 text-xl font-bold text-black dark:text-white sm:text-2xl">
                                                                Attention !!
                                                            </h3>
                                                            <p class="mb-10 font-medium">
                                                                Voulez-vous {{ $value->status === 'ACTIF' ? 'désactiver' : 'activer' }}  ce stocke ?
                                                            </p>
                                                            <div class="-mx-3 flex flex-wrap gap-y-4">
                                                                <div class="w-full px-3 2xsm:w-1/2">
                                                                    <button @click="modalOpen = false" class="block w-full rounded border border-stroke bg-gray p-3 text-center font-medium text-black transition hover:border-meta-1 hover:bg-meta-1 hover:text-white dark:border-strokedark dark:bg-meta-4 dark:text-white dark:hover:border-meta-1 dark:hover:bg-meta-1">
                                                                        Annuler
                                                                    </button>
                                                                </div>
                                                                <div class="w-full px-3 2xsm:w-1/2">
                                                                    <form action="{{route('changeStatus.stocke_restauration', $value->id)}}" method="post">
                                                                        @csrf
                                                                        <button class="block w-full rounded border border-meta-{{ $value->status === 'ACTIF' ? '1' : '3' }} bg-meta-{{ $value->status === 'ACTIF' ? '1' : '3' }} p-3 text-center font-medium text-white transition hover:bg-opacity-90">
                                                                            {{ $value->status === 'ACTIF' ? 'Désactivé' : 'Activé' }}
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
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
        <!-- ====== Data Table One End -->
{{--  --}}
        <script>


        </script>
    </div>
    <!-- ====== Table Section End -->

@endsection
