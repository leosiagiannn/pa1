<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $anggota['id_anggota']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Anggota</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="editanggotaproses.php" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">ID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id" value="<?php echo $anggota['id_anggota']; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nama:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" value="<?php echo $anggota['nama']; ?>">
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">NIM:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nim" value="<?php echo $anggota['nim']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Status:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="status" value="<?php echo $anggota['status']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Photo:</label>
					</div>
					<div class="col-sm-10">
						<img src="uploads/<?php echo $anggota['foto']; ?>" width="150">
						<input type="checkbox" name="edit_photo" value="true"> Ceklis jika ingin mengubah photo!
						<input type="file" class="form-control" name="photo">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                <button type="submit" class="btn btn-success" value=" Edit"><span class="glyphicon glyphicon-check"></span> Edit</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $anggota['id_anggota']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Hapus Anggota</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Apakah anda yakin ingin menghapus?</p>
				<h2 class="text-center"><?php echo $anggota['nama']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                <a href="hapusanggota.php?id=<?php echo $anggota['id_anggota']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Ya</a>
            </div>

        </div>
    </div>
</div>