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
        <!-- nab bar start  -->
        <?php get_template_part( '/src/components/NabVar/NavBar') ?>
        <!-- nab bar end  -->
    </header>