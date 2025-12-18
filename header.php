<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body <?php body_class(); ?>>
    <header>
        <!DOCTYPE html>
        <html <?php language_attributes(); ?>>

        <head>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php bloginfo('name'); ?></title>
            <?php wp_head(); ?>
        </head>

        <body <?php body_class(); ?>>

            <!-- nav items -->
            <ul class="flex justify-center gap-5 py-4 bg-gray-200 shadow-md space-x-4">
                <li class="relative group cursor-pointer">
                    <a href="<?php echo home_url('/'); ?>"
                        class="transition font-bold text-[16px] duration-300 text-center hover:text-blue-600 block px-4">
                        Home
                    </a>
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-1 bg-blue-600 transition-all duration-500 group-hover:w-full"></span>
                </li>
                <li class="relative group cursor-pointer">
                    <a href="<?php echo home_url('/about'); ?>"
                        class="transition font-bold text-[16px] duration-300 text-center hover:text-green-600 block px-4">
                        About
                    </a>
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-1 bg-green-600 transition-all duration-500 group-hover:w-full"></span>
                </li>
                <li class="relative group cursor-pointer">
                    <a href="#"
                        class="transition font-bold text-[16px] duration-300 text-center hover:text-purple-600 block px-4">
                        Services
                    </a>
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-1 bg-purple-600 transition-all duration-500 group-hover:w-full"></span>
                </li>
                <li class="relative group cursor-pointer">
                    <a href="#"
                        class="transition font-bold text-[16px] duration-300 text-center hover:text-pink-600 block px-4">
                        Portfolio
                    </a>
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-1 bg-pink-600 transition-all duration-500 group-hover:w-full"></span>
                </li>
                <li class="relative group cursor-pointer">
                    <a href="<?php echo home_url('/contact'); ?>"
                        class="transition font-bold text-[16px] duration-300 text-center hover:text-red-600 block px-4">
                        Contact
                    </a>
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-1 bg-red-600 transition-all duration-500 group-hover:w-full"></span>
                </li>
            </ul>





    </header>