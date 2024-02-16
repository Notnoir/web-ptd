@extends('layouts.main')

@section('content')
    {{-- <section class="bg-gradient-to-b from-[#11001B] to-[#6000c0] min-h-screen text-white relative">
        <div class="container flex items-center justify-center pt-24 gap-10">
            <div class="">
                <img class="rounded-xl" src="/img/hero2.png" height="400px" width="500px" alt="">
            </div>
            <div class="w-2/4">
                <h2 class="text-2xl font-medium mb-3">Cyber Security</h2>
                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi vero officiis incidunt alias maxime, ad deserunt qui eveniet asperiores ducimus voluptatum veniam harum debitis magnam et facilis facere nobis a! Dignissimos, minima eius molestias officia eum, architecto exercitationem qui quos mollitia, ratione expedita accusamus dolorum. Ad quae et officia dicta odio, nemo magni atque consectetur ex quisquam dolorum voluptatibus nulla omnis sapiente reprehenderit autem modi voluptatem nisi impedit architecto corrupti!</p>
            </div>
        </div>
    </section> --}}

    {{-- jumbotron --}}
    <section class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Cyber Security Excellence, Your Ultimate Digital Guardian</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
            {{-- <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
                <a href="#" class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>  
            </div> --}}
        </div>
    </section>

    <section class="bg-gradient-to-b from-[#000000] to-[#210034] min-h-screen flex items-center justify-center text-white relative">
        <div class="container">
            <div class="flex flex-col items-center justify-center z-20 md:flex-row">
                <div class="text-white md:text-left md:w-1/2 md:pr-10">
                    <h1 class="title mb-4 font-bold text-4xl">Pengertian Cyber Security</h1>
                    <p class="leading-relaxed mb-8 mt-8 text-xl">Cyber security atau keamanan Siber adalah praktik untuk melindungi sistem komputer, jaringan, perangkat, dan data dari ancaman dan serangan siber. Tujuannya adalah untuk mencegah akses yang tidak sah, merusak integritas data, dan melindungi privasi pengguna. Keamanan siber mencakup berbagai aspek dan teknik untuk mengidentifikasi, melindungi, mendeteksi, merespon, dan memulihkan dari ancaman siber.</p>
                </div>

                <div class="md:block hidden">
                    <img src="/img/blog5.png" width="500px" alt="" />
                </div>
            </div>
        </div>
    </section>

    {{-- card blog --}}
    <section class="bg-[#210034] min-h-screen flex items-center justify-center text-white relative">
        <div class="container">
            <div class="flex flex-col gap-8 items-center justify-center z-20 md:flex-row">
                <div class="max-w-sm bg-black bg-opacity-40 border border-gray-800 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://niagaspace.sgp1.digitaloceanspaces.com/blog/wp-content/uploads/2023/06/27142410/4-ancaman-yang-sering-menyerang-keamanan-siber-adalah-malware.webp" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight">Malware</h5>
                        </a>
                        <p class="mb-3 font-normal">Malicious software atau malware adalah salah satu ancaman cyber paling umum. Perangkat lunak ini dibuat untuk mengganggu atau merusak komputer pengguna. Seringkali malware menyebar melalui lampiran email atau unduhan yang nampak sah.</p>
                    </div>
                </div>
                <div class="max-w-sm bg-black bg-opacity-40 border border-gray-800 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://niagaspace.sgp1.digitaloceanspaces.com/blog/wp-content/uploads/2023/06/27142154/1-metode-ancaman-cyber-security-adalah-cyber-crime.webp" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight">Cyber Crime</h5>
                        </a>
                        <p class="mb-3 font-normal">Cyber crime adalah kejahatan yang menyasar sistem perangkat komputer. Pelaku melakukan akses ilegal, transmisi ilegal atau manipulasi data untuk tujuan tertentu. Di antaranya menciptakan gangguan dan mencari keuntungan finansial.</p>
                    </div>
                </div>
                <div class="max-w-sm bg-black bg-opacity-40 border border-gray-800 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://niagaspace.sgp1.digitaloceanspaces.com/blog/wp-content/uploads/2023/06/27142313/3-metode-ancaman-cyber-security-adalah-cyber-terrorism.webp" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight">Cyber Terrorism</h5>
                        </a>
                        <p class="mb-3 font-normal">Cyberterrorism adalah penggunaan teknologi komputer dan jaringan untuk melakukan tindakan serangan terhadap infrastruktur siber, data, dan sistem komputer dengan tujuan menciptakan kepanikan dan menghancurkan keamanan suatu negara atau organisasi.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


@endsection