@extends('layout.index')

@section('content')
<div class="w-full h-screen bg-cover bg-center bg-scroll flex items-center justify-center" style="background-image: url('{{ asset('images/img6.jpg') }}')">
    <div class="px-6 py-8 lg:px-6 lg:py-8 mx-1 lg:mx-0 flex flex-col bg-gray-200 dark:bg-gray-900 bg-opacity-50 dark:bg-opacity-50 -mt-12 group rounded-xl shadow-md hover:shadow-xl w-full h-full justify-center items-center">
        <h1 class="font-poppins font-bold text-2xl md:text-4xl xl:text-6xl text-white dark:text-gray-300 text-center">
            PANTAI SENDANG BIRU
        </h1>
        <h2 class="font-poppins font-semibold text-sm md:text-3xl xl:text-5xl text-gray-200 dark:text-gray-200 mt-2 lg:mt-4 text-center">
            Lestarikan Alam Untuk Anak Cucu Kita
        </h2>
        <a href="#" class="inline-block mx-auto mt-2 lg:mt-4 py-2 px-7 lg:py-2 lg:px-8 bg-white dark:bg-gray-300 text-[#FF512F] dark:text-gray-900 rounded-full shadow-sm hover:shadow-lg font-bold uppercase tracking-wider text-sm md:text-base lg:text-lg">
            Mulai Timbang
        </a>
    </div>
</div>

<div class="mb-10">
    <div class="bg-white dark:bg-gray-800 md:px-12 px-8 py-14  rounded-t-3xl -mt-24 relative z-10">
        <h1 class="font-roboto font-semibold text-center md:text-4xl text-2xl text-neutral-700 dark:text-gray-200 md:mb-3 mb-2">
            3 Top Rangking
        </h1>
        <div class="items-center justify-center mx-auto max-w-3xl">
            <div id="leaderboard" class="text-white gap-6 flex flex-col md:flex-row">
                @foreach ($leaderboard as $item)
                <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:shadow-lg hover:ring-2 hover:ring-offset-2 hover:ring-offset-gray-100 hover:ring-white transition-all duration-300 ease-in-out cursor-default">
                    <div class="flex flex-col items-center justify-center p-4">
                        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ $item->user->photo }}" alt="avatar">
                        <h5 class="mb-1 text-xl text-center font-medium text-gray-900 dark:text-white">
                            {{ $item->user->name }}
                        </h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">
                            {{ $item->total_weight }} gram
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="{{ route('leaderboard') }}" class="my-12 block text-white btn btn-primary">
                Lihat Semua
            </a>
        </div>
        <div class="max-w-lg mx-auto">
            <div class="mb-4">
                <h1 class="font-roboto font-semibold text-center md:text-4xl text-2xl text-neutral-700 dark:text-gray-200 md:mb-3 mb-2">
                    Formulir Timbangan Sampah
                </h1>
                <p class="font-roboto font-medium text-center text-xl text-neutral-400 dark:text-gray-300 mb-6 md:mb-4">
                    Pantai Sendang Biru
                </p>
            </div>
            <form method="POST" action={{ route('trash-scales.store') }} enctype="multipart/form-data">
                @csrf
                <div class="mb-6">
                    <label for="weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Berat Sampah
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0">
                                </path>
                            </svg>
                        </div>
                        <input type="text" id="weight" name="weight" class="input-2" placeholder="2000" autofocus />
                    </div>

                    @error('weight')
                    <p class="text-red-500 text-xs mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                    <p class="text-gray-500 text-sm mt-4">
                        Isikan berat sampah yang akan di timbang dengan satuan gram (g)
                    </p>
                </div>
                <div class="mb-6">
                    <label for="proof_of_weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Bukti Timbangan
                    </label>
                    <div class="flex items-center justify-center w-full">
                        <label for="proof_of_weight" class="drop-zone">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                    </path>
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                    <span class="font-semibold">
                                        Click to upload
                                    </span>
                                    or drag and drop
                                </p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">
                                    PNG OR JPG (MAX. 4 Mb)
                                </p>
                            </div>
                            <input required id="proof_of_weight" type="file" name="proof_of_weight" class="hidden" />
                        </label>
                    </div>

                    @error('proof_of_weight')
                    <p class="text-red-500 text-xs mt-4">
                        {{ $message }}
                    </p>
                    @enderror

                    <p class="text-gray-500 text-sm m-1">
                        Isikan gambar bukti timbangan sampah
                    </p>
                </div>
                <!-- <div class="mb-6">
                        <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan</label>
                        <textarea id="message" name="message" rows="4" class="input p-0" placeholder="Pesan Anda ..."></textarea>
                        @error('message')
                            <p class="text-red-500 text-xs mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                        <p class="text-gray-500 text-sm m-1">
                            Isikan pesan anda mengenai pantai yang akan anda jaga
                        </p>
                    </div> -->
                <button type="submit" class="btn btn-primary w-full">
                    Kirim
                </button>
            </form>
        </div>
    </div>
</div>
@endsection