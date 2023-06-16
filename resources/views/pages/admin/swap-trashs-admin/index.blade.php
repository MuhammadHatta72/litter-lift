@extends('layout-admin.index')

@section('content')

<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        @can('isAdmin')
        <h2 class="text-2xl text-gray-800 dark:text-gray-100 mt-4">Proses Tukar Sampah</h2>

        <div class="mt-4">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Pengguna
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Sampah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Opsi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($swap_trashs as $swap_trash)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $swap_trash->user->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{-- {{ $swap_trash->date }} --}}
                                {{ date('d M Y', strtotime($swap_trash->date)) }}
                            </td>
                            <td class="px-6 py-4">
                                <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-1 rounded-xl dark:bg-red-900 dark:text-red-300">{{ $swap_trash->total_weight }} Gram</span>
                            </td>
                            <td class="px-6 py-4">
                                @if($swap_trash->status == "choose")
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-medium mr-2 px-2.5 py-1 rounded-xl dark:bg-indigo-900 dark:text-indigo-300">Pilih Tiket / Uang</span>
                                @elseif($swap_trash->status == "process")
                                <span class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-1 rounded-xl dark:bg-yellow-900 dark:text-yellow-300">Konfirmasi</span>
                                @elseif($swap_trash->status == "done")
                                <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-1 rounded-xl dark:bg-green-900 dark:text-green-300">Selesai</span>
                                @endif
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex justify-start">
                                    <a href="{{ url('swap-trash/'. $swap_trash->id)}}" class="text-white bg-[#22A699] hover:bg-[#108276] focus:ring-4 focus:outline-none focus:ring-[#22A699] font-medium rounded-full text-sm p-2 text-center inline-flex items-center mr-1 dark:bg-[#22A699] dark:hover:bg-[#108276] dark:focus:ring-[#108276]">
                                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="p-4">
                    {{ $swap_trashs->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
        @endcan
    </div>
</div>


@endsection