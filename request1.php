<?php
require_once 'functions.php';
if (!isset($_SESSION['logged_in'])) {
    header('location: index.php');
}
$title = "Request Kelas Tutorial";
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
                    <a class="navbar-brand" href="dashboard_user.php"><img src="images/logo1.png" alt="" width="50"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="dashboard_user.php">Beranda </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Kepengurusan & Anggota <span
                                    class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="pengurus1.php">Kepengurusan</a></li>
                                <li><a href="anggota1.php">Anggota</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="iuran_anggota.php">Keuangan </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">Akademis <span
                                    class="fa fa-angle-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="request1.php">Request Kelas Tutorial</a></li>
                                <li><a href="Penyediaan software1.php">Penyediaan Software</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="notif1.php"><i class="fa fa-bell">Notifikasi </i></a>
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
                    <a href="dashboard_user.php"><img src="images/logo1.png" alt="" width="140"></a>
                </div><!-- end logo -->

                <div class="margin-block"></div>

                <ul class="primary-menu">
                    <li class="child-menu"><a href="dashboard_user.php">Beranda <i class="fa fa-home"></i>

                    </li>
                    <li class="child-menu"><a href="#">Kepengurusan & Anggota <i class="fa fa-angle-right"></i></a>
                        <div class="sub-menu-wrapper">
                            <ul class="sub-menu center-content">
                                <li><a href="pengurus1.php">Kepengurusan <i class="fa fa-user"></i></a></li>
                                <li><a href="anggota1.php">Anggota <i class="fa fa-users"></i></a></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="child-menu"><a href="iuran_anggota.php">Keuangan <i class="fa fa-dollar"></i>

                    </li>
                    <li class="child-menu"><a href="#">Akademis <i class="fa fa-angle-right"></i></a>
                        <div class="sub-menu-wrapper">
                            <ul class="sub-menu center-content">
                                <li><a href="request1.php">Request Kelas Tutorial <i class="fa fa-book"></i></a>
                                </li>
                                <li><a href="Penyediaan software1.php">Penyediaan software <i
                                            class="fa fa-desktop"></i></a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="child-menu"><a href="contact1.php">Kontak <i class="fa fa-comment"></i> </a>

                    </li>
                    <li class="child-menu">
                        <a href="#notif" data-toggle="modal">Notifikasi <i class="fa fa-bell"> </i>
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
                        <h3><mark class="rotate">Hello, Bonjour, Merhaba</mark> we are Genius, we have brought
                            together the best quality services, offers, projects for you!</h3>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="panel panel-primary">
        <div class="section-title text-center">
            <h3>Request Kelas Tutorial</h3>
            <p style="color:black;">Anggota dapat merequest kelas tutorial demi mendukung berjalannya proses UKM
                dengan baik</p>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="control-label">Topik</label>
                            <input type="text" class="form-control" name="topik" id="topik" required="required">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="control-label">Kelas</label>
                            <input type="text" class="form-control" name="kelas" id="kelas" required="required">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="control-label">Kuota</label>
                            <input type="number" class="form-control" name="kuota" id="kuota" required="required">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="control-label">Pengajar</label>
                            <input type="number" class="form-control" id="pengajar" name="pengajar" required="required">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label class="control-label">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal">
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary" value="Kirim">
            </div>
        </form>
    </div>
</div>




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
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $topik = $_POST['topik'];
    $kelas = $_POST['kelas'];
    $kuota = $_POST['kuota'];
    $pengajar = $_POST['pengajar'];
    $tanggal = $_POST['tanggal'];
    $bool = true;

    $mysqli = new mysqli("localhost", "root", "", "pa01");
    $query = $mysqli->query("SELECT * FROM kelas_tutor");
    if (!empty($tanggal)) {
        $mysqli->query("INSERT INTO kelas_tutor (topik, kelas, kuota, pengajar, tanggal) VALUES ('$topik', '$kelas', '$kuota', '$pengajar', '$tanggal')");
        print '<script>alert("Berhasil melakukan request kelas")</script>';
        print '<script>window.location.assign("request1.php");</script>';
        exit;
    }
    if ($bool) {
        print '<script>alert("Masukkan Tanggal pemakaian Kelas")</script>';
        print '<script>window.location.assign("request1.php");</script>';
    }
}
include('layout/footer.php');
?>