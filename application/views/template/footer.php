<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <a href="index.html" class="logo mr-auto"><img src="<?= base_url() ?>assets/img/profil/logonew.png" alt=""></a>
                </div>
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Kintek<span>.</span></h3>
                    <p>
                        <?= $contact[0]->alamat ?>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Contact<span>.</span></h3>
                    <p>
                        <strong>Phone:</strong> <?= $contact[0]->telp ?><br>
                        <strong>Email:</strong> <?= $contact[0]->email ?><br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h3>Our Services</h3>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>

                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>Kintek</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://kintekindo.net/">Kintek</a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>/vendor/bizland/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>/vendor/bizland/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>/vendor/bizland/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="<?= base_url() ?>/vendor/bizland/assets/vendor/php-email-form/validate.js"></script>
<script src="<?= base_url() ?>/vendor/bizland/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="<?= base_url() ?>/vendor/bizland/assets/vendor/counterup/counterup.min.js"></script>
<script src="<?= base_url() ?>/vendor/bizland/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>/vendor/bizland/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>/vendor/bizland/assets/vendor/venobox/venobox.min.js"></script>
<script src="<?= base_url() ?>/vendor/bizland/assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>/vendor/bizland/assets/js/main.js"></script>

</body>

</html>