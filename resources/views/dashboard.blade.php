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
                    <p class="leading-relaxed mb-8 mt-8 text-xl line-clamp-3 animate__animated animate__fadeInLeft animate__slow">Cyber security atau keamanan Siber adalah praktik untuk melindungi sistem komputer, jaringan, perangkat, dan data dari ancaman dan serangan siber. Tujuannya adalah untuk mencegah akses yang tidak sah, merusak integritas data, dan melindungi privasi pengguna. Keamanan siber mencakup berbagai aspek dan teknik untuk mengidentifikasi, melindungi, mendeteksi, merespon, dan memulihkan dari ancaman siber.</p>
                    <a href="/about" class="bg-white text-black rounded-full py-3 px-10 font-medium text-base hover:bg-gray-300 animate__animated animate__fadeInLeft animate__slow">Read more >></a>
                </div>
    
                <div class="md:block hidden md:w-1/2">
                    <img src="/img/hero5.png" class="animate__animated animate__fadeIn animate__slower" width="600px" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#11001B]">
        <div class="container py-28 animate__animated animate__fadeIn animate__slow">
          <div class="text-center text-white m-auto mb-12 md:w-1/2">
            <a href="/about" class="title font-sans font-semibold text-4xl">Jenis Jenis Cyber Security</a>
          </div>

            <div class="text-white">
                <div class="owl-carousel owl-theme">
                    <div class="border-2 border-solid border-slate-500 py-20 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3"><i class="fa-solid fa-globe mr-3"></i>Network Security</h3>
                            <p class="leading-relaxed line-clamp-5 mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quaerat dignissimos maxime doloremque iusto! Inventore dolor porro laborum atque ipsam harum aut nulla sint, necessitatibus laboriosam, expedita eum! Sint natus corrupti tempora, nemo vel facere quae officiis. Reiciendis beatae deserunt saepe necessitatibus cupiditate, eos sequi quam vero molestiae, odio fugiat facilis qui est ea veritatis pariatur, iure provident atque fuga repellat nobis reprehenderit quod. Aspernatur officiis enim commodi perferendis dolorem eligendi labore esse vel sapiente possimus mollitia in nulla dolor aut expedita quidem rem nostrum quis temporibus, atque, omnis ullam ab officia aliquam. Exercitationem illum dolorum sunt minus placeat vitae!</p>
                            <a href="/contact" class="hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid border-slate-500 py-20 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3"><i class="fa-solid fa-globe mr-3"></i>Network Security</h3>
                            <p class="leading-relaxed line-clamp-5 mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quaerat dignissimos maxime doloremque iusto! Inventore dolor porro laborum atque ipsam harum aut nulla sint, necessitatibus laboriosam, expedita eum! Sint natus corrupti tempora, nemo vel facere quae officiis. Reiciendis beatae deserunt saepe necessitatibus cupiditate, eos sequi quam vero molestiae, odio fugiat facilis qui est ea veritatis pariatur, iure provident atque fuga repellat nobis reprehenderit quod. Aspernatur officiis enim commodi perferendis dolorem eligendi labore esse vel sapiente possimus mollitia in nulla dolor aut expedita quidem rem nostrum quis temporibus, atque, omnis ullam ab officia aliquam. Exercitationem illum dolorum sunt minus placeat vitae!</p>
                            <a href="" class="hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid border-slate-500 py-20 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3"><i class="fa-solid fa-globe mr-3"></i>Network Security</h3>
                            <p class="leading-relaxed line-clamp-5 mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quaerat dignissimos maxime doloremque iusto! Inventore dolor porro laborum atque ipsam harum aut nulla sint, necessitatibus laboriosam, expedita eum! Sint natus corrupti tempora, nemo vel facere quae officiis. Reiciendis beatae deserunt saepe necessitatibus cupiditate, eos sequi quam vero molestiae, odio fugiat facilis qui est ea veritatis pariatur, iure provident atque fuga repellat nobis reprehenderit quod. Aspernatur officiis enim commodi perferendis dolorem eligendi labore esse vel sapiente possimus mollitia in nulla dolor aut expedita quidem rem nostrum quis temporibus, atque, omnis ullam ab officia aliquam. Exercitationem illum dolorum sunt minus placeat vitae!</p>
                            <a href="" class="hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid border-slate-500 py-20 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3"><i class="fa-solid fa-globe mr-3"></i>Network Security</h3>
                            <p class="leading-relaxed line-clamp-5 mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quaerat dignissimos maxime doloremque iusto! Inventore dolor porro laborum atque ipsam harum aut nulla sint, necessitatibus laboriosam, expedita eum! Sint natus corrupti tempora, nemo vel facere quae officiis. Reiciendis beatae deserunt saepe necessitatibus cupiditate, eos sequi quam vero molestiae, odio fugiat facilis qui est ea veritatis pariatur, iure provident atque fuga repellat nobis reprehenderit quod. Aspernatur officiis enim commodi perferendis dolorem eligendi labore esse vel sapiente possimus mollitia in nulla dolor aut expedita quidem rem nostrum quis temporibus, atque, omnis ullam ab officia aliquam. Exercitationem illum dolorum sunt minus placeat vitae!</p>
                            <a href="" class="hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid border-slate-500 py-20 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3"><i class="fa-solid fa-globe mr-3"></i>Network Security</h3>
                            <p class="leading-relaxed line-clamp-5 mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quaerat dignissimos maxime doloremque iusto! Inventore dolor porro laborum atque ipsam harum aut nulla sint, necessitatibus laboriosam, expedita eum! Sint natus corrupti tempora, nemo vel facere quae officiis. Reiciendis beatae deserunt saepe necessitatibus cupiditate, eos sequi quam vero molestiae, odio fugiat facilis qui est ea veritatis pariatur, iure provident atque fuga repellat nobis reprehenderit quod. Aspernatur officiis enim commodi perferendis dolorem eligendi labore esse vel sapiente possimus mollitia in nulla dolor aut expedita quidem rem nostrum quis temporibus, atque, omnis ullam ab officia aliquam. Exercitationem illum dolorum sunt minus placeat vitae!</p>
                            <a href="" class="hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="container py-20 animate__animated animate__fadeIn animate__slow">
          <div class="text-center text-white m-auto mb-12 md:w-1/2">
            <h1 class="title font-sans font-semibold text-4xl">Ancaman Cyber Security</h1>
          </div>

            <div class="text-white mb-36">
                <div class="owl-carousel owl-theme">
                    <div class="border-2 border-solid border-slate-500 py-20 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3"><i class="fa-solid fa-globe mr-3"></i>Network Security</h3>
                            <p class="leading-relaxed line-clamp-5 mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quaerat dignissimos maxime doloremque iusto! Inventore dolor porro laborum atque ipsam harum aut nulla sint, necessitatibus laboriosam, expedita eum! Sint natus corrupti tempora, nemo vel facere quae officiis. Reiciendis beatae deserunt saepe necessitatibus cupiditate, eos sequi quam vero molestiae, odio fugiat facilis qui est ea veritatis pariatur, iure provident atque fuga repellat nobis reprehenderit quod. Aspernatur officiis enim commodi perferendis dolorem eligendi labore esse vel sapiente possimus mollitia in nulla dolor aut expedita quidem rem nostrum quis temporibus, atque, omnis ullam ab officia aliquam. Exercitationem illum dolorum sunt minus placeat vitae!</p>
                            <a href="" class="hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid border-slate-500 py-20 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3"><i class="fa-solid fa-globe mr-3"></i>Network Security</h3>
                            <p class="leading-relaxed line-clamp-5 mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quaerat dignissimos maxime doloremque iusto! Inventore dolor porro laborum atque ipsam harum aut nulla sint, necessitatibus laboriosam, expedita eum! Sint natus corrupti tempora, nemo vel facere quae officiis. Reiciendis beatae deserunt saepe necessitatibus cupiditate, eos sequi quam vero molestiae, odio fugiat facilis qui est ea veritatis pariatur, iure provident atque fuga repellat nobis reprehenderit quod. Aspernatur officiis enim commodi perferendis dolorem eligendi labore esse vel sapiente possimus mollitia in nulla dolor aut expedita quidem rem nostrum quis temporibus, atque, omnis ullam ab officia aliquam. Exercitationem illum dolorum sunt minus placeat vitae!</p>
                            <a href="" class="hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid border-slate-500 py-20 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3"><i class="fa-solid fa-globe mr-3"></i>Network Security</h3>
                            <p class="leading-relaxed line-clamp-5 mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quaerat dignissimos maxime doloremque iusto! Inventore dolor porro laborum atque ipsam harum aut nulla sint, necessitatibus laboriosam, expedita eum! Sint natus corrupti tempora, nemo vel facere quae officiis. Reiciendis beatae deserunt saepe necessitatibus cupiditate, eos sequi quam vero molestiae, odio fugiat facilis qui est ea veritatis pariatur, iure provident atque fuga repellat nobis reprehenderit quod. Aspernatur officiis enim commodi perferendis dolorem eligendi labore esse vel sapiente possimus mollitia in nulla dolor aut expedita quidem rem nostrum quis temporibus, atque, omnis ullam ab officia aliquam. Exercitationem illum dolorum sunt minus placeat vitae!</p>
                            <a href="" class="hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid border-slate-500 py-20 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3"><i class="fa-solid fa-globe mr-3"></i>Network Security</h3>
                            <p class="leading-relaxed line-clamp-5 mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quaerat dignissimos maxime doloremque iusto! Inventore dolor porro laborum atque ipsam harum aut nulla sint, necessitatibus laboriosam, expedita eum! Sint natus corrupti tempora, nemo vel facere quae officiis. Reiciendis beatae deserunt saepe necessitatibus cupiditate, eos sequi quam vero molestiae, odio fugiat facilis qui est ea veritatis pariatur, iure provident atque fuga repellat nobis reprehenderit quod. Aspernatur officiis enim commodi perferendis dolorem eligendi labore esse vel sapiente possimus mollitia in nulla dolor aut expedita quidem rem nostrum quis temporibus, atque, omnis ullam ab officia aliquam. Exercitationem illum dolorum sunt minus placeat vitae!</p>
                            <a href="" class="hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="border-2 border-solid border-slate-500 py-20 px-5 rounded-2xl">
                        <div class="mx-3">
                            <h3 class="text-2xl font-bold py-4 mb-3"><i class="fa-solid fa-globe mr-3"></i>Network Security</h3>
                            <p class="leading-relaxed line-clamp-5 mb-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quaerat dignissimos maxime doloremque iusto! Inventore dolor porro laborum atque ipsam harum aut nulla sint, necessitatibus laboriosam, expedita eum! Sint natus corrupti tempora, nemo vel facere quae officiis. Reiciendis beatae deserunt saepe necessitatibus cupiditate, eos sequi quam vero molestiae, odio fugiat facilis qui est ea veritatis pariatur, iure provident atque fuga repellat nobis reprehenderit quod. Aspernatur officiis enim commodi perferendis dolorem eligendi labore esse vel sapiente possimus mollitia in nulla dolor aut expedita quidem rem nostrum quis temporibus, atque, omnis ullam ab officia aliquam. Exercitationem illum dolorum sunt minus placeat vitae!</p>
                            <a href="" class="hover:text-gray-400">Read More <i class="fa-solid fa-arrow-right"></i></a>
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
    </script>
@endsection