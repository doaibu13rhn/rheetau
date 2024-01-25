<?php /* Template Name: Home */ ?>
<?= get_header(); ?>

<head>
    <meta name="description"
        content="Reethau bergerak di industri gas alam dan produk energi bersih lainnya yang ramah lingkungan. Kami berkomitmen untuk memberikan solusi yang menyeluruh untuk setiap pelanggan. Reethau operates in the natural gas industry and other environmentally friendly clean energy products. We are committed to providing comprehensive solutions for every customer. ">
    <meta name="keyword" content=“Reethau, Clean Energy, Energy, Energi, Energi bersih, Natural Gas, Gas Alam, CNG, LNG,
        Biomassa, Biomass, Woodchip, Indonesia, Bekasi, Indramayu, Blora “>
</head>

<div class="home">
    <section class="home-section-1 d-flex align-items-end white-nav">
        <div class="container-fluid h-100 position-relative">
            <div class="d-none d-md-flex justify-content-center flex-column align-items-center" style="
            position: absolute;
            bottom: 0px;
            left: calc(50% - 69px);
            ">
                <div>
                    <img src="<?= get_template_directory_uri() . '/assets/images/carret-down-circle.webp' ?>"
                        alt="arrow" style="
                    height:40px;
                    width:40px;
                    ">
                </div>
                <span class="sub-header my-1">Scroll to Explore</span>
                <div style="
                        border-left:1px solid white;
                        height:35px
                        "></div>
            </div>
            <div class="row mt-auto mt-md-0 mb-md-5 align-items-end">
                <div class="col-12 col-md-6">
                    <h1 class="mb-4">Environmentally <br>
                        friendly energy <br>
                        sources as a solution
                </div>
                <div class="col-2">


                </div>
                <div class="col-12 col-md-4 my-5">
                    <p>
                        To build a sustainable future, Reethau offers clean energy for all needs. The efforts to use
                        clean energy can provide confidence, reliability and environmentally friendly output.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-section-2 black-nav">
        <div class="spacer"></div>
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-md-center mb-5">
                <div class="col-12 col-md-4 align-self-md-end order-md-1 order-4 smaller-pic">
                    <img src="http://reethau.com/wp-content/uploads/2023/12/home-section-2-1.webp" alt="lng-tabung"
                        class="w-100">
                </div>
                <div class="col-12 col-md-4 align-self-center text-center mt-md-5 order-md-2 order-3">
                    <p>Energy is the prime mover of the wheels of life and the world economy. Using environmentally
                        friendly energy source is one way to maintain the sustainability and balance of the ecosystem.
                    </p>
                </div>
                <div class="col-12 col-md-4 order-md-3 order-2">
                    <img src="http://reethau.com/wp-content/uploads/2023/12/home-section-2-2.webp" alt="distribusi"
                        class="mb-md-5 w-100 p-5 p-md-0">
                </div>
                <div class="col-12 order-md-4 order-1">
                    <span class="sub-header green">Vision and Mission</span>
                    <div class="d-flex align-items-end justify-content-between">
                        <h1>
                            Building a more <b> sustainable <br class="d-none d-md-block"> tomorrow</b> with <b>natural
                                gas</b>
                        </h1>
                        <a href="/about" class="learn-more-btn d-none d-md-flex">
                            Learn More
                            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="4" viewBox="0 0 21 4"
                                fill="none">
                                <path d="M0 1.84375H15.2991" stroke="black" stroke-width="0.25"
                                    stroke-miterlimit="10" />
                                <path d="M14.7061 3.66538V0L20.0106 1.84422L14.7061 3.66538Z" fill="black" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-section-3 d-flex align-items-center black-nav">
        <div class="container-fluid mobile-padding-0 h-100 my-5 flex-column">

            <!-- for mobile image banner -->
            <div class="content active justify-content-center align-items-center p-0 d-md-none cng" id="cng">
                <div class="row">
                    <div class="mobile-padding-1">
                        <span class="green">Clean Energy Product</span>
                        <h1 class="mb-5">
                            CNG <br>
                            for greener <br>
                            Indonesia
                        </h1>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="http://reethau.com/wp-content/uploads/2023/12/home-carousel-1.webp"
                            alt="controlling-pipe" class="w-100">
                    </div>
                </div>
            </div>


            <div class="content justify-content-center align-items-center p-0 d-md-none biomassa" id="biomassa">
                <div class="row">
                    <div class="mobile-padding-1">
                        <span class="green">Clean Energy Product</span>
                        <h1 class="mb-5">
                            Biomass <br>
                            As A Clean Energy
                        </h1>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="<?= get_template_directory_uri() . '/assets/images/biomassa-bg-mobile.webp' ?>"
                            alt="sawdust" class="w-100">
                    </div>
                </div>
            </div>

            <div class="content justify-content-center align-items-center p-0 d-md-none lng" id="lng">
                <div class="row">
                    <div class="mobile-padding-1">
                        <span class="green">Clean Energy Product</span>
                        <h1 class="mb-5">
                            LNG <br>
                            membawa inovasi
                        </h1>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="<?= get_template_directory_uri() . '/assets/images/lng-1.webp' ?>" alt="lng"
                            class="w-100">
                    </div>
                </div>
            </div>

            <div class="scrollable-section mobile-padding-1 mt-5 mt-md-0">
                <div class="navigation">
                    <div class="navigation-item active" data-atr="cng">
                        CNG
                    </div>
                    <div class="navigation-item" data-atr="biomassa">
                        Biomass
                    </div>
                    <div class="navigation-item" data-atr='lng'>
                        LNG
                    </div>
                </div>
                <div class="content active justify-content-center align-items-center cng" id="cng">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <span class="green d-none d-md-block">Clean Energy Product</span>
                            <h1 class="d-none d-md-block">
                                CNG <br>
                                for greener <br>
                                Indonesia
                            </h1>
                            <p>
                                We strive to build a sustainable future by doing the <br>
                                right thing, namely protecting nature by using clean <br>
                                energy as environmentally friendly fuel.
                            </p>
                            <div class="mt-auto">
                                <a href="/en/product" class="learn-more-btn">
                                    Learn More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="4" viewBox="0 0 21 4"
                                        fill="none">
                                        <path d="M0 1.84375H15.2991" stroke="black" stroke-width="0.25"
                                            stroke-miterlimit="10" />
                                        <path d="M14.7061 3.66538V0L20.0106 1.84422L14.7061 3.66538Z" fill="black" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <img src="http://reethau.com/wp-content/uploads/2023/12/home-carousel-1.webp"
                                alt="controlling-pipe" class="w-100 d-none d-md-block">

                        </div>
                    </div>
                </div>
                <div class="content justify-content-center align-items-center biomassa" id="biomassa">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <span class="green d-none d-md-block">Clean Energy Product</span>
                            <h1 class="d-none d-md-block">
                                Biomass as <br>
                                Clean Energy
                            </h1>
                            <p>
                                We process biomass in the form of wood <br class="d-none d-md-block">
                                obtained from trusted and professional <br class="d-none d-md-block">
                                sources to meet customer needs.
                            </p>
                            <div class="mt-auto">
                                <a href="/en/product" class="learn-more-btn">
                                    Learn More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="4" viewBox="0 0 21 4"
                                        fill="none">
                                        <path d="M0 1.84375H15.2991" stroke="black" stroke-width="0.25"
                                            stroke-miterlimit="10" />
                                        <path d="M14.7061 3.66538V0L20.0106 1.84422L14.7061 3.66538Z" fill="black" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-none d-md-block">
                            <img src="<?= get_template_directory_uri() . '/assets/images/product-biomassa-1.webp' ?>"
                                alt="sawdust" class="w-100">

                        </div>
                    </div>
                </div>
                <div class="content justify-content-center align-items-center lng" id="lng">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <span class="green d-none d-md-block">Clean Energy Product</span>
                            <h1>
                                LNG brings<br>
                                innovation
                            </h1>
                            <p>
                                The increasing use of liquefied natural gas leads us to contribute to
                                a cleaner environment by offering LNG as
                                an innovative fuel choice.
                            </p>
                            <div class="mt-auto">
                                <a href="/en/product" class="learn-more-btn">
                                    Learn More
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="4" viewBox="0 0 21 4"
                                        fill="none">
                                        <path d="M0 1.84375H15.2991" stroke="black" stroke-width="0.25"
                                            stroke-miterlimit="10" />
                                        <path d="M14.7061 3.66538V0L20.0106 1.84422L14.7061 3.66538Z" fill="black" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-none d-md-block">
                            <img src="<?= get_template_directory_uri() . '/assets/images/lng-1.webp' ?>" alt="lng"
                                class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-section-4 black-nav">
        <div class="container-fluid h-100 my-5 d-flex flex-column align-items-md-end">
            <div class="row g-3 mansonry-content">
                <div class="col-6 col-md-3">
                    <a href="http://reethau.com/wp-content/uploads/2023/12/home-section-4-1.webp" alt="engine"
                        data-lightbox="image-carousel-1">
                        <img src="http://reethau.com/wp-content/uploads/2023/12/home-section-4-1.webp" alt="engine">
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="http://reethau.com/wp-content/uploads/2023/12/home-section-4-2.webp"
                        alt="controlling-station" data-lightbox="image-carousel-1">
                        <img src="http://reethau.com/wp-content/uploads/2023/12/home-section-4-2.webp"
                            alt="controlling-station">
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="row g-3">
                                <div class="col-12">
                                    <a href="http://reethau.com/wp-content/uploads/2023/12/home-section-4-3.webp"
                                        alt="plant" data-lightbox="image-carousel-1">
                                        <img src="http://reethau.com/wp-content/uploads/2023/12/home-section-4-3.webp"
                                            alt="plant">
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="http://reethau.com/wp-content/uploads/2023/12/home-section-4-4.webp"
                                        alt="workshop" data-lightbox="image-carousel-1">
                                        <img src="http://reethau.com/wp-content/uploads/2023/12/home-section-4-4.webp"
                                            alt="workshop">
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="http://reethau.com/wp-content/uploads/2023/12/home-section-4-5.webp"
                                        alt="mother-station" data-lightbox="image-carousel-1">
                                        <img src="http://reethau.com/wp-content/uploads/2023/12/home-section-4-5.webp"
                                            alt="mother-station">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row h-100">
                                <div class="col-12 h-50 pb-2">
                                    <a href="http://reethau.com/wp-content/uploads/2023/12/home-section-4-6.webp"
                                        alt="lng-station" data-lightbox="image-carousel-1">
                                        <img src="http://reethau.com/wp-content/uploads/2023/12/home-section-4-6.webp"
                                            alt="lng-station">
                                    </a>
                                </div>
                                <div class="col-12 h-50 pt-2">
                                    <a href="http://reethau.com/wp-content/uploads/2023/12/home-section-4-7.webp"
                                        alt="woodchip" data-lightbox="image-carousel-1">
                                        <img src="http://reethau.com/wp-content/uploads/2023/12/home-section-4-7.webp"
                                            alt="woodchip">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 d-flex align-items-center">
                click to enlarge
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none"
                        class="ms-2">
                        <path
                            d="M19.8445 22.8183C19.303 22.728 18.9194 22.3896 18.5358 22.0061C16.6632 20.1334 14.7679 18.2607 12.8727 16.3655C12.7373 16.2301 12.647 16.2075 12.4665 16.2977C10.9323 17.1551 9.26268 17.4936 7.52538 17.268C5.08865 16.9747 3.12568 15.824 1.70425 13.8159C0.46332 12.0786 -0.0105225 10.1384 0.260226 8.04009C0.508412 5.94179 1.45613 4.20433 3.03549 2.80546C4.2313 1.7676 5.60764 1.09078 7.16444 0.887718C10.3683 0.436471 13.0306 1.49696 15.0387 4.04651C16.2345 5.55818 16.776 7.31791 16.7309 9.25827C16.7083 10.8828 16.2119 12.3721 15.3094 13.7259C15.2869 13.771 15.2643 13.816 15.1741 13.9063C15.2417 13.9514 15.3319 13.9964 15.3996 14.0415C17.34 15.9593 19.2578 17.8772 21.1982 19.795C21.8299 20.4267 21.9653 21.2389 21.5141 21.9835C21.2885 22.367 20.95 22.6154 20.5439 22.7282C20.4537 22.7508 20.3859 22.7732 20.2956 22.8183C20.1602 22.8183 20.0024 22.8183 19.8445 22.8183ZM8.49555 3.7306C5.56244 3.7306 3.17084 6.09962 3.14828 9.05529C3.12571 11.9884 5.53985 14.4026 8.47296 14.4251C11.4061 14.4251 13.7977 12.0561 13.8202 9.10046C13.8428 6.14478 11.4512 3.75316 8.49555 3.7306Z"
                            fill="#54B67B" />
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="home-section-5 section-auto d-flex flex-column justify-content-center position-relative white-nav">
        <div class="spacer d-md-none"></div>
        <div class="container-fluid mt-auto mt-md-0">
            <div class="row">
                <h1 class="text-center  z-index-3">
                    <span class="green-lt">Innovation through </span> Technology, <br>
                    <span class="green-lt">leading through </span> Sustainability.
                </h1>
            </div>
        </div>

        <img src="<?= get_template_directory_uri() . '/assets/images/home-bg-section-5-mobile.webp' ?>"
            alt="controlling-engine" class="w-100 mt-auto d-md-none">
        <div class="wrapper w-100 bottom-0 position-absolute d-none d-md-block">

            <div class="home-section-5-bg "></div>
            <!-- <svg class="vector-1" xmlns="http://www.w3.org/2000/svg" width="317" height="450" viewBox="0 0 317 450"
                fill="none">
                <path d="M0 213.098L317 0V236.742L0 450V213.098Z" fill="#54B67B" />
            </svg>
            <svg class="vector-2" width="200" height="400" xmlns="http://www.w3.org/2000/svg">
                <polygon points="0,0 200,0 0,400" fill="#11302d" />
            </svg> -->
        </div>
    </section>


</div>

<?= get_footer(); ?>