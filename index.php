<?php
//start session
session_start();

//crud with database connection
include_once('Crud.php');

$crud = new Crud();

//fetch data
$sql = "SELECT * FROM penduduk";
$result = $crud->read($sql);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>SIDUK</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container">
		<h1 class="page-header text-center">Sistem informasi isi data penduduk</h1>
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<?php
				if (isset($_SESSION['message'])) {
					?>
					<div class="alert alert-info text-center">
						<?php echo $_SESSION['message']; ?>
					</div>
					<?php

					unset($_SESSION['message']);
				}

				?>
				<a href="#add" data-toggle="modal" class="btn btn-primary">Tambah baru</a><br><br>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama depan</th>
							<th>Nama belakang</th>
							<th>Alamat</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						foreach ($result as $key => $row) {
							?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['nama_depan']; ?></td>
								<td><?php echo $row['nama_belakang']; ?></td>
								<td><?php echo $row['alamat']; ?></td>
								<td><a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success">Edit</a> |
									<a href="#delete<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger">Delete</a>
								</td>
								<?php include('action_modal.php'); ?>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<?php include('add_modal.php'); ?>
	<script src="vendor/jquery.min.js"></script>
	<script src="js/bootstrap.min.js" rel="stylesheet"></script>
</body>

</html>