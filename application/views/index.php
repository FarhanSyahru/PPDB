<?php
$cn = mysqli_connect("localhost", "root", "", "ppdb");


?>



<!doctype html>
<html lang="en">

<head>
    <!--============================== Required meta tags ===========================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--============================= Fonts =======================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

    <!--============================= CSS =======================================-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url(); ?>style.css">

    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>

    <title>Penerimaan Peserta Didik Baru 2023</title>
    <link rel="shourtcut icon" type="<?= base_url('assets/'); ?>image/png" href="<?= base_url('assets/'); ?>img/favicon.png">
</head>

<body>
    <!--================= Header-area ======================-->
    <div class="header-area header-absoulate">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="">
                            <i class="fas fa-fw fa-home"></i>
                            <span>PPDB <span id="na">Kota Tegal Tahun 2023</span></span>
                        </a>
                    </div>
                </div>
                <!--================== Main menu-area ====================-->
                <div class="col-md-7">
                    <div class="main-menu">
                        
                    </div>
                </div>
                <div class="col-md-1 text-right">
                    <span class="social-icon">
                        <a href=""><i class="fas fa-fw fa-facebook"></i></a>
                        <a href=""><i class="fas fa-fw fa-google-plus"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--======================= Slide-area =======================-->
    <div class="welcome-area">
        <div class="owl-carousel slider-content">
            <div class="single-slider-item slider-bg-1">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                    <h2>Kami memberikan pendidikan berkualitas</h2>
                                    <p>Pendidikan adalah apa yang tersisa setelah seseorang<br>
                                        melupakan apa yang telah dipelajarinya di sekolah.

                                        <br><i>Albert Einstein</i>
                                    </p>

                                    <a href="<?= base_url('auth'); ?>" class="boxed-btn">learn more <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item slider-bg-2">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                    <h2>Kami memberikan perawatan intensif</h2>
                                    <p>Pendidikan adalah senjata paling ampuh<br>
                                        yang dapat Anda gunakan untuk mengubah dunia.

                                        <br><i>Nelson Mandela</i>
                                    </p>

                                    <a href="" class="boxed-btn">learn more <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========================== Content-area ============================-->
    <div class="content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    

                </div>
            </div>
        </div>
    </div>
    <!--========================== Footer-area ===============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget">
                        <div class="logo">
                            <a href="">
                                <i class="fas fa-fw fa-home"></i>
                                <span>Sekolah</span>
                            </a>
                            <p> Pendidikan adalah apa yang tersisa setelah seseorang <br>
                                melupakan apa yang telah dipelajarinya di sekolah.

                                <br><i>Albert Einstein</i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <h3>Navigasi</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="?a=student_add">Pendaftaran</a></li>
                                <li><a href="?a=view">Siswa</a></li>
                                <li><a href="#">Kontak Kami</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Kontak Kami</h3>
                    <span class="social-icon">
                        <a href=""><i class="fas fa-fw fa-facebook"></i></a>
                        <a href=""><i class="fas fa-fw fa-google-plus"></i></a>
                    </span>
                </div>
                <p class="copy-right">Copyright &copy;Dinas Pendidikan Dan Kebudayaan Kota Tegal</p>
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="<?= base_url('assets/'); ?>js/popper-1.12.9.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/main.js"></script>
</body>

</html>