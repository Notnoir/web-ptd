@extends('layouts.main')

@section('content')
    <section class="bg-gradient-to-b from-[#000000] to-[#210034] min-h-screen flex items-center justify-center text-white relative">
        <div class="container py-20 mt-16">
            <div class="flex flex-col items-center justify-center z-20 md:flex-row">
                <div class="text-white mb-12 md:text-left md:w-1/2 md:pr-10">
                    <h1 class="title mb-4 font-semibold text-2xl animate__animated animate__fadeInLeft animate__slow">Cyber Security</h1>
                    <p class="leading-tight text-7xl mb-3 animate__animated animate__fadeInLeft animate__slow">Your data is your power, and it needs to be protected</p>
                    <p class="leading-relaxed mb-8 mt-8 text-xl line-clamp-3 animate__animated animate__fadeInLeft animate__slow">Cyber security atau keamanan Siber adalah praktik untuk melindungi sistem komputer, jaringan, perangkat, dan data dari ancaman dan serangan siber. Tujuannya adalah untuk mencegah akses yang tidak sah, merusak integritas data, dan melindungi privasi pengguna. Keamanan siber mencakup berbagai aspek dan teknik untuk mengidentifikasi, melindungi, mendeteksi, merespon, dan memulihkan dari ancaman siber.</p>
                    <a href="/about" class="bg-white text-black rounded-full py-3 px-10 font-medium text-base hover:opacity-80 animate__animated animate__fadeInLeft animate__slow">Read more >></a>
                </div>
    
                <div class="md:w-1/2">
                    <img src="/img/hero5.png" class="animate__animated animate__fadeIn animate__slower" width="600px" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#11001B]">
        <div class="container py-20">
          <div class="text-center text-white m-auto mb-12 md:w-1/2">
            <a href="/about" class="title font-sans font-semibold text-4xl animate__animated animate__fadeInUp">Jenis Jenis Cyber Security</a>
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

        
        <div class="container py-20">
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
@endsection