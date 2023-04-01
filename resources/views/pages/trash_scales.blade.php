@extends('layout.index')

@section('content')
    <div class="mb-10">
        <div class="w-full h-screen bg-cover bg-center bg-scroll"
            style="background-image: url('{{ asset('images/img6.jpg') }}')">
        </div>
        <div class="bg-white dark:bg-gray-800 md:px-12 px-8 py-14  rounded-t-3xl -mt-24">
            <div class="mb-4">
                <h1
                    class="font-roboto font-semibold text-center md:text-4xl text-2xl text-neutral-700 dark:text-gray-200 md:mb-3 mb-2">
                    Formulir Timbangan Sampah
                </h1>
                <p class="font-roboto font-medium text-center text-xl text-neutral-400 dark:text-gray-300 mb-6 md:mb-4">
                    Pantai
                    Sendang
                    Biru</p>
            </div>
            <div class="mb-6">
                <label for="weight_trash" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berat
                    Sampah</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                            class="w-5 h-5 text-gray-500 dark:text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0">
                            </path>
                        </svg>
                    </div>
                    <input type="text" id="weight_trash" name="weight_trash"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="2000" required>
                </div>
                <p class="text-gray-500 text-sm m-1">
                    Isikan berat sampah yang akan di timbang dengan satuan gram (g)
                </p>
            </div>
            <div class="mb-6">
                <label for="proof-file" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bukti
                    Timbangan</label>
                <div class="flex items-center justify-center w-full">
                    <label for="proof-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                </path>
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                    to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">PNG OR JPG (MAX. 2000 MB)
                            </p>
                        </div>
                        <input id="proof-file" type="file" name="proof-file" class="hidden" required />
                    </label>
                </div>

                <p class="text-gray-500 text-sm m-1">
                    Isikan gambar bukti timbangan sampah
                </p>
            </div>
            <div class="mb-6">
                <label for="message"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan</label>
                <textarea id="message" name="message" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Pesan Anda ..." required></textarea>
                <p class="text-gray-500 text-sm m-1">
                    Isikan pesan anda mengenai pantai yang akan anda jaga
                </p>
            </div>
            <button type="submit"
                class="w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-gradient-to-r from-[#FF512F] to-[#F09819] hover:bg-gradient-to-r hover:from-[#e44c2e] hover:to-[#b57211] hover:shadow-xl border-transparent rounded-xl focus:outline-none focus:shadow-outline-blue hover:shadow-lg uppercase tracking-wider">
                Kirim
            </button>
        </div>
    </div>
@endsection
