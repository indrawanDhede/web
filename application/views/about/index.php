<main id="main">
    <br><br><br><br><br>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h1><span>About Us</span></h1>
                <!-- <h3>Find Out More <span>About Us</span></h3> -->
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                    <img src="<?= base_url() ?>/vendor/bizland/assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <h3>Who We Are?</h3>
                    <p class="font-italic">
                        PT. Kreatif Integlegensi Teknologi adalah perusahaan yang bergerak di bidang penyedia solusi teknologi informasi yang berfokus pada pnegembangan solusi intelegensi bisnis.
                    </p>
                    <ul>
                        <li>
                            <i class="bx bx-store-alt"></i>
                            <div>
                                <h5>Kami membantu perusahaan anda untuk melakukan implementasi Business Intellegence melalui pendekatan data-driven.</h5>
                                <!-- <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p> -->
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-images"></i>
                            <div>
                                <h5>Kami melakukan inovasi dan kolaborasi antar disiplin ilmu untuk menemukan knowlegde yang tersembunyi pada data.</h5>
                                <!-- <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p> -->
                            </div>
                        </li>
                    </ul>
                    <p>
                        Knowlegde yang tersembunyi ini dapat membantu perusahaan anda untuk mengetahui potensi-potensi yang dapat meningkatkan kinerja pada kegiatan operasional bisnis perusahaan, sehingga proses pengambilan keputusan menjadi lebih cepat dan efisien.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3>Our Hardworking <span>Team</span></h3>
                <p>Mengedepankan profesional kemampuan individu, dan tim dalam menghasilkan produk-produk unggulan.</p>
            </div>

            <div class="row">
                <?php foreach ($about as $data) : ?>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="<?= base_url() ?>/assets/img/team/<?= $data->foto ?>" class="img-fluid" alt="">
                            </div>
                            <div class="member-info">
                                <h4><?= $data->nama ?></h4>
                                <span><?= $data->jabatan ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- End Team Section -->

</main><!-- End #main -->