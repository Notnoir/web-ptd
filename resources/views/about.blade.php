@extends('layouts.main')

@section('content')
    <section class="bg-gradient-to-b from-[#11001B] to-[#6000c0] min-h-screen flex items-center justify-center text-white relative">
        <div class="container py-20 mt-16">
            <div class="flex flex-col items-center z-20 md:flex-row">
                <div class="text-white mb-12 md:text-left md:w-1/2 md:pr-10">
                    <h1 class="title mb-4 font-bold text-4xl">Pengertian Cyber Security</h1>
                    <p class="leading-relaxed mb-8 mt-8 text-xl">Cyber security atau keamanan Siber adalah praktik untuk melindungi sistem komputer, jaringan, perangkat, dan data dari ancaman dan serangan siber. Tujuannya adalah untuk mencegah akses yang tidak sah, merusak integritas data, dan melindungi privasi pengguna. Keamanan siber mencakup berbagai aspek dan teknik untuk mengidentifikasi, melindungi, mendeteksi, merespon, dan memulihkan dari ancaman siber.</p>
                </div>

                <div class="md:w-1/2">
                    <img src="/img/hero2.png" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#11001B] text-white">
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
@endsection