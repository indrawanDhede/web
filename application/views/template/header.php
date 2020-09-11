<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kintek | <?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>/vendor/bizland/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>/vendor/bizland/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>/vendor/bizland/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/vendor/bizland/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/vendor/bizland/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/vendor/bizland/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/vendor/bizland/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url() ?>/vendor/bizland/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>/vendor/bizland/assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                <i class="icofont-envelope"></i> <a href="info@kintek.net">info@kintek.net</a>
                <i class="icofont-phone"></i> +62 811 8333 433
            </div>
        </div>
    </div>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <!-- <h1 class="logo mr-auto"><a href="index.html">Kintek<span>.</span></a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="<?= base_url('web') ?>" class="logo mr-auto"><img src="<?= base_url() ?>assets/img/profil/30.png" alt=""></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <?php if ($title == 'Home') : ?>
                        <li class="active"><a href="<?= base_url('web') ?>">Home</a></li>
                    <?php else : ?>
                        <li><a href="<?= base_url('web') ?>">Home</a></li>
                    <?php endif ?>
                    <?php if ($title == 'About') : ?>
                        <li class="active"><a href="<?= base_url('web/about') ?>">About</a></li>
                    <?php else : ?>
                        <li><a href="<?= base_url('web/about') ?>">About</a></li>
                    <?php endif ?>
                    <?php if ($title == 'Services') : ?>
                        <li class="active"><a href="<?= base_url('web/services') ?>">Services</a></li>
                    <?php else : ?>
                        <li><a href="<?= base_url('web/services') ?>">Services</a></li>
                    <?php endif ?>
                    <?php if ($title == 'Portfolio') : ?>
                        <li class="active"><a href="<?= base_url('web/portofolio') ?>">Portfolio</a></li>
                    <?php else : ?>
                        <li><a href="<?= base_url('web/portofolio') ?>">Portfolio</a></li>
                    <?php endif ?>
                    <?php if ($title == 'Contact') : ?>
                        <li class="active"><a href="<?= base_url('web/contact') ?>">Contact</a></li>
                    <?php else : ?>
                        <li><a href="<?= base_url('web/contact') ?>">Contact</a></li>
                    <?php endif ?>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->