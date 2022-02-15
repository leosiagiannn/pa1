<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center>
                    <h4 class="modal-title" id="myModalLabel">Tambahkan Informasi Baru </h4>
                </center>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="POST" action="kiriminfo.php" enctype="multipart/form-data">
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Judul:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="judul" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Informasi:</label>
                            </div>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="informasi" id="informasi" style="height:100px"
                                    required="required" placeholder="Informasi"></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-2">
                                <label class="control-label" style="position:relative; top:7px;">Gambar:</label>
                            </div>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="file_tambahan">
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