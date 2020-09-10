<!-- Hero Section Begin -->
<br><br><br><br><br><br><br>
<!-- Hero Section End -->
<br>

<!-- About Video Section Begin -->
<section class="about-video">
    <div class="container">
        <div class="row">

            <!-- php foreach ($value as $value ) : ?>-->

            <div class="col-lg-15 p-0">
                <div class="about__video__text">
                    <div class="section-title">
                        <span></span>
                        <h2 align="center">Visi</h2>
                    </div>
                    <p><?= $visi[0]->visi; ?></p>
                    <div align="right">
                        <a href="#" class="primary-btn second-bg">Learn more</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-15 p-0">
                <div class="about__video__text">
                    <div class="section-title">
                        <span></span>
                        <h2 align="center">Misi</h2>
                    </div>
                    <p><?= $visi[0]->misi; ?></p>
                    <div align="right">
                        <a href="#" class="primary-btn second-bg">Learn more</a>
                    </div>
                </div>
            </div>
            <!-- php endoreach -->
        </div>
    </div>
</section>

<footer class="footer ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-6">
                <div class="footer__widget right-column">
                    <h5>COMPANY</h5>
                    <ul>
                        <li><a href="<?= base_url('about/index') ?>">Home</a></li>
                        <li><a href="<?= base_url('about/index') ?>">About Us</a></li>
                        <li><a href="<?= base_url('about/index') ?>">Portofolio</a></li>
                        <li><a href="<?= base_url('about/index') ?>">Contact</a></li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="footer__widget right-column" style="color: blanchedalmond;">
                    <h5>ADDRESS</h5>
                    <p style="color: blanchedalmond;">Address : 15 jln.buaran_kodiklat, New York, NY 12032, United
                        States of
                        America</p>
                    <ul>
                        <li>Phone : +0 (123) 456789</li>
                        <li>Email : kintekkreasi@gmail.com</li>
                        <li>Fax : +8 (123) 456 789</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | </i> by <a href="https://kintekindo.net" target="_blank">Kintek</a></p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Feature Section End -->


<!-- About Video Section End -->

<!-- Application Form Section Begin -->
<!-- <section class="application-form spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Giving Best Options For You</span>
                        <h2>Application Form</h2>
                    </div>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input type="text" placeholder="Your name">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input type="text" placeholder="Your Email">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input type="text" placeholder="Your Phone">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <input type="text" class="datepicker_pop" placeholder="Date & time">
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <select>
                            <option value="">Courses type</option>
                            <option value="">Safe Driving Courses</option>
                            <option value="">Motorhome Drivers</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <select>
                            <option value="">Car type</option>
                            <option value="">Hatchback</option>
                            <option value="">Sedan</option>
                        </select>
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="site-btn">SEND INQUIRY</button>
                    </div>
                </div>
            </form>
        </div>
    </section> -->
<!-- Application Form Section End -->

<!-- Pricing Section Begin -->
<!-- <section class="pricing spad set-bg" data-setbg="<?= base_url() ?>/assets/img/pricing-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Get Special Offer</span>
                        <h2>Our Pricing</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <div class="pricing__item__title">
                            <span>20% off</span>
                            <h2>$ 199</h2>
                            <h5>Personal Driving</h5>
                        </div>
                        <ul>
                            <li>Full course theory</li>
                            <li>Full driving course</li>
                            <li>Training in first aid</li>
                            <li>Practical sessions</li>
                            <li>Psychological support</li>
                        </ul>
                        <a href="#" class="primary-btn second-bg">get Started</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <div class="pricing__item__title">
                            <span>20% off</span>
                            <h2>$ 379</h2>
                            <h5>Power Booster</h5>
                        </div>
                        <ul>
                            <li>Full course theory</li>
                            <li>Full driving course</li>
                            <li>Training in first aid</li>
                            <li>Practical sessions</li>
                            <li>Psychological support</li>
                        </ul>
                        <a href="#" class="primary-btn second-bg">get Started</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing__item">
                        <div class="pricing__item__title">
                            <span>20% off</span>
                            <h2>$ 259</h2>
                            <h5>Freight Driving</h5>
                        </div>
                        <ul>
                            <li>Full course theory</li>
                            <li>Full driving course</li>
                            <li>Training in first aid</li>
                            <li>Practical sessions</li>
                            <li>Psychological support</li>
                        </ul>
                        <a href="#" class="primary-btn second-bg">get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- Pricing Section End -->

<!-- Team Section Begin -->
<!-- <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>Our Great Team</span>
                        <h2>Our Instructors</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="team__all">
                        <a href="#" class="primary-btn second-bg">View all</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="<?= base_url() ?>/assets/img/team/team-1.png" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>DAVID WARNER</h5>
                            <span>Instructor</span>
                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="<?= base_url() ?>/assets/img/team/team-2.png" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>DAVID WARNER</h5>
                            <span>Instructor</span>
                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="<?= base_url() ?>/assets/img/team/team-3.png" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>DAVID WARNER</h5>
                            <span>Instructor</span>
                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="<?= base_url() ?>/assets/img/team/team-4.png" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>DAVID WARNER</h5>
                            <span>Instructor</span>
                            <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- Team Section End -->