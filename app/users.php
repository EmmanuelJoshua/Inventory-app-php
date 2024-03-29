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
		<link rel="stylesheet" href="../app/assets/css-app-files/style.css">
		<!-- Font CDN -->
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dosis:600" rel="stylesheet">
		<!-- Font Awesome CDN -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	</head>
	<body>
		<!-- DASHBOARD WRAPPER -->
		<div class="dashboard-wrapper">
			<div class="container-fluid">
				<!-- ROW CONTAINING LINK TO HOME/DASHBOARD -->
				<div class="row">
						<div class="links col-12 text-white">
							<a href="dashboard.php" style="color: #8CC2FF; text-decoration: none;">Home</a><span> <i class="fas fa-chevron-right" style="font-size: 11.9px;"></i> Users</span>
						</div>
				</div>
				<!-- TOP CONTROLS (BUTTONS and DROPDOWNS) -->
				<div class="row">
					<div class="container-fluid">
						<div class="row">
							<div class="container-fluid">
								<div class="mt-4 top-controls mb-3">
									<button class="btn btn-primary mr-1" data-toggle="modal" data-target="#addUser" style="float: right; width: 105px !important;">Add User<i class="fas fa-plus-circle"></i></button>
									<div class="form-inline">
										<select class="custom-select form-control col-md-2 col-3">
											<option>Search by</option>
											<option>Name</option>
											<option>Role</option>
										</select>
										<input type="text" name="" class="form-control ml-1 col-md-2 col-4" placeholder="">
										
										<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUserModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addUserModal"><i class="fas fa-user-plus"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
  <div class="form-group mb-3">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="username" placeholder="Enter Username" style="width: 100%;">
    </div>
  </div>
  <div class="form-group mb-3">
    <div class="col-sm-12"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" style="width: 100%;">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary pl-1 pr-1" data-dismiss="modal" style="width: 80px !important;">Cancel<i class="fas fa-times-circle"></i></button>
        <button type="button" class="btn btn-primary pl-1 pr-1">Save<i class="fas fa-check-circle"></i></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="updateUser" tabindex="-1" role="dialog" aria-labelledby="updateUserModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="updateUserModal"><i class="fas fa-user-edit"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
  <div class="form-group mb-3">
    <div class="col-sm-12">
      <input type="text" class="form-control" id="username" placeholder="Enter Username" style="width: 100%;">
    </div>
  </div>
  <div class="form-group mb-3">
    <div class="col-sm-12"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" style="width: 100%;">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary pl-1 pr-1" data-dismiss="modal" style="width: 80px !important;">Cancel<i class="fas fa-times-circle"></i></button>
        <button type="button" class="btn btn-primary pl-1 pr-1" style="width: 90px !important;">Update<i class="fas fa-check-circle"></i></button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="deleteUserModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteUserModal">
				<i class="fas fa-user-times"></i>
				</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h4>Do you want to delete this user?</h4>
      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 90px !important;">Cancel<i class="fas fa-times-circle"></i></button>
        <button type="button" class="btn btn-primary pl-1 pr-1">Yes<i class="fas fa-check-circle"></i></button>
      </div>
    </div>
  </div>
</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="updateUser" tabindex="-1" role="dialog" aria-labelledby="updateUserModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="updateUserModal"><i class="fas fa-user-edit"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="form-horizontal">
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control" id="username" placeholder="Enter Username" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="password" class="form-control" id="pwd" placeholder="Enter password" style="width: 100%;">
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary pl-1 pr-1" data-dismiss="modal" style="width: 80px !important;">Cancel<i class="fas fa-times-circle"></i></button>
									<button type="button" class="btn btn-primary pl-1 pr-1" style="width: 90px !important;">Update<i class="fas fa-check-circle"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="deleteUserModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="deleteUserModal"><i class="fas fa-user-times"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h4>Do you want to delete this user?</h4>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 90px !important;">Cancel<i class="fas fa-times-circle"></i></button>
									<button type="button" class="btn btn-primary pl-1 pr-1">Yes<i class="fas fa-check-circle"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- CONTAINER FOR TABLES -->
				<div class="row">
					<div class="container-fluid">
						<!-- DIV FOR USERS -->
						<table class="table bg-white">
							<thead>
								<tr>
									<th scope="col">User Name</th>
									<th scope="col">Last Login</th>
									<th scope="col">Options</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Daniel Ilondu</td>
									<td>Unknown</td>
									<td><div class="nav-item dropdown show">
										<button class="btn dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Actions
										</button>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
											<button class="dropdown-item" href="#" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#updateUser">Update<i class="fas fa-user-edit ml-4"></i></button>
											<button class="dropdown-item" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#deleteUser">Delete<i class="fas fa-user-times ml-4"></i></button>
										</div>
									</div>
								</td>
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