<nav class="px-4 md:px-12 border-b border-neutral-200 dark:bg-gray-900 dark:border-neutral-700 md:sticky top-0 z-20">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ route('index') }}" class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-36 h-auto">
        </a>
        <button data-collapse-toggle="navbar-multi-level" type="button" class="hamburger"
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
                class="flex flex-col items-center justify-center p-4 mt-4 border border-neutral-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:border-neutral-700">
                <li>
                    <a href="/" class="nav-link">Home</a>
                </li>
                @if (Route::currentRouteName() == 'index')
                    <li>
                        <a href="#top-spots" class="nav-link">Top
                            Spots</a>
                    </li>
                    <li>
                        <a href="#gallerys" class="nav-link">Gallerys</a>
                    </li>
                    <li>
                        <a href="#weight-trash" class="nav-link">Weight Trash</a>
                    </li>
                    <li>
                        <a href="#contact-us" class="nav-link">Contact Us </a>
                    </li>
                @endif
                <li>
                    @auth
                        {{-- circle and get the user profile image --}}
                        <a class="flex items-center flex-row">
                            <img src="{{ Auth::user()->photo }}" alt="profile" class="w-10 h-10 rounded-full">
                            {{-- logout --}}
                            <a href="{{ route('logout') }}"
                                class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-200">
                                {{ __('Logout') }}
                            </a>
                        @else
                            <a type="button" class="btn btn-primary" href="{{ route('login') }}">
                                Login
                            </a>
                        @endauth
                </li>
                <li>
                    <button id="theme-toggle" type="button"
                        class="hover:bg-gray-600 dark:hover:bg-white focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-full text-sm p-2.5 group">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5 text-gray-500 group-hover:text-gray-100"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5 text-white group-hover:text-yellow-300"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
