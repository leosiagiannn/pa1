<?php
require_once 'functions.php';
if (isset($_POST["tambahkan"])) {
	// cek apakah data berhasil di tambahkan atau tidak
	if (tambahexp($_POST) > 0) {
		echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'iuran_admin.php'
                </script>
            ";
	} else {
		echo "
            <script>
                    alert('Data gagal ditambahkan!');
                    document.location.href = 'iuran_admin.php'
            </script>
            ";
	}
}
?>
<?php
require_once 'functions.php';
?>
<!-- Add New -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Tambahkan Data Pengeluaran </h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Tujuan:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tujuan">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Harga:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jumlah">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Tanggal:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tanggal">
                            </div>
                        </div>
                        <div class="row form-group">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span
                            class="glyphicon glyphicon-remove"></span> Batal</button>
                    <button type="submit" name="tambahkan" class="btn btn-info"><span
                            class="glyphicon glyphicon-check"></span> Tambahkan</a>
                        </form>
                </div>
            </div>
        </div>
    </div>