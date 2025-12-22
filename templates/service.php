<?php
/*
Template Name: service Page
*/
get_header(); // Include header.php
?>
<?php
$title       = get_theme_mod('ak_card_title_setting', 'Default Card Title');
$title_color = get_theme_mod('ak_card_title_color', '#000000');
$description = get_theme_mod('ak_card_description_setting', 'Default description');
$desc_size = get_theme_mod('ak_card_desc_size', 16);
$image       = get_theme_mod(
    'ak_card_image_setting',
    get_template_directory_uri() . '/images/banner.png'
);
?>
<div class="card p-6 rounded-lg shadow-lg">

    <!-- Image -->
    <img src="<?php echo esc_url(!empty($image) ? $image : '/images/banner.png'); ?>"
        alt="<?php echo esc_attr(!empty($title) ? $title : 'Default Card Image'); ?>"
        class="w-full h-64 object-cover rounded-lg mb-4">

    <!-- Title -->
    <h2 class="text-2xl font-bold mb-2" style="color: var(--card_title_color); font-size: var(--card_title_font_size);">
        <?php echo esc_html(!empty($title) ? $title : 'Default Card Title'); ?>
    </h2>

    <!-- Description -->
    <p class="[font-size:var(--card_description_font_size)] leading-relaxed">
        <?php echo esc_html($description); ?>
    </p>

</div>

<?php get_footer(); ?>