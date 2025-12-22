<?php
/*
Template Name: service Page
*/
get_header(); // Include header.php
?>
<?php
$title       = get_theme_mod('ak_card_title_setting', 'Default Card Title');
$title_color = get_theme_mod('ak_card_title_color', '#000000');
$description_color = get_theme_mod('ak_card_description_color', '#000000');
$description = get_theme_mod('ak_card_description_setting', 'Default description');
$desc_size = get_theme_mod('ak_card_desc_size', 16);
$image       = get_theme_mod(
    'ak_card_image_setting',
    get_template_directory_uri() . '/images/banner.png'
);
$hover_image = get_theme_mod(
    'ak_card_hover_image_setting',
    get_template_directory_uri() . '/images/banner (2).png'
);
?>
<div class="flex flex-col items-center mt-7 ">
    <div
        class="card p-6 rounded-lg shadow-md hover:shadow-lg w-96 border-2 transition-all hover:scale-105 duration-300 ease-in-out">

        <!-- Image Container -->
        <div class="relative w-full h-64 overflow-hidden rounded-lg mb-4"
            style="position: relative; width: 100%; height: 16rem;"
            onmouseover="this.querySelector('.image-default').style.opacity='0'; this.querySelector('.image-hover').style.opacity='1';"
            onmouseout="this.querySelector('.image-default').style.opacity='1'; this.querySelector('.image-hover').style.opacity='0';">

            <img src="<?php echo esc_url(!empty($image) ? $image : '/images/banner.png'); ?>"
                alt="<?php echo esc_attr(!empty($title) ? $title : 'Default Card Image'); ?>" class="image-default"
                style="width: 100%; height: 100%; object-fit: cover; display: block; transition: opacity 0.3s ease-in-out;">

            <img src="<?php echo esc_url(!empty($hover_image) ? $hover_image : '/images/banner-hover.png'); ?>"
                alt="<?php echo esc_attr(!empty($title) ? $title : 'Default Card Hover Image'); ?>" class="image-hover"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0; transition: opacity 0.3s ease-in-out;">
        </div>


        <!-- Title -->
        <h2 class="text-2xl font-bold mb-2"
            style="color: var(--card_title_color); font-size: var(--card_title_font_size);">
            <?php echo esc_html(!empty($title) ? $title : 'Default Card Title'); ?>
        </h2>

        <!-- Description -->
        <p class="leading-relaxed"
            style="color: var(--card_description_color); font-size: var(--card_description_font_size);">
            <?php echo esc_html($description); ?>
        </p>

    </div>

</div>

<?php get_footer(); ?>