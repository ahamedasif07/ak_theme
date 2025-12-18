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
        <nav>
            <ul>
                <li class="text-red-500 ">Home</li>
            </ul>
        </nav>
    </header>