@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Activités
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{ route('dashboard') }}">Tableau de Bord /</a>
                </li>
                <li class="font-medium text-primary">Activités</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <!-- ====== Table Section Start -->

    <div class="flex flex-col gap-5 md:gap-7 2xl:gap-10">
        <!-- ====== Data Table One Start -->
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="data-table-common data-table-one max-w-full overflow-x-auto">
                <table class="table w-full table-auto" id="dataTableOne">
                    <thead>
                        <tr>
                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>ORDRE</p>
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

                            <th>
                                <div class="flex items-center gap-1.5">
                                    <p>DATE CRÉATION</p>
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
                                    <p>DATE MODIFIACTION</p>
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
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($activites as $activite)

                            @php
                                    // Définir la locale en français
                                    setlocale(LC_TIME, 'fr_FR.UTF-8');
                                    // Créer une instance DateTime avec la date souhaitée et le fuseau horaire
                                    $createdAt = new DateTime($activite->created_at, new DateTimeZone('Africa/Abidjan'));
                                    $updatedAt = new DateTime($activite->updated_at, new DateTimeZone('Africa/Abidjan'));
                                    // Utiliser IntlDateFormatter pour formater la date
                                    $fmt = new IntlDateFormatter(
                                        'fr_FR',
                                        IntlDateFormatter::FULL,
                                        IntlDateFormatter::NONE,
                                        'Africa/Abidjan',
                                        IntlDateFormatter::GREGORIAN,
                                        'eeee, d MMMM yyyy',
                                    );
                                    $formattedCreatedDate = $fmt->format($createdAt);
                                    $formattedUpdatedDate = $fmt->format($updatedAt);

                                    // Capitaliser la première lettre de chaque mot
                                    $formattedCreatedDate = mb_convert_case($formattedCreatedDate, MB_CASE_TITLE, 'UTF-8');
                                    $formattedUpdatedDate = mb_convert_case($formattedUpdatedDate, MB_CASE_TITLE, 'UTF-8');

                            @endphp

                            <tr>
                                <td>{{$activite->id}}</td>
                                <td>{{$activite->name}}</td>

                                <td>{{$formattedCreatedDate}}</td>
                                <td>{{$formattedUpdatedDate}}</td>
                                <td>Full-time</td>
                            </tr>

                        @empty

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
        <!-- ====== Data Table One End -->

        <!-- ====== Data Table Two Start -->
        <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
            <div class="data-table-common data-table-two max-w-full overflow-x-auto">
                <table class="table w-full table-auto" id="dataTableTwo">
                    <thead>
                        <tr>
                            <th>
                                <div class="flex items-center justify-between gap-1.5">
                                    <p>Name</p>
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
                                    <p>Position</p>
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
                                    <p>Office</p>
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
                                    <p>Age</p>
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
                                <div class="flex items-center justify-between gap-1.5">
                                    <p>Start Date</p>
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
                                    <p>Salary</p>
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
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Brielle Kuphal</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>25</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Barney Murray</td>
                            <td>Senior Backend Developer</td>
                            <td>amsterdam</td>
                            <td>29</td>
                            <td>2010/05/01</td>
                            <td>$424,785</td>
                        </tr>
                        <tr>
                            <td>Ressie Ruecker</td>
                            <td>Senior Frontend Developer</td>
                            <td>Jakarta</td>
                            <td>27</td>
                            <td>2013/07/01</td>
                            <td>$785,210</td>
                        </tr>
                        <tr>
                            <td>Teresa Mertz</td>
                            <td>Senior Designer</td>
                            <td>New Caledonia</td>
                            <td>25</td>
                            <td>2014/05/30</td>
                            <td>$532,126</td>
                        </tr>
                        <tr>
                            <td>Chelsey Hackett</td>
                            <td>Product Manager</td>
                            <td>NewYork</td>
                            <td>26</td>
                            <td>2011/09/30</td>
                            <td>$421,541</td>
                        </tr>
                        <tr>
                            <td>Tatyana Metz</td>
                            <td>Senior Product Manager</td>
                            <td>NewYork</td>
                            <td>28</td>
                            <td>2009/09/30</td>
                            <td>$852,541</td>
                        </tr>
                        <tr>
                            <td>Oleta Harvey</td>
                            <td>Junior Product Manager</td>
                            <td>California</td>
                            <td>25</td>
                            <td>2015/10/30</td>
                            <td>$654,444</td>
                        </tr>
                        <tr>
                            <td>Bette Haag</td>
                            <td>Junior Product Manager</td>
                            <td>California</td>
                            <td>29</td>
                            <td>2017/12/31</td>
                            <td>$541,111</td>
                        </tr>
                        <tr>
                            <td>Meda Ebert</td>
                            <td>Junior Web Developer</td>
                            <td>Amsterdam</td>
                            <td>27</td>
                            <td>2015/10/31</td>
                            <td>$651,456</td>
                        </tr>
                        <tr>
                            <td>Elissa Stroman</td>
                            <td>Junior React Developer</td>
                            <td>Kuala Lumpur</td>
                            <td>29</td>
                            <td>2008/05/31</td>
                            <td>$566,123</td>
                        </tr>
                        <tr>
                            <td>Sid Swaniawski</td>
                            <td>Junior React Developer</td>
                            <td>Las Vegas</td>
                            <td>29</td>
                            <td>2009/09/01</td>
                            <td>$852,456</td>
                        </tr>
                        <tr>
                            <td>Madonna Hahn</td>
                            <td>Senior Vue Developer</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2006/10/01</td>
                            <td>$456,147</td>
                        </tr>
                        <tr>
                            <td>Waylon Kihn</td>
                            <td>Senior HTML Developer</td>
                            <td>Amsterdam</td>
                            <td>23</td>
                            <td>2017/11/01</td>
                            <td>$321,254</td>
                        </tr>
                        <tr>
                            <td>Jaunita Lindgren</td>
                            <td>Senior Backend Developer</td>
                            <td>Jakarta</td>
                            <td>25</td>
                            <td>2018/12/01</td>
                            <td>$321,254</td>
                        </tr>
                        <tr>
                            <td>Lenora MacGyver</td>
                            <td>Junior HTML Developer</td>
                            <td>Carolina</td>
                            <td>27</td>
                            <td>2015/09/31</td>
                            <td>$852,254</td>
                        </tr>
                        <tr>
                            <td>Edyth McCullough</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>25</td>
                            <td>2012/03/29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Ibrahim Stroman</td>
                            <td>Senior Backend Developer</td>
                            <td>amsterdam</td>
                            <td>29</td>
                            <td>2010/05/01</td>
                            <td>$424,785</td>
                        </tr>
                        <tr>
                            <td>Katelynn Reichert</td>
                            <td>Senior Frontend Developer</td>
                            <td>Jakarta</td>
                            <td>27</td>
                            <td>2013/07/01</td>
                            <td>$785,210</td>
                        </tr>
                        <tr>
                            <td>Logan Kiehn</td>
                            <td>Senior Designer</td>
                            <td>New Caledonia</td>
                            <td>25</td>
                            <td>2014/05/30</td>
                            <td>$532,126</td>
                        </tr>
                        <tr>
                            <td>Chelsey Hackett</td>
                            <td>Product Manager</td>
                            <td>NewYork</td>
                            <td>26</td>
                            <td>2011/09/30</td>
                            <td>$421,541</td>
                        </tr>
                        <tr>
                            <td>Tatyana Metz</td>
                            <td>Senior Product Manager</td>
                            <td>NewYork</td>
                            <td>28</td>
                            <td>2009/09/30</td>
                            <td>$852,541</td>
                        </tr>
                        <tr>
                            <td>Oleta Harvey</td>
                            <td>Junior Product Manager</td>
                            <td>California</td>
                            <td>25</td>
                            <td>2015/10/30</td>
                            <td>$654,444</td>
                        </tr>
                        <tr>
                            <td>Rogers Stanton</td>
                            <td>Junior Product Manager</td>
                            <td>California</td>
                            <td>29</td>
                            <td>2017/12/31</td>
                            <td>$541,111</td>
                        </tr>
                        <tr>
                            <td>Alanis Torp</td>
                            <td>Junior Web Developer</td>
                            <td>Amsterdam</td>
                            <td>27</td>
                            <td>2015/10/31</td>
                            <td>$651,456</td>
                        </tr>
                        <tr>
                            <td>Jarvis Bauch</td>
                            <td>Junior React Developer</td>
                            <td>Kuala Lumpur</td>
                            <td>29</td>
                            <td>2008/05/31</td>
                            <td>$566,123</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- ====== Data Table Two End -->
    </div>

    <!-- ====== Table Section End -->
@endsection
