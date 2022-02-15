<?php
require_once 'functions.php';
if (!isset($_SESSION['logged_in'])) {
    header('location: index.php');
}
$title = "Nontifikasi";
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
                    <a class="navbar-brand" href="dashboard.php"><img src="images/logo1.png" alt="" width="50"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="dashboard.php">Beranda </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Kepengurusan & Anggota <span
                                    class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="pengurus.php">Kepengurusan</a></li>
                                <li><a href="anggota.php">Anggota</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="iuran_admin.php">Keuangan </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Akademis <span
                                    class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="requestkelas.php">Manajemen Kelas Tutorial</a></li>
                                <li><a href="Penyediaan software.php">Penyediaan software</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Tambahan <span
                                    class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="info.php">Manajemen Informasi</a></li>
                                <li><a href="notif.php">Manajemen Notifikasi</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="contact.php">Kontak </a>
                        </li>
                        <li class="dropdown">
                            <a href="logout.php">Logout <i class="fa fa-exit"></i></a>
                        </li>
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
                    <a href="dashboard.php"><img src="images/logo1.png" alt="" width="140"></a>
                </div><!-- end logo -->
                <div class="margin-block"></div>
                <ul class="primary-menu">
                    <li class="child-menu"><a href="dashboard.php">Beranda <i class="fa fa-home"></i>
                    </li>
                    <li class="child-menu"><a href="#">Kepengurusan & Anggota <i class="fa fa-angle-right"></i></a>
                        <div class="sub-menu-wrapper">
                            <ul class="sub-menu center-content">
                                <li><a href="pengurus.php">Kepengurusan <i class="fa fa-user"></i></a></li>
                                <li><a href="anggota.php">Anggota <i class="fa fa-users"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="child-menu"><a href="iuran_admin.php">Keuangan <i class="fa fa-dollar"></i>
                    </li>
                    <li class="child-menu"><a href="#">Akademis <i class="fa fa-angle-right"></i></a>
                        <div class="sub-menu-wrapper">
                            <ul class="sub-menu center-content">
                                <li><a href="requestkelas.php">Manajemen Kelas Tutorial <i class="fa fa-book"></i></a>
                                </li>
                                <li><a href="Penyediaan software.php">Penyediaan software <i
                                            class="fa fa-desktop"></i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="child-menu"><a href="#">Tambahan <i class="fa fa-angle-right"></i></a>
                        <div class="sub-menu-wrapper">
                            <ul class="sub-menu center-content">
                                <li><a href="info.php">Manajemen Informasi <i class="fa fa-info"> </i></a></li>
                                <li><a href="notif.php">Manajemen Notifikasi <i class="fa fa-bell"> </i></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="child-menu"><a href="contact.php">Kontak <i class="fa fa-comment"></i> </a>
                    </li>
                    <li><a href="logout.php">Logout <i class="fa fa-sign-out"></i></a></li>
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
                        <h3><mark class="rotate">Hello, Hai, Horas</mark>!!! Website ini dibangun untuk UKM Del UI/UX
                            Club di Institut Teknologi Del</h3>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <br><br>
    <br><br>
    <?php $DaftarAkun = getAllAkun() ?>
    <!-- Form Notif Area -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>
                                Kirim Notif
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form contact-form">
                            <form action="kirimnotif.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <select class="form-control" name="id_akun" id="id_akun" required="required">
                                        <option>Id Akun</option>
                                        <?php
                                        foreach ($DaftarAkun as $akun) { ?>
                                        <option><?= $akun['id_akun'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="date" name="date" id="date" required="required">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="judul" id="judul" required="required"
                                        placeholder="Judul notif">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="notif" id="notif" style="height: 160px"
                                        required="required" placeholder="Notifikasi"></textarea>
                                </div>
                                <div class="text-center"><input type="submit" name="submit" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <br><br>
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>
                                Notifikasi
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <?php $nomor = 0;
                    $DaftarNotif = getAllNotif() ?>
                    <table style="width:100%;text-align:center; color: black"
                        class="table table-border table-striped table-hover">
                        <tr>
                            <thead class="bg bg-primary">
                                <td>No</td>
                                <td>Penerima</td>
                                <td>Judul</td>
                                <td>Notif</td>
                                <td>Tanggal</td>
                                <td>Menu</td>
                            </thead>
                        </tr>
                        <?php foreach ($DaftarNotif as $nt) { ?>
                        <tr>
                            <td><?= ++$nomor ?></td>
                            <td><?= $nt['id_akun'] ?></td>
                            <td><?= $nt['judul_notifikasi'] ?></td>
                            <td><?= $nt['notifikasi'] ?></td>
                            <td><?= $nt['tanggal'] ?></td>
                            <td>
                                <a href="hapusnotif.php?id=<?= $nt['id_notifikasi'] ?>"
                                    onclick="return confirm('Apakah anda yakin?');"><span
                                        class="btn btn-danger">Hapus</span></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Notif Area -->
    <br><br>
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