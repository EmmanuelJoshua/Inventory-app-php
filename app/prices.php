<?php include("includes/header.php") ?>
<?php $page = 'prices';include("includes/sideNavigation.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Prices | Palace Petroleum</title>
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
							<a href="dashboard.php" style="color: #8CC2FF; text-decoration: none;">Home</a><span> <i class="fas fa-chevron-right" style="font-size: 11.9px;"></i> Prices</span>
						</div>
				</div>
				<!-- TOP CONTROLS (BUTTONS and DROPDOWNS) -->
				<div class="row">
					<div class="container-fluid">
						<div class="mt-3 top-controls mb-3">
							<button class="btn btn-primary mr-1" data-toggle="modal" data-target="#addPriceCategory" style="float: right; width: 180px !important;">Add Price Category<i class="fas fa-plus-circle"></i></button>
							<div class="form-inline">
								<select class="custom-select form-control col-md-4 col-10">
									<option>Select Price Category</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<!-- DIV CONTAINING MODALS -->
				<div class="top-controls">
					<!-- ADD PRICE CATEGORY MODAL -->
					<div class="modal fade" id="addPriceCategory" tabindex="-1" role="dialog" aria-labelledby="addPriceModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="addPriceModal"><i class="fas fa-plus-square"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="form-horizontal">
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control" placeholder="Enter Price Category">
											</div>
											<div class=" top-controls col-sm-3 mt-3">
												<input type="button" class="btn" value="Submit">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Product Code">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Product Description">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Price">
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
					<!-- EDIT PRICE CATEGORY MODAL -->
					<div class="modal fade" id="editPriceCategory" tabindex="-1" role="dialog" aria-labelledby="editPriceModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="editPriceModal"><i class="fas fa-plus-square"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="form-horizontal">
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Product Code">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Product Description">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Price">
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary pl-1 pr-1" data-dismiss="modal" style="width: 80px !important;">Cancel<i class="fas fa-times-circle"></i></button>
									<button type="button" class="btn btn-primary pl-1 pr-1">Update<i class="fas fa-check-circle"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- DELETE PRICE CATEGORY MODAL -->
					<div class="modal fade" id="deletePrice" tabindex="-1" role="dialog" aria-labelledby="deletePriceModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="deletePriceModal"><i class="fas fa-trash-alt"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h4>Do you want to delete this price category?</h4>
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
						<div class="container">
							<div class="row">
								<div class="productTitle col-md-4 mb-3">
									Price Category :
								</div>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table bg-white">
								<thead>
									<tr>
										<th scope="col">Product Code</th>
										<th scope="col">Product Description</th>
										<th scope="col">Price</th>
										<th scope="col">Options</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Unknown</td>
										<td>Unknown</td>
										<td>Unknown</td>
										<td><div class="nav-item dropdown show">
											<button class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Actions
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<button class="dropdown-item" href="#" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#editPriceCategory">Edit<i class="fas fa-edit ml-4"></i></button>
												<button class="dropdown-item" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#deletePrice">Delete<i class="fas fa-trash-alt ml-4"></i></button>
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
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>