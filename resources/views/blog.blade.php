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
        </div>
    </section>

    <section class="bg-gradient-to-b from-[#000000] to-[#210034] min-h-screen flex items-center justify-center text-white relative">
        <div class="container">
            <div class="flex flex-col items-center justify-center z-20 md:flex-row">
                <div class="text-white md:text-left md:w-1/2 md:pr-10 animate__animated animate__fadeInLeft animate__slow">
                    <h1 class="title mb-4 font-bold text-4xl">Ancaman Cyber Security</h1>
                    <p class="leading-relaxed mb-8 mt-8 text-xl">Ancaman keamanan cyber (cybersecurity) merujuk pada berbagai risiko dan potensi gangguan terhadap sistem komputer, jaringan, perangkat lunak, dan data. Ancaman ini dapat berasal dari berbagai pihak, termasuk peretas (hacker), kelompok kriminal, negara-negara atau badan intelijen asing, dan bahkan dari faktor internal seperti kecerobohan pengguna.</p>
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

                        <img class="rounded-t-lg" width="412" height="273" src="https://www.acerid.com/wp-content/uploads/2021/10/Thumbnail-3.jpg" alt="" />
                    <div class="p-5">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight">Malware</h5>

                        <p class="mb-3 font-normal">Malicious software atau malware adalah salah satu ancaman cyber paling umum. Perangkat lunak ini dibuat untuk mengganggu atau merusak komputer pengguna. Seringkali malware menyebar melalui lampiran email atau unduhan yang nampak sah.</p>
                    </div>
                </div>
                <div class="max-w-sm bg-black bg-opacity-40 border border-gray-800 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">

                        <img class="rounded-t-lg" width="412" height="273" src="https://niagaspace.sgp1.digitaloceanspaces.com/blog/wp-content/uploads/2023/06/27142154/1-metode-ancaman-cyber-security-adalah-cyber-crime.webp" alt="" />
                    <div class="p-5">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight">Cyber Crime</h5>

                        <p class="mb-3 font-normal">Cyber crime adalah kejahatan yang menyasar sistem perangkat komputer. Pelaku melakukan akses ilegal, transmisi ilegal atau manipulasi data untuk tujuan tertentu. Di antaranya menciptakan gangguan dan mencari keuntungan finansial.</p>
                    </div>
                </div>
                <div class="max-w-sm bg-black bg-opacity-40 border border-gray-800 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">

                        <img class="rounded-t-lg" width="412" height="273" src="https://niagaspace.sgp1.digitaloceanspaces.com/blog/wp-content/uploads/2023/06/27142313/3-metode-ancaman-cyber-security-adalah-cyber-terrorism.webp" alt="" />
                    <div class="p-5">

                            <h5 class="mb-2 text-2xl font-bold tracking-tight">Cyber Terrorism</h5>

                        <p class="mb-3 font-normal">Cyberterrorism adalah penggunaan teknologi komputer dan jaringan untuk melakukan tindakan serangan terhadap infrastruktur siber, data, dan sistem komputer dengan tujuan menciptakan kepanikan dan menghancurkan keamanan suatu negara atau organisasi.</p>
                    </div>
                </div>
            </div>

            {{-- card group 2 --}}
            <div class="flex flex-col gap-8 items-center justify-center z-20 md:flex-row my-10">
                <div class="max-w-sm bg-black bg-opacity-40 border border-gray-800 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">

                        <img class="rounded-t-lg" src="data:image/jpeg;base64,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" alt="" width="412" height="273"/>
                    <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight">Serangan IoT (Internet of Things)</h5>
                        <p class="mb-3 font-normal">Serangan terhadap Internet of Things (IoT) merupakan jenis ancaman keamanan siber yang berkaitan dengan perangkat yang terhubung ke internet. IoT mencakup berbagai perangkat, mulai dari peralatan rumah tangga pintar hingga sistem industri yang terhubung, yang dapat berpotensi menjadi target serangan</p>
                    </div>
                </div>
                <div class="max-w-sm bg-black bg-opacity-40 border border-gray-800 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">

                        <img class="rounded-t-lg" width="412" height="273" src="https://awsimages.detik.net.id/community/media/visual/2021/09/30/ilustrasi-aplikasi-ponsel-berbahaya.jpeg?w=1200" alt="" />
                    <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight">Serangan APT (Advanced Persistent Threat)</h5>
                        <p class="mb-3 font-normal">Serangan APT (Advanced Persistent Threat) merupakan jenis serangan siber yang sangat canggih, terorganisir, dan berkelanjutan. APT biasanya dilakukan oleh kelompok peretas yang memiliki sumber daya yang signifikan, seperti negara atau kelompok peretas yang didukung oleh negara.</p>
                    </div>
                </div>
                <div class="max-w-sm bg-black bg-opacity-40 border border-gray-800 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">

                        <img class="rounded-t-lg" width="412" height="273" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZ6_m0w3isFPBno7nqh0bNOqGJR8kUmFYBng&usqp=CAU" alt="" />
                    <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight">Serangan Man-in-the-Middle (MitM)</h5>
                        <p class="mb-3 font-normal">Cyberterrorism adalah penggunaan teknologi komputer dan jaringan untuk melakukan tindakan serangan terhadap infrastruktur siber, data, dan sistem komputer dengan tujuan menciptakan kepanikan dan menghancurkan keamanan suatu negara atau organisasi.</p>
                    </div>
                </div>
            </div>

            {{-- card group 3 --}}
            <div class="flex flex-col gap-8 items-center justify-center z-20 md:flex-row my-10">
                <div class="max-w-sm bg-black bg-opacity-40 border border-gray-800 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" width="412" height="273" src="https://blog-test.heylaw.id/wp-content/uploads/2021/05/shahadat-rahman-O2MdroNurVw-unsplash-4-scaled-1.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight">Serangan Zero-Day</h5>
                        </a>
                        <p class="mb-3 font-normal">Serangan Zero-Day adalah eksploitasi celah keamanan perangkat lunak atau perangkat keras yang belum diketahui atau diperbaiki, memungkinkan peretas untuk menyerang sebelum kelemahan tersebut diketahui dan diatasi.</p>
                    </div>
                </div>
                <div class="max-w-sm bg-black bg-opacity-40 border border-gray-800 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" width="412" height="273" src="https://i.pinimg.com/236x/8e/5a/a0/8e5aa09a3047c04b5aa52380fa60899e.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight">Serangan Insider</h5>
                        </a>
                        <p class="mb-3 font-normal">Serangan Insider adalah ancaman keamanan yang melibatkan tindakan merugikan dari individu yang memiliki akses ke sistem atau data internal, seperti karyawan yang menyalahgunakan kepercayaan dan akses mereka.</p>
                    </div>
                </div>
                <div class="max-w-sm bg-black bg-opacity-40 border border-gray-800 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" width="412" height="273" src="https://i.pinimg.com/236x/e6/ec/86/e6ec86d140147e8dc72514dbd2af546f.jpg" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight">Serangan Ransomware</h5>
                        </a>
                        <p class="mb-3 font-normal">Serangan Ransomware adalah serangan perangkat lunak berbahaya yang mengenkripsi data sistem dan meminta pembayaran tebusan untuk mendapatkan kunci dekripsi, mengancam kehilangan data dan kerugian finansial.  </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="comment" class="bg-[#11001B] text-white">
        <div class="container max-w-4xl py-10">
            <h4 class="font-semibold border-b pb-3">{{$count}} Komentar</h4>

            @if (Auth::check())
                <form id="comment-form" action="{{ route('blog.comment.create') }}" method="POST" class="mt-7">
                    @csrf
                    <label for="message" class="block mb-2 text-sm font-medium dark:text-white">Komentar anda</label>
                    <textarea id="message" name="message" rows="4" class="block p-2.5 w-full text-sm bg-transparent rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tuliskan komentar disini..." required></textarea>
                    <button type="submit" id="submit-comment" onclick="submitComment()" class="inline-flex items-center mt-5 py-2.5 px-7 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                        Kirim
                    </button>
                </form>
            @else
            <div class="flex justify-between mt-7">
                <div>
                    <span>Silahkan login untuk komentar</span>
                </div>
                <div class="">
                    <a href="/login" class="border text-sm px-5 py-1 rounded-lg hover:opacity-80">Login</a>
                </div>
            </div>

            @endif


            <div id="comments-container">
                @foreach ($comments as $item)
                    <article class="my-9 text-white" data-comment-id="{{ $item->id }}">
                        <div class="flex items-center mb-4">
                            <img class="w-8 h-8 me-4 rounded-full" src="{{$item->user->photo}}" alt="">
                            <div class="flex row font-medium text-sm">
                                <p>{{$item->user->name}}</p>
                                <span class="mx-3 font-normal text-gray-300">{{ $item->created_at->format('H:i, d F Y') }}</span>
                            </div>
                        </div>
                        <p class="mb-2 dark:text-gray-400">{{$item->content}}</p>
                        @if (auth()->user() && auth()->user()->id == $item->user_id)
                            <form action="{{ route('blog.comment.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')

                                {{-- delete modal --}}
                                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-sm text-red-500 hover:underline" type="button">
                                    Hapus
                                </button>

                                <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative bg-white rounded-lg shadow">
                                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Kamu yakin ingin menghapus komentar ini?</h3>
                                                <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                    Ya, Hapus
                                                </button>
                                                <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Tidak</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        // auto close toast add komentar
        setTimeout(function() {
        var toastSuccess = document.getElementById('toast-success');
            toastSuccess.classList.add('animate__animated', 'animate__fadeOut');
            setTimeout(function() {
                toastSuccess.style.display = 'none';
            }, 1000);
        }, 2000);
    </script>

@endsection
