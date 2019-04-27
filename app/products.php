<?php include("includes/header.php") ?>
<?php include("includes/sideNavigation.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Products | Palace Petroleum</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Website Icon -->
		<link rel="icon" href="">
		<!--Bootstrap -->
		<link rel="stylesheet" href="../app/assets/libraries/css-libs/bootstrap.css">
		<!-- Website Stylesheet -->
		<link rel="stylesheet" href="../app/assets/css-app-files/products.css">
		<!-- Font CDN -->
		<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Dosis:600" rel="stylesheet">
		<!-- Font Awesome CDN -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	</head>
	<body>
		<div class="dashboard-wrapper pt-3">
			<div class="container">
				<div class="row">
					<div class="container-fluid">
						<div class="links col-12 rounded text-white mt-3">
							<a href="dashboard.php" style="color: #8CC2FF; text-decoration: none;">Home</a><span> / Products</span>
						</div>
						<div class="row">
							<div class="container-fluid">
								<div class="mt-4 top-controls mb-4">
									<button class="btn btn-primary mr-1" data-toggle="modal" data-target="#addUser" style="    float: right;">Add<i class="fas fa-plus-circle"></i></button>
									<div class="form-inline">
										<select class="form-control col-md-2 col-3">
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
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>