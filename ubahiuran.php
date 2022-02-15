<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $iuran['id_iuran']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Edit Data Iuran</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="edit_iuran_proses.php" enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">ID:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="id"
                                    value="<?php echo $iuran['id_iuran']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Nama Penyetor:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama"
                                    value="<?php echo $iuran['nama_penyetor']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Jumlah:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jumlah"
                                    value="<?php echo $iuran['jumlah']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Tanggal:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tanggal"
                                    value="<?php echo $iuran['tanggal']; ?>">
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Batal</button>
                <button type="submit" class="btn btn-success" value=" Edit"><span
                        class="glyphicon glyphicon-check"></span> Edit</a>
                    </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $iuran['id_iuran']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Hapus Data Iuran</h4>
                </center>
            </div>
            <div class="modal-body">
                <p class="text-center">Apakah anda yakin ingin menghapus?</p>
                <h3 class="text-center">Disetor oleh : <?php echo $iuran['nama_penyetor']; ?></h3>
                <h3 class="text-center">Sejumlah : Rp.<?php echo $iuran['jumlah']; ?>,-</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Batal</button>
                <a href="hapusiuran.php?id=<?php echo $iuran['id_iuran']; ?>" class="btn btn-danger"><span
                        class="glyphicon glyphicon-trash"></span> Ya</a>
            </div>
        </div>
    </div>
</div>