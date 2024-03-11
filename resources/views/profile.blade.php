@extends('layouts.main')

@section('content')
    <section class="bg-gradient-to-b from-[#11001B] to-[#3f007d] min-h-screen flex items-center justify-center">
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

        <div class="border border-[#11001B] bg-[#11001B] text-white p-10 rounded-xl relative md:-top-5 lg:w-auto top-10">
            <h1 class="text-3xl">Profile</h1>
            <div class="flex md:flex-row flex-col md:items-center justify-center gap-20 mt-5">
                <div class="flex flex-col">
                        <img class="rounded-full w-36 h-36 my-5" src="{{ asset('profile-photos/' . auth()->user()->photo) }}" alt="Extra large avatar">
                </div>
                <div class="flex flex-col">
                    <span class="font-semibold text-lg">Nama</span>
                    <p>{{auth()->user()->name}}</p>
                    <span class="font-semibold text-lg mt-5">Email</span>
                    <p>{{auth()->user()->email}}</p>
                </div>
            </div>

            <!-- Modal toggle -->
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block justify-end text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mt-5" type="button">
                Edit Profile
            </button>
            
            <!-- Main modal -->
            <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-[#11001B] rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-white dark:text-white">
                                Edit Profile
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-900 hover:text-gray-400 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center " data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <form action="{{ route('profile.update') }}" method="POST" class="p-4" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="flex flex-col">
                                <span class="text-white">Profile Picture</span>
                                <input type="file" name="photo" accept="image/*" class="mt-3">
                                <span class="text-white mt-5">Nama</span>
                                <input type="text" name="name" class="text-white bg-transparent max-w-xl border rounded-lg mt-3" value="{{ $user->name }}">
                                <span class="text-white mt-5">Email</span>
                                <input type="text" name="email" class="text-white bg-transparent max-w-xl border rounded-lg mt-3" value="{{ $user->email }}">
                            </div>
                            <!-- Modal footer -->
                            <div class="flex items-center rounded-b dark:border-gray-600 my-5 md:pt-5">
                                <button data-modal-hide="default-modal" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                                <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Batal</button>
                            </div>
                        </form>
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