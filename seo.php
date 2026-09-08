<?php

$currentPage = basename($_SERVER['PHP_SELF']);

$baseUrl = "https://noreaqua.com";

$seoData = [

    /* HOME */
    "index.php" => [
        "title" => "NORE Packaged Drinking Water | Pure & Refreshing Water in Delhi",
        "description" => "NORE delivers premium packaged drinking water with advanced purification, hygienic bottling, and reliable delivery for homes, offices, events, and businesses.",
        "keywords" => "NORE water, packaged drinking water Delhi, premium bottled water, 250ml bottle, 500ml bottle, 1 litre bottle",
        "canonical" => "$baseUrl/",
        "robots" => "index, follow"
    ],

    /* ABOUT */
    "about-us.php" => [
        "title" => "About NORE | Premium Packaged Drinking Water",
        "description" => "Learn about NORE and our commitment to delivering safe, hygienic, and premium packaged drinking water with trusted quality in every bottle.",
        "keywords" => "about NORE, packaged drinking water company, premium water brand",
        "canonical" => "$baseUrl/about-us.php",
        "robots" => "index, follow"
    ],

    /* 250 ML */
    "bottle-250-ml.php" => [
        "title" => "NORE 250 mL Bottle | Compact Packaged Drinking Water",
        "description" => "Discover the NORE 250 mL bottle, perfect for travel, schools, events, and everyday hydration with pure and refreshing packaged drinking water.",
        "keywords" => "250ml water bottle, NORE 250ml, small packaged drinking water",
        "canonical" => "$baseUrl/bottle-250-ml.php",
        "robots" => "index, follow"
    ],

    /* 500 ML */
    "bottle-500-ml.php" => [
        "title" => "NORE 500 mL Bottle | Premium Packaged Drinking Water",
        "description" => "The NORE 500 mL bottle offers pure, refreshing packaged drinking water in the ideal size for offices, travel, and daily use.",
        "keywords" => "500ml water bottle, NORE 500ml, bottled drinking water",
        "canonical" => "$baseUrl/bottle-500-ml.php",
        "robots" => "index, follow"
    ],

    /* 1 LITRE */
    "bottle-1-litre.php" => [
        "title" => "NORE 1 Litre Bottle | Premium Drinking Water",
        "description" => "Stay refreshed with the NORE 1 Litre bottle, designed for homes, offices, gyms, and everyday hydration with premium packaged drinking water.",
        "keywords" => "1 litre water bottle, NORE 1 litre, packaged drinking water",
        "canonical" => "$baseUrl/bottle-1-litre.php",
        "robots" => "index, follow"
    ],

    /* GALLERY */
    "gallery.php" => [
        "title" => "NORE Gallery | Premium Water Products & Facilities",
        "description" => "Explore the NORE gallery showcasing our premium bottled water products, manufacturing standards, and quality-driven facilities.",
        "keywords" => "NORE gallery, bottled water photos, water manufacturing",
        "canonical" => "$baseUrl/gallery.php",
        "robots" => "index, follow"
    ],

    /* BLOG */
    "blog.php" => [
        "title" => "NORE Blog | Hydration Tips & Drinking Water Insights",
        "description" => "Read expert articles on hydration, healthy living, packaged drinking water, and workplace wellness from the NORE blog.",
        "keywords" => "hydration tips, drinking water blog, healthy lifestyle, NORE blog",
        "canonical" => "$baseUrl/blog.php",
        "robots" => "index, follow"
    ],

    /* CONTACT */
    "contact-us.php" => [
        "title" => "Contact NORE | Packaged Drinking Water Supplier in Delhi",
        "description" => "Contact NORE for packaged drinking water orders, bulk supply, corporate enquiries, and distributor opportunities in Delhi.",
        "keywords" => "contact NORE, bottled water supplier Delhi, water distributor",
        "canonical" => "$baseUrl/contact-us.php",
        "robots" => "index, follow"
    ]

];

/* DEFAULT SEO */

$defaultMeta = [
    "title" => "NORE Packaged Drinking Water | Pure & Refreshing Water",
    "description" => "NORE provides premium packaged drinking water with trusted purity, hygienic bottling, and reliable delivery.",
    "keywords" => "NORE water, packaged drinking water, bottled water Delhi",
    "canonical" => "$baseUrl/",
    "robots" => "index, follow"
];

$pageMeta = $seoData[$currentPage] ?? $defaultMeta;

?>