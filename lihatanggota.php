<!-- Edit -->
<div class="modal fade" id="lihat_<?php echo $anggota['id_anggota']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <label class="control-label" style="position:relative; top:7px;"><?php echo $anggota['id_anggota']; ?></label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nama:</label>
                        
					</div>
					<div class="col-sm-10">
                        <label class="control-label" style="position:relative; top:7px;"><?php echo $anggota['nama']; ?></label>
					</div>
				</div>
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">NIM:</label>
					</div>
					<div class="col-sm-10">
                         <label class="control-label" style="position:relative; top:7px;"><?php echo $anggota['nim']; ?></label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Status:</label>
					</div>
					<div class="col-sm-10">
                        <label class="control-label" style="position:relative; top:7px;"><?php echo $anggota['status']; ?></label>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Photo:</label>
					</div>
					<div class="col-sm-10">
						<img src="uploads/<?php echo $anggota['foto']; ?>" width="150">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Kembali</button>
                
			</form>
            </div>

        </div>
    </div>
</div>