<?php get_header(); ?>

<?php
// Slides array
$slides = [
    (object)[
        'title' => 'Slide One',
        'excerpt' => 'This is the first slide description.',
        'image' => get_template_directory_uri() . '/images/banner.png',
    ],
    (object)[
        'title' => 'Slide Two',
        'excerpt' => 'This is the second slide description.',
        'image' => get_template_directory_uri() . '/images/banner.png',
    ],
    (object)[
        'title' => 'Slide Three',
        'excerpt' => 'This is the third slide description.',
        'image' => get_template_directory_uri() . '/images/banner.png',
    ],
];
?>

<main>
    <!-- Full Screen Banner -->
    <section class="w-full mx-auto bg-gray-200">
        <img class="w-full h-[50vh] md:h-[70vh] lg:h-[80vh] object-cover mt-8"
            src="<?php echo esc_url(get_theme_mod('ak_theme_header_image')); ?>" alt="Banner Image">
    </section>

    <!-- Swiper Slider -->
    <section class="max-w-6xl mx-auto mt-12">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php foreach ($slides as $slide): ?>
                <div class="swiper-slide relative rounded-lg overflow-hidden">
                    <img src="<?php echo esc_url($slide->image); ?>" alt="<?php echo esc_attr($slide->title); ?>"
                        class="w-full h-96 object-cover">
                    <!-- <div class="absolute bottom-6 left-6 text-white bg-black/50 p-4 rounded">
                        <h2 class="text-2xl font-bold"><?php echo esc_html($slide->title); ?></h2>
                        <p class="text-sm"><?php echo esc_html($slide->excerpt); ?></p>
                    </div> -->
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Navigation -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </section>
</main>

<?php get_footer(); ?>