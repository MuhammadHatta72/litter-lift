@extends('layout-admin.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        @if (session('success'))
        <!-- Success Message -->
        <div id="alert-1" class="flex p-4 mb-4 text-green-500 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-500 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        <!-- End Success Message -->
        @endif
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Detail User</h2>

        <div class="w-full mt-4">
            <div class="md:flex">
                <div class="md:w-2/3 px-6 pt-4 pb-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h3 class="text-gray-600 dark:text-gray-200 mb-3">Detail pengguna aplikasi litter lift.</h3>
                    <div class="grid gap-6 mb-6 md:grid-cols-1">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                            <h2 class="block mb-1 text-base text-gray-500 dark:text-white">{{$user->name}}</h2>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <h2 class="block mb-1 text-base text-gray-500 dark:text-white">{{$user->email}}</h2>
                        </div>
                        <div>
                            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                            <h2 class="block mb-1 text-base text-gray-500 dark:text-white">{{$user->gender}}</h2>
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                            <h2 class="block mb-1 text-base text-gray-500 dark:text-white">{{$user->phone}}</h2>
                        </div>
                        <div>
                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                            <h2 class="block mb-1 text-base text-gray-500 dark:text-white">{{$user->address}}</h2>
                        </div>
                        <div>
                            <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                            <h2 class="block mb-1 text-base text-gray-500 dark:text-white">{{$user->role}}</h2>
                        </div>
                    </div>

                    <a href="{{ url('/users') }}" class="text-gray-100 bg-[#F2BE22] border border-[#F2BE22] focus:outline-none hover:bg-[#F2BE22] focus:ring-4 focus:ring-[#F2BE22] font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-[#F2BE22] dark:text-gray-800 dark:border-[#F2BE22] dark:hover:bg-[#F2BE22] dark:hover:border-[#F2BE22] dark:focus:ring-[#F2BE22]">Kembali</a>
                </div>

                <div class="md:w-1/3 md:ml-3 mt-3 md:mt-0">
                    <div class="p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h3 class="text-gray-600 dark:text-gray-200 mb-3">Gambar Pengguna</h3>
                        @if ($user->photo !== 'not_found')
                        <img class="w-full h-full rounded-full mt-3" src="{{ url('./assets/image_users/'.$user->photo) }}" alt="user photo">
                        @else
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-full h-full text-[#F29727]">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection