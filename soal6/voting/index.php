<?php
require_once "function/config.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>data sensus penduduk</title>
	<meta name="description" content="Free Bootstrap 4 Admin Theme | Pike Admin">
	<meta name="author" content="Pike Web Development - https://www.pikephp.com">

	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/DataTables/datatables.css" rel="stylesheet" type="text/css" />
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/tugas.css" rel="stylesheet" type="text/css" />
</head>

<body class="adminbody">
	<div id="main">
		<!-- top bar navigation -->
		<div class="headerbar">
			<!-- LOGO -->
			<div class="headerbar-left">
				<a href="index.html" class="logo"><img alt="Logo" src="assets/images/logo.png" /> <span>sensus</span></a>
			</div>
			<!-- akhir logo -->
			<nav class="navbar-custom">
				<ul class="list-inline float-right mb-0">
					<li class="list-inline-item dropdown notif">
						<a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
						 aria-expanded="false">
							<img src="assets/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
							<!-- item-->
							<div class="dropdown-item noti-title">
								<h5 class="text-overflow"><small>Hello, admin</small> </h5>
							</div>
							<!-- item-->
							<a href="" class="dropdown-item notify-item">
								<i class="fa fa-power-off"></i> <span>Logout</span>
							</a>
						</div>
					</li>
				</ul>
				<ul class="list-inline menu-left mb-0">
					<li class="float-left">
						<button class="button-menu-mobile open-left">
							<i class="fa fa-fw fa-bars"></i>
						</button>
					</li>
				</ul>
			</nav>
		</div>
		<!-- End Navigation -->

		<!-- Left Sidebar -->
		<div class="left main-sidebar">
			<div class="sidebar-inner leftscroll">
				<div id="sidebar-menu">
					<ul>
						<li class="submenu">
							<a class="active" href="?halaman=home"><i class="fa fa-fw fa-bars"></i><span> Home </span> </a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="content-page">
			<!-- Start content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12">
							<div class="breadcrumb-holder">
								<h1 class="main-title float-left">Dashboard</h1>
								<ol class="breadcrumb float-right">
									<li class="breadcrumb-item">Home</li>
									<li class="breadcrumb-item active">Dashboard</li>
								</ol>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					<!-- end row -->
					<?php 
					if (isset($_GET['halaman'])) {
						if ($_GET['halaman'] == 'update') {
							require_once "update.php";
						}
					 } 
					?> 
					<!-- awal -->
					<div class="table-responsive">
					<table class="table table-bordered boxx" id="person">
						 <thead class="thead-light">
							 <tr>
								 <th>no</th>
								 <th>nama</th>
								 <th>jumlah voting</th>
								 <th>status</th>
							 </tr>
						 </thead>
						 <tbody>
						 <?php
						 $no=1;
						 $sql=mysqli_query($conn,"SELECT * FROM quick")or die(mysqli_error($conn));
						 while ($row=mysqli_fetch_assoc($sql)) {
								 ?>
								<tr>
									<td><?=$no++?></td>
									<td><?=$row['name'];?></td>
									<td><?=$row['voting'];?></td>
									<td>
								    	<a href="?halaman=update&id=<?=$row['id_quick']?>"  class="btn btn-info">tambah</a>
									</td>
									</tr>
						 <?php }?>
						 </tbody>
					</table>
				</div>
<!-- akhir -->
				</div>
			</div>
			<!-- END content -->
		</div>
		<!-- END content-page -->

		<footer class="footer">
			<span class="text-right">
				Copyright <a target="_blank" href="#">Your Website</a>
			</span>
			<span class="float-right">
				Powered by <a target="_blank" href="#"><b>rion</b></a>
			</span>
		</footer>

	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/DataTables/datatables.min.js"></script>
	<script src="assets/package/dist/sweetalert2.all.min.js"></script>
	<script src="assets/js/pikeadmin.js"></script>
	<script src="assets/js/tugas.js"></script>
</body>

</html>