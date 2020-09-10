<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Map Section Begin -->

<!-- Map Section End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="contact__address">
                    <h4>Contact info</h4>
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <p><span><?= $contact[0]->email ?></span><span><?= $contact[0]->telp ?></span></p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <p><?= $contact[0]->alamat ?></p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <p><span><?= $contact[0]->jam_kerja ?></span><span>Sunday: Closed</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="contact__form">
                    <h4>Leave a message</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email">
                            </div>
                        </div>
                        <textarea placeholder="Your message"></textarea>
                        <button type="submit" class="site-btn">Find an agent</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<footer class="footer ">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-6">
                <div class="footer__widget right-column">
                    <h5>COMPANY</h5>
                    <ul>
                        <li><a href="<?= base_url('home/index') ?>">Home</a></li>
                        <li><a href="<?= base_url('about/index') ?>">About Us</a></li>
                        <li><a href="<?= base_url('portofolio/index') ?>">Portofolio</a></li>
                        <li><a href="<?= base_url('contact/index') ?>">Contact</a></li>

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