<?php
/*
Template Name: service Page
*/
get_header(); // Include header.php
?>

<?php

$title = get_theme_mod('ak_card_title_setting', 'Default Card Title');
$description = get_theme_mod('ak_card_description', 'Default description for card.');
$image = get_theme_mod('ak_card_image', get_template_directory_uri() . '/images/default-card.jpg');
?>
<div class="card p-6 rounded-lg shadow-lg">

    <!-- Image -->
    <img src="<?php echo esc_url(!empty($image) ? $image : 'https://via.placeholder.com/400'); ?>"
        alt="<?php echo esc_attr(!empty($title) ? $title : 'Default Card Image'); ?>"
        class="w-full h-64 object-cover rounded-lg mb-4">

    <!-- Title -->
    <h2 class="text-2xl font-bold mb-2" style="color: var(--card_title_color); font-size: var(--card_title_font_size);">
        <?php echo esc_html(!empty($title) ? $title : 'Default Card Title'); ?>
    </h2>

    <!-- Description -->
    <p>
        <?php echo esc_html(!empty($description) ? $description : 'This is a default description.'); ?>
    </p>

</div>

<?php get_footer(); ?>