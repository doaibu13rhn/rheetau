<?php /* Template Name: Career */ ?>
<?= get_header(); ?>

<div class="career">
    <section class="career-section-1 section-auto d-flex flex-column align-items-end black-nav">
        <div class="spacer"></div>
        <div class="container-fluid h-100">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color:white">
                        <span class="green">Come and Join</span> <br>
                        With Us
                    </h1>
                    <p style="margin-top:50px;color:white">
                        To build a greener Indonesia, Reethau as a <br>
                        clean energy pioneer needs to be supported <br>
                        by the best individual abilities.
                    </p>
                    <div class=" d-flex align-items-center mt-5">
                        <p class="me-5 text-white">Email us at </p>
                        <p class="rounded-pill py-1 px-3 text-center" style=" background: #78AD5A;
">people@reethau.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="<?= get_template_directory_uri() . '/assets/images/career-bg.webp' ?>" alt="career" class="w-100"
                style="margin-top:10px">
        </div>
    </section>
</div>

<?= get_footer(); ?>