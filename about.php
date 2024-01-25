<?php /* Template Name: About */ ?>
<?= get_header(); ?>

<div class="about">

    <section class="about-section-1 d-flex align-items-center white-nav">
        <div class="container-fluid h-100 d-flex flex-column align-items-center justify-content-center">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-md-center default">Reethau Offers <b>Clean Energy</b><br>
                        for <b>All Needs</b>
                    </h1>
                </div>
            </div>
            <div class="content-section mt-md-0 mt-5">
                <span>Reethau operates in the natural gas industry and other environmentally friendly clean energy
                    products. We are committed to providing comprehensive solutions for every customer.</span>
            </div>

        </div>
    </section>

    <section class="about-section-2 d-flex align-items-center black-nav">
        <div class="container-fluid h-100">
            <div class="row d-md-none">
                <div class="col-12">
                    <span class="green">Our Vision</span>
                </div>
                <div class="col-12 mb-5">
                    <h1 class="">
                        Creating <b>safe</b> and <b>sustainable energy</b> <br>
                        for all.
                    </h1>
                </div>
                <div class="col-12 mb-5">
                    <img src="<?= get_template_directory_uri() . '/assets/images/about-section-2.webp' ?>"
                        alt="controlling-engine" class="w-100">

                </div>
                <div class="col-12 mb-5">
                    <p class="mt-auto">
                        We aim to be the leading and largest gas company in Indonesia. We strive and are dedicated to
                        being the customer's first choice providing exceptional service and maintaining a significant
                        market presence. With a relentless commitment to quality, innovation, excellence, growth and
                        customer satisfaction.
                    </p>
                </div>
            </div>
            <div class="row d-none d-md-flex">
                <div class="col-6 d-flex flex-column" style="padding-left:40px">
                    <span class="green">Our Vision</span>
                    <p class="mt-auto">
                        We aim to be the leading and largest gas company in Indonesia. We strive and are dedicated to
                        being the customer's first choice providing exceptional service and maintaining a significant
                        market presence. With a relentless commitment to quality, innovation, excellence, growth and
                        customer satisfaction.
                    </p>
                    <h1>
                        Creating <b>safe</b> and <b>sustainable energy</b> <br>
                        for all.
                    </h1>
                </div>
                <div class="col-6">
                    <div>
                        <img src="<?= get_template_directory_uri() . '/assets/images/about-section-2.webp' ?>"
                            alt="sawdust" class="w-100">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about-section-3 position-relative">
        <div class="spacer d-none d-md-block"></div>
        <div class="container-fluid h-100">
            <div class="row section-row z-index-3">
                <div class="col-12 col-md-8 d-flex flex-column">
                    <span class="green mb-4">Our Mission</span>
                    <h1>
                        <b>Empowering</b> a <br>
                        brighter tomorrow <br>
                        with <b>clean energy</b>
                    </h1>
                </div>
                <div class="col-md-4 d-md-flex d-none">
                    <p class="mt-auto">
                        We are dedicated to focusing on
                        reducing carbon emissions in Indonesia
                        by providing clean energy as a fuel
                        solution that will benefit the nation,
                        people and the environment.
                        We continue to strive to provide the
                        best for stakeholders by continuously
                        increasing existing potentials.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 d-md-none my-5">
            <img src="<?= get_template_directory_uri() . '/assets/images/home-bg-section-5-mobile.webp' ?>"
                alt="controlling-engine" class="w-100 mt-auto d-md-none">
        </div>
        <div class="container-fluid h-100">
            <div class="row section-row z-index-3">
                <div class="col-md-2">
                </div>
                <div class="col-md-4 d-flex d-md-none">
                    <p class="mt-auto">
                        We are dedicated to focusing on
                        reducing carbon emissions in Indonesia
                        by providing clean energy as a fuel
                        solution that will benefit the nation,
                        people and the environment.
                        We continue to strive to provide the
                        best for stakeholders by continuously
                        increasing existing potentials.
                    </p>

                </div>
            </div>
            <div class="wrapper w-100 bottom-0 position-absolute d-none d-md-block">
                <div class="about-section-3-bg"></div>
            </div>
        </div>

    </section>

    <section class="about-section-3 d-flex align-items-center position-relative">
        <div class="container-fluid h-100">
            <div class="row g-5">
                <div class="col-md-4 order-2 order-md-1">
                    <img src="<?= get_template_directory_uri() . '/assets/images/about-section-3-1.webp' ?>"
                        alt="temperature-check" class="img-1">
                </div>
                <div class="col-md-4 d-flex flex-column order-5 order-md-2">
                    <p>
                        Aware of the importance of environmentally
                        friendly energy sources, Reethau is here
                        to provide a solution by becoming an
                        environmentally friendly energy supplier,
                        especially for industrial purposes.

                    </p>
                    <img src="<?= get_template_directory_uri() . '/assets/images/about-section-3-2.webp' ?>"
                        alt="sawdust" class="img-2 d-none d-md-block">

                </div>
                <div class="col-md-4 d-flex order-3 order-md-3 d-md-none">
                    <img src="<?= get_template_directory_uri() . '/assets/images/about-section-3-2.webp' ?>"
                        alt="sawdust" class="img-2">
                </div>
                <div class="col-md-4 d-flex justify-content-end order-4">
                    <img src="<?= get_template_directory_uri() . '/assets/images/about-section-3-3.webp' ?>"
                        alt="maintenance" class="img-3">
                </div>
                <div class="col-md-12 order-1 order-md-5">
                    <h1>
                        <b>Excellent energy</b>, driving a <br>
                        <b>better tomorrow</b>
                    </h1>
                </div>
            </div>
        </div>
    </section>

</div>

<?= get_footer(); ?>