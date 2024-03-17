<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./output.css" rel="stylesheet">
  @vite(['resources/css/app.css','resources/js/app.js'])
  {{-- awesomefont --}}
  <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1-web/css/all.min.css') }}">

  {{-- google font --}}
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">


</head>
<body class="font-roboto">
  <section class="bg-gradient-to-b from-[#11001B] to-[#3f007d] min-h-screen flex items-center justify-center">

    <div class="bg-gradient-to-r from-[#11001B] to-[#470b83] flex rounded-2xl shadow-lg max-w-3xl">
        <div class="sm:w-1/2 px-16 text-white p-5">
            <h2 class="font-bold text-2xl">Daftar</h2>
            <p class="text-sm mt-4">Silahkan buat akun</p>

            <form action="{{ route('register.post') }}" method="post" class="flex flex-col gap-4 mt-8">
                {{ csrf_field() }}
                <span class="text-white font-semibold">Username</span>
                <input class="bg-transparent p-2 rounded-lg border -mt-3" type="text" name="username" placeholder="Username">
                <span class="text-white font-semibold">Email</span>
                <input class="bg-transparent p-2 rounded-lg border -mt-3" type="text" name="email" placeholder="Email">
                <span class="text-white font-semibold">Password</span>
                <div class="flex flex-row bg-transparent rounded-lg border -mt-3">
                  <input class="bg-transparent rounded-lg border-none outline-none focus:outline-none" id="password" type="password" name="password" placeholder="Password">
                  <i class="fa-solid fa-eye-slash my-auto mx-auto cursor-pointer" id="pass-icon" onclick="togglePassword()"></i>
                </div>
                <button class="bg-white text-black rounded-lg py-2 mt-5 hover:opacity-80 font-semibold" type="submit">Daftar</button>
            </form>

            <div class="mt-5 text-xs flex justify-between items-center border-t py-4">
                <p>Sudah punya akun?</p>
                <a class="border px-5 py-1 rounded-lg hover:opacity-80" href="/login">Login</a>
            </div>
        </div>

        <div class="sm:block hidden w-1/2">
            <img class="rounded-r-2xl" src="/img/login.jpeg" alt="">
        </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
  <script>
    function togglePassword() {
    var passwordInput = document.getElementById("password");
    var passIcon = document.getElementById("pass-icon");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      passIcon.classList.remove("fa-eye-slash");
      passIcon.classList.add("fa-eye");
    } else {
      passwordInput.type = "password";
      passIcon.classList.remove("fa-eye");
      passIcon.classList.add("fa-eye-slash");
    }
  }
  </script>
</body>
</html>
