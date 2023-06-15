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
        <h2 class="text-2xl text-gray-800 dark:text-gray-100 mt-3">Dashboard</h2>

        <div class="mt-4">
            <div class="md:flex">
                <div class="flex flex-1 flex-col md:flex-row lg:flex-row md:gap-0 md:flex">
                    <div class="shadow-lg bg-[#F2BE22] border-l-8 hover:bg-[#dea808] border-[#F2BE22] hover:border-[#dea808] mb-2 px-3 py-4 md:w-1/4 mr-4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <p class="text-white dark:text-white underline">10 Gram</p>
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-white dark:text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99"></path>
                            </svg>
                        </div>
                        <p class="text-xs text-white dark:text-gray-100 mt-4">Jumlah Sampah Yang Masih Diproses</p>
                    </div>
                    <div class="shadow-lg bg-[#F29727] border-l-8 hover:bg-[#d78014] border-[#F29727] hover:border-[#d78014] mb-2 px-3 py-4 md:w-1/4 mr-4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <p class="text-white dark:white underline">50 Gram</p>
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-white dark:text-white underline">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                            </svg>
                        </div>
                        <p class="text-xs text-white dark:text-gray-100 mt-4">Total Sampah Yang Telah Dikumpulkan</p>
                    </div>
                    <div class="shadow-lg bg-[#F24C3D] border-l-8 hover:bg-[#d82c1c] border-[#F24C3D] hover:border-[#d82c1c] mb-2 px-3 py-4 md:w-1/4 mr-4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <p class="text-white dark:text-white underline">3 Buah</p>
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-white dark:text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z"></path>
                            </svg>
                        </div>
                        <p class="text-xs text-white dark:text-gray-100 mt-4">Tiket Yang Didapatkan</p>
                    </div>
                    <div class="shadow-lg bg-[#22A699] border-l-8 hover:bg-[#0e8c7f] border-[#22A699] hover:border-[#0e8c7f] mb-2 px-3 py-4 md:w-1/4 rounded-lg">
                        <div class="flex justify-between items-center">
                            <p class="text-white dark:text-white underline">Rp. 50000</p>
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-white dark:text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"></path>
                            </svg>
                        </div>
                        <p class="text-xs text-white dark:text-gray-100 mt-4">Uang Yang Didapatkan</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="w-full mt-4 px-6 py-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h3 class="text-gray-600 dark:text-gray-200 mb-3">Malang Kota</h3>
            <img src="{{ url('./assets/images-admin/malang-city.jpg') }}" alt="">
        </div> -->


    </div>
</div>


@endsection