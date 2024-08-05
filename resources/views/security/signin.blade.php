@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->
    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Se Connecter
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium">/</a>
                </li>
                <li class="font-medium text-primary">Connexion</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <!-- ====== Forms Section Start -->
    <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
        <div class="flex flex-wrap items-center">
            <div class="hidden w-full xl:block xl:w-1/2">
                <div class="px-26 py-17.5 text-center">
                    <a class="mb-5.5 inline-block">
                        <img class="hidden w-15 dark:block" @if ($my_banniere) src="{{$my_banniere->logo}}" @endif  alt="Logo" />
                        <img class="w-25 dark:hidden"  @if ($my_banniere) src="{{$my_banniere->logo}}" @endif  alt="Logo" />
                    </a>

                    <p class="font-medium 2xl:px-20">
                    </p>

                    <span class="mt-15 inline-block font-bold">
                        Logiciel de gestion de restaurant, bar et événement
                    </span>
                </div>
            </div>
            <div class="w-full border-stroke dark:border-strokedark xl:w-1/2 xl:border-l-2">

                <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">


                    <div class="w-full p-4 sm:p-12.5 xl:p-17.5">
                        <h2 class="mb-9 text-2xl font-bold text-black dark:text-white sm:text-title-xl2">@if ($my_banniere) {{$my_banniere->raison_sociale}} @endif</h2>
                        @error('error')
                            <div class="max-w-[490px] rounded-lg border border-[#F5C5BB] bg-[#FCEDEA] py-2 pl-4 pr-5.5 shadow-2 dark:border-[#EA4E2C] dark:bg-[#1B1B24]">
                                <div class="flex items-center justify-between">
                                    <div class="flex flex-grow items-center gap-5">
                                        <div class="flex h-11 w-full max-w-11 items-center justify-center rounded-md bg-[#EA4E2C]">
                                            <svg width="20" height="20" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M14.2021 3.33462C14.7513 3.02546 15.3708 2.86304 16.001 2.86304C16.6312 2.86304 17.2507 3.02546 17.7999 3.33462C18.349 3.64379 18.8092 4.08926 19.136 4.62807L19.1389 4.63282L30.4322 23.4862L30.4403 23.5C30.7605 24.0544 30.9299 24.683 30.9317 25.3233C30.9335 25.9635 30.7676 26.593 30.4505 27.1493C30.1335 27.7055 29.6763 28.169 29.1245 28.4937C28.5727 28.8184 27.9455 28.9929 27.3053 29L27.2943 29.0001L4.69668 29C4.05647 28.993 3.42928 28.8184 2.87748 28.4937C2.32568 28.169 1.86851 27.7055 1.55146 27.1493C1.23441 26.593 1.06853 25.9635 1.07033 25.3233C1.07212 24.683 1.24152 24.0544 1.56168 23.5L1.5698 23.4862L12.8631 4.63282L13.721 5.1467L12.866 4.62807C13.1928 4.08926 13.653 3.64379 14.2021 3.33462ZM14.5773 5.6632C14.5769 5.66391 14.5764 5.66462 14.576 5.66532L3.29013 24.5062C3.14689 24.7567 3.07113 25.0402 3.07032 25.3289C3.0695 25.6199 3.1449 25.906 3.28902 26.1589C3.43313 26.4117 3.64093 26.6224 3.89175 26.77C4.14117 26.9167 4.42447 26.996 4.71376 27H27.2882C27.5775 26.996 27.8608 26.9167 28.1103 26.77C28.3611 26.6224 28.5689 26.4117 28.713 26.1589C28.8571 25.906 28.9325 25.6199 28.9317 25.3289C28.9309 25.0402 28.8551 24.7567 28.7119 24.5062L17.426 5.66532C17.4256 5.66462 17.4251 5.66391 17.4247 5.6632C17.2762 5.41924 17.0676 5.21752 16.8187 5.07739C16.5691 4.93686 16.2875 4.86304 16.001 4.86304C15.7146 4.86304 15.4329 4.93686 15.1833 5.07739C14.9345 5.21752 14.7258 5.41924 14.5773 5.6632Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16 11C16.5523 11 17 11.4477 17 12V17.3333C17 17.8856 16.5523 18.3333 16 18.3333C15.4477 18.3333 15 17.8856 15 17.3333V12C15 11.4477 15.4477 11 16 11Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M15 22.6666C15 22.1143 15.4477 21.6666 16 21.6666H16.0133C16.5656 21.6666 17.0133 22.1143 17.0133 22.6666C17.0133 23.2189 16.5656 23.6666 16.0133 23.6666H16C15.4477 23.6666 15 23.2189 15 22.6666Z"
                                                    fill="white" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="mb-0.5 text-title-xsm font-medium text-black dark:text-[#EA4E2C]">
                                                {{ $message }}
                                            </h4>

                                        </div>
                                    </div>

                                    <div>
                                        <button class="flex h-7 w-7 items-center justify-center rounded-md bg-white dark:bg-meta-4">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M0.854423 0.85186C1.2124 0.493879 1.79281 0.493879 2.15079 0.85186L7.0026 5.70368L11.8544 0.85186C12.2124 0.493879 12.7928 0.493879 13.1508 0.85186C13.5088 1.20984 13.5088 1.79024 13.1508 2.14822L8.29897 7.00004L13.1508 11.8519C13.5088 12.2098 13.5088 12.7902 13.1508 13.1482C12.7928 13.5062 12.2124 13.5062 11.8544 13.1482L7.0026 8.2964L2.15079 13.1482C1.79281 13.5062 1.2124 13.5062 0.854423 13.1482C0.496442 12.7902 0.496442 12.2098 0.854423 11.8519L5.70624 7.00004L0.854423 2.14822C0.496442 1.79024 0.496442 1.20984 0.854423 0.85186Z"
                                                    fill="#637381" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @enderror

                        <form action="{{ route('signin') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="email"
                                    class="mb-2.5 block font-medium text-black dark:text-white">Email</label>
                                <div class="relative">
                                    <input type="email" id="email" required name="email" value="admin@gmail.com"
                                        placeholder="Enter your email"
                                        class="w-full rounded-lg border border-stroke bg-transparent py-4 pl-6 pr-10 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />

                                    <span class="absolute right-4 top-4">
                                        <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5">
                                                <path
                                                    d="M19.2516 3.30005H2.75156C1.58281 3.30005 0.585938 4.26255 0.585938 5.46567V16.6032C0.585938 17.7719 1.54844 18.7688 2.75156 18.7688H19.2516C20.4203 18.7688 21.4172 17.8063 21.4172 16.6032V5.4313C21.4172 4.26255 20.4203 3.30005 19.2516 3.30005ZM19.2516 4.84692C19.2859 4.84692 19.3203 4.84692 19.3547 4.84692L11.0016 10.2094L2.64844 4.84692C2.68281 4.84692 2.71719 4.84692 2.75156 4.84692H19.2516ZM19.2516 17.1532H2.75156C2.40781 17.1532 2.13281 16.8782 2.13281 16.5344V6.35942L10.1766 11.5157C10.4172 11.6875 10.6922 11.7563 10.9672 11.7563C11.2422 11.7563 11.5172 11.6875 11.7578 11.5157L19.8016 6.35942V16.5688C19.8703 16.9125 19.5953 17.1532 19.2516 17.1532Z"
                                                    fill="" />
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="mb-6">
                                <label for="password"
                                    class="mb-2.5 block font-medium text-black dark:text-white">Password</label>
                                <div class="relative">
                                    <input type="password" id="password" name="password" value="123456789@"
                                        placeholder="6+ Characters, 1 Capital letter"
                                        class="w-full rounded-lg border border-stroke bg-transparent py-4 pl-6 pr-10 outline-none focus:border-primary focus-visible:shadow-none dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary" />

                                    <span class="absolute right-4 top-4">
                                        <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g opacity="0.5">
                                                <path
                                                    d="M16.1547 6.80626V5.91251C16.1547 3.16251 14.0922 0.825009 11.4797 0.618759C10.0359 0.481259 8.59219 0.996884 7.52656 1.95938C6.46094 2.92188 5.84219 4.29688 5.84219 5.70626V6.80626C3.84844 7.18438 2.33594 8.93751 2.33594 11.0688V17.2906C2.33594 19.5594 4.19219 21.3813 6.42656 21.3813H15.5016C17.7703 21.3813 19.6266 19.525 19.6266 17.2563V11C19.6609 8.93751 18.1484 7.21876 16.1547 6.80626ZM8.55781 3.09376C9.31406 2.40626 10.3109 2.06251 11.3422 2.16563C13.1641 2.33751 14.6078 3.98751 14.6078 5.91251V6.70313H7.38906V5.67188C7.38906 4.70938 7.80156 3.78126 8.55781 3.09376ZM18.1141 17.2906C18.1141 18.7 16.9453 19.8688 15.5359 19.8688H6.46094C5.05156 19.8688 3.91719 18.7344 3.91719 17.325V11.0688C3.91719 9.52189 5.15469 8.28438 6.70156 8.28438H15.2953C16.8422 8.28438 18.1141 9.52188 18.1141 11V17.2906Z"
                                                    fill="" />
                                                <path
                                                    d="M10.9977 11.8594C10.5852 11.8594 10.207 12.2031 10.207 12.65V16.2594C10.207 16.6719 10.5508 17.05 10.9977 17.05C11.4102 17.05 11.7883 16.7063 11.7883 16.2594V12.6156C11.7883 12.2031 11.4102 11.8594 10.9977 11.8594Z"
                                                    fill="" />
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="mb-5">
                                <input type="submit" value="Sign In"
                                    class="w-full cursor-pointer rounded-lg border border-primary bg-primary p-4 font-medium text-white transition hover:bg-opacity-90" />
                            </div>

                            <button type="button"
                                class="flex w-full items-center justify-center gap-3.5 rounded-lg border border-stroke bg-gray p-4 font-medium hover:bg-opacity-70 dark:border-strokedark dark:bg-meta-4 dark:hover:bg-opacity-70">
                                <span>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_191_13499)">
                                            <path
                                                d="M19.999 10.2217C20.0111 9.53428 19.9387 8.84788 19.7834 8.17737H10.2031V11.8884H15.8266C15.7201 12.5391 15.4804 13.162 15.1219 13.7195C14.7634 14.2771 14.2935 14.7578 13.7405 15.1328L13.7209 15.2571L16.7502 17.5568L16.96 17.5774C18.8873 15.8329 19.9986 13.2661 19.9986 10.2217"
                                                fill="#4285F4" />
                                            <path
                                                d="M10.2055 19.9999C12.9605 19.9999 15.2734 19.111 16.9629 17.5777L13.7429 15.1331C12.8813 15.7221 11.7248 16.1333 10.2055 16.1333C8.91513 16.1259 7.65991 15.7205 6.61791 14.9745C5.57592 14.2286 4.80007 13.1801 4.40044 11.9777L4.28085 11.9877L1.13101 14.3765L1.08984 14.4887C1.93817 16.1456 3.24007 17.5386 4.84997 18.5118C6.45987 19.4851 8.31429 20.0004 10.2059 19.9999"
                                                fill="#34A853" />
                                            <path
                                                d="M4.39899 11.9777C4.1758 11.3411 4.06063 10.673 4.05807 9.99996C4.06218 9.32799 4.1731 8.66075 4.38684 8.02225L4.38115 7.88968L1.19269 5.4624L1.0884 5.51101C0.372763 6.90343 0 8.4408 0 9.99987C0 11.5589 0.372763 13.0963 1.0884 14.4887L4.39899 11.9777Z"
                                                fill="#FBBC05" />
                                            <path
                                                d="M10.2059 3.86663C11.668 3.84438 13.0822 4.37803 14.1515 5.35558L17.0313 2.59996C15.1843 0.901848 12.7383 -0.0298855 10.2059 -3.6784e-05C8.31431 -0.000477834 6.4599 0.514732 4.85001 1.48798C3.24011 2.46124 1.9382 3.85416 1.08984 5.51101L4.38946 8.02225C4.79303 6.82005 5.57145 5.77231 6.61498 5.02675C7.65851 4.28118 8.9145 3.87541 10.2059 3.86663Z"
                                                fill="#EB4335" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_191_13499">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                Se connection avec Google
                            </button>

                            <div class="mt-6 text-center">
                                <p class="font-medium">
                                    <a href="{{ route('signup') }}" class="text-primary">S'inscrire</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== Forms Section End -->
    @endsection
