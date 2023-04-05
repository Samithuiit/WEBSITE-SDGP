<?php 
session_start();
if (isset($_SESSION['user_name'])) {

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="icon" type="image/x-icon" href="../../assets/logo-no-background.png">

	<!-- <link rel="canonical" href="https://demo-basic.adminkit.io/" /> -->

	<title>Admin Home|EZ Ride</title>

	<link href="app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          		<span class="align-middle">EZ Ride</span>
        		</a>
				<ul class="sidebar-nav">
					<li class="sidebar-item active">
						<a class="sidebar-link" href="index.html">
              			<i class="align-middle"></i> <span class="align-middle">Home</span>
            			</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="index.html">
              			<i class="align-middle"></i> <span class="align-middle">Bus 01</span>
            			</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="logout.php">
              			<i class="align-middle"></i> <span class="align-middle">Log Out</span>
            			</a>
					</li>
				</ul>

			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          		<i class="hamburger align-self-center"></i>
        		</a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<span class="text-dark">Admin</span>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3"><strong>Analytics</strong> Summary</h1>

					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Earning Prediction</h5>
													</div>
												</div>
												<h1 class="mt-1 mb-3">$00.00</h1>
												<div class="mb-0">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> 0.00% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Passengers</h5>
													</div>
												</div>
												<h1 class="mt-1 mb-3">000</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 0.00% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Earnings</h5>
													</div>
												</div>
												<h1 class="mt-1 mb-3">$00.00</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 0.00% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Distance Traveled</h5>
													</div>
												</div>
												<h1 class="mt-1 mb-3">00</h1>
												<div class="mb-0">
													<span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> 0.00% </span>
													<span class="text-muted">Since last week</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted"><strong>EZ Ride</strong></a> - <a class="text-muted" href="index.html" target="_blank"><strong>Virtual Travel Pass</strong></a>								&copy;
							</p>
					</div>
				</div>
			</footer>
		</div>
	</div>
</body>

</html>
<?php 

}else{
     header("Location: index.php");
     exit();
}
 ?>
