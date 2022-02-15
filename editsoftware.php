<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $s['id_software']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Edit software</h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="editsoftwareproses.php" enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">ID:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="id"
                                    value="<?php echo $s['id_software']; ?>" readonly>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Nama:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama"
                                    value="<?php echo $s['nama_software']; ?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">File:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="checkbox" name="edit_file" value="true"> Ceklis jika ingin mengubah file!
                                <input type="file" class="form-control" name="file" value="<?php echo $s['file'] ?>">
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
<div class="modal fade" id="delete_<?php echo $s['id_software']; ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Hapus software</h4>
                </center>
            </div>
            <div class="modal-body">
                <p class="text-center">Apakah anda yakin ingin menghapus?</p>
                <h2 class="text-center"><?php echo $s['nama_software']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                        class="glyphicon glyphicon-remove"></span> Batal</button>
                <a href="hapussoftware.php?id=<?php echo $s['id_software']; ?>" class="btn btn-danger"><span
                        class="glyphicon glyphicon-trash"></span> Ya</a>
            </div>
        </div>
    </div>
</div>