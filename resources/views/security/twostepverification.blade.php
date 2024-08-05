<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from demo.tailadmin.com/two-step-verification by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2024 18:35:00 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  <!-- /Added by HTTrack -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      2 Step Verification | TailAdmin - Tailwind CSS Admin Dashboard Template
    </title>
    <link rel="icon" @if ($my_banniere) href="{{$my_bannieres->logo}}"  @endif />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <script nonce="cb94bfb6-5b02-4a4a-b493-e69cbbdf9d9c">
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
                "cdn-cgi/zaraz/sd0d9.js?z=" +
                btoa(encodeURIComponent(JSON.stringify(j[l])));
              q.parentNode.insertBefore(r, q);
            };
            ["complete", "interactive"].includes(k.readyState)
              ? zaraz.init()
              : j.addEventListener("DOMContentLoaded", zaraz.init);
          })(w, d, "zarazData", "script");
        })(window, document);
      } catch (e) {
        throw (fetch("/cdn-cgi/zaraz/t"), e);
      }
    </script>
  </head>

  <body
    x-data="{ page: 'twoStepVerification', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
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

    <!-- ===== 2 Step Verification Section Start ===== -->
    <section class="overflow-hidden px-4 sm:px-8">
      <div
        class="flex h-screen flex-col items-center justify-center overflow-hidden"
      >
        <div class="no-scrollbar overflow-y-auto py-20">
          <div class="mx-auto w-full max-w-[480px]">
            <div class="text-center">
              <a href="index.html" class="mx-auto mb-10 inline-flex">
                <img @if ($my_banniere) href="{{$my_bannieres->logo}}"  @endif

                  alt="logo"
                  class="dark:hidden"
                />
                <img @if ($my_banniere) href="{{$my_bannieres->logo}}" @endif
                  alt="logo"
                  class="hidden dark:block"
                />
              </a>

              <div
                class="rounded-xl bg-white p-4 shadow-14 dark:bg-boxdark lg:p-7.5 xl:p-12.5"
              >
                <h1
                  class="mb-2.5 text-3xl font-black leading-[48px] text-black dark:text-white"
                >
                  Verify Your Account
                </h1>

                <p class="mb-7.5 font-medium">
                  Enter the 4 digit code sent to the registered email id.
                </p>

                <form>
                  <div class="flex items-center gap-4.5">
                    <input
                      type="text"
                      class="w-full rounded-md border-[1.5px] border-stroke bg-transparent p-3 font-medium text-2xl text-center text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                    />

                    <input
                      type="text"
                      class="w-full rounded-md border-[1.5px] border-stroke bg-transparent p-3 font-medium text-2xl text-center text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                    />

                    <input
                      type="text"
                      class="w-full rounded-md border-[1.5px] border-stroke bg-transparent p-3 font-medium text-2xl text-center text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                    />

                    <input
                      type="text"
                      class="w-full rounded-md border-[1.5px] border-stroke bg-transparent p-3 font-medium text-2xl text-center text-black outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-whiter dark:border-form-strokedark dark:bg-form-input dark:text-white dark:focus:border-primary"
                    />
                  </div>

                  <p
                    class="mb-5 mt-4 text-left font-medium text-black dark:text-white"
                  >
                    Did not receive a code?
                    <button class="text-primary">Resend</button>
                  </p>

                  <button
                    class="flex w-full justify-center rounded-md bg-primary p-[13px] font-bold text-gray hover:bg-opacity-90"
                  >
                    Verify
                  </button>

                  <span class="mt-5 block text-red">
                    Don’t share the verification code with anyone!
                  </span>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== 2 Step Verification Section End ===== -->
    <script defer src="{{asset('js/bundle.js')}}"></script>
    <script
      defer
      src="https://static.cloudflareinsights.com/beacon.min.js/vedd3670a3b1c4e178fdfb0cc912d969e1713874337387"
      integrity="sha512-EzCudv2gYygrCcVhu65FkAxclf3mYM6BCwiGUm6BEuLzSb5ulVhgokzCZED7yMIkzYVg65mxfIBNdNra5ZFNyQ=="
      data-cf-beacon='{"rayId":"87ea930999100288","r":1,"version":"2024.4.1","token":"67f7a278e3374824ae6dd92295d38f77"}'
      crossorigin="anonymous"
    ></script>
  </body>

  <!-- Mirrored from demo.tailadmin.com/two-step-verification by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 May 2024 18:35:00 GMT -->
</html>



