<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $info['id_informasi']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Edit Informasi</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="editinfo.php" enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">ID:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="id"
                                    value="<?php echo $info['id_informasi']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Judul:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="judul"
                                    value="<?php echo $info['judul']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Informasi:</label>
                            </div>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="informasi" id="informasi" style="height:100px"
                                    required="required"
                                    placeholder="Informasi"><?php echo $info['informasi']; ?></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">File Tambahan:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="checkbox" name="edit_file" value="true"> Ceklis jika ingin mengubah file!
                                <input type="file" class="form-control" name="file_tambahan">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Tanggal:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="tanggal"
                                    value="<?php echo $info['tanggal']; ?>">
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
<div class="modal fade" id="delete_<?php echo $info['id_informasi']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Hapus Informasi</h4>
                </center>
            </div>
            <div class="modal-body">
                <p class="text-center">Apakah anda yakin ingin menghapus?</p>
                <h2 class="text-center"><?php echo $info['judul']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Batal</button>
                <a href="hapusinfo.php?id=<?php echo $info['id_informasi']; ?>" class="btn btn-danger"><span
                        class="glyphicon glyphicon-trash"></span> Ya</a>
            </div>
        </div>
    </div>
</div>