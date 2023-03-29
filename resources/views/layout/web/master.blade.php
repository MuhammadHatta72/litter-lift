<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otrash - Selamat Datang di site Otrash</title>
    @vite('resources/css/app.css')
    <style>
        nav.bg-scroll {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(15px);
        }
    </style>
</head>

<body>

    {{-- Navbar --}}
    @include('layout.web.navbar')
    {{-- End Navbar --}}

    {{-- Start Content --}}
    {{-- End Navbar --}}

    {{-- Start Content --}}
    @yield('content')
    {{-- End Content --}}

    {{-- Start Footer --}}
    @include('layout.web.footer')
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

        //create darkmode and lightmode button
        // const darkMode = localStorage.getItem('darkMode');
        // const darkModeToggle = document.querySelector('#dark-mode-toggle');
        // const enableDarkMode = () => {
        //     // 1. Add the class to the body
        //     document.body.classList.add('dark');
        //     // 2. Update darkMode in localStorage
        //     localStorage.setItem('darkMode', 'enabled');
        // };
        // const disableDarkMode = () => {
        //     // 1. Remove the class from the body
        //     document.body.classList.remove('dark');
        //     // 2. Update darkMode in localStorage
        //     localStorage.setItem('darkMode', null);
        // };
        // // If the user already visited and enabled darkMode
        // // start things off with it on
        // if (darkMode === 'enabled') {
        //     enableDarkMode();
        // }
        // // When someone clicks the button
        // darkModeToggle.addEventListener('click', () => {
        //     // get their darkMode setting
        //     darkMode = localStorage.getItem('darkMode');
        //     // if it not current enabled, enable it
        //     if (darkMode !== 'enabled') {
        //         enableDarkMode();
        //         // if it has been enabled, turn it off
        //     } else {
        //         disableDarkMode();
        //     }
        // });
    </script>
</body>

</html>
