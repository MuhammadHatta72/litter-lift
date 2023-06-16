@extends('layout.index')

@section('content')
<div class="px-4 md:px-10 lg:px-12 xl:px-16 mt-10 mb-20">
    <h1 class="font-roboto font-semibold text-center text-2xl md:text-5xl text-neutral-700 dark:text-gray-200 mb-2 md:mb-5">
        Congrats On Winning</h1>
    <div class="flex justify-center items-end">
        <div class="w-56 h-80 bg-orange-500 shadow-lg shadow-orange-300 p-5">
            <div class="h-full flex flex-col justify-center items-center">
                @if($userRank == 2)
                @if ($leaderboard[1]->user->photo !== 'not_found')
                <img class="w-24 h-24 mt-2 rounded-full" src="{{ url('./assets/image_users/'.$leaderboard[1]->user->photo) }}" alt="user photo">
                @else
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-24 h-24 text-gray-100 dark:text-gray-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                @endif
                <p class="font-roboto font-semibold text-center text-xl md:text-2xl text-gray-200 mt-2">
                    {{ $leaderboard[1]->user->name }}
                </p>
                <p class="font-roboto font-medium text-center text-base md:text-xl text-gray-200 mt-2">
                    {{ $leaderboard[1]->total_weight_user }} gram
                </p>
                @else
                <p class="font-roboto font-semibold text-center text-xl md:text-2xl text-gray-200 mt-2">
                    No Data
                </p>
                @endif
            </div>
        </div>
        <div class="w-56 h-96 bg-orange-500 shadow-lg shadow-orange-300 p-5 ml-2">
            <div class="h-full flex flex-col justify-center items-center">
                @if ($leaderboard[0]->user->photo !== 'not_found')
                <img class="w-24 h-24 mt-2 rounded-full" src="{{ url('./assets/image_users/'.$leaderboard[0]->user->photo) }}" alt="user photo">
                @else
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-24 h-24 text-gray-100 dark:text-gray-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                @endif
                <p class="font-roboto font-semibold text-center text-xl md:text-2xl text-gray-200 mt-2">
                    {{ $leaderboard[0]->user->name }}
                </p>
                <p class="font-roboto font-medium text-center text-base md:text-xl text-gray-200 mt-2">
                    {{ $leaderboard[0]->total_weight_user }} gram
                </p>
            </div>
        </div>
        <div class="w-56 h-64 bg-orange-500 shadow-lg shadow-orange-300 p-5 ml-2">
            <div class="h-full flex flex-col justify-center items-center">
                @if($userRank == 3)
                @if ($leaderboard[2]->user->photo !== 'not_found')
                <img class="w-24 h-24 mt-2 rounded-full" src="{{ url('./assets/image_users/'.$leaderboard[2]->user->photo) }}" alt="user photo">
                @else
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-24 h-24 text-gray-100 dark:text-gray-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                @endif
                <p class="font-roboto font-semibold text-center text-xl md:text-2xl text-gray-200 mt-2">
                    {{ $leaderboard[2]->user->name }}
                </p>
                <p class="font-roboto font-medium text-center text-base md:text-xl text-gray-200 mt-2">
                    {{ $leaderboard[2]->total_weight_user }} gram
                </p>
                @else
                <p class="font-roboto font-semibold text-center text-xl md:text-2xl text-gray-200 mt-2">
                    No Data
                </p>
                @endif
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
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">
                        {{ $loop->iteration }}
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $item->user->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $item->total_weight_user }} gram
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection