<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $pengurus['id_pengurus']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Edit Pengurus</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="editpengurusproses.php" enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">ID:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="id"
                                    value="<?php echo $pengurus['id_pengurus']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Nama:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama"
                                    value="<?php echo $pengurus['nama']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">NIM:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nim"
                                    value="<?php echo $pengurus['nim']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Jabatan:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="jabatan"
                                    value="<?php echo $pengurus['jabatan']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Photo:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="checkbox" name="edit_photo" value="true"> Ceklis jika ingin mengubah photo!
                                <input type="file" class="form-control" name="photo">
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
<div class="modal fade" id="delete_<?php echo $pengurus['id_pengurus']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Hapus Pengurus</h4>
                </center>
            </div>
            <div class="modal-body">
                <p class="text-center">Apakah anda yakin ingin menghapus?</p>
                <h2 class="text-center"><?php echo $pengurus['nama']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Batal</button>
                <a href="hapuspengurus.php?id=<?php echo $pengurus['id_pengurus']; ?>" class="btn btn-danger"><span
                        class="glyphicon glyphicon-trash"></span> Ya</a>
            </div>
        </div>
    </div>
</div>