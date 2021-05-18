<!-- Delete -->
<div class="modal fade" id="delete<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Hapus Data Penduduk</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid text-center">
				<h5>Apakah kamu yakin mau menghapusnya ?</h5>
				<h2>Name: <b><?php echo $row['nama_depan'].' '.$row['nama_belakang']; ?></b></h2> 
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Iya</a>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->

<!-- Edit -->
<div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Data Penduduk</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php?id=<?php echo $row['id']; ?>">
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">Nama Depan:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="nama_depan" class="form-control" value="<?php echo $row['nama_depan']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">Nama Belakang:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="nama_belakang" class="form-control" value="<?php echo $row['nama_belakang']; ?>">
					</div>
				</div>
				<div style="height:10px;"></div>
				<div class="row">
					<div class="col-lg-2">
						<label style="position:relative; top:7px;">Alamat:</label>
					</div>
					<div class="col-lg-10">
						<input type="text" name="alamat" class="form-control" value="<?php echo $row['alamat']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="submit" name="edit" class="btn btn-warning">Simpan</button>
            </div>
			</form>
        </div>
    </div>
</div>
<!-- /.modal -->