<?php include("includes/header.php") ?>
<?php include("includes/sideNavigation.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Users | Palace Petroleum</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Website Icon -->
		<link rel="icon" href="">
		<!--Bootstrap -->
		<link rel="stylesheet" href="../app/assets/libraries/css-libs/bootstrap.css">
		<!-- Website Stylesheet -->
		<link rel="stylesheet" href="../app/assets/css-app-files/users.css">
		<!-- Font CDN -->
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dosis:600" rel="stylesheet">
		<!-- Font Awesome CDN -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	</head>
	<body>
		<div class="dashboard-wrapper pt-3">
			<div class="container-fluid">
				<div class="row">
					<div class="container-fluid">
						<div class="links col-12 rounded text-white">
							<a href="#" style="color: #8CC2FF">Dashboard</a><span> / Users</span>
						</div>
						<div>
						</div>
						<div class="row">
							<div class="container-fluid">
								<div class="mt-4 top-controls mb-4">
									<div class="form-inline">
										<button class="btn btn-primary mr-1">Add<i class="fas fa-plus-circle"></i></button>
										<select class="form-control col-md-2 col-4">
											<option>Search by</option>
											<option>Name</option>
											<option>Role</option>
										</select>
										<input type="text" name="" class="form-control ml-1 col-md-2 col-4" placeholder="">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="container">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">Username</th>
											<th scope="col">Role</th>
											<th scope="col">Last Login</th>
											<th scope="col">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Daniel Ilondu</td>
											<td>Admin</td>
											<td>Unknown</td>
											<td><div class="nav-item dropdown show">
                <button class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Actions
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="users.php" style="font-family: 'Titillium Web'">User Settings<i class="fas fa-user-cog ml-4"></i></a>
                </div>
              </div></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</body>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		</html>