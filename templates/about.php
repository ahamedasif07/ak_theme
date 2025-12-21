<?php
/*
Template Name: About Page
*/
get_header(); // Include header.php
?>

<section class="max-w-6xl mx-auto mt-16 p-6 bg-white rounded-lg shadow-lg overflow-hidden">

    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">About Our Company</h1>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto">
            আমরা বিশ্বাস করি উন্নত ডিজাইন এবং প্রফেশনাল ওয়েবসাইট তৈরি করা মানেই ব্যাবসা এবং ব্যবহারকারীর অভিজ্ঞতা উন্নত
            করা। আমাদের লক্ষ্য হলো cutting-edge technology ব্যবহার করে আপনার ব্র্যান্ডকে আরও শক্তিশালী করা।
        </p>
    </div>

    <?php
    // Dynamic cards array (React map এর মতো)
    $about_cards = [
        [
            'title' => 'Our Mission',
            'content' => 'আমাদের মিশন হলো ব্যবহারকারী-বান্ধব এবং responsive ডিজাইন তৈরি করা, যা প্রতিটি device এ seamless experience দেয়।',
            'bg' => '#f3f3f3',
        ],
        [
            'title' => 'Our Vision',
            'content' => 'আমাদের ভিশন হলো প্রযুক্তি ও creativity এর সমন্বয়ে ব্যবসাকে next level এ নিয়ে যাওয়া এবং long-term growth নিশ্চিত করা।',
            'bg' => '#29c28aff',
        ],
        [
            'title' => 'Our Values',
            'content' => 'Innovation, Integrity এবং Customer Satisfaction আমাদের মূল মান। আমরা প্রতিটি প্রজেক্টে এই মান বজায় রাখি।',
            'bg' => '#60479eff',
        ],
        [
            'title' => 'Our Experience',
            'content' => '৫ বছরেরও বেশি সময় ধরে আমরা বিভিন্ন ওয়েবসাইট এবং ডিজাইন প্রজেক্ট সফলভাবে সম্পন্ন করেছি, satisfied clients সহ।',
            'bg' => '#8d1a1aff',
        ],
    ];
    ?>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">

        <?php foreach($about_cards as $index => $card): ?>

        <?php
        switch($index) {
            case 0: $hoverClass = 'hover:bg-red-100'; break;
            case 1: $hoverClass = 'hover:bg-green-100'; break;
            case 2: $hoverClass = 'hover:bg-blue-100'; break;
            default: $hoverClass = 'hover:bg-yellow-100'; break;
        }
        ?>

        <!-- AOS wrapper (ONLY animation) -->
        <div data-aos="fade-up" data-aos-delay="<?php echo $index * 200; ?>" data-aos-anchor-placement="top-bottom">

            <!-- UI / Hover wrapper -->
            <div class="<?php echo $hoverClass; ?>
    rounded-lg border
    transition-all duration-500 ease-in-out
    transform-gpu
    hover:scale-[1.04]
    hover:shadow-xl
    [padding-top:var(--ak-box-padding-top)]
    [padding-right:var(--ak-box-padding-right)]
    [padding-bottom:var(--ak-box-padding-bottom)]
    [padding-left:var(--ak-box-padding-left)]
    [margin-top:var(--ak-box-margin-top)]
    [margin-right:var(--ak-box-margin-right)]
    [margin-bottom:var(--ak-box-margin-bottom)]
    [margin-left:var(--ak-box-margin-left)]
" style="background-color: <?php echo esc_attr($card['bg']); ?>;">
                <h2 class="text-2xl font-bold mb-3">
                    <?php echo esc_html($card['title']); ?>
                </h2>
                <p><?php echo esc_html($card['content']); ?></p>
            </div>

        </div>

        <?php endforeach; ?>

    </div>



    <!-- Call to Action -->
    <div class="text-center mt-12">
        <a href="<?php echo home_url('/contact'); ?>"
            class="inline-block px-8 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 transition duration-300">
            Contact Us
        </a>
    </div>

</section>

<?php get_footer(); ?>