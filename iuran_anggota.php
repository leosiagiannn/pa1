<?php
require_once 'functions.php';
if (!isset($_SESSION['logged_in'])) {
    header('location: index.php');
}
$title = "Keuangan";
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
<?php
include('notif1.php');
?>
<div id="wrapper">
    <div class="section bgcolor noover">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tagline-message">
                        <h3><mark class="rotate">Hello, Hai, Horas</mark>!!! Website ini dibangun untuk UKM Del
                            UI/UX Club di Institut Teknologi Del</h3>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <br><br>
    <?php
    // $SemuaIuran = getAllIuran();
    // $SemuaPengeluaran = getAllExp();
    //untuk iuran
    $jumlahDataPerHalaman = 5;
    $jumlahData = count(query("SELECT * FROM data_iuran")); // jumlah halaman = total data/ data per halaman
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1; // ? = if, :=else

    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
    $SemuaIuran = query("SELECT * FROM data_iuran LIMIT $awalData, $jumlahDataPerHalaman");
    $jumlah1 = count(query("SELECT * FROM data_iuran LIMIT $awalData, $jumlahDataPerHalaman"));


    //untuk exp
    // $jumlahDataPerHalaman =5;
    $jumlahData1 = count(query("SELECT * FROM data_pengeluaran")); // jumlah halaman = total data/ data per halaman
    $jumlahHalaman1 = ceil($jumlahData1 / $jumlahDataPerHalaman);
    $halamanAktif1 = (isset($_GET["page"])) ? $_GET["page"] : 1; // ? = if, :=else

    $awalData1 = ($jumlahDataPerHalaman * $halamanAktif1) - $jumlahDataPerHalaman;
    $SemuaPengeluaran = query("SELECT * FROM data_pengeluaran LIMIT $awalData1, $jumlahDataPerHalaman");
    $jumlah2 = count(query("SELECT * FROM data_pengeluaran LIMIT $awalData1, $jumlahDataPerHalaman"));

    ?>

    <section class="blog-page-section spad ">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h3>Data Iuran</h3>
                    <text style="color:black;">Untuk mendukung transparansi, berikut ditampilkan data iuran anggota
                        UKM
                    </text>
                </div>
                <div class="col-md-12">
                    <!-- Pagination Manual -->
                    <?php
                    $numberIn = 1;
                    if ($halamanAktif > 1) : ?>
                    <a class="paginationText" href="?halaman=<?= $halamanAktif - 1; ?>">Previous</a>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                    <?php if ($i == $halamanAktif) : ?>
                    <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: blue;"><?= $i; ?></a>
                    <?php else : ?>
                    <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                    <?php endif; ?>
                    <?php endfor; ?>
                    <?php if ($halamanAktif < $jumlahHalaman) : ?>
                    <a class="paginationText" href="?halaman=<?= $halamanAktif + 1; ?>">Next</a>
                    <?php endif;  ?>
                    <!-- Pagination Manual -->
                    <table style="width:100%;text-align:center; color:black;"
                        class="table table-striped table-bordered">
                        <thead class="bg-primary">
                            <tr style="color: black">
                                <td><strong>No</strong></td>
                                <td><strong>Nama</strong></td>
                                <td><strong>Jumlah</strong></td>
                                <td><strong>Tanggal</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($SemuaIuran as $iuran) { ?>
                            <tr>
                                <td><?= $numberIn++ ?></td>
                                <td><?= $iuran['nama_penyetor'] ?></td>
                                <td>Rp.<?= $iuran['jumlah'] ?>,-</td>
                                <td><?= $iuran['tanggal'] ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <div>
                        <div class="col-md-8">
                            <p style="color: black;">Showing <?php echo $jumlah1  ?> of
                                <?php echo $jumlahData  ?>
                                datas</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <br>
    <hr><br>

    <section class="blog-page-section spad ">
        <div class="container">


            <div class="row">
                <div class="section-title text-center">
                    <h3>Data Pengeluaran</h3>
                    <text style="color:black;">Untuk mendukung transparansi, berikut ditampilkan data Pengeluaran
                        UKM
                    </text>
                </div>
                <div class="col-md-12">
                    <!-- Pagination Manual -->
                    <?php
                    $numberOut = 1;
                    if ($halamanAktif1 > 1) : ?>
                    <a class="paginationText" href="?page=<?= $halamanAktif1 - 1; ?>">Previous</a>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= $jumlahHalaman1; $i++) : ?>
                    <?php if ($i == $halamanAktif1) : ?>
                    <a href="?page=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
                    <?php else : ?>
                    <a href="?page=<?= $i; ?>"><?= $i; ?></a>
                    <?php endif; ?>
                    <?php endfor; ?>
                    <?php if ($halamanAktif1 < $jumlahHalaman1) : ?>
                    <a class="paginationText" href="?page=<?= $halamanAktif1 + 1; ?>">Next</a>
                    <?php endif;  ?>
                    <!-- Pagination Manual -->
                    <table style="width:100%;text-align:center; color:black;"
                        class="table table-striped table-bordered">
                        <thead class="bg-primary">
                            <tr style="color: black;">
                                <td><strong>ID Pengeluaran</strong></td>
                                <td><strong>Tujuan</strong></td>
                                <td><strong>Jumlah</strong></td>
                                <td><strong>Tanggal</strong></td>
                            </tr>
                        </thead>
                        <?php foreach ($SemuaPengeluaran as $exp) { ?>
                        <tr>
                            <td><?= $numberOut++ ?></td>
                            <td><?= $exp['tujuan'] ?></td>
                            <td>Rp.<?= $exp['jumlah'] ?>,-</td>
                            <td><?= $exp['tanggal'] ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <div>
                        <div class=" col-md-8">
                            <p style="color: black;">Showing <?php echo $jumlah2  ?> of <?php echo $jumlahData1  ?>
                                datas</p>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
    </section>


    <?php $DaftarAkun = getAllAkun() ?>


    <br><br>

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