<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="/favicon/favicon.ico" type="image/png" />


	<!--plugins-->
	<link href="public/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="public/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="public/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="public/assets/css/pace.min.css" rel="stylesheet" />
	<script src="public/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="public/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="public/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="public/assets/css/app.css" rel="stylesheet">
	<link href="public/assets/css/icons.css" rel="stylesheet">

	<title>Dashtrans - Bootstrap5 Admin Template</title>
</head>

<body class="bg-theme bg-theme2">

	<!--start header -->
	<header>
		<div class="container">
			<nav class="navbar navbar-expand">
				<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
				</div>

				<div class="top-menu ms-auto d-none">
					<div class="navbar-nav align-items-center">
						<div class="nav-item dropdown dropdown-large">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							</a>
							<div class="header-notifications-list">
							</div>
						</div>
						<div class="nav-item dropdown dropdown-large">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

							</a>
							<div class="dropdown-menu dropdown-menu-end">

								<div class="header-message-list">

								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="user-box dropdown">
					<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<img src="public/assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
						<div class="user-info ps-3">
							<p class="user-name mb-0">Pauline Seitz</p>
							<p class="designattion mb-0">Web Designer</p>
						</div>
					</a>
					<ul class="dropdown-menu dropdown-menu-end">
						<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
						</li>
						<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
						</li>
						<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
						</li>
						<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
						</li>
						<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
						</li>
						<li>
							<div class="dropdown-divider mb-0"></div>
						</li>
						<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</header>
	<!--end header -->
	<div class="page-title">
		<div class="container text-center">
			<div class="row">
				<div class="col">
					<img src="/img/logo-pta.png" width="80" height="100">
					<h1 class="mb-0 text-uppercase text-center text-light">DIREKTORI PUTUSAN </h1>
					<h4 class="description text-center text-light">PENGADILAN TINGGI AGAMA BANDUNG</h4>
				</div>
			</div>
		</div>
	</div>
	<!--start page wrapper -->
	<div class="container">
		<div class="page-content">

			<body>

				@yield('content')

			</body>
		</div>
	</div>
	<!--end page wrapper -->
	<!--start overlay-->
	<div class="overlay toggle-icon"></div>
	<!--end overlay-->
	<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
	<!--End Back To Top Button-->
	<footer class="text-center">
		<p>Copyright © 2021. All right reserved.</p>
	</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr />
			<p class="mb-0">Gaussian Texture</p>
			<hr>

			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>

			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			</ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="public/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="public/assets/js/jquery.min.js"></script>
	<script src="public/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="public/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="public/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="public/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>


	<script>
		$(document).ready(function() {
			$('#example').DataTable(

			);
			$("div.dataTables_filter input").focus();
		});
	</script>


	<script>
		$(document).ready(function() {
			$('#example').DataTable()
		});
	</script>


	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable({
				lengthChange: false,
				buttons: ['copy', 'excel', 'pdf', 'print']
			});

			table.buttons().container()
				.appendTo('#example2_wrapper .col-md-6:eq(0)');
		});
	</script>
	<!--app JS-->
	<script src="public/assets/js/app.js"></script>
</body>

</html>