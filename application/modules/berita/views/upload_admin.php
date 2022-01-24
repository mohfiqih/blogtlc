<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Portal Berita | Admin</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'
        type="text/css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet' type="text/css">
    <link href="<?php echo base_url('assets/css/sidebar.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/img/logo.svg'); ?>" rel="icon" />
    <script type='text/javascript' src=''></script>

    <!-- animate -->
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/bootstrap/animate/animate.min.css'); ?>">
    <link type="text/css" rel="stylesheet" href="<?= base_url('assets/bootstrap/animate/sweetalert2.min.css'); ?>">
    <link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link type="text/css" rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link type="text/css" rel="stylesheet" href="/resources/demos/style.css">

    <script type='text/javascript' href="<?= base_url('assets/bootstrap/animate/sweetalert2.min.js'); ?>">
    </script>
    <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type='text/javascript' src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script type='text/javascript' src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type='text/javascript' src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body oncontextmenu='return false' class='snippet-body'>

    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <div class="header_img"> <img src="<?php echo base_url('assets/img/logo.svg') ?>" alt=""> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                            class="nav_logo-name">Admin TLC</span> </a>

                    <div class="nav_list">
                        <a href="<?php echo base_url('beranda/dashboard') ?>" class="nav_link"><i
                                class="bx bx-chart nav_icon"></i>
                            <span class="nav_name">Dashboard</span></a>

                        <a href="<?php echo base_url('beranda/admin') ?>" class="nav_link"><i
                                class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Konten Beranda</span></a>

                        <a href="<?php echo base_url('beranda/galeri'); ?>" class="nav_link"><i
                                class='bx bx-box nav_icon'></i>
                            <span class="nav_name">Galeri</span> </a>

                        <a href="<?php echo base_url('berita/admin'); ?>" class="nav_link active"> <i
                                class='bx bx-bookmark nav_icon'></i>
                            <span class="nav_name">Berita</span> </a>

                        <a href="<?php echo base_url('cerita/admin'); ?>" class="nav_link"> <i
                                class='bx bx-message-square-detail nav_icon'></i>
                            <span class="nav_name">Cerita</span> </a>

                        <a href="<?php echo base_url('relawan/admin'); ?>" class="nav_link"><i
                                class='bx bx-user nav_icon'></i>
                            <span class="nav_name">Relawan</span> </a>
                            
                            <a href="<?php echo base_url('beranda/logout'); ?>" class="nav_link"> <i
                        class='bx bx-log-out nav_icon'></i> <span class="nav_name"
                        onclick="return confirm ('Yakin?')">SignOut</span> </a>
                    </div>
            </nav>
        </div>
        <!--Container Main start-->
        <div class="height-100"><br />
            <h4>Upload Berita</h4>
            <hr>
        </div>
        <!--Container Main end-->

        <!-- Tabel Input Konten -->
        <div class="card col-sm-12">
            <div class="card-header bg-secondary text-white">
                Unggah Berita
            </div>

            <div class="card-body">

                <?php echo form_open_multipart('berita/fungsiTambah'); ?>

                <div class="form-group">
                    <label><b>Foto Berita</b></label><br />
                    <input type="file" name="foto_berita" class="form-control" required></input>
                    <br />
                </div>

                <div class="form-group">
                    <td><b>Kategori Berita</b></td>
                    <td><select type="text" name="kategori" class="form-control" placeholder="Pilih Keterangan"
                            required>
                            <option>Pilih Kategori</option>
                            <option value="TLC News">TLC News</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Teknologi">Teknologi</option>
                            <option value="Umum">Umum</option>
                        </select></td>
                    <br />
                </div>

                <div class="form-group">
                    <td><b>Judul Berita</b></td>
                    <td><input type="text" name="judul_berita" class="form-control" placeholder="Masukkan Judul Berita"
                            required></input></td>
                    <br />
                </div>

                <div class="form-group">
                    <td><b>Isi Berita</b></td>
                    <td><input type="text" name="isi_berita" class="form-control" placeholder="Masukkan Isi Berita"
                            required></input></td>
                    <br />
                </div>

                <div class="form-group">
                    <td><b>Tanggal</b></td>
                    <td><input type="text" name="tgl_berita" class="form-control" placeholder="Format: 16-08-2021"
                            required></input></td>
                    <br />
                </div>

                <div class="form-group">
                    <td><b>Detail Berita</b></td>
                    <td><input type="text" name="detail_berita" class="form-control" placeholder="Masukkan Link Info"
                            required></input></td>
                    <br />
                </div>

                <div class="main">
                    <button id="flash" colspan="3" type="submit" class="btn bg-secondary text-white" name=" btambah"
                        onclick="sweetAlert()">Unggah Berita</button></a>
                </div>

                <?php echo form_close(); ?>

            </div>
        </div><br />
        </div>
        </div><br />
        <!-- Akhir Tabel Input Daftar Hadir -->

        <!-- Tabel Upload Beranda -->
        <div class="card col-sm-12">
            <div class="card-header bg-secondary text-white">
                Tabel Berita
            </div>

            <div class="card-body" style="overflow: auto;">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>
                            Foto Berita
                        </th>
                        <th>
                            Kategori Berita
                        </th>
                        <th>
                            Judul Berita
                        </th>
                        <th>
                            Isi Berita
                        </th>
                        <th>
                            Tanggal
                        </th>
                        <th>
                            Detail Berita
                        </th>
                        <th>
                            Edit
                        </th>
                        <th>
                            Hapus
                        </th>
                    </tr>

                    <?php
                        $count = 0;
                        foreach ($queryAllBerita as $row) {
                            $count = $count + 1;
                        ?>

                    <tr>
                        <td>
                            <justify>
                                <img src="<?php echo base_url(); ?>assets/foto/<?php echo $row->foto_berita; ?>"
                                    class="card-img-top" alt="gambar" width="150px" height="150px">
                            </justify>
                        </td>
                        <td>
                            <?php echo $row->kategori ?>
                        </td>
                        <td>
                            <?php echo $row->judul_berita ?>
                        </td>
                        <td>
                            <?php echo $row->isi_berita ?>
                        </td>
                        <td>
                            <?php echo $row->tgl_berita ?>
                        </td>
                        <td>
                            <?php echo $row->detail_berita ?>
                        </td>
                        <td>
                            <a class="btn bg-warning icon-dark"
                                href=" <?php echo base_url('berita/edit_berita') ?>/<?php echo $row->id_berita ?>"><i
                                    class="fa fa-edit"></a></i>
                        </td>
                        <td>
                            <a class="btn bg-danger text-white"
                                href="<?php echo base_url('berita/fungsiDelete') ?>/<?php echo $row->id_berita ?>"><i
                                    class="fa fa-trash" onclick="sweetAlerthapus()"></i></a></i>
                        </td>
                    </tr>

                    <?php } ?>

                </table>

                <b>
                    <label>Jumlah Berita : </b> <?php echo $jml_berita;  ?></label>
                </b>

            </div>
        </div><br />
        </div>
        </div><br />
        <!-- Tabel Upload Beranda -->

        <script type="text/javascript">
        function sweetAlert() {
            Swal.fire(
                'Berhasil',
                'Berita berhasil diupload!',
                'success'
            )
        }
        </script>

        <script type='text/javascript'
            src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
        <script type='text/javascript'>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // show navbar
                        nav.classList.toggle('show')
                        // change icon
                        toggle.classList.toggle('bx-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
        });
        </script>
    </body>

</html>