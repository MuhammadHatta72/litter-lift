<!DOCTYPE html>
<html lang="en" class="scrool-smooth scroll-mt-14">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Litter Lift - Selamat Datang di website Litter Lift</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <style>
        html {
            scroll-behavior: smooth;
        }

        nav.bg-scroll {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(15px);
        }
    </style>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="dark:bg-gray-900">

    {{-- Navbar --}}
    <nav
        class="px-4 md:px-12 border-b border-neutral-200 dark:bg-gray-900 dark:border-neutral-700 md:sticky top-0 z-20">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="{{ url('/') }}" class="flex items-center">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-36 h-auto">
            </a>
            <button data-collapse-toggle="navbar-multi-level" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-neutral-500 rounded-lg md:hidden hover:bg-neutral-100 focus:outline-none focus:ring-2 focus:ring-neutral-200 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:ring-neutral-600"
                aria-controls="navbar-multi-level" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                <ul
                    class="flex flex-col items-center p-4 mt-4 border border-neutral-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:border-neutral-700">
                    <li>
                        <a href="{{ url('/') }}"
                            class="block py-2 pl-0 md:pl-3 pr-4 text-base font-poppins text-neutral-600 rounded md:bg-transparent hover:text-[#FF512F] hover:font-bold md:p-0 md:dark:text-white dark:bg-transparent md:dark:bg-transparent">Home</a>
                    </li>
                    <li>
                        <button type="button"
                            class="text-white font-poppins text-base bg-gradient-to-r from-[#FF512F] to-[#F09819] hover:bg-gradient-to-r hover:from-[#e44c2e] hover:to-[#b57211] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full px-5 py-2.5 text-center mr-3 md:mr-0 hover:shadow-md dark:hover:bg-yellow-400 dark:focus:ring-blue-800">Login</button>
                    </li>
                    <li>
                        <button id="theme-toggle" type="button"
                            class="hover:bg-gray-600 dark:hover:bg-white focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-full text-sm p-2.5 group">
                            <svg id="theme-toggle-dark-icon"
                                class="hidden w-5 h-5 text-gray-500 group-hover:text-gray-100" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon"
                                class="hidden w-5 h-5 text-white group-hover:text-yellow-300" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- End Navbar --}}

    {{-- Start Content --}}
    {{-- <div class="w-full">
        <img src="" alt="hero" class="w-full h-96 object-cover">
    </div> --}}


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
    {{-- End Content --}}

    {{-- Start Footer --}}
    <footer class="bg-white rounded-lg dark:bg-gray-900 m-4">
        <div class="w-full container mx-auto p-4 md:px-6 md:py-8">
            <div class="flex flex-col md:flex-row justify-between">
                <a href="#" class="flex md:items-center justify-center mb-4 md:mb-1">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-36 h-auto">
                </a>
                <ul
                    class="flex flex-wrap md:items-center justify-center mb-3 md:mb-0 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="{{ url('/') }}"
                            class="mr-4 hover:underline md:mr-6 text-base font-medium font-poppins hover:no-underline hover:font-semibold hover:text-[#FF512F] md:p-0 dark:text-neutral-400 md:dark:hover:text-white">Home</a>
                    </li>
                </ul>
            </div>
            <hr class="border-gray-200 sm:mx-auto dark:border-gray-700 md:my-4" />
            <span class="block text-sm text-gray-500 text-center dark:text-gray-400 hover:underlin mt-4 md:mt-3">© 2023
                Team.
                All Rights Reserved.</span>
        </div>
    </footer>

    {{-- End Footer --}}

    {{-- Start Script --}}
    @vite('resources/js/app.js')
    <script>
        // Navbar Scroll
        const navbar = document.querySelector('nav');
        let lastScrollTop = 0;

        window.addEventListener('scroll', function() {
            const currentScrollTop = document.documentElement.scrollTop;
            if (currentScrollTop > 0) {
                navbar.classList.add('bg-scroll');
            } else {
                navbar.classList.remove('bg-scroll');
            }
            // lastScrollTop = currentScrollTop;
        });

        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        var themeToggleBtn = document.getElementById('theme-toggle');

        themeToggleBtn.addEventListener('click', function() {

            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }

                // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }

        });
    </script>
</body>

</html>
