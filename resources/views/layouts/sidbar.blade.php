      <!-- ===== Sidebar Start ===== -->
      <aside :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
          class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-black duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
          @click.outside="sidebarToggle = false">
          <!-- SIDEBAR HEADER -->
          <div class="flex items-center justify-between gap-2 px-6 py-5.5 lg:py-6.5">
              <a href="{{ route('dashboard') }}">
                  <img  @if ($my_banniere) src="{{ $my_banniere->logo }}"  @endif class="w-12" alt="Logo" />
              </a>
              <button class="block lg:hidden" @click.stop="sidebarToggle = !sidebarToggle">
                  <svg class="fill-current" width="20" height="18" viewBox="0 0 20 18" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                          d="M19 8.175H2.98748L9.36248 1.6875C9.69998 1.35 9.69998 0.825 9.36248 0.4875C9.02498 0.15 8.49998 0.15 8.16248 0.4875L0.399976 8.3625C0.0624756 8.7 0.0624756 9.225 0.399976 9.5625L8.16248 17.4375C8.31248 17.5875 8.53748 17.7 8.76248 17.7C8.98748 17.7 9.17498 17.625 9.36248 17.475C9.69998 17.1375 9.69998 16.6125 9.36248 16.275L3.02498 9.8625H19C19.45 9.8625 19.825 9.4875 19.825 9.0375C19.825 8.55 19.45 8.175 19 8.175Z"
                          fill="" />
                  </svg>
              </button>
          </div>
          <!-- SIDEBAR HEADER -->

            <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
                <!-- Sidebar Menu -->
                <nav class="mt-5 px-4 py-4 lg:mt-9 lg:px-6" x-data="{ selected: $persist('Dashboard') }">
                    <!-- Support Group -->
                    <div>
                        <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">NAVIGATION</h3>
                        <ul class="mb-6 flex flex-col gap-1.5">
                            <!-- Menu Item Messages -->
                            <li>
                                <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                                    href="{{ route('dashboard') }}"
                                    @click="selected = (selected === 'Dashboard' ? '':'Dashboard')"
                                    :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Dashboard') && (page === 'Dashboard') }">
                                    <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_130_9801)">
                                          <path d="M10.8563 0.55835C10.5188 0.55835 10.2095 0.8396 10.2095 1.20522V6.83022C10.2095 7.16773 10.4907 7.4771 10.8563 7.4771H16.8751C17.0438 7.4771 17.2126 7.39272 17.3251 7.28022C17.4376 7.1396 17.4938 6.97085 17.4938 6.8021C17.2688 3.28647 14.3438 0.55835 10.8563 0.55835ZM11.4751 6.15522V1.8521C13.8095 2.13335 15.6938 3.8771 16.1438 6.18335H11.4751V6.15522Z" fill=""></path>
                                          <path d="M15.3845 8.7427H9.1126V2.69582C9.1126 2.35832 8.83135 2.07707 8.49385 2.07707C8.40947 2.07707 8.3251 2.07707 8.24072 2.07707C3.96572 2.04895 0.506348 5.53645 0.506348 9.81145C0.506348 14.0864 3.99385 17.5739 8.26885 17.5739C12.5438 17.5739 16.0313 14.0864 16.0313 9.81145C16.0313 9.6427 16.0313 9.47395 16.0032 9.33332C16.0032 8.99582 15.722 8.7427 15.3845 8.7427ZM8.26885 16.3083C4.66885 16.3083 1.77197 13.4114 1.77197 9.81145C1.77197 6.3802 4.47197 3.53957 7.8751 3.3427V9.36145C7.8751 9.69895 8.15635 10.0083 8.52197 10.0083H14.7938C14.6813 13.4958 11.7845 16.3083 8.26885 16.3083Z" fill=""></path>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_130_9801">
                                            <rect width="18" height="18" fill="white" transform="translate(0 0.052124)"></rect>
                                          </clipPath>
                                        </defs>
                                      </svg>
                                    Tableau de Bord
                                </a>
                            </li>
                            <!-- Menu Item Messages -->
                        </ul>
                    </div>


                    <div>
                        <ul class="mb-6 flex flex-col gap-1.5">
                            <!-- Menu Item Administration -->
                            <li>
                                <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                                    href="#"
                                    @click.prevent="selected = (selected === 'Administration' ? '':'Administration')"
                                    :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Administration') || (page === 'bannieres' || page === 'roles' || page === 'personnels' || page === 'consommations') }">
                                    <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6.10322 0.956299H2.53135C1.5751 0.956299 0.787598 1.7438 0.787598 2.70005V6.27192C0.787598 7.22817 1.5751 8.01567 2.53135 8.01567H6.10322C7.05947 8.01567 7.84697 7.22817 7.84697 6.27192V2.72817C7.8751 1.7438 7.0876 0.956299 6.10322 0.956299ZM6.60947 6.30005C6.60947 6.5813 6.38447 6.8063 6.10322 6.8063H2.53135C2.2501 6.8063 2.0251 6.5813 2.0251 6.30005V2.72817C2.0251 2.44692 2.2501 2.22192 2.53135 2.22192H6.10322C6.38447 2.22192 6.60947 2.44692 6.60947 2.72817V6.30005Z" fill="" />
                                        <path d="M15.4689 0.956299H11.8971C10.9408 0.956299 10.1533 1.7438 10.1533 2.70005V6.27192C10.1533 7.22817 10.9408 8.01567 11.8971 8.01567H15.4689C16.4252 8.01567 17.2127 7.22817 17.2127 6.27192V2.72817C17.2127 1.7438 16.4252 0.956299 15.4689 0.956299ZM15.9752 6.30005C15.9752 6.5813 15.7502 6.8063 15.4689 6.8063H11.8971C11.6158 6.8063 11.3908 6.5813 11.3908 6.30005V2.72817C11.3908 2.44692 11.6158 2.22192 11.8971 2.22192H15.4689C15.7502 2.22192 15.9752 2.44692 15.9752 2.72817V6.30005Z" fill="" />
                                        <path d="M6.10322 9.92822H2.53135C1.5751 9.92822 0.787598 10.7157 0.787598 11.672V15.2438C0.787598 16.2001 1.5751 16.9876 2.53135 16.9876H6.10322C7.05947 16.9876 7.84697 16.2001 7.84697 15.2438V11.7001C7.8751 10.7157 7.0876 9.92822 6.10322 9.92822ZM6.60947 15.272C6.60947 15.5532 6.38447 15.7782 6.10322 15.7782H2.53135C2.2501 15.7782 2.0251 15.5532 2.0251 15.272V11.7001C2.0251 11.4188 2.2501 11.1938 2.53135 11.1938H6.10322C6.38447 11.1938 6.60947 11.4188 6.60947 11.7001V15.272Z" fill="" />
                                        <path d="M15.4689 9.92822H11.8971C10.9408 9.92822 10.1533 10.7157 10.1533 11.672V15.2438C10.1533 16.2001 10.9408 16.9876 11.8971 16.9876H15.4689C16.4252 16.9876 17.2127 16.2001 17.2127 15.2438V11.7001C17.2127 10.7157 16.4252 9.92822 15.4689 9.92822ZM15.9752 15.272C15.9752 15.5532 15.7502 15.7782 15.4689 15.7782H11.8971C11.6158 15.7782 11.3908 15.5532 11.3908 15.272V11.7001C11.3908 11.4188 11.6158 11.1938 11.8971 11.1938H15.4689C15.7502 11.1938 15.9752 11.4188 15.9752 11.7001V15.272Z" fill="" />
                                    </svg>
                                    Administration
                                    <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Administration') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                                    </svg>
                                </a>

                                <!-- Dropdown Menu Start -->
                                <div class="translate transform overflow-hidden" :class="(selected === 'Administration') ? 'block' : 'hidden'">
                                    <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation"href="{{ route('index.banniere') }}" :class="page === 'bannieres' && '!text-white'">Bannières</a>
                                        </li>
                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation"href="{{ route('roles') }}" :class="page === 'roles' && '!text-white'">Rôles</a>
                                        </li>
                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation"href="{{ route('getUser') }}" :class="page === 'personnels' && '!text-white'">Gestion de Personnels </a>
                                        </li>

                                        {{-- <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation"href="{{ route('conso.consommation') }}" :class="page === 'consommations' && '!text-white'">Consommations </a>
                                        </li> --}}
                                    </ul>
                                </div>
                                <!-- Dropdown Menu End -->
                            </li>
                            <!-- Menu Item Tableau de Bord -->

                            <!-- Menu Item Activite -->
                            <li>
                                <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4" href="{{ route('activite') }}" @click="selected = (selected === 'Activite' ? '':'Activite')" :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Activite') && (page === 'Activite') }" :class="page === 'activite' && 'bg-graydark'">
                                    <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_130_9807)">
                                          <path d="M15.7501 0.55835H2.2501C1.29385 0.55835 0.506348 1.34585 0.506348 2.3021V7.53335C0.506348 8.4896 1.29385 9.2771 2.2501 9.2771H15.7501C16.7063 9.2771 17.4938 8.4896 17.4938 7.53335V2.3021C17.4938 1.34585 16.7063 0.55835 15.7501 0.55835ZM16.2563 7.53335C16.2563 7.8146 16.0313 8.0396 15.7501 8.0396H2.2501C1.96885 8.0396 1.74385 7.8146 1.74385 7.53335V2.3021C1.74385 2.02085 1.96885 1.79585 2.2501 1.79585H15.7501C16.0313 1.79585 16.2563 2.02085 16.2563 2.3021V7.53335Z" fill=""></path>
                                          <path d="M6.13135 10.9646H2.2501C1.29385 10.9646 0.506348 11.7521 0.506348 12.7083V15.8021C0.506348 16.7583 1.29385 17.5458 2.2501 17.5458H6.13135C7.0876 17.5458 7.8751 16.7583 7.8751 15.8021V12.7083C7.90322 11.7521 7.11572 10.9646 6.13135 10.9646ZM6.6376 15.8021C6.6376 16.0833 6.4126 16.3083 6.13135 16.3083H2.2501C1.96885 16.3083 1.74385 16.0833 1.74385 15.8021V12.7083C1.74385 12.4271 1.96885 12.2021 2.2501 12.2021H6.13135C6.4126 12.2021 6.6376 12.4271 6.6376 12.7083V15.8021Z" fill=""></path>
                                          <path d="M15.75 10.9646H11.8688C10.9125 10.9646 10.125 11.7521 10.125 12.7083V15.8021C10.125 16.7583 10.9125 17.5458 11.8688 17.5458H15.75C16.7063 17.5458 17.4938 16.7583 17.4938 15.8021V12.7083C17.4938 11.7521 16.7063 10.9646 15.75 10.9646ZM16.2562 15.8021C16.2562 16.0833 16.0312 16.3083 15.75 16.3083H11.8688C11.5875 16.3083 11.3625 16.0833 11.3625 15.8021V12.7083C11.3625 12.4271 11.5875 12.2021 11.8688 12.2021H15.75C16.0312 12.2021 16.2562 12.4271 16.2562 12.7083V15.8021Z" fill=""></path>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_130_9807">
                                            <rect width="18" height="18" fill="white" transform="translate(0 0.052124)"></rect>
                                          </clipPath>
                                        </defs>
                                      </svg>
                                    Activités
                                </a>
                            </li>
                            <!-- Menu Item Profile -->

                            <!-- Menu Item Profile -->
                            <li>
                                <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                                    href="#" @click="selected = (selected === 'Profile' ? '':'Profile')"
                                    :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Profile') && (page === 'profile') }"
                                    :class="page === 'profile' && 'bg-graydark'">
                                    <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.0002 7.79065C11.0814 7.79065 12.7689 6.1594 12.7689 4.1344C12.7689 2.1094 11.0814 0.478149 9.0002 0.478149C6.91895 0.478149 5.23145 2.1094 5.23145 4.1344C5.23145 6.1594 6.91895 7.79065 9.0002 7.79065ZM9.0002 1.7719C10.3783 1.7719 11.5033 2.84065 11.5033 4.16252C11.5033 5.4844 10.3783 6.55315 9.0002 6.55315C7.62207 6.55315 6.49707 5.4844 6.49707 4.16252C6.49707 2.84065 7.62207 1.7719 9.0002 1.7719Z" fill="" />
                                        <path d="M10.8283 9.05627H7.17207C4.16269 9.05627 1.71582 11.5313 1.71582 14.5406V16.875C1.71582 17.2125 1.99707 17.5219 2.3627 17.5219C2.72832 17.5219 3.00957 17.2407 3.00957 16.875V14.5406C3.00957 12.2344 4.89394 10.3219 7.22832 10.3219H10.8564C13.1627 10.3219 15.0752 12.2063 15.0752 14.5406V16.875C15.0752 17.2125 15.3564 17.5219 15.7221 17.5219C16.0877 17.5219 16.3689 17.2407 16.3689 16.875V14.5406C16.2846 11.5313 13.8377 9.05627 10.8283 9.05627Z" fill="" />
                                    </svg>
                                    Profile
                                </a>
                            </li>
                            <!-- Menu Item Profile -->

                            <!-- Menu Item Restauration -->
                            <li>
                                <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4" href="#" @click.prevent="selected = (selected === 'Restauration' ? '':'Restauration')" :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Restauration') || ( page === 'infosresto' || page === 'places' || page === 'menu' || page === 'plats' || page === 'menus' || page === 'serveurdisponible' || page === 'stockerestaurant') || page === 'dispatcher' || page === 'recettes' }"recette>
                                    <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_130_9787)">
                                          <path d="M15.8343 2.49902C15.8343 1.43027 14.9624 0.530273 13.8655 0.530273H4.13428C3.06553 0.530273 2.16553 1.40215 2.16553 2.49902V16.6178C2.16553 16.8428 2.30615 17.0678 2.50303 17.1803C2.6999 17.2928 2.95303 17.2646 3.1499 17.1521L4.55615 16.224L6.44053 17.4615C6.66553 17.6021 6.91865 17.6021 7.14365 17.4615L8.9999 16.224L10.8562 17.4615C10.9687 17.5459 11.0812 17.574 11.1937 17.574C11.3062 17.574 11.4468 17.5459 11.5312 17.4615L13.3874 16.224L14.7937 17.1803C14.9905 17.3209 15.2437 17.3209 15.4405 17.2084C15.6374 17.0959 15.778 16.8709 15.778 16.6459L15.8343 2.49902ZM14.0343 15.099C13.6687 14.8459 13.1905 14.8459 12.8249 15.099L11.2218 16.1678L9.61865 15.099C9.42178 14.9865 9.2249 14.9021 8.9999 14.9021C8.80303 14.9021 8.57803 14.9584 8.40928 15.099L6.80615 16.1678L5.20303 15.099C4.8374 14.8459 4.35928 14.8459 3.99365 15.099L3.45928 15.4365V2.49902C3.45928 2.10527 3.76865 1.7959 4.1624 1.7959H13.9218C14.3155 1.7959 14.6249 2.10527 14.6249 2.49902V15.4365L14.0343 15.099Z" fill=""></path>
                                          <path d="M7.93106 3.79272H5.5123C5.1748 3.79272 4.89355 4.07397 4.89355 4.41147C4.89355 4.74897 5.1748 5.03022 5.5123 5.03022H7.93106C8.26856 5.03022 8.54981 4.74897 8.54981 4.41147C8.54981 4.07397 8.26856 3.79272 7.93106 3.79272Z" fill=""></path>
                                          <path d="M12.347 3.79272H11.672C11.3345 3.79272 11.0532 4.07397 11.0532 4.41147C11.0532 4.74897 11.3345 5.03022 11.672 5.03022H12.347C12.6845 5.03022 12.9657 4.74897 12.9657 4.41147C12.9657 4.07397 12.6845 3.79272 12.347 3.79272Z" fill=""></path>
                                          <path d="M5.5123 8.74275H7.05918C7.39668 8.74275 7.67793 8.4615 7.67793 8.124C7.67793 7.7865 7.39668 7.50525 7.05918 7.50525H5.5123C5.1748 7.50525 4.89355 7.7865 4.89355 8.124C4.89355 8.4615 5.14668 8.74275 5.5123 8.74275Z" fill=""></path>
                                          <path d="M12.347 7.47717H11.672C11.3345 7.47717 11.0532 7.75842 11.0532 8.09592C11.0532 8.43342 11.3345 8.71467 11.672 8.71467H12.347C12.6845 8.71467 12.9657 8.43342 12.9657 8.09592C12.9657 7.75842 12.6845 7.47717 12.347 7.47717Z" fill=""></path>
                                          <path d="M7.93106 11.1334H5.5123C5.1748 11.1334 4.89355 11.4147 4.89355 11.7522C4.89355 12.0897 5.1748 12.3709 5.5123 12.3709H7.93106C8.26856 12.3709 8.54981 12.0897 8.54981 11.7522C8.54981 11.4147 8.26856 11.1334 7.93106 11.1334Z" fill=""></path>
                                          <path d="M12.347 11.1334H11.672C11.3345 11.1334 11.0532 11.4147 11.0532 11.7522C11.0532 12.0897 11.3345 12.3709 11.672 12.3709H12.347C12.6845 12.3709 12.9657 12.0897 12.9657 11.7522C12.9657 11.4147 12.6845 11.1334 12.347 11.1334Z" fill=""></path>
                                        </g>
                                        <defs>
                                          <clipPath id="clip0_130_9787">
                                            <rect width="18" height="18" fill="white" transform="translate(0 0.052124)"></rect>
                                          </clipPath>
                                        </defs>
                                    </svg>
                                    Restauration
                                    <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Restauration') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                                    </svg>
                                </a>

                                <!-- Dropdown Menu Start -->
                                <div class="translate transform overflow-hidden" :class="(selected === 'Restauration') ? 'block' : 'hidden'">
                                    <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="{{ route('listing.restauration') }}" :class="page === 'infosresto' && '!text-white'">Vue d'ensemble</a>
                                        </li>

                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="{{ route('table') }}" :class="page === 'places' && '!text-white'">Places</a>
                                        </li>

                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="{{ route('index.stocke_restauration') }}" :class="page === 'stockerestaurant' && '!text-white'">Stockes</a>
                                        </li>

                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="{{ route('dispatcher.index') }}" :class="page === 'dispatcher' && '!text-white'">Dispatcher</a>
                                        </li>

                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="{{ route('dispatcher.getRecettes') }}" :class="page === 'recettes' && '!text-white'">Recettes</a>
                                        </li>


                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="{{ route('index.repas') }}" :class="page === 'menus' && '!text-white'">Menus</a>
                                        </li>

                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="{{ route('index.plats') }}" :class="page === 'plats' && '!text-white'">Plats</a>
                                        </li>
                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="#" :class="page === 'serveurdisponible' && '!text-white'">Serveur au poste</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Dropdown Menu End -->
                            </li>
                            <!-- Menu Item Task -->



                            <!-- Menu Item Caisse -->
                            <li>
                                <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4" href="#" @click.prevent="selected = (selected === 'Caisses' ? '':'Caisses')" :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Caisses') || (page === 'guichetRestaurant' || page === 'guichetMaquis' || page === 'guichetEvenement') }">
                                    <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_130_9728)">
                                            <path d="M3.45928 0.984375H1.6874C1.04053 0.984375 0.478027 1.51875 0.478027 2.19375V3.96563C0.478027 4.6125 1.0124 5.175 1.6874 5.175H3.45928C4.10615 5.175 4.66865 4.64063 4.66865 3.96563V2.16562C4.64053 1.51875 4.10615 0.984375 3.45928 0.984375ZM3.3749 3.88125H1.77178V2.25H3.3749V3.88125Z" fill="" />
                                            <path d="M7.22793 3.71245H16.8748C17.2123 3.71245 17.5217 3.4312 17.5217 3.06558C17.5217 2.69995 17.2404 2.4187 16.8748 2.4187H7.22793C6.89043 2.4187 6.58105 2.69995 6.58105 3.06558C6.58105 3.4312 6.89043 3.71245 7.22793 3.71245Z" fill="" />
                                            <path d="M3.45928 6.75H1.6874C1.04053 6.75 0.478027 7.28437 0.478027 7.95937V9.73125C0.478027 10.3781 1.0124 10.9406 1.6874 10.9406H3.45928C4.10615 10.9406 4.66865 10.4062 4.66865 9.73125V7.95937C4.64053 7.28437 4.10615 6.75 3.45928 6.75ZM3.3749 9.64687H1.77178V8.01562H3.3749V9.64687Z" fill="" />
                                            <path d="M16.8748 8.21252H7.22793C6.89043 8.21252 6.58105 8.49377 6.58105 8.8594C6.58105 9.22502 6.86231 9.47815 7.22793 9.47815H16.8748C17.2123 9.47815 17.5217 9.1969 17.5217 8.8594C17.5217 8.5219 17.2123 8.21252 16.8748 8.21252Z" fill="" />
                                            <path d="M3.45928 12.8531H1.6874C1.04053 12.8531 0.478027 13.3875 0.478027 14.0625V15.8344C0.478027 16.4813 1.0124 17.0438 1.6874 17.0438H3.45928C4.10615 17.0438 4.66865 16.5094 4.66865 15.8344V14.0625C4.64053 13.3875 4.10615 12.8531 3.45928 12.8531ZM3.3749 15.75H1.77178V14.1188H3.3749V15.75Z" fill="" />
                                            <path d="M16.8748 14.2875H7.22793C6.89043 14.2875 6.58105 14.5687 6.58105 14.9344C6.58105 15.3 6.86231 15.5812 7.22793 15.5812H16.8748C17.2123 15.5812 17.5217 15.3 17.5217 14.9344C17.5217 14.5687 17.2123 14.2875 16.8748 14.2875Z" fill="" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_130_9728">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Caisses
                                    <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Caisses') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                                    </svg>
                                </a>

                                <!-- Dropdown Menu Start -->
                                <div class="translate transform overflow-hidden" :class="(selected === 'Caisses') ? 'block' : 'hidden'">
                                    <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="{{route('index.caisses')}}" :class="page === 'guichetRestaurant' && '!text-white'">Guichet Restaurant</a>
                                        </li>
                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="#" :class="page === 'guichetMaquis' && '!text-white'">Guichet Buvette </a>
                                        </li>

                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="#" :class="page === 'guichetEvenement' && '!text-white'">Guichet Évenement </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Dropdown Menu End -->
                            </li>
                            <!-- Menu Item Caisse -->


                            <!-- Menu Item Vente -->
                            <li>
                                <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4" href="#" @click.prevent="selected = (selected === 'Ventes' ? '':'Ventes')" :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Ventes') || (page === 'venteRestaurant' || page === 'venteMaquis' || page === 'venteEvenement') }">
                                    <svg class="fill-current" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_130_9728)">
                                            <path d="M3.45928 0.984375H1.6874C1.04053 0.984375 0.478027 1.51875 0.478027 2.19375V3.96563C0.478027 4.6125 1.0124 5.175 1.6874 5.175H3.45928C4.10615 5.175 4.66865 4.64063 4.66865 3.96563V2.16562C4.64053 1.51875 4.10615 0.984375 3.45928 0.984375ZM3.3749 3.88125H1.77178V2.25H3.3749V3.88125Z" fill="" />
                                            <path d="M7.22793 3.71245H16.8748C17.2123 3.71245 17.5217 3.4312 17.5217 3.06558C17.5217 2.69995 17.2404 2.4187 16.8748 2.4187H7.22793C6.89043 2.4187 6.58105 2.69995 6.58105 3.06558C6.58105 3.4312 6.89043 3.71245 7.22793 3.71245Z" fill="" />
                                            <path d="M3.45928 6.75H1.6874C1.04053 6.75 0.478027 7.28437 0.478027 7.95937V9.73125C0.478027 10.3781 1.0124 10.9406 1.6874 10.9406H3.45928C4.10615 10.9406 4.66865 10.4062 4.66865 9.73125V7.95937C4.64053 7.28437 4.10615 6.75 3.45928 6.75ZM3.3749 9.64687H1.77178V8.01562H3.3749V9.64687Z" fill="" />
                                            <path d="M16.8748 8.21252H7.22793C6.89043 8.21252 6.58105 8.49377 6.58105 8.8594C6.58105 9.22502 6.86231 9.47815 7.22793 9.47815H16.8748C17.2123 9.47815 17.5217 9.1969 17.5217 8.8594C17.5217 8.5219 17.2123 8.21252 16.8748 8.21252Z" fill="" />
                                            <path d="M3.45928 12.8531H1.6874C1.04053 12.8531 0.478027 13.3875 0.478027 14.0625V15.8344C0.478027 16.4813 1.0124 17.0438 1.6874 17.0438H3.45928C4.10615 17.0438 4.66865 16.5094 4.66865 15.8344V14.0625C4.64053 13.3875 4.10615 12.8531 3.45928 12.8531ZM3.3749 15.75H1.77178V14.1188H3.3749V15.75Z" fill="" />
                                            <path d="M16.8748 14.2875H7.22793C6.89043 14.2875 6.58105 14.5687 6.58105 14.9344C6.58105 15.3 6.86231 15.5812 7.22793 15.5812H16.8748C17.2123 15.5812 17.5217 15.3 17.5217 14.9344C17.5217 14.5687 17.2123 14.2875 16.8748 14.2875Z" fill="" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_130_9728">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    Ventes éffectuées
                                    <svg class="absolute right-4 top-1/2 -translate-y-1/2 fill-current" :class="{ 'rotate-180': (selected === 'Ventes') }" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z" fill="" />
                                    </svg>
                                </a>

                                <!-- Dropdown Menu Start -->
                                <div class="translate transform overflow-hidden" :class="(selected === 'Ventes') ? 'block' : 'hidden'">
                                    <ul class="mb-5.5 mt-4 flex flex-col gap-2.5 pl-6">
                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="{{route('vente.showAll')}}" :class="page === 'guichetRestaurant' && '!text-white'">Ventes Restaurant</a>
                                        </li>
                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="#" :class="page === 'guichetMaquis' && '!text-white'">Ventes Buvette </a>
                                        </li>

                                        <li>
                                            <a class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-bodydark2 duration-300 ease-in-out hover:text-white option-navigation" href="#" :class="page === 'guichetEvenement' && '!text-white'">Ventes Évenement </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Dropdown Menu End -->
                            </li>
                            <!-- Menu Item Vente -->
                        </ul>
                    </div>


                    <!-- Support Group -->
                    <div>
                        <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">
                            SUPPORT
                        </h3>

                        <ul class="mb-6 flex flex-col gap-1.5">
                            <!-- Menu Item Messages -->
                            <li>
                                <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                                    href="#" @click="selected = (selected === 'Messages' ? '':'Messages')"
                                    :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Messages') && (page === 'Messages') }">
                                    <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.7499 2.75208H2.2499C1.29365 2.75208 0.478027 3.53957 0.478027 4.52395V13.6364C0.478027 14.5927 1.26553 15.4083 2.2499 15.4083H15.7499C16.7062 15.4083 17.5218 14.6208 17.5218 13.6364V4.49583C17.5218 3.53958 16.7062 2.75208 15.7499 2.75208ZM15.7499 4.0177C15.778 4.0177 15.8062 4.0177 15.8343 4.0177L8.9999 8.4052L2.16553 4.0177C2.19365 4.0177 2.22178 4.0177 2.2499 4.0177H15.7499ZM15.7499 14.0865H2.2499C1.96865 14.0865 1.74365 13.8615 1.74365 13.5802V5.2552L8.3249 9.47395C8.52178 9.61457 8.74678 9.67083 8.97178 9.67083C9.19678 9.67083 9.42178 9.61457 9.61865 9.47395L16.1999 5.2552V13.6083C16.2562 13.8896 16.0312 14.0865 15.7499 14.0865Z"
                                            fill="" />
                                    </svg>

                                    Messages

                                    <span
                                        class="absolute right-14 top-1/2 -translate-y-1/2 rounded bg-primary px-2.5 py-1 text-xs font-medium text-white">5</span>
                                    <span
                                        class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white">Pro</span>
                                </a>
                            </li>
                            <!-- Menu Item Messages -->

                            <!-- Menu Item Inbox -->
                            <li>
                                <a class="group relative flex items-center gap-2.5 rounded-sm px-4 py-2 font-medium text-bodydark1 duration-300 ease-in-out hover:bg-graydark dark:hover:bg-meta-4"
                                    href="#" @click="selected = (selected === 'Inbox' ? '':'Inbox')"
                                    :class="{ 'bg-graydark dark:bg-meta-4': (selected === 'Inbox') && (page === 'inbox') }">
                                    <svg class="fill-current" width="18" height="19" viewBox="0 0 18 19"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M16.8749 7.44902C16.5374 7.44902 16.228 7.73027 16.228 8.0959V13.3834C16.228 14.4803 15.4124 15.3521 14.3999 15.3521H3.5999C2.55928 15.3521 1.77178 14.4803 1.77178 13.3834V8.06777C1.77178 7.73027 1.49053 7.4209 1.1249 7.4209C0.759277 7.4209 0.478027 7.70215 0.478027 8.06777V13.3553C0.478027 15.1271 1.85615 16.5896 3.57178 16.5896H14.3999C16.1155 16.5896 17.4937 15.1553 17.4937 13.3553V8.06777C17.5218 7.73027 17.2124 7.44902 16.8749 7.44902Z"
                                            fill="" />
                                        <path
                                            d="M8.5498 11.6396C8.6623 11.7521 8.83105 11.8365 8.9998 11.8365C9.16855 11.8365 9.30918 11.7803 9.4498 11.6396L12.8811 8.23652C13.1342 7.9834 13.1342 7.58965 12.8811 7.33652C12.6279 7.0834 12.2342 7.0834 11.9811 7.33652L9.64668 9.64277V2.16152C9.64668 1.82402 9.36543 1.51465 8.9998 1.51465C8.6623 1.51465 8.35293 1.7959 8.35293 2.16152V9.69902L6.01855 7.36465C5.76543 7.11152 5.37168 7.11152 5.11855 7.36465C4.86543 7.61777 4.86543 8.01152 5.11855 8.26465L8.5498 11.6396Z"
                                            fill="" />
                                    </svg>

                                    Notifications
                                    <span
                                        class="absolute right-4 block rounded bg-primary px-2 py-1 text-xs font-medium text-white">Pro</span>
                                </a>
                            </li>

                        </ul>
                    </div>

                    <!-- Others Group -->
                    <div>

                        <ul class="mb-6 flex flex-col gap-1.5">

                        </ul>
                    </div>
                </nav>

            </div>
        </aside>
