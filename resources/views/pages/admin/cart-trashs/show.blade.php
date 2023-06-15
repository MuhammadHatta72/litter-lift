@extends('layout-admin.index')

@section('content')
<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        <h2 class="text-2xl text-gray-800 dark:text-gray-100">Detail Timbangan</h2>

        <div class="w-full mt-4">
            <div class="md:flex">
                <div class="md:w-2/3 px-6 pt-4 pb-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <h3 class="text-gray-600 dark:text-gray-200 mb-3">Bukti Timbangan</h3>
                    <img class="w-full h-auto mt-3" src="{{ url('./assets/proof_trash/'.$trash->proof_of_weight) }}" alt="user photo">
                </div>

                <div class="md:w-1/3 md:ml-3 mt-3 md:mt-0">
                    <div class="p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <h3 class="text-gray-600 dark:text-gray-200 mb-3">Detail timbangan aplikasi litter lift.</h3>
                        <div class="grid gap-6 mb-4 md:grid-cols-1">
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                                <h2 class="block mb-2 text-base text-gray-500 dark:text-white">{{$trash->date}}</h2>
                            </div>
                            <div>
                                <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat</label>
                                <h2 class="block mb-2 text-base text-gray-500 dark:text-white">{{$trash->weight}} Gram</h2>
                            </div>
                        </div>
                        <a href="{{ url('/cart-trash') }}" class="text-gray-100 bg-[#F2BE22] border border-[#F2BE22] focus:outline-none hover:bg-[#F2BE22] focus:ring-4 focus:ring-[#F2BE22] font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-[#F2BE22] dark:text-gray-800 dark:border-[#F2BE22] dark:hover:bg-[#F2BE22] dark:hover:border-[#F2BE22] dark:focus:ring-[#F2BE22]">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection