<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
  <section class="bg-gradient-to-b from-[#11001B] to-[#3f007d] min-h-screen flex items-center justify-center">

    <div class="bg-gradient-to-r from-[#11001B] to-[#470b83] flex rounded-2xl shadow-lg max-w-3xl p-5">
        <div class="sm:w-1/2 px-16 text-white">
            <h2 class="font-bold text-2xl">Daftar</h2>
            <p class="text-sm mt-4">Silahkan buat akun</p>
    
            <form action="" class="flex flex-col gap-4 mt-8">
                <span class="text-white font-semibold">Username</span>
                <input class="bg-transparent p-2 rounded-lg border -mt-3" type="text" name="name" placeholder="Username">
                <span class="text-white font-semibold">Email</span>
                <input class="bg-transparent p-2 rounded-lg border -mt-3" type="text" name="email" placeholder="Email">
                <span class="text-white font-semibold">Password</span>
                <input class="bg-transparent p-2 rounded-lg border -mt-3" type="password" name="password" placeholder="Password">
                <button class="bg-white text-black rounded-lg py-2 mt-5 hover:opacity-80 font-semibold">Daftar</button>
            </form>

            <div class="mt-5 text-xs flex justify-between items-center border-t py-4">
                <p>Sudah punya akun?</p>
                <a class="border px-5 py-1 rounded-lg hover:opacity-80" href="/login">Login</a>
            </div>
        </div>

        <div class="sm:block hidden w-1/2">
            <img class="rounded-2xl" src="/img/login2.png" alt="">
        </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>