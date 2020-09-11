<main id="main">
    <br /><br /><br /><br />

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h1> <span>Our Portfolio</span></h1>
                <p>
                    Ut possimus qui ut temporibus culpa velit eveniet modi omnis est
                    adipisci expedita at voluptas atque vitae autem.
                </p>
            </div>

            <section id="services" class="services">
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <?php foreach ($portofolio as $data) : ?>
                            <div class="col-md-6 mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box data-aos=" fade-up" data-aos-delay="100"">
                                <div class=" porto-img">
                                    <img src="<?= base_url() ?>/assets/img/portofolio/<?= $data->foto ?>" class="img-fluid" alt="">
                                </div>
                                <h4><a href=""><?= $data->title ?></a></h4>
                                <p><?= $data->detail ?></p>
                            </div>
                    </div>
                <?php endforeach ?>


                </div>

        </div>
    </section><!-- End Services Section -->

    </div>
    </section>
    <!-- End Portfolio Section -->