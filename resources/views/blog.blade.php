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
            <h1 class="mb-4 text-4xl font-bold tracking-tight leading-none text-white md:text-5xl lg:text-6xl animate__animated animate__fadeInUp">Cyber Security Excellence, Your Ultimate Digital Guardian</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48 animate__animated animate__fadeIn animate__slower">Empowering Digital Fortresses. Where Cyber Security Meets Innovation. Defend, Protect, and Secure in the Digital Age.</p>
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
                <div class="text-white md:text-left md:w-1/2 md:pr-10 animate__animated animate__fadeInLeft animate__slow">
                    <h1 class="title mb-4 font-bold text-4xl">Pengertian Cyber Security</h1>
                    <p class="leading-relaxed mb-8 mt-8 text-xl">Cyber security atau keamanan Siber adalah praktik untuk melindungi sistem komputer, jaringan, perangkat, dan data dari ancaman dan serangan siber. Tujuannya adalah untuk mencegah akses yang tidak sah, merusak integritas data, dan melindungi privasi pengguna. Keamanan siber mencakup berbagai aspek dan teknik untuk mengidentifikasi, melindungi, mendeteksi, merespon, dan memulihkan dari ancaman siber.</p>
                </div>

                <div class="md:block hidden">
                    <img class="animate-pulse" src="/img/blog7.png" width="600px" alt="" />
                </div>
            </div>
        </div>
    </section>

    {{-- card blog --}}
    <section class="bg-[#210034] min-h-screen flex items-center justify-center text-white relative">
        <div class="container">
            {{-- card group 1 --}}
            <div class="flex flex-col gap-8 items-center justify-center z-20 md:flex-row">
                <div class="max-w-sm bg-black bg-opacity-40 border border-gray-800 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://www.acerid.com/wp-content/uploads/2021/10/Thumbnail-3.jpg" alt="" />
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

            {{-- card group 2 --}}
            <div class="flex flex-col gap-8 items-center justify-center z-20 md:flex-row my-10">
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

            {{-- card group 3 --}}
            <div class="flex flex-col gap-8 items-center justify-center z-20 md:flex-row my-10">
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

    {{-- komentar --}}
    <section id="comment" class="bg-[#11001B] text-white">
        <div class="container max-w-4xl py-10">
            <h4 class="font-semibold border-b pb-3">0 Komentar</h4>

            <form action="" class="mt-7">              
                <label for="message" class="block mb-2 text-sm font-medium dark:text-white">Komentar anda</label>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm bg-transparent rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tuliskan komentar disini..."></textarea>
                <button type="submit" class="inline-flex items-center mt-5 py-2.5 px-7 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                    Kirim
                </button>
            </form>      

            <article class="my-20 text-white">
                <div class="flex items-center mb-4">
                    <img class="w-8 h-8 me-4 rounded-full" src="data:image/png;base64,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" alt="">
                    <div class="flex row font-medium text-sm">
                        <p>Jese Leos</p>
                        <span class="mx-3 font-normal text-gray-300 dark:text-gray-400">11:46</span>
                    </div>
                </div>
                <p class="mb-2 dark:text-gray-400">This is my third Invicta Pro Diver. They are just fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.</p>
            </article>
   
            <div class="flex items-start gap-2.5">
                <img class="w-8 h-8 rounded-full" src="data:image/png;base64,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" alt="Jese image">
                <div class="flex flex-col w-full max-w-[320px] leading-1.5">
                    <div class="flex items-center space-x-2 rtl:space-x-reverse">
                        <span class="text-sm font-semibold dark:text-white">Bonnie Green</span>
                        <span class="text-sm font-normal text-gray-300 dark:text-gray-400">11:46</span>
                    </div>
                    <p class="text-sm font-normal py-2 dark:text-white"> That's awesome. I think our users will really appreciate the improvements.</p>
                </div>
            </div>
        </div>
    </section>
    


@endsection