<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from demo.tailadmin.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2024 18:25:32 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  <!-- /Added by HTTrack -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> ProGestRestos </title>
    <link rel="icon" @if ($my_banniere) href="{{$my_banniere->logo}}"  @endif />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script nonce="f378c136-b6e1-4065-9baa-3889650110dc">
      try {
        (function (w, d) {
          !(function (j, k, l, m) {
            j[l] = j[l] || {};
            j[l].executed = [];
            j.zaraz = { deferred: [], listeners: [] };
            j.zaraz._v = "5621";
            j.zaraz.q = [];
            j.zaraz._f = function (n) {
              return async function () {
                var o = Array.prototype.slice.call(arguments);
                j.zaraz.q.push({ m: n, a: o });
              };
            };
            for (const p of ["track", "set", "debug"])
              j.zaraz[p] = j.zaraz._f(p);
            j.zaraz.init = () => {
              var q = k.getElementsByTagName(m)[0],
                r = k.createElement(m),
                s = k.getElementsByTagName("title")[0];
              s && (j[l].t = k.getElementsByTagName("title")[0].text);
              j[l].x = Math.random();
              j[l].w = j.screen.width;
              j[l].h = j.screen.height;
              j[l].j = j.innerHeight;
              j[l].e = j.innerWidth;
              j[l].l = j.location.href;
              j[l].r = k.referrer;
              j[l].k = j.screen.colorDepth;
              j[l].n = k.characterSet;
              j[l].o = new Date().getTimezoneOffset();
              if (j.dataLayer)
                for (const w of Object.entries(
                  Object.entries(dataLayer).reduce(
                    (x, y) => ({ ...x[1], ...y[1] }),
                    {}
                  )
                ))
                  zaraz.set(w[0], w[1], { scope: "page" });
              j[l].q = [];
              for (; j.zaraz.q.length; ) {
                const z = j.zaraz.q.shift();
                j[l].q.push(z);
              }
              r.defer = !0;
              for (const A of [localStorage, sessionStorage])
                Object.keys(A || {})
                  .filter((C) => C.startsWith("_zaraz_"))
                  .forEach((B) => {
                    try {
                      j[l]["z_" + B.slice(7)] = JSON.parse(A.getItem(B));
                    } catch {
                      j[l]["z_" + B.slice(7)] = A.getItem(B);
                    }
                  });
              r.referrerPolicy = "origin";
              r.src =
                "public/cdn-cgi/zaraz/sd0d9.js?z=" +
                btoa(encodeURIComponent(JSON.stringify(j[l])));
              q.parentNode.insertBefore(r, q);
            };
            ["complete", "interactive"].includes(k.readyState)
              ? zaraz.init()
              : j.addEventListener("DOMContentLoaded", zaraz.init);
          })(w, d, "zarazData", "script");
        })(window, document);
      } catch (e) {
        throw (fetch("public/cdn-cgi/zaraz/t"), e);
      }
    </script>
  </head>

  <body id="body-page"
    x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}"
  >
    <!-- ===== Preloader Start ===== -->
    <div
      x-show="loaded"
      x-init="window.addEventListener('DOMContentLoaded', () => {setTimeout(() => loaded = false, 500)})"
      class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black"
    >
      <div
        class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent"
      ></div>
    </div>

    <!-- ===== Preloader End ===== -->

    <!-- ===== Page Wrapper Start ===== -->
    <div class="flex h-screen overflow-hidden">
        @auth
        @include("layouts.sidbar")
        @endauth



      <!-- ===== Content Area Start ===== -->
      <div
        class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden"
      >

        @auth
        @include("layouts.topbar")
        @endauth



        <!-- ===== Main Content Start ===== -->
        <main>
          <div class="mx-auto max-w-screen-2xl p-4 md:p-6 2xl:p-10">
            @yield("content")
          </div>
        </main>
        <!-- ===== Main Content End ===== -->
      </div>
      <!-- ===== Content Area End ===== -->
    </div>
    <!-- ===== Page Wrapper End ===== -->
    <script src="{{asset('js/script_active_option.js')}}"></script>

    <script defer src="{{asset('js/bundle.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session()->has('notification'))
                Swal.fire({
                    icon: '{{ session('notification.type') }}',
                    title: '{{ session('notification.title') }}',
                    text: '{{ session('notification.message') }}',
                });
            @endif
        });
    </script>
    <script src="{{asset('js/transforme_text_on_image.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/envoie_request_ajax.js')}}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vedd3670a3b1c4e178fdfb0cc912d969e1713874337387" integrity="sha512-EzCudv2gYygrCcVhu65FkAxclf3mYM6BCwiGUm6BEuLzSb5ulVhgokzCZED7yMIkzYVg65mxfIBNdNra5ZFNyQ==" data-cf-beacon='{"rayId":"87ea8871d9226fee","version":"2024.4.1","r":1,"token":"67f7a278e3374824ae6dd92295d38f77","b":1}' crossorigin="anonymous"></script>
  </body>


  <!-- Mirrored from demo.tailadmin.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2024 18:27:41 GMT -->
</html>
