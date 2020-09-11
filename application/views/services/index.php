<main id="main">

    <br><br><br><br><br>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h1> <span>Our Services</span></h1>
                <p>Menjaga agar aplikasi anda berjalan baik dengan unit dukungan kami</p>
                <p>Dengan SLA kami dan meja bantuan yang dapat dilacak, anda tidak perlu khawatir dengan keluhan pengguna, karena kami akan menangani dukungan perangkat lunak, termasuk pemeliharaan preventif</p>
            </div>

            <div class="row">
                <?php foreach ($services as $data) : ?>
                    <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class=" icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Sadar Dengan Tujuan Anda</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>
                <?php endforeach ?>


            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services  section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3><span>Predevelopment</span></h3>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title"><a href="">Step One</a></h4>
                        <p class="description">Fase dimana kami memberikan pengarahan kepada pengembang.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">Step Two</a></h4>
                        <p class="description">Siapkan alat dan lingkungan kerja</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">Step Three</a></h4>
                        <p class="description">Jadwalkan rencana pengembangan dan lengkapi cerita pengguna dengan mockup</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Featured Services Section -->

</main><!-- End #main -->