@extends('layouts.main')
@section('content')
    <!-- Breadcrumb Start -->

    <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
        <h2 class="text-title-md2 font-bold text-black dark:text-white">
            Stocke Restauration
        </h2>

        <nav>
            <ol class="flex items-center gap-2">
                <li>
                    <a class="font-medium" href="{{route('dashboard')}}">Tableau de Bord /</a>
                </li>
                <li class="font-medium text-primary">Stockes</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->

    <div class="flex flex-col mt-9 gap-y-4 rounded-sm border border-stroke bg-white p-3 shadow-default dark:border-strokedark dark:bg-boxdark sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h3 class="text-title-lx font-bold text-black dark:text-white">
                AJOUTER DANS LE STOCKE
            </h3>
        </div>
        <div class="flex flex-col gap-4 2xsm:flex-row 2xsm:items-center">
            <div x-data="{ popupOpen: false }">
                <button @click="popupOpen = true" class="flex items-center gap-2 rounded bg-success px-4.5 py-2 font-medium text-white hover:bg-opacity-80">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 7H9V1C9 0.4 8.6 0 8 0C7.4 0 7 0.4 7 1V7H1C0.4 7 0 7.4 0 8C0 8.6 0.4 9 1 9H7V15C7 15.6 7.4 16 8 16C8.6 16 9 15.6 9 15V9H15C15.6 9 16 8.6 16 8C16 7.4 15.6 7 15 7Z" fill=""></path>
                    </svg>
                    AJOUTER AU STOCKE
                </button>

                <!-- ===== Task Popup Start ===== -->
                <div x-show="popupOpen" x-transition="" class="fixed left-0 top-0 z-99999 flex h-screen w-full justify-center overflow-y-scroll bg-black/80 px-4 py-5" style="display: none;">
                    <div @click.outside="popupOpen = false" class="relative m-auto w-full max-w-180 rounded-sm border border-stroke bg-gray p-4 shadow-default dark:border-strokedark dark:bg-meta-4 sm:p-8 xl:p-10">
                        <button @click="popupOpen = false" class="absolute right-1 top-1 sm:right-5 sm:top-5">
                            <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8913 9.99599L19.5043 2.38635C20.032 1.85888 20.032 1.02306 19.5043 0.495589C18.9768 -0.0317329 18.141 -0.0317329 17.6135 0.495589L10.0001 8.10559L2.38673 0.495589C1.85917 -0.0317329 1.02343 -0.0317329 0.495873 0.495589C-0.0318274 1.02306 -0.0318274 1.85888 0.495873 2.38635L8.10887 9.99599L0.495873 17.6056C-0.0318274 18.1331 -0.0318274 18.9689 0.495873 19.4964C0.717307 19.7177 1.05898 19.9001 1.4413 19.9001C1.75372 19.9001 2.13282 19.7971 2.40606 19.4771L10.0001 11.8864L17.6135 19.4964C17.8349 19.7177 18.1766 19.9001 18.5589 19.9001C18.8724 19.9001 19.2531 19.7964 19.5265 19.4737C20.0319 18.9452 20.0245 18.1256 19.5043 17.6056L11.8913 9.99599Z" fill=""></path>
                            </svg>
                        </button>

                        <div class="flex flex-col mt-6 gap-9">
                            <!-- Survey Form -->
                            <div class="rounded-sm border border-stroke bg-white shadow-default dark:border-strokedark dark:bg-boxdark">
                                <div class="border-b border-stroke px-6.5 py-4 dark:border-strokedark">
                                    <h3 class="font-medium text-black dark:text-white">
                                        AJOUTER AU STOCKE
                                    </h3>
                                </div>

                                <form action="" method="POST">
                                    @csrf
                                    <div class="p-6.5">
                                        <div class="mb-5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="name">Nom </label>
                                            <input type="text" id="name" name="name" required placeholder="Enter name" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                        </div>

                                        <div class="mb-5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="reference">Référence </label>
                                            <input type="text" id="reference" name="reference" required placeholder="Enter reference" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                        </div>

                                        <div class="mb-5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="prix_unitaire">Prix Unitaire </label>
                                            <input type="number" min="1" id="prix_unitaire" name="prix_unitaire" required placeholder="Enter price" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                        </div>

                                        <div class="mb-5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="quantite">Quantité </label>
                                            <input type="number" min="1" id="quantite" name="quantite" required placeholder="Enter quantity" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary">
                                        </div>

                                        <div class="mb-5.5">
                                            <label class="mb-3 block text-sm font-medium text-black dark:text-white" for="prix_total">Prix d'ensemble </label>
                                            <div class="relative">
                                                <input type="number" min="1" required id="prix_total" name="prix_total" class="w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none transition focus:border-primary active:border-primary dark:border-form-strokedark dark:bg-form-input dark:focus:border-primary">
                                            </div>
                                        </div>

                                        <button class="flex w-full justify-center rounded bg-success p-3 font-medium text-gray hover:bg-opacity-90"> Sauvegarder </button>
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
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
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
                      <p>LIBELLE</p>
                      <div class="inline-flex flex-col space-y-[2px]">
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>
                        <span class="inline-block">
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path
                              d="M5 5L10 0L-4.37114e-07 8.74228e-07L5 5Z"
                              fill=""
                            />
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
                          <svg
                            class="fill-current"
                            width="10"
                            height="5"
                            viewBox="0 0 10 5"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                          >
                            <path d="M5 0L0 5H10L5 0Z" fill="" />
                          </svg>
                        </span>

                      </div>
                    </div>
                  </th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Andrio Maksim</td>
                  <td>Designer</td>
                  <td>25 Nov, 1989</td>
                  <td>
                    <a
                      href="cdn-cgi/l/email-protection.html"
                      class="__cf_email__"
                      data-cfemail="f598949e869c98c1c0b59298949c99db969a98"
                      >[email&#160;protected]</a
                    >
                  </td>
                  <td>Block A, Demo Park</td>
                  <td>Block A, Demo Park</td>
                  <td>Full-time</td>
                  <td>Full-time</td>
                </tr>
                <tr>
                  <td>Brielle Kuphal</td>
                  <td>Developer</td>
                  <td>25 Nov, 1977</td>
                  <td>
                    <a
                      href="cdn-cgi/l/email-protection.html"
                      class="__cf_email__"
                      data-cfemail="7c3e0e151910101948493c1b111d1510521f1311"
                      >[email&#160;protected]</a
                    >
                  </td>
                  <td>Block A, Demo Park</td>
                  <td>Block A, Demo Park</td>
                  <td>Full-time</td>
                  <td>Full-time</td>
                </tr>

                <tr>
                  <td>Barney Murray</td>
                  <td>Designer</td>
                  <td>25 Nov, 1966</td>
                  <td>
                    <a
                      href="cdn-cgi/l/email-protection.html"
                      class="__cf_email__"
                      data-cfemail="642605160a011d240309050d084a070b09"
                      >[email&#160;protected]</a
                    >
                  </td>
                  <td>Block A, Demo Park</td>
                  <td>Block A, Demo Park</td>
                  <td>Part-time</td>
                  <td>Full-time</td>
                </tr>
                <tr>
                  <td>Ressie Ruecker</td>
                  <td>Designer</td>
                  <td>25 Nov, 1955</td>
                  <td>
                    <a
                      href="cdn-cgi/l/email-protection.html"
                      class="__cf_email__"
                      data-cfemail="63310610100a0623040e020a0f4d000c0e"
                      >[email&#160;protected]</a
                    >
                  </td>
                  <td>Block A, Demo Park</td>
                  <td>Block A, Demo Park</td>
                  <td>Full-time</td>
                  <td>Full-time</td>
                </tr>
                <tr>
                  <td>Teresa Mertz</td>
                  <td>Designer</td>
                  <td>25 Nov, 1979</td>
                  <td>
                    <a
                      href="cdn-cgi/l/email-protection.html"
                      class="__cf_email__"
                      data-cfemail="bbefdec9dec8dafbdcd6dad2d795d8d4d6"
                      >[email&#160;protected]</a
                    >
                  </td>
                  <td>Block A, Demo Park</td>
                  <td>Block A, Demo Park</td>
                  <td>Part-time</td>
                  <td>Part-time</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <!-- ====== Data Table One End -->
      </div>
    <!-- ====== Table Section End -->


@endsection
