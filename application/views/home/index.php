<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>Welcome to <span>Kintek</spa>
        </h1>
        <h2>PT. Kreatif Intelegensi Teknologi</h2>
        <div class="d-flex">
            <a href="<?= base_url('web/about') ?>" class="btn-get-started scrollto">Get Started</a>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-md-6 mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"></i></div>
                        <h4 class="title"><a href="">Our Vision</a></h4>
                        <?php foreach ($visi as $data) : ?>
                            <p class="description"> <?= $data->visi ?>
                            </p>
                            <br>
                        <?php endforeach ?>



                    </div>
                </div>

                <div class="col-md-6 mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"></i></div>
                        <h4 class="title"><a href="">Our Mission</a></h4>
                        <?php foreach ($visi as $data) : ?>
                            <p class="description"> <?= $data->misi ?>
                            </p>
                            <br>
                        <?php endforeach; ?>

                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Featured Services Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <h2>www.kintekindo.net</h2>
                    <h4>Layanan, Teknologi dan Informasi</h4>

                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        CUSTOM SOFTWARE DEVELOPMENT - ENTERPRISE TECHNOLOGY - PROGRAMMER OUTSORCING - PERSONALIZED BUSINESS SOFTWARE - SOFTWARE AS A SERVICE - CLOUD & MOBILITY
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>


            </div>

        </div>
    </section><!-- End Testimonials Section -->


</main>