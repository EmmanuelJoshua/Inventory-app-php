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
		<link rel="stylesheet" href="../app/assets/css-app-files/login.css">
		<!-- Font CDN -->
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		<!-- Font Awesome CDN -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	</head>
	<body >
		<header id="header">
			<nav class="navbar navbar-default">
				<div class="container">
					<ul class="nav navbar-nav">
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" class="btn btn-primary">Payroll</a></li>
					</ul>
				</div>
			</nav>
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-white mt-5">
						<h1 class="text-center display-4" style="font-family: Pacifico">Palace Petroleum</h1>
					</div>
					<div class="col-md-6 text-dark" >
						<!-- <h2 class="display-4 text-center">LOGIN</h2> -->
						<div class="col-md-10 text-dark pt-5 pb-5 mt-2" id="login">
							<div class="container">
								<form method="post" onsubmit="submitForm(event)">
									<div class="form-group mb-4 mt-2">
										<label class="form-label mx-auto h5" for="user[login]">Username</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-user"></i></span>
											</div>
											<input class="form-control" type="text" id="username">
										</div>
									</div>
									<div class="form-group mt-3 mb-3">
										<label class="form-label h5" for="user[login]">Password</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-key"></i></span>
											</div>
											<input class="form-control" type="password" id="password">
										</div>
									</div>
									<div class="custom-control custom-checkbox mt-4">
										<input type="checkbox" class="custom-control-input" id="customCheck" name="">
										<label class="custom-control-label" for="customCheck">Remember me</label>
									</div>
									<div class="text-center">
										<input class="btn btn-primary mt-3" type="submit" id="getData" value="Login">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="footer">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 col-12">
						<p style="text-align: center;">
							©
							<script>document.write(new Date().getFullYear());</script>, Palace Petroleum
							&nbsp; &nbsp;
						</p>
					</div>
				</div>
			</div>
		</div>
		
	</body>
	<script type="text/javascript" src="../app/assets/js-app-files/login.js"></script>
</html>