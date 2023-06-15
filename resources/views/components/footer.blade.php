<footer class="bg-white rounded-lg dark:bg-gray-900 m-4">
    <div class="w-full p-4 px-4 md:px-10 lg:px-12 xl:px-16 md:py-8">
        <div class="flex flex-col md:flex-row justify-between">
            <a href="#" class="flex md:items-center justify-center mb-4 md:mb-1">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-36 h-auto">
            </a>
            <ul
                class="flex flex-wrap md:items-center justify-center mb-3 md:mb-0 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="/" class="footer-nav-link">Home</a>
                </li>
                @if (Route::currentRouteName() == 'index')
                    <li>
                        <a href="#top-spots" class="footer-nav-link">Top
                            Spots</a>
                    </li>
                    <li>
                        <a href="#gallerys" class="footer-nav-link ">Gallerys</a>
                    </li>
                    <li>
                        <a href="#weight-trash" class="footer-nav-link">Weight Trash</a>
                    </li>
                    <li>
                        <a href="#contact-us" class="footer-nav-link">Contact
                            Us</a>
                    </li>
                @endif
            </ul>
        </div>
        <hr class="border-gray-200 sm:mx-auto dark:border-gray-700 md:my-4" />
        <span class="block text-sm text-gray-500 text-center dark:text-gray-400 hover:underlin mt-4 md:mt-3">© 2023
            Team.
            All Rights Reserved.</span>
    </div>
</footer>
