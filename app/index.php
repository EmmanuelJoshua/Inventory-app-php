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
			<div class="col-md-6 text-center text-white pt-5">
				<h2 class="display-4">LOGIN</h2>
				<div class="form-group">
					<form method="post" onsubmit="submitForm(event)">
						<input class="form-control col-9 mx-auto mb-4" placeholder="Username" type="text" id="username">
						<input class="form-control col-9 mx-auto mb-4" placeholder="Password" type="password" id="password">
						<input class="btn btn-primary mt-1" type="submit" id="getData" value="Login">
					</form>
				</div>
			</div>
		</header>
		
	</body>
	<script type="text/javascript" src="../app/assets/js-app-files/login.js"></script>
</html>