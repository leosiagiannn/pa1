<?php
require_once 'functions.php';
$id_kelas = $_GET["id_kelas"];
$data = GetRequestKelas($id_kelas);
$title = "Edit Kelas";
include('layout/header.php');
?>
<div class="menu-wrapper">
    <div class="mobile-menu">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo-normal.png" alt=""></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="dashboard.php" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Beranda </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Kepengurusan & Anggota <span
                                    class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Menu Example 01</a></li>
                                <li><a href="#">Menu Example 02</a></li>
                                <!-- <li><a href="#">Menu Example 03</a></li>
                                    <li><a href="#">Menu Example 04</a></li>
                                    <li><a href="#">Menu Example 05</a></li>
                                    <li><a href="#">Menu Example 06</a></li> -->
                            </ul>
                        </li>
                        <li class="child-menu"><a href="iuran_admin.php">Keuangan
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Akademis <span
                                    class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Menu Example 01</a></li>
                                <li><a href="#">Menu Example 02</a></li>
                                <!-- <li><a href="#">Menu Example 03</a></li>
                                    <li><a href="#">Menu Example 04</a></li>
                                    <li><a href="#">Menu Example 05</a></li>
                                    <li><a href="#">Menu Example 06</a></li> -->
                            </ul>
                        </li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php">Logout <i class="fa fa-exit"></i></a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
    </div><!-- end mobile-menu -->
    <header class="vertical-header">
        <div class="vertical-header-wrapper">
            <nav class="nav-menu" style="background-color:grey;color:black;">
                <div class="logo">
                    <a href="index.html"><img src="images/logo1.png" alt="" width="140"></a>
                </div><!-- end logo -->
                <div class="margin-block"></div>
                <ul class="primary-menu">
                    <li class="child-menu"><a href="dashboard.php">Beranda
                    </li>
                    <li class="child-menu"><a href="#">Kepengurusan&Anggota <i class="fa fa-angle-right"></i></a>
                        <div class="sub-menu-wrapper">
                            <ul class="sub-menu center-content">
                                <li><a href="#">Menu Example 01</a></li>
                                <li><a href="#">Menu Example 02</a></li>
                                <!-- <li><a href="#">Menu Example 03</a></li>
                                    <li><a href="#">Menu Example 04</a></li>
                                    <li><a href="#">Menu Example 05</a></li>
                                    <li><a href="#">Menu Example 06</a></li> -->
                            </ul>
                        </div>
                    </li>
                    <li class="child-menu"><a href="iuran_admin.php">Keuangan
                    </li>
                    <li class="child-menu"><a href="#">Akademis <i class="fa fa-angle-right"></i></a>
                        <div class="sub-menu-wrapper">
                            <ul class="sub-menu center-content">
                                <li><a href="#">Menu Example 01</a></li>
                                <li><a href="#">Menu Example 02</a></li>
                                <!-- <li><a href="#">Menu Example 03</a></li>
                                    <li><a href="#">Menu Example 04</a></li>
                                    <li><a href="#">Menu Example 05</a></li>
                                    <li><a href="#">Menu Example 06</a></li> -->
                            </ul>
                        </div>
                    </li>
                    <li class="child-menu"><a href="#">Kontak </a>
                    </li>
                    <li><a href="logout.php">Logout <i class="fa fa-arrow-left"></i></a></li>
                </ul>
                <div class="margin-block"></div>
            </nav><!-- end nav-menu -->
        </div><!-- end vertical-header-wrapper -->
    </header><!-- end header -->
</div><!-- end menu-wrapper -->
<div id="wrapper">
    <div class="section bgcolor noover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tagline-message">
                        <h3><mark class="rotate">Hello, Hai, Horas</mark>!!! Website ini dibangun untuk UKM Del
                            UI/UX
                            Club di Institut Teknologi Del</h3>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <br><br>
    <section class="blog-page-section spad ">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                    <a href="requestkelas.php" class="btn btn-primary">Kembali lihat data</a>
                </div>
            </div><br>
            <form action="editproceesskelas.php" method="POST">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['id_kelas']  ?>">
                <div class="form-group">
                    <label for="nama">Topik</label>
                    <input type="text" class="form-control" id="topik" name="topik" value="<?= $data['topik']  ?>">
                </div>
                <div class="form-group">
                    <label for="">Kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $data['kelas']  ?>">
                </div>
                <div class="form-group">
                    <label for="">Kuota</label>
                    <input type="number" class="form-control" id="kuota" name="kuota" value="<?= $data['kuota']  ?>">
                </div>
                <div class="form-group">
                    <label for="">Pengajar</label>
                    <input type="number" class="form-control" id="pengajar" name="pengajar"
                        value="<?= $data['pengajar']  ?>">
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                        value="<?= $data['tanggal']  ?>">
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="requestkelas.php"
                        style="color:black;">Close</a></button>
                <button type="submit" name="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </section>
    <br>
    <div class="section copyrights">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">

                    <img src="images/logo1.png" alt="" width="100">
                    <!-- </div> -->
                </div>
                <div class="col-lg-9 col-md-9 text-right">
                    <div class="cop-links">
                        <ul class="list-inline">
                            <li>&copy; Del UI/UX Club | Design: <a href="about">PA1-D3TI01</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- end wrapper -->
<?php
include('layout/footer.php');
?>