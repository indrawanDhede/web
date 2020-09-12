<main id="main">
    <br /><br /><br /><br />

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1> <span>Our Portfolio</span></h1>
                <p>Beberapa perusahaan yang telah menggunakan jasa kami. Menjaga agar aplikasi anda berjalan baik dengan unit dukungan kami.
                </p>
            </div>

            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <?php foreach ($portofolio as $data) : ?>
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon-box">
                                    <div id="portfolio-flters">
                                        <img src="<?= base_url() ?>/assets/img/portofolio/<?= $data->foto ?>" id="portfolio-flters" alt="">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>


                    </div>

                </div>
            </section><!-- End Services Section -->

        </div>
    </section>
    <!-- End Portfolio Section -->