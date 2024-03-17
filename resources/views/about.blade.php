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
                <h1 class="animate__animated animate__fadeInDown animate__slow title font-bold text-3xl">Jenis Jenis Cyber Security</h1>
            </div>

            <div class="scroll-animated pb-10">
                <h1 class="font-semibold text-xl mb-3">1. Keamanan Jaringan (Network Security)</h1>
                <p>Fokus pada perlindungan integritas, kerahasiaan, dan ketersediaan data yang bergerak melalui jaringan. Ini melibatkan teknologi seperti firewall, IDS (Intrusion Detection System), IPS (Intrusion Prevention System), dan VPN (Virtual Private Network).</p>
            </div>
            <div class="scroll-animated pb-10">
                <h1 class="font-semibold text-xl mb-3">2. Keamanan Perimeter (Perimeter Security)</h1>
                <p>Melibatkan perlindungan terhadap akses yang tidak sah ke dalam jaringan atau sistem dari luar. Ini termasuk penggunaan firewall, gateway keamanan, dan kontrol akses yang ketat.</p>
            </div>
            <div class="scroll-animated pb-10">
                <h1 class="font-semibold text-xl mb-3">3. Keamanan End-Point (Endpoint Security)</h1>
                <p>Menyasar perlindungan pada perangkat individu seperti komputer pribadi, laptop, ponsel, dan perangkat IoT. Ini melibatkan penggunaan antivirus, antispyware, firewall pribadi, dan sistem deteksi ancaman end-point.</p>
            </div>
            <div class="scroll-animated pb-10">
                <h1 class="font-semibold text-xl mb-3">4. Keamanan Aplikasi (Application Security)</h1>
                <p>Memastikan bahwa perangkat lunak dan aplikasi yang digunakan oleh organisasi aman dari ancaman. Ini melibatkan pengujian keamanan perangkat lunak, pembaruan reguler, dan penerapan best practice dalam pengembangan perangkat lunak.</p>
            </div>
            <div class="scroll-animated pb-10">
                <h1 class="font-semibold text-xl mb-3">5. Keamanan Data (Data Security)</h1>
                <p>Melibatkan perlindungan terhadap data dari akses yang tidak sah atau kebocoran. Ini termasuk enkripsi data, manajemen hak akses, dan kebijakan retensi data.</p>
            </div>
            <div class="scroll-animated pb-10">
                <h1 class="font-semibold text-xl mb-3">6. Keamanan Cloud (Cloud Security)</h1>
                <p>Fokus pada melindungi data, aplikasi, dan infrastruktur yang disimpan di lingkungan cloud. Ini melibatkan enkripsi cloud, kontrol akses, dan pemantauan aktivitas cloud.</p>
            </div>
            <div class="scroll-animated pb-10">
                <h1 class="font-semibold text-xl mb-3">7. Keamanan Mobile (Mobile Security)</h1>
                <p>Mengamankan perangkat mobile dan aplikasi di lingkungan bisnis. Ini melibatkan kebijakan keamanan mobile, enkripsi perangkat mobile, dan pengelolaan perangkat.</p>
            </div>
            <div class="scroll-animated pb-10">
                <h1 class="font-semibold text-xl mb-3">8. Keamanan Identitas dan Akses (Identity and Access Management - IAM)</h1>
                <p>Mengelola dan melindungi identitas pengguna dan memberikan hak akses yang sesuai. Ini termasuk autentikasi dua faktor, single sign-on, dan kontrol akses berbasis peran.</p>
            </div>
            <div class="scroll-animated pb-10">
                <h1 class="font-semibold text-xl mb-3">9. Keamanan Manajemen Jaringan (Network Management Security)</h1>
                <p>Melibatkan perlindungan terhadap sistem manajemen jaringan dari ancaman yang dapat mempengaruhi fungsionalitas jaringan. Ini mencakup keamanan protokol manajemen dan monitoring jaringan.</p>
            </div>
            <div class="scroll-animated pb-10">
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
                            @if($item->user && $item->user->photo)
                                <img class="w-8 h-8 me-4 rounded-full" src="{{ asset('profile-photos/' . $item->user->photo) }}" alt="User Photo">
                            @else
                                <img class="w-8 h-8 me-4 rounded-full" src="{{ asset('profile-photos/default.jpg') }}" alt="Default Photo">
                            @endif
                            <div class="flex row font-medium text-sm">
                                <p>{{ optional($item->user)->name ?? 'Anonymous' }}</p>
                                <span class="mx-3 font-normal text-gray-300">{{ $item->created_at->format('H:i, d F Y') }}</span>
                            </div>
                        </div>
                        <p class="mb-2 dark:text-gray-400">{{$item->content}}</p>
                        <div class="flex flex-col">
                            <div class="flex items-start justify-start gap-3">
                                {{-- Tombol atau link "Balas" --}}
                                @if (Auth::check())
                                    <button class="text-sm text-blue-500 hover:underline" onclick="toggleReplyForm({{ $item->id }})">
                                        Balas
                                    </button>
                                @else
                                    <a href="/login" class="text-sm text-blue-500 hover:underline">Balas</a>
                                @endif
                                {{-- Tombol untuk hapus komen --}}
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
                                                <div class="relative bg-[#11001B] rounded-lg shadow">
                                                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="popup-modal">
                                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                        </svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                    <div class="p-4 md:p-5 text-center">
                                                        <svg class="mx-auto mb-4 text-white w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                        </svg>
                                                        <h3 class="mb-5 text-lg font-normal text-gray-200 dark:text-gray-400">Kamu yakin ingin menghapus komentar ini?</h3>
                                                        <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                            Ya, Hapus
                                                        </button>
                                                        <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-300 focus:z-10 focus:ring-4 focus:ring-gray-100">Tidak</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endif
                            </div>
                            <div class="">
                                {{-- Form untuk balasan --}}
                                <form id="reply-form-{{ $item->id }}" action="{{route('comment.reply')}}" method="POST" class="hidden mt-3">
                                    @csrf
                                    <input type="hidden" name="reply" value="{{$item->id}}">
                                    <textarea name="reply_content" class="w-full px-4 py-2 bg-transparent border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" placeholder="Tulis balasan Anda..."></textarea>
                                    <button type="submit" id="submit-comment" class="inline-flex items-center my-2 py-2.5 px-7 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                        Kirim
                                    </button>
                                </form>
                            </div>
                        </div>
                        {{-- Daftar balasan --}}
                            @foreach($replies->where('reply_to', $item->id) as $reply)
                                <div id="replies-container" class="mt-3">
                                    <div class="ml-8">
                                        <div class="flex items-center mb-4">
                                            @if($reply->user && $reply->user->photo)
                                                <img class="w-8 h-8 me-4 rounded-full" src="{{ asset('profile-photos/' . $reply->user->photo) }}" alt="User Photo">
                                            @else
                                                <img class="w-8 h-8 me-4 rounded-full" src="{{ asset('profile-photos/default.jpg') }}" alt="Default Photo">
                                            @endif
                                            <div class="flex row font-medium text-sm">
                                                    <p>{{ optional($reply->user)->name ?? 'Anonymous' }}</p>
                                                <span class="mx-3 font-normal text-gray-300">{{ $reply->created_at->format('H:i, d F Y') }}</span>
                                            </div>
                                        </div>
                                        <p class="mb-2 dark:text-gray-400">{{ $reply->content }}</p>
                                    </div>
                                </div>
                            @endforeach
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

        // balas komentar
        function toggleReplyForm(commentId) {
            var form = document.getElementById('reply-form-' + commentId);
            if (form.classList.contains('hidden')) {
                form.classList.remove('hidden');
            } else {
                form.classList.add('hidden');
            }
        }

        // scroll animation
        document.addEventListener('DOMContentLoaded', function () {
            const animatedElements = document.querySelectorAll('.scroll-animated');

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
