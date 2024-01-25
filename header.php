<?php

function activeLink($url, $url2)
{
    global $post;
    global $wp;

    $post_slug = $post->post_name;

    if (isset($post_slug)) {
        if ($post_slug == $url || $post_slug == $url2) {
            echo "active";
        } else {
            echo "";
        }
    } else {
        $post_slug = add_query_arg(array(), $wp->request);

        if ($post_slug == "") {
            echo "active";
        } else {
            if (str_contains($post_slug, $url)) {
                echo "active";
            } else {
                echo "";
            }
        }
    }
}

function is_id()
{
    if (function_exists('pll_current_language')) {
        $currLang = pll_current_language();
    }

    return $currLang == "id";
}

function isBlackNav()
{
    global $post;
    if ($post) {
        $post_slug = $post->post_name;
        return ($post->post_name == "contact" || $post->post_name == "career" || $post->post_name == "products");
    } else {
        return false;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reethau</title>
</head>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Reethau bergerak di industri gas alam dan produk energi bersih lainnya yang ramah lingkungan. Kami berkomitmen untuk memberikan solusi yang menyeluruh untuk setiap pelanggan. Reethau operates in the natural gas industry and other environmentally friendly clean energy products. We are committed to providing comprehensive solutions for every customer. ">
    <meta name="keyword" content=“Reethau, Clean Energy, Energy, Energi, Energi bersih, Natural Gas, Gas Alam, CNG, LNG,
        Biomassa, Biomass, Woodchip, Indonesia, Bekasi, Indramayu, Blora “>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"
        async></script>
    <meta name="format-detection" content="telephone=no">
    <script src="<?= get_template_directory_uri() ?>/assets/js/jquery.rwdImageMaps.js"></script>

    <link href="<?= get_template_directory_uri() ?>/node_modules/lightbox2/src/css/lightbox.css" rel="stylesheet" />

    <?php
    wp_head();


    $a = get_template_directory_uri();
    $brandLogo = isBlackNav() ? "/assets/images/logo-black.webp" : "/assets/images/logo-white.webp";
    ?>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg <?= isBlackNav() ? "black-nav" : "" ?>" id="navbar">
            <div class="container-fluid d-flex align-items-center">
                <a class="brand d-md-block" href="/">
                    <img src="<?= get_template_directory_uri() . "/assets/images/logo-white.webp" ?>"
                        class="d-none  logo-brand logo-black" alt="brand-logo">
                    <img src="<?= get_template_directory_uri() . "/assets/images/logo-white.webp" ?>"
                        class="d-none  logo-brand logo-white" alt="brand-logo">
                </a>

                <button class="navbar-toggler " id="mobile-menu" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <div class="toggle">
                        <i class="bi bi-list text-white fs-2"></i>
                    </div>
                </button>

                <div class="navbar-menu collapse navbar-collapse justify-content-between mx-0 align-items-center"
                    id="navbarText">
                    <div class="d-flex justify-content-between">
                        <a class="brand d-none" href="/">
                            <img src="<?= get_template_directory_uri() . "/assets/images/logo-black.webp" ?>"
                                class="d-none  logo-brand logo-black" alt="brand-logo">
                            <img src="<?= get_template_directory_uri() . "/assets/images/logo-white.webp" ?>"
                                class="d-none  logo-brand logo-white" alt="brand-logo">
                        </a>

                        <img src="<?= get_template_directory_uri() . "/assets/images/logo-white.webp" ?>"
                            class="d-md-none  logo-brand logo-white" alt="brand-logo">

                        <button class="navbar-toggler " id="mobile-menu" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <div class="toggle">
                                <i class="bi bi-list fs-2" style="color:white"></i>
                            </div>
                        </button>
                    </div>

                    <ul class="navbar-nav mb-2 mb-lg-0 d-flex">
                        <li class="nav-item ms-md-auto">
                            <a class="nav-link <?= activeLink("home", "home-2") ?>" href="<?= is_id() ? "/" : "/en" ?>">
                                <?= is_id() ? "Beranda" : "Home" ?>
                                <i class="bi bi-caret-up-fill"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= activeLink("tentang", "about-2") ?>"
                                href="<?= is_id() ? "/tentang" : "/en/about" ?>">

                                <?= is_id() ? "Tentang Kami" : "About Us" ?>

                                <i class="bi bi-caret-up-fill"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= activeLink("products", "product") ?>"
                                href="<?= is_id() ? "/produk" : "/en/product" ?>">
                                <?= is_id() ? "Produk" : "Product" ?>

                                <i class="bi bi-caret-up-fill"></i>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= activeLink("career", "career-2") ?>"
                                href="<?= is_id() ? "/karir" : "/en/career" ?>">
                                <?= is_id() ? "Karir" : "Career" ?>

                                <i class="bi bi-caret-up-fill"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= activeLink("contact", "contact-2") ?>"
                                href="<?= is_id() ? "kontak" : "/en/contact" ?>">
                                <?= is_id() ? "Kontak" : "Contact" ?>

                                <i class="bi bi-caret-up-fill"></i>
                            </a>
                        </li>
                        <li class="nav-item ms-md-auto">
                            <div class="d-md-flex d-none">
                                <div class='nav-link me-3 lang-btn active lang-en'>
                                    ENG
                                </div>
                                <div class="nav-link lang-btn lang-id">
                                    IDN
                                </div>
                            </div>
                        </li>



                    </ul>
                    <div class="lang-mobile d-flex d-md-none">
                        <div class='nav-link me-3 lang-btn active lang-en'>
                            ENG
                        </div>
                        <div class="nav-link lang-btn lang-id">
                            IDN
                        </div>
                    </div>
                </div>

            </div>

        </nav>
    </div>