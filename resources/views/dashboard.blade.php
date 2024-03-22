@extends('layouts.main')

@section('content')
    <section class="bg-gradient-to-b from-[#000000] to-[#210034] min-h-screen flex items-center justify-center text-white relative">
        <div class="container py-20 mt-16">
            {{-- flowbite toast --}}
            @if (session()->has('success_alert'))
                <div id="toast-success" class="animate__animated animate__bounceInRight fixed top-20 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="sr-only">Check icon</span>
                    </div>
                    <div class="ms-3 text-sm font-normal">{{session('success_alert')}}</div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                    </button>
                </div>
            @endif

            <div class="flex flex-col items-center justify-center z-20 md:flex-row">
                <div class="text-white mb-12 md:text-left md:w-1/2 md:pr-10">
                    <h1 class="title mb-4 font-semibold text-2xl animate__animated animate__fadeInLeft animate__slow">Cyber Security</h1>
                    <p class="leading-tight text-7xl mb-3 animate__animated animate__fadeInLeft animate__slow">Your data is your power, and it needs to be protected</p>
                    <p class="leading-relaxed mb-8 mt-8 text-lg line-clamp-3 animate__animated animate__fadeInLeft animate__slow">Cyber security atau keamanan Siber adalah praktik untuk melindungi sistem komputer, jaringan, perangkat, dan data dari ancaman dan serangan siber. Tujuannya adalah untuk mencegah akses yang tidak sah, merusak integritas data, dan melindungi privasi pengguna. Keamanan siber mencakup berbagai aspek dan teknik untuk mengidentifikasi, melindungi, mendeteksi, merespon, dan memulihkan dari ancaman siber.</p>
                    <a href="/about" class="bg-white text-black rounded-full py-3 px-10 font-medium text-base hover:bg-gray-300 animate__animated animate__fadeInLeft animate__slow">Read more >></a>
                </div>
    
                <div class="md:block hidden md:w-1/2">
                    <img src="/img/hero5.png" class="animate__animated animate__fadeIn animate__slower" width="600px" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#11001B] py-28">

        <div class="text-center text-white m-auto mb-12 md:w-1/2 scroll-animated">
            <a href="/about" class="title font-sans font-semibold text-4xl">Jenis Jenis Cyber Security</a>
        </div>

        <div class="container scroll-animated-fadein">
            <div class="text-white">
                <div class="owl-carousel owl-theme">
                    <div class="border-2 border-solid h-96 border-slate-500 py-12 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3">Keamanan Jaringan (Network Security)</h3>
                            <p class="fixed top-40 leading-relaxed line-clamp-4 mb-7">Fokus pada perlindungan integritas, kerahasiaan, dan ketersediaan data yang bergerak melalui jaringan. Ini melibatkan teknologi seperti firewall, IDS (Intrusion Detection System), IPS (Intrusion Prevention System), dan VPN (Virtual Private Network).</p>
                            <a href="/about" class="fixed bottom-16 hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid h-96 border-slate-500 py-12 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3">Keamanan Perimeter (Perimeter Security)</h3>
                            <p class="fixed top-40 leading-relaxed line-clamp-4 mb-7">Melibatkan perlindungan terhadap akses yang tidak sah ke dalam jaringan atau sistem dari luar. Ini termasuk penggunaan firewall, gateway keamanan, dan kontrol akses yang ketat.</p>
                            <a href="/about" class="fixed bottom-16 hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid h-96 border-slate-500 py-12 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3">Keamanan End-Point (Endpoint Security)</h3>
                            <p class="fixed top-40 leading-relaxed line-clamp-4 mb-7">Menyasar perlindungan pada perangkat individu seperti komputer pribadi, laptop, ponsel, dan perangkat IoT. Ini melibatkan penggunaan antivirus, antispyware, firewall pribadi, dan sistem deteksi ancaman end-point.</p>
                            <a href="/about" class="fixed bottom-16 hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid h-96 border-slate-500 py-12 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3">Keamanan Aplikasi (Application Security)</h3>
                            <p class="fixed top-40 leading-relaxed line-clamp-4 mb-7">Memastikan bahwa perangkat lunak dan aplikasi yang digunakan oleh organisasi aman dari ancaman. Ini melibatkan pengujian keamanan perangkat lunak, pembaruan reguler, dan penerapan best practice dalam pengembangan perangkat lunak.</p>
                            <a href="/about" class="fixed bottom-16 hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid h-96 border-slate-500 py-12 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3">Keamanan Data (Data Security)</h3>
                            <p class="fixed top-40 leading-relaxed line-clamp-4 mb-7">Melibatkan perlindungan terhadap data dari akses yang tidak sah atau kebocoran. Ini termasuk enkripsi data, manajemen hak akses, dan kebijakan retensi data.</p>
                            <a href="/about" class="fixed bottom-16 hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid h-96 border-slate-500 py-12 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3">Keamanan Cloud (Cloud Security)</h3>
                            <p class="fixed top-40 leading-relaxed line-clamp-4 mb-7">Fokus pada melindungi data, aplikasi, dan infrastruktur yang disimpan di lingkungan cloud. Ini melibatkan enkripsi cloud, kontrol akses, dan pemantauan aktivitas cloud.</p>
                            <a href="/about" class="fixed bottom-16 hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid h-96 border-slate-500 py-12 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3">Keamanan Mobile (Mobile Security)</h3>
                            <p class="fixed top-40 leading-relaxed line-clamp-4 mb-7">Mengamankan perangkat mobile dan aplikasi di lingkungan bisnis. Ini melibatkan kebijakan keamanan mobile, enkripsi perangkat mobile, dan pengelolaan perangkat.</p>
                            <a href="/about" class="fixed bottom-16 hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid h-96 border-slate-500 py-12 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3">Identity and Access Management - IAM</h3>
                            <p class="fixed top-40 leading-relaxed line-clamp-4 mb-7">Mengelola dan melindungi identitas pengguna dan memberikan hak akses yang sesuai. Ini termasuk autentikasi dua faktor, single sign-on, dan kontrol akses berbasis peran.</p>
                            <a href="/about" class="fixed bottom-16 hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid h-96 border-slate-500 py-12 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3">Network Management Security</h3>
                            <p class="fixed top-40 leading-relaxed line-clamp-4 mb-7">Melibatkan perlindungan terhadap sistem manajemen jaringan dari ancaman yang dapat mempengaruhi fungsionalitas jaringan. Ini mencakup keamanan protokol manajemen dan monitoring jaringan.</p>
                            <a href="/about" class="fixed bottom-16 hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid h-96 border-slate-500 py-12 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3">Keamanan Fisik (Physical Security)</h3>
                            <p class="fixed top-40 leading-relaxed line-clamp-4 mb-7">Menjamin keamanan fisik perangkat keras, pusat data, dan infrastruktur komputer. Ini melibatkan kontrol akses fisik, pemantauan keamanan fisik, dan perlindungan terhadap pencurian atau kerusakan fisik.</p>
                            <a href="/about" class="fixed bottom-16 hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gradient-to-b from-[#11001B] to-[#210034]">

        <div class="text-center text-white m-auto mb-12 md:w-1/2 scroll-animated">
            <h1 class="title font-sans font-semibold text-4xl">Our Team</h1>
        </div>

        <div class="container py-20 scroll-animated-fadein">
            <div class="text-white mb-36">
                <div class="owl-carousel owl-theme">
                    <div class="border-2 border-solid border-slate-500 py-10 rounded-2xl">
                        <div class="flex flex-col items-center pb-10 pt-4">
                            <img class="h-36 mb-3 rounded-full shadow-lg" src="/img/rico.jpeg" alt="Bonnie image" style="width: 144px"/>
                            <h5 class="my-3 md:text-2xl text-sm font-medium text-white">Rico Fadli Alfiansyah</h5>
                            <span class="text-md text-gray-300">NRP</span>
                            <span class="text-md text-gray-300">(15-2023-090)</span>
                        </div>
                    </div>
                    <div class="border-2 border-solid border-slate-500 py-10 rounded-2xl">
                        <div class="flex flex-col items-center pb-10 pt-4">
                            <img class="h-36 mb-3 rounded-full shadow-lg" src="/img/riza.jpg" alt="Bonnie image" style="width: 144px"/>
                            <h5 class="my-3 md:text-2xl text-sm font-medium text-white">Riza Maulana Tamsirin</h5>
                            <span class="text-md text-gray-300">NRP</span>
                            <span class="text-md text-gray-300">(15-2023-109)</span>
                        </div>
                    </div>
                    <div class="border-2 border-solid border-slate-500 py-10 rounded-2xl">
                        <div class="flex flex-col items-center pb-10 pt-4">
                            <img class="h-36 mb-3 rounded-full shadow-lg" src="/img/mikel.jpg" alt="Bonnie image" style="width: 144px"/>
                            <h5 class="my-3 md:text-2xl text-sm font-medium text-white">Arsyad Effendi</h5>
                            <span class="text-md text-gray-300">NRP</span>
                            <span class="text-md text-gray-300">(15-2023-107)</span>
                        </div>
                    </div>
                    <div class="border-2 border-solid border-slate-500 py-10 rounded-2xl">
                        <div class="flex flex-col items-center pb-10 pt-4">
                            <img class="h-36 mb-3 rounded-full shadow-lg" src="/img/dimas.jpg" alt="Bonnie image" style="width: 144px"/>
                            <h5 class="my-3 md:text-2xl text-sm font-medium text-white">Fachrisan Dimas Narendra</h5>
                            <span class="text-md text-gray-300">NRP</span>
                            <span class="text-md text-gray-300">(15-2023-111)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <script>
        // auto close toast
        setTimeout(function() {
        var toastSuccess = document.getElementById('toast-success');
            toastSuccess.classList.add('animate__animated', 'animate__fadeOut');
            setTimeout(function() {
                toastSuccess.style.display = 'none';
            }, 1000);
        }, 2000);


        // scroll animation
        document.addEventListener('DOMContentLoaded', function () {
            const animatedElements = document.querySelectorAll('.scroll-animated');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated', 'animate__fadeInUp', 'animate__slow');
                    }
                });
            });

            animatedElements.forEach(element => {
                observer.observe(element);
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            const animatedElements = document.querySelectorAll('.scroll-animated-fadein');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated', 'animate__fadeIn', 'animate__slower');
                    }
                });
            });

            animatedElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
@endsection