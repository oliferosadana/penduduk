<!-- Add New -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Tambah Penduduk</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Nama Depan:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="nama_depan">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Nama Belakang:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="nama_belakang">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label class="control-label" style="position:relative; top:7px;">Alamat:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="alamat">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" name="add" class="btn btn-primary">Simpan</button>
			</form>
            </div>
			
        </div>
    </div>
</div>