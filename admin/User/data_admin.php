<!DOCTYPE html>
<html>
<head>
	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>


<body class="wide comments example dt-example-bootstrap">
	<a name="top" id="top"></a>
	<div class="fw-background">
		<div></div>
	</div>
	<div class="fw-container">
		<div class="fw-header">
			<div class="nav-search">
				<div class="nav-item i-user">
					<div class="account"></div>
				</div>
			</div>
		</div>
		<div class="fw-body">
			<div class="content">
      <?php
$sqlt = mysqli_query($koneksi, "select * from tbl_admin");
$no=1;
?>

				<table id="table_id"  class="table hover multiple-select-row data-table-export nowrap">
					<thead>
          <tr>
 	          <th colspan="6"><button type="button" class="btn  btn-info" data-toggle="modal" data-target="#modal-success">Tambah Data</button></th><br><br>
        </tr>
						<tr>
							<th>No</th>
							<th>Nama Admin </th>
							<th>Username</th>
							<th>Password</th>
							<th>Level</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<?php
       
            while($dat = mysqli_fetch_array($sqlt)){

                ?>
                <tr>

                <td><?= $no++ ?></td>
                <td><?= $dat['nama_admin']; ?></td>
                <td><?= $dat['username']; ?></td>
                <td><?=  $dat['password']; ?></td>
                <td><?=  $dat['level']; ?></td>


					<td>
						 <form action="hapus.php?id=<?= $dat['id_admin']; ?>" method='post'>
             <a href="index.php?page=edit_admin&id=<?= $dat['id_admin']; ?>" class="btn btn-info "><i  class="  fa fa-pencil-square"></i></a>
						 <button type="submit" name="hapus_admin" class=" btn btn-danger"><i  class=" fa fa-trash-o"></i></button>
							
							</form>
		            </td>
</tr>
<?php } ?>
					</table>
				</div>
			</div>
		</table>
</body>
<!-- modal -->
<div class="modal modal-success fade" id="modal-success">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah  Data</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal btn-warning" method="POST" action="aksi_simpan_admin.php" enctype="multipart/form-data">
          <div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Nama Admin</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="">
              </div>
            </div>
			<div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" placeholder="">
              </div>
            </div>
			<div class="box-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="">
              </div>
            </div>
			<div class="box-body">
			<div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Level </label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="level" name="level">
              </div>
            </div>
		</div>
	</div>
	<div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
        <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
      </div>

	  <!-- js -->
<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../vendors/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<!-- buttons for Export datatable -->
	<script src="../vendors/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="../vendors/src/plugins/datatables/js/vfs_fonts.js"></script>
	<!-- Datatable Setting js -->
	<script src="../vendors/scripts/datatable-setting.js"></script></body>
</html>
