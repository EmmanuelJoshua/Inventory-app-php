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
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
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
						<div class="col-md-10 text-dark pt-5 pb-5 mt-3" id="login">
							<div class="container">
								<form method="post" onsubmit="submitForm(event)">
									<div class="form-group">
										<label class="form-label mx-auto h5" for="user[login]">Username</label>
										<input class="form-control col-12  mb-4" type="text" id="username">
									</div>
									<div class="form-group">
										<label class="form-label h5" for="user[login]">Password</label>
										<input class="form-control col-12 mb-4" type="password" id="password">
									</div>
									<div class="text-center">
										<input class="btn btn-primary" type="submit" id="getData" value="Login">
									</div>
								</form>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</header>

		<header id="header2">
		</header>
		<!-- <div id="footer" class="bg-dark text-white">
			<span>© All Rights Reserved.</span>
		</div> -->
		
	</body>
	<script type="text/javascript" src="../app/assets/js-app-files/login.js"></script>
</html>