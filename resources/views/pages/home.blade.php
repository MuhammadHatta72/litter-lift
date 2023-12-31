@extends('layout.index')

@section('content')
<div class="px-4 md:px-10 lg:px-12 xl:px-16 scroll-mt-28" id="home">
    <div class="flex flex-col md:flex-col lg:flex-row xl:flex-row md:justify-center lg:justify-between xl:justify-between">
        <div class="md:py-16 lg:py-24 md:w-full lg:w-1/2 order-2 md:order-2 lg:order-1 max-w-xl md:max-w-none lg:max-w-xl">
            <h6 class="font-poppins font-semibold text-orange-400 dark:text-orange-500 text-lg md:text-xl my-2 lg:my-0 lg:mb-2">
                #LestarikanPantai
            </h6>
            <h1 class="font-poppins font-bold text-3xl md:text-5xl xl:text-7xl text-neutral-700 dark:text-gray-200 mt-4 md:mt-0 mb-3 text-left">
                Pantai Sendang <br> Biru Malang
            </h1>
            <p class="font-poppins text-base md:text-lg text-neutral-500 dark:text-gray-300 mb-5 md:mb-10 md:mr-2">
                Nikmati pesona pantai yang memukau di Desa Sumber Agung, Kecamatan Sumber Manjing Wetan, hanya berjarak
                69 km ke arah selatan dari pusat Kota Malang. Rasakan sensasi liburan yang tak terlupakan dengan
                keindahan pantai yang menawan.
            </p>
            <a href="#weight-trash" class="btn btn-primary text-lg">
                Mulai Lestarikan Pantai!
            </a>
        </div>
        <div class="md:w-full lg:w-1/2 order-1 md:order-1 lg:order-2">
            <img src="{{ asset('images/slider.png') }}" alt="pantai-sendang-biru" class="w-screen lg:w-full mt-4 md:mt-0">
        </div>
    </div>
    {{-- End Hero Image --}}

    {{-- Statistik --}}
    <div class="xl:mx-10 mt-12 md:mt-6 lg:-mt-24 mb-10 md:mb-16 lg:mb-24 md:px-10 h-24 lg:relative md:z-10 flex flex-row md:bg-white dark:bg-gray-700 md:rounded-full md:shadow-xl hover:md:shadow-lg w-full lg:w-5/6 animate-float">
        <div class="w-full flex flex-row items-center">
            <div class="text-neutral-300 dark:text-gray-200 mr-4"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-7 h-7 md:w-10 md:h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z">
                    </path>
                </svg></div>
            <div class="flex flex-col justify-items-center">
                <h1 class="font-roboto font-semibold text-xl text-neutral-700 dark:text-gray-200 mb-1">Jumlah
                    Pengunjung
                </h1>
                <p class="font-roboto font-medium text-sm text-neutral-400 dark:text-gray-200 mt-1">
                    {{ $visitor }}
                    Pengunjung
                </p>
            </div>
        </div>
        <div class="self-center border-r border-slate-200 dark:border-slate-700 h-8 md:ml-10 ml-3"></div>
        <div class="w-full flex flex-row items-center md:ml-10 ml-3">
            <div class="text-neutral-300 dark:text-gray-200 mr-4"><svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-7 h-7 md:w-10 md:h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0">
                    </path>
                </svg></div>
            <div class="flex flex-col justify-items-center">
                <h1 class="font-roboto font-semibold text-xl text-neutral-700 dark:text-gray-200 mb-1">Jumlah
                    Sampah
                </h1>
                <p class="font-roboto font-medium text-sm text-neutral-400 dark:text-gray-200 mt-1">
                    {{ $weightTotal }}
                    Kilogram
                </p>
            </div>
        </div>
    </div>
    {{-- End Statistik --}}

</div>

{{-- Top Tourist --}}
<div class="px-4 md:px-10 lg:px-12 xl:px-16 mt-10 md:mb-24 mb-16 scroll-mt-28" id="top-spots">
    <div class="pb-6">
        <h1 class="font-roboto font-semibold text-2xl md:text-4xl text-neutral-700 dark:text-gray-200 mb-2 md:mb-3">
            Top Tourist Spots
        </h1>
        <p class="font-roboto font-medium text-xl text-neutral-400 dark:text-gray-300">Pantai
            Sendang
            Biru</p>
    </div>
    <div class="grid grid-cols-2 gap-3 md:grid-cols-2 md:gap-10 lg:grid-cols-4 lg:gap-6">
        <div class="transform hover:scale-105 hover:shadow-lg hover:rounded-xl duration-300 pb-6 group">
            <img src="{{ asset('images/toptourist-1.jpg') }}" alt="4 Tourist Spots" class="rounded-xl w-full h-96 group-hover:rounded-b-none">
            <div>
                <h2 class="mt-4 font-roboto text-base sm:text-lg text-neutral-900 dark:text-neutral-100 font-medium truncate">
                    Pesisir Pantai
                </h2>
                <span class="block mt-2 font-roboto text-sm text-neutral-6000 dark:text-neutral-400">Pasir dan air laut yang bersih dan jernih</span>
            </div>
        </div>
        <div class="transform hover:scale-105 hover:shadow-lg hover:rounded-xl duration-300 pb-6 group">
            <img src="{{ asset('images/toptourist-2.jpg') }}" alt="4 Tourist Spots" class="rounded-xl w-full h-96 group-hover:rounded-b-none">
            <div>
                <h2 class="mt-4 font-roboto text-base sm:text-lg text-neutral-900 dark:text-neutral-100 font-medium truncate">
                    Kapal Nelayan
                </h2>
                <span class="block mt-2 font-roboto text-sm text-neutral-6000 dark:text-neutral-400">Tempat kapal bersandar</span>
            </div>
        </div>
        <div class="transform hover:scale-105 hover:shadow-lg hover:rounded-xl duration-300 pb-6 group">
            <img src="{{ asset('images/toptourist-3.jpg') }}" alt="4 Tourist Spots" class="rounded-xl w-full h-96 group-hover:rounded-b-none">
            <div>
                <h2 class="mt-4 font-roboto text-base sm:text-lg text-neutral-900 dark:text-neutral-100 font-medium truncate">
                    Kapal dan Pulau
                </h2>
                <span class="block mt-2 font-roboto text-sm text-neutral-6000 dark:text-neutral-400">Kapal nelayan yang sedang beristirahat disebelah pulau</span>
            </div>
        </div>
        <div class="transform hover:scale-105 hover:shadow-lg hover:rounded-xl duration-300 pb-6 group">
            <img src="{{ asset('images/toptourist-4.jpg') }}" alt="4 Tourist Spots" class="rounded-xl w-full h-96 group-hover:rounded-b-none">
            <div>
                <h2 class="mt-4 font-roboto text-base sm:text-lg text-neutral-900 dark:text-neutral-100 font-medium truncate">
                    Pelabuhan Nelayan
                </h2>
                <span class="block mt-2 font-roboto text-sm text-neutral-6000 dark:text-neutral-400">Tempat nelayan menurunkan hasil tangkapannya</span>
            </div>
        </div>
    </div>
</div>
{{-- End Top Tourist --}}

<div class="bg-orange-50 dark:bg-gray-800 md:mb-14 scroll-mt-20" id="gallerys">
    {{-- Gallery --}}
    <div class="px-4 md:px-10 lg:px-12 xl:px-16 rounded-lg md:rounded-[40px]">
        <div class="py-10">
            <h1 class="font-roboto font-semibold md:text-4xl text-2xl text-center text-neutral-700 dark:text-gray-200 md:mb-3 mb-2">
                Gallery
            </h1>
            <p class="font-roboto font-medium text-xl text-center text-neutral-400 dark:text-gray-300">Pantai
                Sendang
                Biru</p>
        </div>

        <div class="grid grid-cols-2 gap-2 xl:grid-cols-4 xl:gap-4 pb-14">
            <div class="grid gap-4">
                <div>
                    <img class="h-auto w-full rounded-lg hover:rotate-2 transform duration-300" src="{{ asset('images/album-1.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-lg hover:rotate-2 transform duration-300" src="{{ asset('images/album-2.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-lg hover:rotate-2 transform duration-300" src="{{ asset('images/album-3.jpg') }}" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto w-full rounded-lg hover:rotate-2 transform duration-300" src="{{ asset('images/album-4.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-lg hover:rotate-2 transform duration-300" src="{{ asset('images/album-5.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-lg hover:rotate-2 transform duration-300" src="{{ asset('images/album-6.jpg') }}" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto w-full rounded-lg hover:rotate-2 transform duration-300" src="{{ asset('images/album-7.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-lg hover:rotate-2 transform duration-300" src="{{ asset('images/album-8.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-lg hover:rotate-2 transform duration-300" src="{{ asset('images/album-9.jpg') }}" alt="">
                </div>
            </div>
            <div class="grid gap-4">
                <div>
                    <img class="h-auto w-full rounded-lg hover:rotate-2 transform duration-300" src="{{ asset('images/album-10.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-lg hover:rotate-2 transform duration-300" src="{{ asset('images/album-11.jpg') }}" alt="">
                </div>
                <div>
                    <img class="h-auto w-full rounded-lg hover:rotate-2 transform duration-300" src="{{ asset('images/album-12.jpg') }}" alt="">
                </div>
            </div>
        </div>

    </div>
    {{-- End Gallery --}}
</div>

{{-- Button Weight Trash --}}
{{-- <div class="w-full h-64 bg-fixed" style="background-image: url('{{ asset('images/img3.jpg') }}');"></div> --}}
<div class="w-full h-96 px-4 md:px-10 lg:px-12 xl:px-16 bg-gradient-to-r from-[#FF512F] to-[#F09819] dark:from-gray-800 dark:to-gray-700 flex flex-col justify-center items-center scroll-mt-20" id="weight-trash">
    <h2 class="font-roboto font-semibold md:text-4xl text-2xl text-center md:text-left text-white dark:text-gray-200 md:mb-6 mb-4">
        Mari
        kita pulangkan sampah-sampah Kita ke tempat yang semestinya</h2>
    <a href="{{ url('trash-scales') }}" class="inline-block py-2 px-6 bg-white dark:bg-gray-300 text-[#FF512F] dark:text-gray-900 rounded-full shadow-sm hover:shadow-lg font-semibold uppercase tracking-wider text-base">Mulai
        Kumpulkan Sampah</a>
</div>
{{-- End Button Weight Trash --}}

{{-- Contact Us --}}
<div class="px-4 md:px-10 lg:px-12 xl:px-16 flex flex-col md:flex-row my-14 scroll-mt-28" id="contact-us">
    <div class="md:w-1/2 mt-8 md:mt-0 order-2 md:order-1">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31573.62510490036!2d112.65887902699654!3d-8.430785761973047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd60113eb17382f%3A0xbd94402fbf21878c!2sPantai%20Sendangbiru!5e0!3m2!1sid!2sid!4v1680232405732!5m2!1sid!2sid" class="w-full h-64 md:h-96" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="md:w-1/2 md:p-12 order-1 md:order-2">
        <h1 class="font-roboto font-semibold md:text-4xl text-2xl text-neutral-700 dark:text-gray-200 md:mb-3 mb-2">
            Contact Us
        </h1>
        <p class="font-roboto font-medium text-xl text-neutral-400 dark:text-gray-300 mb-6 md:mb-4">Pantai
            Sendang
            Biru</p>
        <div class="">
            <div class="flex items-center mb-2">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-[60px] h-[60px] md:w-20 md:h-20 stroke-neutral-400 dark:stroke-gray-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 6.75V15m6-6v8.25m.503 3.498l4.875-2.437c.381-.19.622-.58.622-1.006V4.82c0-.836-.88-1.38-1.628-1.006l-3.869 1.934c-.317.159-.69.159-1.006 0L9.503 3.252a1.125 1.125 0 00-1.006 0L3.622 5.689C3.24 5.88 3 6.27 3 6.695V19.18c0 .836.88 1.38 1.628 1.006l3.869-1.934c.317-.159.69-.159 1.006 0l4.994 2.497c.317.158.69.158 1.006 0z">
                    </path>
                </svg>
                <p class="ml-2 md:ml-4 font-roboto text-sm text-neutral-400 dark:text-gray-300">Desa Sumber Agung,
                    Kecamatan
                    Sumber Manjing Wetan, 69 km ke arah selatan dari pusat Kota Malang</p>
            </div>
            <div class="flex items-center mb-6">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-[30px] h-[30px] md:w-[53px] md:h-[53px] stroke-neutral-400 dark:stroke-gray-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75">
                    </path>
                </svg>
                <p class="ml-2 md:ml-4 font-roboto text-sm text-neutral-400 dark:text-gray-300">
                    pantaisendangbiru@gmail.com</p>
            </div>
            <div class="flex items-center mb-2">
                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-[30px] h-[30px] md:w-[53px] md:h-[53px] stroke-neutral-400 dark:stroke-gray-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z">
                    </path>
                </svg>
                <p class="ml-2 md:ml-4 font-roboto text-sm text-neutral-400 dark:text-gray-300">+6289027391231</p>
            </div>
        </div>
    </div>
</div>
{{-- End Contact Us --}}
@endsection