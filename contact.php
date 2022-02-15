<?php
require_once 'functions.php';
if (!isset($_SESSION['logged_in'])) {
    header('location: index.php');
}
$title = "Kontak";
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
    <div id="home" class="video-section js-height-full">
        <div class="overlay"></div>
        <div class="home-text-wrapper relative container">
            <div class="home-message">
                <img src="images/logo1.png" alt="" width="400">
                <p>Del UI/UX Club</p>
                <div class="btn-wrapper">
                    <div class="text-center">
                        <!-- <a href="#" class="btn btn-primary">Read More</a> &nbsp;<a href="#" class="btn btn-default">Buy Now</a> -->
                    </div>
                </div><!-- end row -->
            </div>
        </div>
    </div>
    <div class="section bgcolor noover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tagline-message">
                        <h3>Sebuah UKM yang didirikan pada tahun 2020 sebagai tempat mahasiswa yang tertarik di bidang
                            UI/UX.</h3>
                    </div><br>
                    <h4 style="color:white;">
                        Beberapa komentar yang ada dari para pengunjung aplikasi:
                    </h4>
                </div><!-- end col -->
            </div><!-- end row -->
            <div class="table-responsive">
                <?php $nomor = 0;
                $DaftarKomen = getAllKomen() ?>
                <table style="width:100%;text-align:center; color: black"
                    class="table table-border table-striped table-hover">
                    <tr>
                        <thead class="bg bg-primary">
                            <td>No</td>
                            <td>Pengirim</td>
                            <td>Komentar</td>
                            <td>Balasan</td>
                            <td>Menu</td>
                        </thead>
                    </tr>
                    <?php foreach ($DaftarKomen as $dk) { ?>
                    <tr>
                        <tbody>
                            <td><?= ++$nomor ?></td>
                            <td><?= $dk['nama']; ?></td>
                            <td><?= $dk['komentar'] ?></td>
                            <?php if ($dk['reply'] == "menunggu balasan") { ?>
                            <td>
                                <a href="balaskomen.php?id=<?= $dk['id_komentar'] ?>"><span
                                        class="btn btn-success">Berikan Tanggapan</span></a>
                            </td>
                            <?php } else { ?>
                            <td><?= $dk["reply"] ?></td>
                            <?php
                                } ?>
                            <td><a data-toggle="modal" class="badge badge-success float-right ml-1"
                                    href="#hapus_<?php echo $dk['id_komentar']; ?>">
                                    <i class="fa fa-trash">&nbsp Hapus</i></a></td>&nbsp &nbsp
                            <?php
                                include('hapuskomentar.php');
                                ?>
                        </tbody>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->
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