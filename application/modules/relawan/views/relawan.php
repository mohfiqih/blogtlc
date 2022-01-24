<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Blog Tegal Learning Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/beranda.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/footer.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/img/logo.svg'); ?>" rel="icon" />
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
                <li class="navbar-nav bg-light ms-auto" style="margin-top: 5px;">
                    <h3>Relawan TLC</h3>
                </li>

                <li class="navbar-nav bg-light ms-auto">
                    <a class="nav-link" href="<?php echo base_url('#utama'); ?>" onclick="history.back();">Beranda</a>
                </li>
            </ul>
        </nav><br /><br />
        <!-- Header-->

        <!--- Beranda --->
        <section id="content3" class="content active">
            <div class="container">
                <div style="text-align: center;">
                    <b>
                        <h2>Divisi Tegal Learning Center</h2><br />
                    </b>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-deck" style="padding-left: 20px;padding-right: 20px;">
                                <div class="card" style="overflow: auto;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Divisi</th>
                                                <th scope="col">Ketua</th>
                                                <th scope="col">Tentang Divisi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        $count = 0;
                                        foreach ($queryAllUtama as $row) {
                                            $count = $count + 1;
                                        ?>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><?php echo $row->id ?></th>
                                                <td><?php echo $row->divisi ?></td>
                                                <td><?php echo $row->ketua ?></td>
                                                <td><a href="<?php echo $row->info ?>"></td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    </table>

                                </div>

                            </div><br /><br />
                            <center>
                                <div class="image-container"><img alt="alternative" class="img-fluid"
                                        src="<?php echo base_url('assets/img/divisi.svg'); ?>" width="650px">
                                </div>
                            </center>
                        </div>
                    </div>

                </div>
        </section>
        <!--- Beranda --->

        <!-- Footer -->
        <div class="footer-dark" id="content5"><br />
            <footer>
                <div class="container">
                    <div class="row justify-content-center" style="padding-left: 20px;padding-right: 20px;">
                        <div class="col-sm-4 col-md-2 item">
                            <h3>Sekilas TLC</h3>
                            <ul>
                                <li>
                                    <h5 style="text-align: justify;">Kami adalah organisasi
                                        non-profit berbasis relawan
                                        yang
                                        bergerak di bidang pendidikan</h5>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-4 col-md-3 item">
                            <h3>Donasi TLC</h3>
                            <ul>
                                <li>
                                    <h5 style="text-align: justify;">Bantuk kami mewujudkan mimpi
                                        Donasi dapat
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
            <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
            <script type="text/javascript" src="<?php echo base_url('assets/js/script.js') ?>">
            </script>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
            </script>
            <script type="text/javascript" src="<?php echo base_url('assets/js/scroll.js') ?>"></script>
</body>

</html>