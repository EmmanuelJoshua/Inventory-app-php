<?php include("includes/header.php") ?>
<?php include("includes/sideNavigation.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home | Palace Petroleum</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Website Icon -->
		<link rel="icon" href="">
		<!--Bootstrap -->
		<link rel="stylesheet" href="../app/assets/libraries/css-libs/bootstrap.css">
		<!-- Website Stylesheet -->
		<link rel="stylesheet" href="../app/assets/css-app-files/dashboard.css">
		<!-- Font CDN -->
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dosis:600" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<!-- Font Awesome CDN -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	</head>
	<body>
		<div class="dashboard-wrapper">
			<div class="dash-display mb-3">
				<h1>Dashboard</h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="dash-content col-md-11 mx-auto text-center">
						<h2 style="font-family: pacifico; font-size: 40px;">Palace Petroleum</h2>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row mb-4">
					<div class="col-md-5 mx-auto dash-content text-center mt-3">
						<img src="../app/assets/images/user.png" width="170">
						<hr>
						<span>Mr. User</span>
						
					</div>
					<div class="col-md-5 mx-auto dash-content text-center mt-3 time">
						<i class="far fa-clock"></i><span>2019-02-02</span>
						<hr>
						<i class="fas fa-history"></i><span>8:54 PM</span>
						
					</div>
				</div>
			</div>
			<div id="footer">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 col-12">
							<p style="text-align: center;">
								&copy;
								<script>document.write(new Date().getFullYear());</script>, Palace Petroleum
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>