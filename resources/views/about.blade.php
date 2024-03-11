@extends('layouts.main')

@section('content')
    <section class="bg-gradient-to-b from-[#000000] to-[#210034] min-h-screen flex items-center justify-center text-white relative">
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

        @if (session()->has('delete_alert'))
            <div id="toast-success" class="animate__animated animate__bounceInRight fixed top-20 right-5 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">{{session('delete_alert')}}</div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @endif

        <div class="container py-20">
            <div class="flex flex-col items-center z-20 md:flex-row">
                <div class="text-white mb-12 md:text-left md:w-1/2 md:pr-10 animate__animated animate__fadeInLeft animate__slow">
                    <h1 class="title mb-4 font-bold text-4xl">Pengertian Cyber Security</h1>
                    <p class="leading-relaxed mt-8 text-xl">Cyber security atau keamanan Siber adalah praktik untuk melindungi sistem komputer, jaringan, perangkat, dan data dari ancaman dan serangan siber. Tujuannya adalah untuk mencegah akses yang tidak sah, merusak integritas data, dan melindungi privasi pengguna. Keamanan siber mencakup berbagai aspek dan teknik untuk mengidentifikasi, melindungi, mendeteksi, merespon, dan memulihkan dari ancaman siber.</p>
                    <p class="leading-relaxed mb-8 text-lg">Berikut adalah <a href="#jenis" class="font-bold hover:text-blue-700">jenis-jenis cyber security</a></p>
                </div>

                <div class="md:w-1/2">
                    <img src="/img/hero2.png" class="animate__animated animate__fadeInRight animate__slow md:block hidden" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section id="jenis" class="bg-[#11001B] text-white">
        <div class="container max-w-4xl">
            <div class="text-center py-20">
                <h1 class="title font-bold text-3xl">Jenis Jenis Cyber Security</h1>
            </div>

            <div class="pb-10">
                <h1 class="font-semibold text-xl mb-3">1. Keamanan Jaringan (Network Security)</h1>
                <p>Fokus pada perlindungan integritas, kerahasiaan, dan ketersediaan data yang bergerak melalui jaringan. Ini melibatkan teknologi seperti firewall, IDS (Intrusion Detection System), IPS (Intrusion Prevention System), dan VPN (Virtual Private Network).</p>
            </div>
            <div class="pb-10">
                <h1 class="font-semibold text-xl mb-3">2. Keamanan Perimeter (Perimeter Security)</h1>
                <p>Melibatkan perlindungan terhadap akses yang tidak sah ke dalam jaringan atau sistem dari luar. Ini termasuk penggunaan firewall, gateway keamanan, dan kontrol akses yang ketat.</p>
            </div>
            <div class="pb-10">
                <h1 class="font-semibold text-xl mb-3">3. Keamanan End-Point (Endpoint Security)</h1>
                <p>Menyasar perlindungan pada perangkat individu seperti komputer pribadi, laptop, ponsel, dan perangkat IoT. Ini melibatkan penggunaan antivirus, antispyware, firewall pribadi, dan sistem deteksi ancaman end-point.</p>
            </div>
            <div class="pb-10">
                <h1 class="font-semibold text-xl mb-3">4. Keamanan Aplikasi (Application Security)</h1>
                <p>Memastikan bahwa perangkat lunak dan aplikasi yang digunakan oleh organisasi aman dari ancaman. Ini melibatkan pengujian keamanan perangkat lunak, pembaruan reguler, dan penerapan best practice dalam pengembangan perangkat lunak.</p>
            </div>
            <div class="pb-10">
                <h1 class="font-semibold text-xl mb-3">5. Keamanan Data (Data Security)</h1>
                <p>Melibatkan perlindungan terhadap data dari akses yang tidak sah atau kebocoran. Ini termasuk enkripsi data, manajemen hak akses, dan kebijakan retensi data.</p>
            </div>
            <div class="pb-10">
                <h1 class="font-semibold text-xl mb-3">6. Keamanan Cloud (Cloud Security)</h1>
                <p>Fokus pada melindungi data, aplikasi, dan infrastruktur yang disimpan di lingkungan cloud. Ini melibatkan enkripsi cloud, kontrol akses, dan pemantauan aktivitas cloud.</p>
            </div>
            <div class="pb-10">
                <h1 class="font-semibold text-xl mb-3">7. Keamanan Mobile (Mobile Security)</h1>
                <p>Mengamankan perangkat mobile dan aplikasi di lingkungan bisnis. Ini melibatkan kebijakan keamanan mobile, enkripsi perangkat mobile, dan pengelolaan perangkat.</p>
            </div>
            <div class="pb-10">
                <h1 class="font-semibold text-xl mb-3">8. Keamanan Identitas dan Akses (Identity and Access Management - IAM)</h1>
                <p>Mengelola dan melindungi identitas pengguna dan memberikan hak akses yang sesuai. Ini termasuk autentikasi dua faktor, single sign-on, dan kontrol akses berbasis peran.</p>
            </div>
            <div class="pb-10">
                <h1 class="font-semibold text-xl mb-3">9. Keamanan Manajemen Jaringan (Network Management Security)</h1>
                <p>Melibatkan perlindungan terhadap sistem manajemen jaringan dari ancaman yang dapat mempengaruhi fungsionalitas jaringan. Ini mencakup keamanan protokol manajemen dan monitoring jaringan.</p>
            </div>
            <div class="pb-10">
                <h1 class="font-semibold text-xl mb-3">10. Keamanan Fisik (Physical Security)</h1>
                <p>Menjamin keamanan fisik perangkat keras, pusat data, dan infrastruktur komputer. Ini melibatkan kontrol akses fisik, pemantauan keamanan fisik, dan perlindungan terhadap pencurian atau kerusakan fisik.</p>
            </div>
        </div>
    </section>

    {{-- komentar --}}
    <section id="comment" class="bg-[#11001B] text-white">
        <div class="container max-w-4xl py-10">
            <h4 class="font-semibold border-b pb-3">{{$count}} Komentar</h4>

            @if (Auth::check())
                <form id="comment-form" action="{{ route('comment.create') }}" method="POST" class="mt-7">
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
                            <img class="w-8 h-8 me-4 rounded-full" src="data:image/png;base64,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" alt="">
                            <div class="flex row font-medium text-sm">
                                <p>{{$item->user->name}}</p>
                                <span class="mx-3 font-normal text-gray-300">{{ $item->created_at->format('H:i, d F Y') }}</span>
                            </div>
                        </div>
                        <p class="mb-2 dark:text-gray-400">{{$item->content}}</p>
                        @if (auth()->user() && auth()->user()->id == $item->user_id)
                            <form action="{{ route('comment.destroy', $item->id) }}" method="POST" class="inline">
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
