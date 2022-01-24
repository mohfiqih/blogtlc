<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blog Tegal Learning Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/beranda.css">
    <link href="assets/img/logo.svg" rel="icon" />
</head>

<style>
body {
    background-color: white;
}
</style>

<body>

    <!-- Header -->
    <header class="header-area overlay" id="content1"><br />
        <!--<img src="assets/img/logo.svg" width="70" height="50" style="margin-left: 15%;margin-top: 10px;">-->
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                    <span class="menu-icon-bar"></span>
                </button>

                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li><a href="https://www.tegallearningcenter.id/" class="nav-item nav-link">Beranda</a>
                        </li>
                        <li class="dropdown open">
                            <a href="#" class="nav-item nav-link active" data-toggle="dropdown"
                                aria-expanded="true">Tentang
                                TLC</a>
                            <div class="dropdown-menu">
                                <a href="#content4" class="dropdown-item">Sejarah</a>
                                <a href="#content6" class="dropdown-item">Visi dan Misi</a>
                                <a href="#content5" class="dropdown-item">More Info</a>
                            </div>
                        </li>
                        <li><a href="<?php echo base_url('Berita/portal_berita') ?>" class="nav-item nav-link">Berita
                                TLC</a></li>
                        <li><a href="<?php echo base_url('Cerita/portal_cerita') ?>" class="nav-item nav-link">Cerita
                                TLC</a>
                        </li>
                        <li><a href="<?php echo base_url('Relawan/portal_relawan') ?>" class="nav-item nav-link">Relawan
                                TLC</a>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="banner">
            <div class="container" id="content2">

                <h1>Tegal Learning Center</h1>
                <p>Tegal Learning Center berpedoman pada tagline "Merdeka Belajar"</p>
                <a href="#content3" class="button button-primary">Learn More</a>
            </div>
        </div>
    </header>
    <!--- Header --->


    <!--- Beranda --->
    <section id="content3" class="content active">
        <div class="container">
            <div style="text-align: center;">
                <b>
                    <h1>Beranda Tegal Learning Center</h1><br />
                </b>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-deck" style="padding-left: 20px;padding-right: 20px;">

                            <?php
							$count = 0;
							foreach ($queryAllUtama as $row) {
								$count = $count + 1;
							?>

                            <div class="card" style="text-align: center;">
                                <img src="<?php echo base_url(); ?>assets/foto/<?php echo $row->foto; ?>"
                                    class="card-img-top" alt="gambar" height="350px">
                                <div class="card-body">
                                    <b>
                                        <h4 class="card-title bold"><?php echo $row->judul ?></h4><br>
                                    </b>
                                    <h5 class="card-text"><?php echo $row->isi ?></h5>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><a href="<?php echo $row->more ?>">More Info </a></small>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <!--- Sekilas TLC --->
            <main>
                <section id="content4" class="content active">
                    <div class="container">
                        <div style="text-align: center;">
                            <b>
                                <h1>Sejarah Tegal Learning Center</h1><br />
                            </b>
                        </div>
                        <div class="row" style="padding-left: 20px;padding-right: 20px;">
                            <div class="col-md-6" style="text-align: justify;">
                                <p>Tegal Learning Center berpedoman pada tagline "Merdeka Belajar", Yaitu suatu
                                    tagline
                                    yang
                                    mengedepankan pemerataan pendidikan mengenai wawasan tentang dunia perkuliahan
                                    bagi
                                    siswa/siswi tingkat SLTA atau sederajat. Tagline tersebut menjadikan pondasi
                                    Tegal
                                    Learning
                                    Center untuk membuat wadah pembelajaran yang mengutamakan kebebasan pelajar
                                    dalam
                                    mengembangkan potensinya. Berdasarkan pandangan TLC, mayoritas pelajar di daerah
                                    masih belum mengetahui tentang dunia perkuliahan meliputi jalur masuk kampus,
                                </p>
                            </div>
                            <div class="col-md-6" style="text-align: justify;">
                                <p>program
                                    beasiswa,
                                    dan
                                    sebagainya. Oleh karena itu, TLC hadir untuk membuat rumah pembelajaran gratis
                                    yang
                                    interaktif dan efektif. Teknologi yang semakin maju dan berkembang membuat media
                                    digital di
                                    bidang pendidikan dimanfaatkan secara optimal sebagai media atau wadah dalam
                                    mengembangkan
                                    potensi yang dimiliki oleh pelajar di daerah Tegal.
                                    Kami mengusung 3 nilai utama baik dalam kerja tim kami maupun dalam pengabdian
                                    kami
                                    untuk
                                    daerah</p>
                            </div>
                        </div><br /><br />
                        <center>
                            <div class="image-container"><img alt="alternative" class="img-fluid"
                                    src="<?php echo base_url('assets/img/sejarah.svg'); ?>" width="650px">
                            </div>
                        </center>

                        <!--- Visi Misi--->
                        <main>
                            <section id="content6" class="content active">
                                <div class="container"><br /><br />
                                    <div class="row" style="padding-left: 20px;padding-right: 20px;">
                                        <div class="col-md-6" style="text-align: justify;">
                                            <b>
                                                <h1 style="text-align: center;">Visi</h1>
                                            </b><br />
                                            <h4>Membangun rumah pembelajaran untuk meningkatkan kualitas SDM siswa/i
                                                daerah tegal
                                                dalam
                                                mempersiapkan dunia perkuliahan.</h4>
                                        </div>

                                        <div class="col-md-6" style="text-align: justify;">
                                            <b>
                                                <h1 style="text-align: center;">Misi</h1>
                                            </b><br />
                                            <h4>Wadah Aspirasi Siswa
                                                Pemanfaatan Media Digital
                                                Wadah Kolaborasi Mahasiswa</h4>
                                        </div>
                                    </div><br />
                                    <center>
                                        <div class="image-container"><img alt="alternative" class="img-fluid"
                                                src="<?php echo base_url('assets/img/visimisi.svg'); ?>" width="650px">
                                        </div>
                                    </center>
                                </div>
                            </section>
                        </main>
                        <!--- Visi Misi--->
                    </div>
                </section>
            </main>
            <!--- Sekilas TLC --->

        </div>
    </section>
    <!--- Beranda --->

    <!-- Footer -->
    <div class="footer-dark" id="content5" style="position: static;"><br />
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-2 item">
                        <h3>Sekilas TLC</h3>
                        <h5 style="text-align: justify;">Kami adalah organisasi non-profit berbasis
                            relawan yang
                            bergerak di bidang
                            pendidikan</h5>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Donasi TLC</h3>
                        <h5 style="text-align: justify;">Bantuk kami mewujudkan mimpi
                            Donasi dapat
                            disalurkan
                            melalui
                            nomor rekening MANDIRI 1390021159623 (a.n Anisa
                            Novita Sari)
                        </h5>
                    </div>
                    <div class=" col-sm-4 col-md-4 item">
                        <h3>Hubungi Kami</h3>
                        <ul>
                            <li>Instagram: <a href="https://www.instagram.com/tegallearningcenter/">@tegallearningcenter
                                </a></li>
                            <li>E-mail : <a
                                    href="mailto:tegallearningcenter@gmail.com">tegallearningcenter@gmail.com</a>
                            </li>
                            <li>Website : <a href="https://tegallearningcenter.id/">https://tegallearningcenter.id/</a>
                            </li>
                            <li>Telpon : +62 895 0842 1511</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><img src="assets/img/logotlc.png" href="#content1" width="50"
                            height="40" style="margin-left: 10%;"><a
                            href="https://www.youtube.com/c/TegalLearningCenter/"><i
                                class="icon ion-social-youtube"></i></a><a
                            href="https://www.instagram.com/tegallearningcenter/"><i
                                class="icon ion-social-instagram"></i></a>
                        <p class="copyright">Copyright © 2021 <a href="#content1"> Tegal Learning
                                Center</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Footer -->

    <!-- JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
    <script src="assets/js/script.js">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/scroll.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>


</body>

</html>