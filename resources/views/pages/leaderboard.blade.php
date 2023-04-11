@extends('layout.index')

@section('content')
    <div class="px-4 md:px-10 lg:px-12 xl:px-16 mt-10 mb-20">
        <h1
            class="font-roboto font-semibold text-center text-2xl md:text-5xl text-neutral-700 dark:text-gray-200 mb-2 md:mb-5">
            Congrats On Winning</h1>
        <div class="flex justify-center items-end">
            <div class="w-56 h-80 bg-orange-500 shadow-lg shadow-orange-300 p-5">
                <div class="h-full flex flex-col justify-center items-center">
                    <img src="{{ $leaderboard[1]->user->photo }}" alt="profile" class="w-24 h-24 rounded-full mt-2">
                    <p class="font-roboto font-semibold text-center text-xl md:text-2xl text-gray-200 mt-2">
                        {{ $leaderboard[1]->user->name }}</p>
                    <p class="font-roboto font-medium text-center text-base md:text-xl text-gray-200 mt-2">
                        {{ $leaderboard[1]->total_weight }} gram</p>
                </div>
            </div>
            <div class="w-56 h-96 bg-orange-500 shadow-lg shadow-orange-300 p-5 ml-2">
                <div class="h-full flex flex-col justify-center items-center">
                    <img src="{{ $leaderboard[0]->user->photo }}" alt="profile" class="w-24 h-24 rounded-full mt-2">
                    <p class="font-roboto font-semibold text-center text-xl md:text-2xl text-gray-200 mt-2">
                        {{ $leaderboard[0]->user->name }}</p>
                    <p class="font-roboto font-medium text-center text-base md:text-xl text-gray-200 mt-2">
                        {{ $leaderboard[0]->total_weight }} gram</p>
                </div>
            </div>
            <div class="w-56 h-64 bg-orange-500 shadow-lg shadow-orange-300 p-5 ml-2">
                <div class="h-full flex flex-col justify-center items-center">
                    <img src="{{ $leaderboard[2]->user->photo }}" alt="profile" class="w-24 h-24 rounded-full mt-2">
                    <p class="font-roboto font-semibold text-center text-xl md:text-2xl text-gray-200 mt-2">
                        {{ $leaderboard[2]->user->name }}</p>
                    <p class="font-roboto font-medium text-center text-base md:text-xl text-gray-200 mt-2">
                        {{ $leaderboard[2]->total_weight }} gram</p>
                </div>
            </div>
        </div>
    </div>
    <div class="px-4 md:px-10 lg:px-12 xl:px-16 mt-10 md:mb-24 mb-16">
        <h1 class="font-roboto font-semibold text-2xl md:text-5xl text-neutral-700 dark:text-gray-200 mb-2 md:mb-3">10 Top
            Rangking</h1>
        <p class="font-roboto font-semibold text-xl md:text-2xl text-neutral-700 dark:text-gray-200 mb-2 md:mb-5">Pengumpul
            sampah terbaik di minggu ini.</p>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Rangking
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah Sampah
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($leaderboard as $item)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">
                                {{ $loop->iteration }}
                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->user->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->total_weight }} gram
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
