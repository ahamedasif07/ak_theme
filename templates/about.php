<?php
/*
Template Name: About Page
*/
get_header(); // commit: include header.php
?>

<!-- Page Content -->
<!-- Page Content: Professional About Section -->
<section class="max-w-6xl mx-auto mt-16 p-6 bg-white rounded-lg shadow-lg">
    <!-- Header -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">About Our Company</h1>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto">
            আমরা বিশ্বাস করি উন্নত ডিজাইন এবং প্রফেশনাল ওয়েবসাইট তৈরি করা মানেই ব্যাবসা এবং ব্যবহারকারীর অভিজ্ঞতা উন্নত
            করা।
            আমাদের লক্ষ্য হলো cutting-edge technology ব্যবহার করে আপনার ব্র্যান্ডকে আরও শক্তিশালী করা।
        </p>
    </div>

    <!-- Features / Info Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Mission -->
        <div class="p-6 border rounded-lg hover:shadow-xl transition duration-300">
            <h2 class="text-2xl font-bold text-gray-800 mb-3">Our Mission</h2>
            <p class="text-gray-700">
                আমাদের মিশন হলো ব্যবহারকারী-বান্ধব এবং responsive ডিজাইন তৈরি করা, যা প্রতিটি device এ seamless
                experience দেয়।
            </p>
        </div>

        <!-- Vision -->
        <div class="p-6 border rounded-lg hover:shadow-xl transition duration-300">
            <h2 class="text-2xl font-bold text-gray-800 mb-3">Our Vision</h2>
            <p class="text-gray-700">
                আমাদের ভিশন হলো প্রযুক্তি ও creativity এর সমন্বয়ে ব্যবসাকে next level এ নিয়ে যাওয়া এবং long-term
                growth নিশ্চিত করা।
            </p>
        </div>

        <!-- Values -->
        <div class="p-6 border rounded-lg hover:shadow-xl transition duration-300">
            <h2 class="text-2xl font-bold text-gray-800 mb-3">Our Values</h2>
            <p class="text-gray-700">
                Innovation, Integrity এবং Customer Satisfaction আমাদের মূল মান। আমরা প্রতিটি প্রজেক্টে এই মান বজায়
                রাখি।
            </p>
        </div>

        <!-- Experience -->
        <div class="p-6 border rounded-lg hover:shadow-xl transition duration-300">
            <h2 class="text-2xl font-bold text-gray-800 mb-3">Our Experience</h2>
            <p class="text-gray-700">
                ৫ বছরেরও বেশি সময় ধরে আমরা বিভিন্ন ওয়েবসাইট এবং ডিজাইন প্রজেক্ট সফলভাবে সম্পন্ন করেছি, satisfied
                clients সহ।
            </p>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="text-center mt-12">
        <a href="<?php echo home_url('/contact'); ?>"
            class="inline-block px-8 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 transition duration-300">
            Contact Us
        </a>
    </div>
</section>


<?php get_footer(); // commit: include footer.php ?>