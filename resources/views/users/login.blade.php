<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js'])

  {{-- awesomefont --}}
  <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">

</head>
<body>
  <section class="bg-gradient-to-b from-[#11001B] to-[#3f007d] min-h-screen flex items-center justify-center">

    <div class="bg-gradient-to-r from-[#11001B] to-[#470b83] flex rounded-2xl shadow-lg max-w-3xl">
        <div class="sm:w-1/2 px-16 text-white p-5">
            <h2 class="font-bold text-2xl">Login</h2>
            <p class="text-sm mt-4">Jika sudah memiliki akun, silahkan login.</p>
    
            <form action="" class="flex flex-col gap-4 mt-8">
                <span class="text-white font-semibold">Email</span>
                <input class="bg-transparent p-2 rounded-lg border -mt-3 focus:outline-none" type="text" name="email" placeholder="Email">
                <span class="text-white font-semibold">Password</span>
                <div class="flex flex-row bg-transparent rounded-lg border -mt-3">
                  <input class="bg-transparent rounded-lg border-none outline-none focus:outline-none" id="password" type="password" name="password" placeholder="Password">
                  <i class="fa-solid fa-eye-slash my-auto mx-auto" id="pass-icon" onclick="pass()"></i>
                </div>
                <button class="bg-white text-black rounded-lg py-2 mt-5 hover:opacity-80 font-semibold">Login</button>
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
  </script>
</body>
</html>