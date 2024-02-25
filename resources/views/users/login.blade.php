<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js'])

  {{-- awesomefont --}}
  <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">

  {{-- animate css --}}
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

</head>
<body>
  <section class="bg-gradient-to-b from-[#11001B] to-[#3f007d] min-h-screen flex items-center justify-center">

    @if (session()->has('error_alert'))
      <div id="toast-danger" class="animate__animated animate__bounceInRight fixed top-5 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
          <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 11.793a1 1 0 1 1-1.414 1.414L10 11.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L8.586 10 6.293 7.707a1 1 0 0 1 1.414-1.414L10 8.586l2.293-2.293a1 1 0 0 1 1.414 1.414L11.414 10l2.293 2.293Z"/>
              </svg>
              <span class="sr-only">Error icon</span>
          </div>
          <div class="ms-3 text-sm font-normal">{{session('error_alert')}}</div>
          <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
              <span class="sr-only">Close</span>
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
              </svg>
          </button>
      </div>
    @endif

    <div class="bg-gradient-to-r from-[#11001B] to-[#470b83] flex rounded-2xl shadow-lg max-w-3xl">
        <div class="sm:w-1/2 px-16 text-white p-5">
            <h2 class="font-bold text-2xl">Login</h2>
            <p class="text-sm mt-4">Jika sudah memiliki akun, silahkan login.</p>

            <form action="{{route('login.post')}}" method="POST" class="flex flex-col gap-4 mt-8">
                {{ csrf_field() }}
                <span class="text-white font-semibold">Email</span>
                <input class="bg-transparent p-2 rounded-lg border -mt-3 focus:outline-none" type="text" name="email" placeholder="Email">
                <span class="text-white font-semibold">Password</span>
                <div class="flex flex-row bg-transparent rounded-lg border -mt-3">
                  <input class="bg-transparent rounded-lg border-none outline-none focus:outline-none" id="password" type="password" name="password" placeholder="Password">
                  <i class="fa-solid fa-eye-slash my-auto mx-auto" id="pass-icon" onclick="pass()"></i>
                </div>
                <button class="bg-white text-black rounded-lg py-2 mt-5 hover:opacity-80 font-semibold" type="submit">Login</button>
            </form>

            <div class="mt-5 text-xs flex justify-between items-center border-t py-4">
                <p>Tidak punya akun?</p>
                <a class="border px-5 py-1 rounded-lg hover:opacity-80" href="/register">Daftar</a>
            </div>
        </div>

        <div class="sm:block hidden w-1/2">
            <img class="rounded-r-2xl" src="/img/login.jpeg" alt="">
        </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
  <script>
    var a;
    function pass()
    {
      if(a==1)
      {
        document.getElementById('password').type='password';
        a=0;
      }
      else
      {
        document.getElementById('password').type='text';
        a=1;
      }
    }

    // auto close toast
    setTimeout(function() {
      var toastDanger = document.getElementById('toast-danger');
        toastDanger.classList.add('animate__animated', 'animate__fadeOut');
        setTimeout(function() {
            toastDanger.style.display = 'none';
        }, 1000);
    }, 2000);
  </script>
</body>
</html>
