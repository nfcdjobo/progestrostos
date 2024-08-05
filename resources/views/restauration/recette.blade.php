@extends('layouts.main')
@section('content')
    @php
        use App\Models\Article;
        use Illuminate\Support\Facades\DB;
    @endphp
    <!-- Breadcrumb Start -->
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Récette
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Tableau de Bord /</a>
                </li>
                <li class="font-medium text-primary">Récette</li>
            </ol>
        </nav>
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

                <div class="px-4 pt-4">
                    {{-- <button
                      class="flex w-full rounded-md bg-primary px-5.5 py-2.5 font-medium text-white"
                    >
                      Compose
                    </button> --}}
                  </div>


                <div class="no-scrollbar max-h-full py-6">
                    <ul class="flex flex-col gap-2" x-data="{ isActive: 'inbox' }">
                        @forelse ($espaces as $espace)
                            @if ($espace->id !== 2)
                                <div class="flex flex-col">
                                    <!-- Accordion Item -->
                                    <div x-data="{ accordionOpen: false }" @click.outside="accordionOpen = false"
                                        class="rounded-md border border-stroke shadow-9 dark:border-strokedark dark:shadow-none p-3">
                                        <li @click="accordionOpen = !accordionOpen" class="flex w-full items-center justify-between">
                                            <div>
                                                <button class="text-left text-xm {{(int)request()->segment(3) == $espace->id && (int)request()->segment(4) == $repas->id ? 'font-bold' : '' }} text-black dark:text-white sm:text-sm">
                                                    {{ $espace->name }}
                                                </button>
                                            </div>
                                        </li>

                                        <div x-show="accordionOpen" class="mt-5 duration-200 ease-in-out">
                                            <p class="max-w-[830px] font-medium">
                                                @foreach ($AllRepas as $value)
                                                    @php
                                                        $isActive = Route::currentRouteName() == 'dispatcher.getRecettes' && (int)request()->segment(3) == $espace->id && (int)request()->segment(4) == $value->id;
                                                    @endphp
                                                    <li>
                                                        @php
                                                            $name = $value->name;
                                                            $nameLower = mb_strtolower($name, 'UTF-8');
                                                            $nameFormatted = mb_strtoupper(mb_substr($nameLower, 0, 1, 'UTF-8'), 'UTF-8') . mb_substr($nameLower, 1, null, 'UTF-8');
                                                        @endphp
                                                        <a href="{{ route('dispatcher.getRecettes', [$espace->id, $value->id]) }}" class="relative flex items-center gap-2.5 px-5 py-2.5 duration-300 ease-linear {{ $isActive ? 'font-bold before:absolute before:left-0 before:h-0 before:w-1 before:bg-primary  before:duration-300 before:ease-linear' : '' }}  hover:bg-primary/5 hover:text-primary hover:before:h-full" :class="isActive === 'inbox' ? 'bg-primary/5 before:!h-full' : ''">
                                                            {{ $nameFormatted }}
                                                        </a>
                                                    </li>

                                                @endforeach

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty
                        @endforelse
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
                                        <div class="flex items-center gap-1.5">
                                            <p>INGRÉDIEN</p>
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
                                            <p>QUANTITÉ</p>
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

                                @forelse ($dispatchs as $index=>$dispatch)
                                    @foreach (json_decode($dispatch->detail, true) as $detail)
                                        @php
                                            $getArticle = Article::whereHas('stocke')->where('id',$detail['articleId'])->where('etat', 'ACTIF')->first();
                                        @endphp
                                        <tr>
                                            <td>{{ $dispatch->repas->name }}</td>
                                            <td>{{ $getArticle->name }}</td>
                                            <td>{{ number_format($detail["quantite"], 0, '.', ' ') }}</td>
                                            <td>{{ number_format((int)$detail["montant"] / (int)$detail["quantite"], 0, '.', ' ') }}</td>
                                            <td>{{ number_format((int)$detail["montant"], 0, '.', ' ') }}</td>
                                        </tr>
                                    @endforeach
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- ====== Data Table One End -->

                <form action="{{ route('dispatcher.saveRecette') }}" method="post" id="FormToSave">
                    @csrf
                </form>
            </div>
        </div>
    </div>

    @if (count($dispatchs) !== 0 && (boolean)request()->segment(3) && (boolean)request()->segment(4))

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
                                <button type="submit" class="flex items-center gap-2 rounded bg-primary px-4.5 py-2 font-medium text-white hover:bg-opacity-80 btn-submited" id="btn-submited1">
                                    Sauvégarder le menu
                                </button>
                            </div>
                        </div>
                    </div>
                    <form action="{{route('create.menu')}}" id="data_formulare" method="POST">
                        @csrf
                        <div class="p-6.5" id="in_the_div">
                            <div class="flex flex-col mb-6 border-b-2 border-primary pb-6 gap-6 rounded-sm bg-white dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
                                <div class="w-full xl:w-1/2">
                                    <label for="repas_id" class="mb-3 block text-sm font-medium text-black dark:text-white">
                                        Repas </label>
                                    <div x-data="{ isOptionSelected: false }" class="relative z-20 bg-transparent dark:bg-form-input">
                                        <select required="" id="repas_id" name="repas_id" class="relative z-20 w-full appearance-none rounded border border-stroke bg-transparent px-5 py-3 outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" :class="isOptionSelected & amp; & amp; 'text-black dark:text-white'" @change="isOptionSelected = true">
                                            <option value="{{$repas->id}}" class="text-body" selected>{{$repas->name}}</option>
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
                                    Sauvégarder le numu
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    @endif



    <script src="{{ asset('js/menu-script.js') }}"></script>
    <script src="{{ asset('js/script_save_recette.js') }}"></script>
@endsection
