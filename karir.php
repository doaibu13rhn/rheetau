<?php /* Template Name: Karir */ ?>
<?= get_header(); ?>

<div class="career">
    <section class="career-section-1 section-auto d-flex flex-column align-items-end black-nav">
        <div class="spacer"></div>
        <div class="container-fluid h-100">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color:white">
                        <span class="green">Bergabunglah</span> <br>
                        Bersama Kami
                    </h1>
                    <p style="margin-top:50px;color:white">
                        Untuk membangun Indonesia yang lebih hijau, <br>
                        Reethau sebagai pelopor energi bersih perlu <br>
                        didukung dengan kemampuan individu yang terbaik.
                    </p>
                    <div class=" d-flex align-items-center mt-5">
                        <p class="me-5 text-white">Email Kami di </p>
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