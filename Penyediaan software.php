<?php
require_once 'functions.php';
if (!isset($_SESSION['logged_in'])) {
    header('location: index.php');
}
$title = "Software";
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
                                <li><a href="request.php">Manajemen Kelas Tutorial</a></li>
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
                                <li><a href="requestkelasadmin">Manajemen Kelas Tutorial <i class="fa fa-book"></i></a>
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
<?php
include('notif1.php');
?>
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
    <?php
    $semuaanggota = getAllAnggota();
    ?>
    <!-- Form Informasi Area -->
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="section-title text-center">
                        <h3>Penyediaan Software</h3>
                        <p style="color:black;">Anggota dapat mengunduh software demi mendukung berjalannya proses UKM
                            dengan baik</p>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form contact-form">
                            <form action="kirimsoftware.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="nama_software" id="nama_software"
                                        required="required" placeholder="Nama Software">
                                </div>
                                <label>Gambar</label>
                                <div class="form-group">
                                    <input class="form-control" type="file" name="gambar" id="gambar"
                                        required="required" accept="image/*">
                                </div>
                                <label>File Software</label>
                                <div class="form-group">
                                    <input class="form-control" type="file" name="file" id="file" required="required">
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
    <div id="contact" class="contact-area">
        <div class="contact-inner area-padding">
            <div class="contact-overly"></div>
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h2>
                                Penyediaan Software
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <?php $nomor = 0;
                    $Software = getAllsoftware() ?>
                    <table style="width:100%;text-align:center; color: black"
                        class="table table-border table-striped table-hover">
                        <tr>
                            <thead class="bg bg-primary">
                                <td>No</td>
                                <td>Nama Software</td>
                                <td>Gambar</td>
                                <td>Menu</td>
                            </thead>
                        </tr>
                        <?php foreach ($Software as $s) { ?>
                        <tr>
                            <td><?= ++$nomor ?></td>
                            <td><?= $s['nama_software'] ?></td>
                            <td><img style="height: 100px; width: 100px" src="uploads/<?= $s['gambar'] ?>"></td>
                            <td>
                                <a data-toggle="modal" class="badge badge-success float-right ml-1"
                                    href="#edit_<?php echo $s['id_software']; ?>">
                                    <i class="fa fa-edit">&nbsp Ubah</i></a>&nbsp &nbsp
                                <a data-toggle="modal" class="badge badge-success float-right ml-1"
                                    href="#delete_<?php echo $s['id_software']; ?>">
                                    <i class="fa fa-trash">&nbsp Hapus</i></a>&nbsp&nbsp
                            </td>
                        </tr>
                        <?php
                            include('editsoftware.php');
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
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