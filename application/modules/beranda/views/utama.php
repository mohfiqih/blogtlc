<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>Blog Tegal Learning Center</title>
     <!-- Google Fonts -->
     <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600,300,700' rel='stylesheet'
          type='text/css'>
     <!-- ionicons Fonts for icons -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="<?php echo base_url('assets/utama/css/ionicons.min.css') ?>" rel="stylesheet" type='text/css'>
     <!-- bootstrap -->
     <link href="<?php echo base_url('assets/utama/css/bootstrap.css') ?>" rel="stylesheet" type='text/css'>
     <!-- Styles CSS-->
     <link href="<?php echo base_url('assets/utama/css/style.css') ?>" rel="stylesheet" type='text/css'>
     <!-- Animate CSS-->
     <link type='text/css' href="<?php echo base_url('assets/utama/css/animate.css') ?>" rel="stylesheet">
     <link type='text/css' href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
     <link type='text/css' rel="stylesheet" href="<?php echo base_url('assets/css/footer.css') ?>">
     <link type='text/css' rel="stylesheet" href="<?php echo base_url('assets/css/beranda.css') ?>">
     <link href="<?php echo base_url('assets/img/logo.svg') ?>" rel="icon" />
</head>

<style>
body {
     background-color: white;
}
</style>

<body>
     <center>
          <!-- Page Loader -->
          <div class="page-loader">
               <div class="loader">
                    <span class="cssload-loading"></span>
               </div>
          </div>
     </center>
     <!-- End Page Loader -->
     <div class="inner-conterner">
          <!-- inner-conterner -->
          <header class="site-header">
               <div class="header-inner">
                    <!-- navigation panel -->
                    <div class="container" id="utama">
                         <div class="row">
                              <div class="header-table col-md-12">
                                   <div class="brand">
                                        <a href="#">
                                             <img src="<?php echo base_url('assets/img/logo.svg') ?>" width="100"
                                                  height="70" style="float: left;">
                                        </a>
                                   </div>
                                   <nav id="nav-wrap" class="main-nav">
                                        <div id="mobnav-btn"> </div>
                                        <ul class="sf-menu">
                                             <li class="current">
                                                  <a href="https://www.tegallearningcenter.id/">Beranda</a>
                                             </li>
                                             <li>
                                                  <a href="<?php echo base_url('#content4') ?>">Sejarah</a>
                                             </li>
                                             <li>
                                                  <a href="<?php echo base_url('#content6') ?>">Visi & Misi</a>
                                             </li>
                                             <li>
                                                  <a href="<?php echo base_url('#content7') ?>">Galeri</a>
                                             </li>
                                             <li>
                                                  <a href="<?php echo base_url('berita/portal_berita') ?>">Berita</a>
                                             </li>
                                             <li>
                                                  <a href="<?php echo base_url('cerita/portal_cerita') ?>">Cerita</a>
                                             </li>
                                             <li>
                                                  <a href="<?php echo base_url('relawan/portal_relawan') ?>">Relawan</a>
                                             </li>
                                             <li class="menu-search-bar">
                                                  <a id="search-label"><i class="fa fa-search"></i></a>
                                                  <form class="search-bar" id="searchform">
                                                       <input type="text" placeholder="Search..." name="s">
                                                  </form>
                                             </li>
                                        </ul>
                                   </nav>
                              </div>
                         </div>
                         <!-- End navigation panel -->
                    </div>
                    <!-- End navigation panel -->
               </div>
          </header>

          <!-- Slider -->
          <div class="slider-wrapper" style="margin-left: 10px; margin-right: 10px;">
               <div class="fr-slider">
                    <div class="fs_loader"></div>
                    <div class="slide">
                         <img data-position="-20,0" data-in="fade" data-out="fade" class="slide-bg"
                              src="<?php echo base_url('assets/img/bg.png') ?>" alt="Slide">
                    </div>

                    <div class="slide">
                         <img data-position="-20,0" class="slide-bg"
                              src="<?php echo base_url('assets/img/inilangkah.png') ?>" alt="Slide">
                    </div>

               </div>
          </div>
          <!-- End Slider -->

          <!-- About Section -->
          <div class="container" id="content1">
               <div class="row">
                    <div class="col-md-12">
                         <h3 class="title-un" style="margin-left: 10px;margin-right: 10px;">Beranda Tegal Learning
                              Center
                         </h3>
                         <div class="title-un-icon"><i class="fa fa-columns"></i></div><br />
                    </div>
               </div>

               <?php
							$count = 0;
							foreach ($queryAllUtama as $row) {
								$count = $count + 1;
							?>


               <!-- Service item -->
               <div class="col-sm-4">
                    <div class="service-box-sb wow fadeInUp">
                         <div class="service-img">
                              <img src="<?php echo base_url(); ?>assets/foto/<?php echo $row->foto; ?>" alt="Enfold"
                                   height="150px">
                         </div>
                         <div class="service-info">

                              <h4><?php echo $row->judul ?></h4>

                              <div class="desc"><?php echo $row->isi ?><br />
                                   <b><a class="see-more" href="<?php echo $row->more ?>">
                                             See More &rarr;
                                             <div class="line"></div>
                                        </a>
                                   </b>
                              </div>
                         </div>
                    </div>
               </div>
               <?php } ?>
               <!-- End Service item -->
          </div>


     </div>
     </div>
     </div>
     <!-- End About Section -->

     <!--- Sekilas TLC --->
     <div class="container">
          <div style="text-align: center;" id="content4">
               <h3 class="title-un" style="margin-left: 10px;margin-right: 10px;">Sejarah Tegal Learning Center</h3>
               <div class="title-un-icon"><i class="fa fa-cog"></i></div><br />
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
                         src="<?php echo base_url('assets/img/sejarah.svg'); ?>" width="600px">
               </div>
          </center>

          <!--- Visi Misi--->
          <div class="container"><br /><br />
               <div class="row" id="content6" style="padding-left: 20px;padding-right: 20px;">
                    <div class="col-md-6" style="text-align: justify;">
                         <h3 class="title-un">Visi</h3>
                         <div class="title-un-icon"><i class="fa fa-bookmark"></i></i></div>
                         <br />
                         <p>Membangun rumah pembelajaran untuk meningkatkan kualitas SDM siswa/i
                              daerah tegal
                              dalam
                              mempersiapkan dunia perkuliahan.</p>
                    </div>

                    <div class="col-md-6" style="text-align: justify;">
                         <h3 class="title-un">Misi</h3>
                         <div class="title-un-icon"><i class="fa fa-bookmark"></i></div>
                         <br />
                         <p>Wadah Aspirasi Siswa
                              Pemanfaatan Media Digital
                              Wadah Kolaborasi Mahasiswa</p>
                    </div>
               </div><br />
               <center>
                    <div class="image-container"><img alt="alternative" class="img-fluid"
                              src="<?php echo base_url('assets/img/visi.svg'); ?>" width="650px">
                    </div>
               </center>
          </div>
          </section>
          </main><br /><br />
          <!--- Visi Misi--->

          <!-- Galery -->
          <div class="container" id="content7">
               <div class="row">
                    <div class="col-md-12">
                         <h3 class="title-un" style="margin-left: 10px;margin-right: 10px;">Galeri Tegal Learning Center
                         </h3>
                         <div class="title-un-icon"><i class="fa fa-heart"></i></div>
                         <p class="title-un-des">Berikut Galeri tentang Tegal Learning Center,
                              meliputi
                              kegiatan, agenda, project dan lain sebagainya.</p>
                    </div>
               </div>
          </div>
     </div>
     <div class="gallery-portfolio-container">
          <div class="container">
               <div class="row">
                    <div class="col-md-12">
                         <nav class="port-filter m-port-filter">
                              <ul>

                                   <li class="active"><a href="#" data-filter=".photography">Galeri TLC</a></li>
                              </ul>
                         </nav>

                         <?php
							$count = 0;
							foreach ($queryAllGaleri as $row) {
								$count = $count + 1;
							?>
                         <!-- Education-->
                         <div class="col-sm-4">
                              <div class="project-item photography">
                                   <div class="project-image">
                                        <img
                                             src="<?php echo base_url(); ?>assets/galeri_tlc/<?php echo $row->galeri_tlc ?>">
                                        <center>
                                             <h5><?php echo $row->nama_kegiatan; ?></h5>
                                        </center>
                                        <div class=" overlay">
                                             <div class="content-wrap">
                                                  <div class="overlay-content">
                                                       <h3><a href="#">Galeri TLC</a></h3>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                         </div>
                         <?php } ?>
                    </div>
               </div>
          </div>
     </div>
     </div>
     </section>
     </main>
     <!--- Sekilas TLC --->
     </div>
     </section>
     <!--- Beranda --->

     <!-- Caption -->
     <div class="testimonials-container"
          style="background: url(https://coolwallpapers.me/picsup/2809927-digital-art-nature-landscape-hill-winter-snow-minimalism-blue-background-white-simple-background___landscape-nature-wallpapers.jpg) center center no-repeat;
        padding: 80px 0 40px 0;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important; margin-left: 10px; margin-right: 10px;">
          <div class="container">
               <div class="row">
                    <div class="col-md-12 wow fadeInUp">
                         <div class="title-un-icon"><i class="fa fa-quote-left"></i></div>
                         <h3 class="title-un">WHAT PEOPLE SAY?</h3>
                         <div id="owl-slide" class="testimonials owl-carousel">
                              <div class="testimonial">
                                   <p>"Ing ngarsa sung tulada, Ing madya mangun karsa, Tut wuri handayani"</p>
                                   <div class="client">
                                        <div class="client-info">
                                             <div class="client-name">
                                                  - Ki Hajar Dewantara
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="testimonial">
                                   <p>"Tujuan pendidikan itu untuk mempertajam kecerdasan, memperkukuh kemauan serta
                                        memperhalus perasaan"</p>
                                   <div class="client">
                                        <div class="client-info">
                                             <div class="client-name">
                                                  - Tan Malaka
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="testimonial">
                                   <p>"Education is not learning of facts, but the training of the mind to think."</p>
                                   <div class="client">
                                        <div class="client-info">
                                             <div class="client-name">
                                                  - Albert Einstein
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- Caption -->

     <!-- Kritik saran-->
     <div class="container-newsletter">
          <div class="container">
               <div class="row">
                    <div class="col-md-12">
                         <h3 class="title-un">Kritik dan Saran</h3>
                         <div class="title-un-icon"><i class="fa fa-book"></i></div>
                         <p class="title-un-des"> </p>
                         <div class="newsletter-container" style="text-align: center;">
                              <input placeholder="Email" class="newsletter-field" type="email" required=""
                                   name="email"><br /><br />
                              <input placeholder="Nama Lengkap" class="newsletter-field" type="nama" required=""
                                   name="nama"><br /><br />
                              <input placeholder="Masukkan Kritik dan Saran" class="newsletter-field" type="nama"
                                   required="" name="nama"><br />
                              <button style="border: #E6E6E6;" type="submit" class="button green-button">Kirim</button>
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <!-- Kritik saran -->

     <!-- Footer -->
     <div class="footer-dark" id="content5" style="position: static;"><br />
          <footer>
               <div class="container">
                    <div class="row justify-content-center" style="padding-left: 20px;padding-right: 20px;">
                         <div class="col-sm-4 col-md-3 item">
                              <h3 style="color: white;">Sekilas TLC</h3>
                              <p style="text-align: justify;">Kami adalah organisasi non-profit berbasis
                                   relawan yang
                                   bergerak di bidang
                                   pendidikan</h5>
                         </div>
                         <div class="col-sm-4 col-md-3 item" style="padding-left: 20px;padding-right: 20px;">
                              <h3 style="color: white;">Donasi TLC</h3>
                              <h8 style="text-align: justify;">Bantu kami mewujudkan mimpi
                                   Donasi dapat
                                   disalurkan
                                   melalui
                                   nomor rekening MANDIRI 1390021159623 (a.n Anisa
                                   Novita Sari)
                              </h8>
                         </div>
                         <div class=" col-sm-4 col-md-4 item">
                              <h3 style="color: white;">Hubungi Kami</h3>
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
                         <div class="col-lg-2 item social"><a href="https://www.youtube.com/c/TegalLearningCenter/"><i
                                        class="fa fa-youtube"></i></a><a
                                   href="https://www.instagram.com/tegallearningcenter/"><i
                                        class="fa fa-instagram"></i></a>
                              <p class="copyright">Copyright © 2021
                                   <a href="#utama" style="color: white;"> Tegal
                                        Learning
                                        Center</a><br /><br />
                                   <a href="https://programmer-sans.000webhostapp.com/" style="color: white;">Powered by
                                        programmer.sans</a>
                              </p>
                         </div>
                    </div>
               </div>
          </footer>
     </div>
     <!-- Footer -->

     <!-- ================================================== -->
     <!-- Placed js files at the end of the document so the pages load faster -->
     <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
     <script type="text/javascript" src="<?php echo base_url('assets/js/script.js') ?>">
     </script>
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/js/scroll.js') ?>"></script>
     <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
     <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
     </script>

     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/jquery.min.js') ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/bootstrap.min.js') ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/superfish.js') ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/jquery.easing.js') ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/wow.js') ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/jquery.isotope.min.js') ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/owl.carousel.min.js') ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/jquery.magnific-popup.js') ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/jflickrfeed.min.js') ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/jquery.fitvids.js') ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/jquery.fractionslider.min.js') ?>">
     </script>
     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/jquery-ui-1.10.4.custom.min.js') ?>">
     </script>
     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/SmoothScroll.js') ?>"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/utama/js/main.js') ?>"></script>
</body>

</html>