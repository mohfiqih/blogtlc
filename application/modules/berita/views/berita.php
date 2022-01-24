<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blog Tegal Learning Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' type="text/css"
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/beranda.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/footer.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/img/logo.svg'); ?>" rel="icon" />

    <!-- Bootstr<ap CSS File -->
    <link href="<?php echo base_url('assets/depan/lib/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url('assets/depan/lib/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet"
        type="text/css">
    <link href="<?php echo base_url('assets/depan/lib/animate/animate.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/depan/lib/ionicons/css/ionicons.min.css'); ?>" rel="stylesheet"
        type="text/css">
    <link href="<?php echo base_url('assets/depan/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet"
        type="text/css">
    <link href="<?php echo base_url('assets/depan/lib/lightbox/css/lightbox.min.css'); ?>" rel="stylesheet"
        type="text/css">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url('assets/depan/css/style.css'); ?>" rel="stylesheet" type="text/css">
</head>

<style>
body {
    background-color: white;
}
</style>

<body>
    <!-- Header-->
    <div class="berita">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <ul class="container">
                <img src="<?php echo base_url('assets/img/logo.svg'); ?>" width="100" height="70" style="float: left;">
                <li class="navbar-nav bg-light ms-auto" style="margin-top: 25px;">
                    <h3>Portal Berita</h3>
                </li>

                <li class="navbar-nav bg-light ms-auto" style="margin-top: 25px;">
                    <h3>
                        <a class="nav-link" href="<?php echo base_url('#utama'); ?>"
                            onclick="history.back();">Beranda</a>
                    </h3>
                </li>
            </ul>
        </nav>
        <!-- Header-->

        <section id="intro">
            <div class="intro-container">
                <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active"
                            style="background-image: url(&quot;https://lh3.googleusercontent.com/-XZokqiRryCE/YUCYwekPNgI/AAAAAAAADpc/bSbeIjwL8SUZka_O6TDiGGHnIj6khkDrwCLcBGAsYHQ/2112629.jpg&quot;);">

                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>Portal Berita TLC</h2>
                                    <h3>
                                        <p>Berita Seputar Tegal Learning Center </p>
                                    </h3>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>


        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>NEWS</h3>
                    <p>BERITA SEPUTAR TEGAL LEARNING CENTER
                    </p>
                </header>

                <div class="row about-cols">

                    <?php
                    $count = 0;
                    foreach ($queryAllBerita as $row) {
                    $count = $count + 1;
				?>

                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="<?php echo base_url(); ?>assets/foto_berita/<?php echo $row->foto_berita; ?>"
                                    alt="" class="img-fluid">
                                <header class="section-header"><br /><br />
                                    <h3><?php echo $row->judul_berita ?></h3>
                                </header>
                            </div>
                            <h2 class="title">
                                <center>
                                    <h4>Kategori Berita</h4>
                                </center>
                                <?php echo $row->kategori ?>
                                </a></h2><br /><br />
                            <p style="text-align: justify;">
                                <?php echo $row->isi_berita ?>
                            </p>
                            <p>
                                <?php echo $row->tgl_berita ?>
                            </p>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </section><!-- #about -->

        <!-- Footer -->
        <div class="footer-dark" id="content5" style="position: static;"><br />
            <footer>
                <div class="container">
                    <div class="row justify-content-center" style="padding-left: 20px;padding-right: 20px;">
                        <div class="col-sm-4 col-md-2 item">
                            <h3>Sekilas TLC</h3>
                            <ul>
                                <li>
                                    <h5 style="text-align: justify;">Kami adalah organisasi non-profit berbasis
                                        relawan
                                        yang
                                        bergerak di bidang pendidikan</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-4 col-md-3 item">
                            <h3>Donasi TLC</h3>
                            <ul>
                                <li>
                                    <h5 style="text-align: justify;">Bantuk kami mewujudkan mimpi Donasi dapat
                                        disalurkan
                                        melalui
                                        nomor rekening MANDIRI 1390021159623 (a.n Anisa Novita Sari)
                                    </h5>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-4 col-md-4 item">
                            <h3>Hubungi Kami</h3>
                            <ul>
                                <li>Instagram: <a
                                        href="https://www.instagram.com/tegallearningcenter/">@tegallearningcenter
                                    </a></li>
                                <li>E-mail : <a
                                        href="mailto:tegallearningcenter@gmail.com">tegallearningcenter@gmail.com</a>
                                </li>
                                <li>Website : <a
                                        href="https://tegallearningcenter.id/">https://tegallearningcenter.id/</a>
                                </li>
                                <li>Telpon : +62 895 0842 1511</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 item social"><img src="<?php echo base_url('assets/img/logotlc.png'); ?>"
                                href="#content1" width="50" height="40" style="margin-left: 10%;"><a
                                href="https://www.youtube.com/c/TegalLearningCenter/"><i
                                    class="icon ion-social-youtube"></i></a><a
                                href="https://www.instagram.com/tegallearningcenter/"><i
                                    class="icon ion-social-instagram"></i></a>
                            <p class="copyright">Copyright © 2021, <a href="<?php echo base_url('#utama') ?>"> Tegal
                                    Learning
                                    Center</a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer -->

            <!-- JS -->
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
            <script type="text/javascript" src="<?php echo base_url('assets/js/script.js') ?>">
            </script>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
            </script>
            <script type="text/javascript" src="<?php echo base_url('assets/js/scroll.js') ?>"></script>
</body>

</html>