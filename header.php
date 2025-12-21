<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- 🔥 GLOBAL THEME VARIABLE + GLOBAL CLASS -->
    <style>
    :root {
        --theme-bg: <?php echo get_theme_mod('ak_bg_color', '#ffffff');
        ?>;
    }

    /* Tailwind-like global class */
    .bg-theme {
        background-color: var(--theme-bg);
    }
    </style>

    <?php wp_head(); ?>
</head>






<body class="bg-[var(--ak-page-bg)] ">
    <header class="bg-[var(--ak-header-bg)]">

        <!-- Navbar Here -->
    </header>



    <!-- nav items -->
    <!-- Navbar -->
    <nav id="main-navbar" class="bg-gray-200 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                <!-- Left: Login Button -->
                <div class="flex-shrink-0 font-bold text-xl">
                    Ak_THEME
                </div>

                <!-- Center: Menu -->
                <div class="hidden md:flex md:space-x-5">
                    <ul class="flex gap-5 items-center">
                        <li class="relative group">
                            <a href="<?php echo home_url('/'); ?>"
                                class="transition font-bold text-[16px] duration-300 hover:text-blue-600 block px-4">
                                Home
                            </a>
                            <span
                                class="absolute left-0 -bottom-1 w-0 h-1 bg-blue-600 transition-all duration-500 group-hover:w-full"></span>
                        </li>

                        <li class="relative group">
                            <a href="<?php echo home_url('/about'); ?>"
                                class="transition font-bold text-[16px] duration-300 hover:text-green-600 block px-4">
                                About
                            </a>
                            <span
                                class="absolute left-0 -bottom-1 w-0 h-1 bg-green-600 transition-all duration-500 group-hover:w-full"></span>
                        </li>

                        <li class="relative group">
                            <a href="#"
                                class="transition font-bold text-[16px] duration-300 hover:text-purple-600 block px-4">
                                Services
                            </a>
                            <span
                                class="absolute left-0 -bottom-1 w-0 h-1 bg-purple-600 transition-all duration-500 group-hover:w-full"></span>

                            <!-- Dropdown -->
                            <ul
                                class="absolute left-0 top-full mt-1 w-40 bg-white shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300">
                                <li><a href="#" class="block px-4 py-2 hover:bg-purple-100">Web Design</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-purple-100">SEO</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-purple-100">Marketing</a></li>
                            </ul>
                        </li>

                        <li class="relative group">
                            <a href="#"
                                class="transition font-bold text-[16px] duration-300 hover:text-pink-600 block px-4">
                                Portfolio
                            </a>
                            <span
                                class="absolute left-0 -bottom-1 w-0 h-1 bg-pink-600 transition-all duration-500 group-hover:w-full"></span>
                        </li>

                        <li class="relative group">
                            <a href="<?php echo home_url('/contact'); ?>"
                                class="transition font-bold text-[16px] duration-300 hover:text-red-600 block px-4">
                                Contact
                            </a>
                            <span
                                class="absolute left-0 -bottom-1 w-0 h-1 bg-red-600 transition-all duration-500 group-hover:w-full"></span>
                        </li>
                    </ul>
                </div>

                <!-- Right: Logo -->

                <div class="flex-shrink-0 md:block hidden">
                    <a href="<?php echo home_url('/login'); ?>"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                        Login
                    </a>
                </div>

                <!-- Hamburger for Mobile -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
            <ul class="flex flex-col gap-2">
                <li><a href="<?php echo home_url('/'); ?>" class="block px-4 py-2 hover:bg-gray-300 rounded">Home</a>
                </li>
                <li><a href="<?php echo home_url('/about'); ?>"
                        class="block px-4 py-2 hover:bg-gray-300 rounded">About</a></li>
                <li>
                    <button class="w-full text-left px-4 py-2 hover:bg-gray-300 rounded"
                        onclick="toggleDropdown('services-dropdown')">
                        Services
                    </button>
                    <ul id="services-dropdown" class="hidden pl-4 flex flex-col gap-1">
                        <li><a href="#" class="block px-4 py-2 hover:bg-purple-100 rounded">Web Design</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-purple-100 rounded">SEO</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-purple-100 rounded">Marketing</a></li>
                    </ul>
                </li>
                <li><a href="#" class="block px-4 py-2 hover:bg-gray-300 rounded">Portfolio</a></li>
                <li><a href="<?php echo home_url('/contact'); ?>"
                        class="block px-4 py-2 hover:bg-gray-300 rounded">Contact</a></li>
            </ul>
        </div>
    </nav>



    <!-- JS -->
    <script>
    const btn = document.getElementById('mobile-menu-button');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });

    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        dropdown.classList.toggle('hidden');
    }
    </script>


    <!-- <?php
wp_nav_menu(array(
    'theme_location' => 'primary_menu',
    'menu_class'     => 'flex justify-center gap-5 py-4 bg-gray-200 shadow-md',
    'container'      => false,
));
?> -->







    </header>