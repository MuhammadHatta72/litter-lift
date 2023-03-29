<nav class="px-4 md:px-12 border-b border-neutral-200 dark:bg-neutral-900 dark:border-neutral-700 md:sticky top-0 z-20">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="#" class="flex items-center">
            <span
                class="text-6xl font-bold font-serif bg-gradient-to-tr from-teal-300 to-yellow-300 text-transparent bg-clip-text">O</span>
            <span class="text-4xl font-semibold text-gray-700 dark:text-white">Trash</span>
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
                    <a href="#"
                        class="block py-2 pl-3 pr-4 text-base font-bold font-poppins text-white bg-yellow-700 rounded md:bg-transparent md:text-yellow-400 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ url('/trash-scales') }}"
                        class="block py-2 pl-3 pr-4 text-base font-medium font-poppins text-neutral-600 rounded hover:bg-neutral-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-400 md:p-0 dark:text-neutral-400 md:dark:hover:text-white dark:hover:bg-neutral-700 md:dark:hover:bg-transparent">Timbang
                        Sampah</a>
                </li>
                {{-- <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-base font-medium font-poppins text-neutral-600 rounded hover:bg-neutral-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-400 md:p-0 dark:text-neutral-400 md:dark:hover:text-white dark:hover:bg-neutral-700 md:dark:hover:bg-transparent">Kontak
                            Kami</a>
                    </li> --}}
                <li>
                    <button type="button"
                        class="text-white font-poppins text-base bg-gradient-to-r from-sky-400 to-yellow-300 hover:bg-gradient-to-r hover:from-sky-500 hover:to-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-yellow-400 dark:focus:ring-blue-800">Login</button>
                </li>
                <li>
                    {{-- button darkmode --}}
                    <button
                        class="md:text-xl w-12 h-12 rounded-full text-neutral-600 dark:text-neutral-300 hover:bg-neutral-100 dark:hover:bg-neutral-800 focus:outline-none flex items-center justify-center "><span
                            class="sr-only">Enable dark mode</span><svg xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" class="w-7 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z">
                            </path>
                        </svg>
                    </button>
                    {{-- button lightmode --}}
                    <button
                        class="text-2xl md:text-3xl w-12 h-12 rounded-full text-neutral-700 dark:text-neutral-300 hover:bg-neutral-100 dark:hover:bg-neutral-800 focus:outline-none flex items-center justify-center hidden"><span
                            class="sr-only">Enable dark mode</span><svg xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-7 h-7">
                            <path fill-rule="evenodd"
                                d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                </li>
            </ul>
        </div>
    </div>
</nav>
