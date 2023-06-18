@extends('layout-admin.index')

@section('content')

<div class="px-4 pt-8 pb-3 sm:ml-64">
    <div class="mt-12 mr-3">
        @can('isAdmin')
        <h2 class="text-2xl text-gray-800 dark:text-gray-100 mt-4">Laporan Tukar Sampah</h2>

        <div class="mt-4">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Pengguna
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Token
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Sampah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Uang
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tukar Dengan
                            </th>
                            <!-- <th scope="col" class="px-6 py-3">
                                Status
                            </th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($swap_trashs as $swap_trash)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $swap_trash->user->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $swap_trash->token }}
                            </td>
                            <td class="px-6 py-4">
                                {{-- {{ $swap_trash->date }} --}}
                                {{ date('d M Y', strtotime($swap_trash->date)) }}
                            </td>
                            <td class="px-6 py-4">
                                <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-1 rounded-xl dark:bg-red-900 dark:text-red-300">{{ $swap_trash->total_weight }} Gram</span>
                            </td>
                            <td class="px-6 py-4">
                                Rp. {{ $swap_trash->total_money }}
                            </td>
                            <td class="px-6 py-4">
                                @if($swap_trash->choose_ticket_money == "ticket")
                                Tiket
                                @else
                                Uang
                                @endif
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

        <div class="mt-5">
            <form action="/report-swaptrash" method="post" id="formReport">
                @csrf
                <div class=" w-full mt-4 px-6 py-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <div class="mb-3">
                        <label for="month" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="month" id="month" name="month" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Maulana" required>
                        @if($errors->first('month'))
                        <small class="text-xs text-red-500">{{$errors->first('month')}}</small>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="format_print" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cetak Laporan</label>
                        <select id="format_print" name="format_print" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option value="">Pilih Format</option>
                            <option value="pdf">PDF</option>
                            <option value="excel">Excel</option>
                        </select>
                        @if($errors->first('format_print'))
                        <small class="text-xs text-red-500">{{$errors->first('format_print')}}</small>
                        @endif
                    </div>

                    <div class="flex flex-col md:flex-row">
                        <button type="submit" class=" text-white bg-green-500 hover:bg-green-600/90 focus:ring-4 focus:outline-none focus:ring-[#F7C04B]/50 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-[#F7C04B]/55 mr-2 mb-2">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 -ml-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                            </svg>
                            Download Laporan
                        </button>
                    </div>
                </div>
            </form>
        </div>
        @endcan
    </div>
</div>


@endsection