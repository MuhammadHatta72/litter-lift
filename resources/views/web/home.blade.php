@extends('layout.web.master')

@section('content')
    <div class="md:px-12">
        {{-- Hero Image --}}
        <div class="flex">
            <div class="md:py-24 md:w-1/2">
                <h1 class="font-poppins font-medium md:text-7xl text-neutral-700 mb-3">Pantai Sendang</h1>
                <h1 class="font-poppins font-medium md:text-7xl text-neutral-700 mb-10">Biru Malang</h1>
                <p class="font-poppins text-base md:text-lg text-neutral-500 mb-10">Salah satu pantai yang terletak di
                    Desa
                    Sumber
                    Agung, Kecamatan Sumber
                    Manjing Wetan, 69 km ke arah
                    selatan dari pusat Kota Malang</p>
                <button
                    class="font-roboto text-sm px-8 py-2 rounded-full text-slate-800 md:text-lg text-neutral-700 bg-gradient-to-r from-sky-400 to-yellow-300 hover:bg-gradient-to-r hover:from-sky-500 hover:to-yellow-400 hover:text-slate-100">
                    Mulai Sekarang</button>
            </div>
            <div class="md:w-1/2">
                <img src="{{ asset('images/img-dummy1.png') }}" alt="pantai-sendang-biru" class="w-screen">
            </div>
        </div>
        {{-- End Hero Image --}}

        {{-- Statistik --}}
        <div class="mx-10 -mt-24 mb-24 px-10 h-24 relative z-10 flex flex-row bg-white rounded-full shadow-xl w-5/6">
            <div class="w-full flex flex-row items-center">
                <div class="text-neutral-300 dark:text-neutral-400 mr-4"><svg fill="none" stroke="currentColor"
                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="w-7 h-7 md:w-10 md:h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z">
                        </path>
                    </svg></div>
                <div class="flex flex-col justify-items-center">
                    <h1 class="font-roboto font-semibold text-xl text-neutral-700 dark:text-neutral-600 mb-1">Jumlah
                        Pengunjung
                    </h1>
                    <p class="font-roboto font-medium text-sm text-neutral-400 dark:text-neutral-400 mt-1">567
                        Pengunjung
                    </p>
                </div>
            </div>
            <div class="self-center border-r border-slate-200 dark:border-slate-700 h-8"></div>
            <div class="w-full flex flex-row items-center ml-10">
                <div class="text-neutral-300 dark:text-neutral-400 mr-4"><svg fill="none" stroke="currentColor"
                        stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        class="w-7 h-7 md:w-10 md:h-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0">
                        </path>
                    </svg></div>
                <div class="flex flex-col justify-items-center">
                    <h1 class="font-roboto font-semibold text-xl text-neutral-700 dark:text-neutral-600 mb-1">Jumlah
                        Sampah
                    </h1>
                    <p class="font-roboto font-medium text-sm text-neutral-400 dark:text-neutral-400 mt-1">1000
                        Kilogram
                    </p>
                </div>
            </div>
        </div>
        {{-- End Statistik --}}

    </div>

    <div>
        {{-- Top Tourist --}}
        {{-- <div class="md:px-12">
        <div class="py-10">
            <h1 class="font-roboto font-semibold md:text-4xl text-neutral-700 dark:text-neutral-600 mb-3">
                Top Tourist Spots
            </h1>
            <p class="font-roboto font-medium md:text-xl text-neutral-400 dark:text-neutral-400">Pantai
                Sendang
                Biru</p>
        </div>
    </div> --}}
        {{-- End Top Tourist --}}
    </div>

    <div class="md:mt-32 mb-24">
        {{-- Gallery --}}
        <div class="bg-orange-50 dark:bg-black dark:bg-opacity-20 md:px-12 md:rounded-[40px]">
            <div class="py-10">
                <h1 class="font-roboto font-semibold md:text-4xl text-center text-neutral-700 dark:text-neutral-600 mb-3">
                    Gallery
                </h1>
                <p class="font-roboto font-medium md:text-xl text-center text-neutral-400 dark:text-neutral-400">Pantai
                    Sendang
                    Biru</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 pb-14">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto w-full rounded-lg" src="{{ asset('images/img1.jpg') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto w-full rounded-lg" src="{{ asset('images/img10.jpg') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto w-full rounded-lg" src="{{ asset('images/img2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto w-full rounded-lg" src="{{ asset('images/img4.jpg') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto w-full rounded-lg" src="{{ asset('images/img3.jpg') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto w-full rounded-lg" src="{{ asset('images/img5.jpg') }}" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto w-full rounded-lg" src="{{ asset('images/img8.jpg') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto w-full rounded-lg" src="{{ asset('images/img6.jpg') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto w-full rounded-lg" src="{{ asset('images/img7.jpg') }}" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto w-full rounded-lg" src="{{ asset('images/img7.jpg') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto w-full rounded-lg" src="{{ asset('images/img4.jpg') }}" alt="">
                    </div>
                    <div>
                        <img class="h-auto w-full rounded-lg" src="{{ asset('images/img2.jpg') }}" alt="">
                    </div>
                </div>
            </div>

        </div>
        {{-- End Gallery --}}
    </div>
@endsection
