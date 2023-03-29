<footer class="bg-white rounded-lg dark:bg-gray-900 m-4">
    <div class="w-full container mx-auto p-4 md:px-6 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center">
                <span
                    class="text-6xl font-bold font-serif bg-gradient-to-tr from-teal-300 to-yellow-300 text-transparent bg-clip-text">O</span>
                <span class="text-4xl font-semibold text-gray-700 dark:text-white">Trash</span>
            </a>
            <ul class="flex flex-wrap items-center mb-3 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#"
                        class="mr-4 hover:underline md:mr-6 text-base font-medium font-poppins md:hover:text-yellow-400 md:p-0 dark:text-neutral-400 md:dark:hover:text-white">Home</a>
                </li>
                <li>
                    <a href="{{ url('/trash-scales') }}"
                        class="mr-4 hover:underline md:mr-6 text-base font-medium font-poppins md:hover:text-yellow-400 md:p-0 dark:text-neutral-400 md:dark:hover:text-white">Timbang
                        Sampah</a>
                </li>
                {{-- <li>
                    <a href="#"
                        class="mr-4 hover:underline md:mr-6 text-base font-medium font-poppins md:hover:text-yellow-400 md:p-0 dark:text-neutral-400 md:dark:hover:text-white ">Kontak
                        Kami</a>
                </li> --}}
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400 hover:underline">© 2023 Team.
            All Rights Reserved.</span>
    </div>
</footer>
