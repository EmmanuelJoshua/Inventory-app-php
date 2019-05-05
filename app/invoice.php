<?php include("includes/header.php") ?>
<?php include("includes/sideNavigation.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Invoice | Palace Petroleum</title>
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
		<div class="dashboard-wrapper pt-3">
			<div class="container">
				<!-- ROW CONTAINING LINK TO HOME/DASHBOARD -->
				<div class="row">
					<div class="container-fluid">
						<div class="links col-12 rounded text-white mt-3">
							<a href="dashboard.php" style="color: #8CC2FF; text-decoration: none;">Home</a><span> <i class="fas fa-chevron-right" style="font-size: 11.9px;"></i> Invoice</span>
						</div>
					</div>
				</div>
				<!-- TOP CONTROLS (BUTTONS and DROPDOWNS) -->
				<div class="row">
					<div class="container-fluid">
						<div class="row mb-4">
							<div class="col-md-6 top-controls2 mt-4">
								<button class="btn topcontrolActive mr-1" style="width: 110px !important;">Registered</button>
								<button class="btn mr-1" style="width: 130px !important;">Unregistered</button>
								<button class="btn mr-1" style="width: 130px !important;">Invoice Ledger</button>
							</div>
							<div class="col-md-6 top-controls text-right mt-4">
								<button class="btn btn-primary mr-1" data-toggle="modal" data-target="#receivePayment" style="width: 170px !important;">Receive Payment<i class="fas fa-plus-circle"></i></button>
								<button class="btn btn-primary mr-1" data-toggle="modal" data-target="#makePayment" style=" width: 140px !important;">Make Payment<i class="fas fa-plus-circle"></i></button>
							</div>
						</div>
					</div>
				</div>
				<!-- CONTAINER FOR TABLES -->
				<div class="row">
					<div class="container-fluid">
						<!-- DIV FOR REGISTERED CUSTOMERS -->
						<div id="registeredCustomers" class="animated fadeIn">
							<div class="table-responsive">
								<table class="table bg-white">
									<thead>
										<tr>
											<th scope="col">S/N</th>
											<th scope="col">Product Code</th>
											<th scope="col">Description</th>
											<th scope="col">Quantity</th>
											<th scope="col">Ref</th>
											<th scope="col">Amount</th>
											<th scope="col">Options</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Unknown</td>
											<td>Unknown</td>
											<td>Unknown</td>
											<td>Unknown</td>
											<td>Unknown</td>
											<td>Unknown</td>
											<td><div class="nav-item dropdown show">
												<button class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Actions
												</button>
												<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
													<button class="dropdown-item" href="#" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#editProduct">Edit<i class="fas fa-edit ml-4"></i></button>
													<button class="dropdown-item" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#deleteProduct">Delete<i class="fas fa-trash-alt ml-4"></i></button>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- DIV FOR UNREGISTERED CUSTOMERS -->
					<div id="unregisteredCustomers" class="d-none animated fadeIn">
						<div class="table-responsive">
							<table class="table bg-white">
								<thead>
									<tr>
										<th scope="col">S/N</th>
										<th scope="col">Product Code</th>
										<th scope="col">Description</th>
										<th scope="col">Quantity</th>
										<th scope="col">Ref</th>
										<th scope="col">Amount</th>
										<th scope="col">Options</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Unknown</td>
										<td>Unknown</td>
										<td>Unknown</td>
										<td>Unknown</td>
										<td>Unknown</td>
										<td>Unknown</td>
										<td><div class="nav-item dropdown show">
											<button class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Actions
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<button class="dropdown-item" href="#" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#editProduct">Edit<i class="fas fa-edit ml-4"></i></button>
												<button class="dropdown-item" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#deleteProduct">Delete<i class="fas fa-trash-alt ml-4"></i></button>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- DIV FOR INVOICE LEDGER (Display is set to none) -->
				<div id="invoiceLedger" class="d-none animated fadeIn">
					<div class="top-controls">
						<div class="table-responsive">
							<table class="table bg-white mt-4">
								<thead>
									<tr>
										<th scope="col">S/N</th>
										<th scope="col">Date</th>
										<th scope="col">Customer</th>
										<th scope="col">Invoice Number</th>
										<th scope="col">Amount</th>
										<th scope="col">Options</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Unknown</td>
										<td>Unknown</td>
										<td>Unknown</td>
										<td>Unknown</td>
										<td>Unknown</td>
										<td><div class="nav-item dropdown show">
											<button class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-transform: capitalize !important;">
											Actions
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
												<button class="dropdown-item" href="#" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#editProduct">Edit<i class="fas fa-edit ml-4"></i></button>
												<button class="dropdown-item" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#deleteProduct">Delete<i class="fas fa-trash-alt ml-4"></i></button>
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
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>