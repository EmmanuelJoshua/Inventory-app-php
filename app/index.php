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
	</head>
	<body>
		<header id="header">
			<nav class="navbar-nav">
				
			</nav>
			<div class="container">
				<div class="col-md-6 text-dark pt-4 pb-4 mt-5" id="login">
					<h2 class="display-4 text-center">LOGIN</h2>
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
						
						<input class="btn btn-primary text-center" type="submit" id="getData" value="Login">
					</form>
				</div>
			</div>
		</div>
	</header>
	
</body>
<script type="text/javascript" src="../app/assets/js-app-files/login.js"></script>
</html>