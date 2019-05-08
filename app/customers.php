<?php include("includes/header.php") ?>
<?php $page = 'customers';include("includes/sideNavigation.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Customers | Palace Petroleum</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Website Icon -->
		<link rel="icon" href="">
		<!--Bootstrap -->
		<link rel="stylesheet" href="../app/assets/libraries/css-libs/bootstrap.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" href="../app/assets/libraries/css-libs/Animate.css">
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
							<a href="dashboard.php" style="color: #8CC2FF; text-decoration: none;">Home</a><span> <i class="fas fa-chevron-right" style="font-size: 11.9px;"></i> Customers</span>
						</div>
					</div>
				</div>
				<!-- TOP CONTROLS (BUTTONS and DROPDOWNS) -->
				<div class="row">
					<div class="container-fluid">
						<div class="row mb-4">
							<div class="col-md-6 top-controls2 mt-4">
								<button class="btn topcontrolActive mr-1" style="width: 100px !important;" id="cusBtn1">Customer</button>
								<button class="btn mr-1" style="width: 150px !important;" id="cusBtn2">Customer Ledger</button>
								<button class="btn mr-1" style="width: 150px !important;" id="cusBtn3">Customer Status</button>
							</div>
							<div class="col-md-6 top-controls text-right mt-4">
								<button class="btn btn-primary mr-1" data-toggle="modal" data-target="#registerCustomer" style="width: 180px !important;">Register Customer<i class="fas fa-plus-circle"></i></button>
							</div>
						</div>
					</div>
				</div>
				<!-- DIV CONTAINING MODALS -->
				<div class="top-controls">
					<!-- REGISTER CUSTOMER MODAL -->
					<div class="modal fade" id="registerCustomer" tabindex="-1" role="dialog" aria-labelledby="registerCustomerModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="registerCustomerModal"><i class="fas fa-plus-square"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="form-horizontal">
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="date" class="form-control">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Business/Personal Name" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Address" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Phone Number" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Religion" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Opening Balance" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Credit Limit" style="width: 100%;">
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
					<!-- EDIT CUSTOMER MODAL -->
					<div class="modal fade" id="editCustomer" tabindex="-1" role="dialog" aria-labelledby="editCustomerModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="editCustomerModal"><i class="fas fa-user-edit"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="form-horizontal">
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="date" class="form-control">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Business/Personal Name" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Address" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Phone Number" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Religion" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Opening Balance" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Credit Limit" style="width: 100%;">
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
					<!-- DELETE CUSTOMER MODAL -->
					<div class="modal fade" id="deleteCustomer" tabindex="-1" role="dialog" aria-labelledby="deleteCustomerModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="deleteCustomerModal"><i class="fas fa-trash-alt"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h4>Do you want to delete this customer?</h4>
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
						<!-- DIV FOR CUSTOMER -->
						<div id="customer" class="animated fadeIn">
							<div id="customer" class="">
								<div class="top-controls mb-4">
									<div class="form-inline">
										<select class="custom-select form-control col-md-2 col-5">
											<option>Search by</option>
										</select>
										<input type="text" name="" class="form-control ml-1 col-md-2 col-5" placeholder="">
									</div>
								</div>
								<div class="table-responsive">
									<table class="table bg-white">
										<thead>
											<tr>
												<th scope="col">S/N</th>
												<th scope="col">Date Added</th>
												<th scope="col">Business Name</th>
												<th scope="col">Address</th>
												<th scope="col">Phone Number</th>
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
													<button class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Actions
													</button>
													<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
														<button class="dropdown-item" href="#" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#editCustomer">Edit<i class="fas fa-edit ml-4"></i></button>
														<button class="dropdown-item" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#deleteCustomer">Delete<i class="fas fa-trash-alt ml-4"></i></button>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
						<!-- DIV FOR CUSTOMER LEDGER (Display is set to none) -->
						<div id="customerLedger" class="d-none animated fadeIn">
							<div class="top-controls">
								<div class="form-inline">
									<select class="custom-select form-control col-md-2 col-4">
										<option>Select Customer</option>
									</select>
								</div>
								<div class="mt-3">
									<h5 class="productTitle">Customer's Name :</h5>
								</div>
								<table class="table bg-white mt-4">
									<thead>
										<tr>
											<th scope="col">Date</th>
											<th scope="col">Particulars</th>
											<th scope="col">Description</th>
											<th scope="col">Ref No</th>
											<th scope="col">Supply</th>
											<th scope="col">Payment</th>
											<th scope="col">Balance</th>
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
											<td>Unknown</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- DIV FOR CUSTOMER STATUS (Display is set to none) -->
						<div id="customerStatus" class="d-none animated fadeIn">
							<div>
								<h5 class="productTitle">Customer Status as of :</h5>
							</div>
							<table class="table bg-white">
								<thead>
									<tr>
										<th scope="col">Customer's Name</th>
										<th scope="col">Phone Number</th>
										<th scope="col">Current Balance</th>
										<th scope="col">Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Unknown</td>
										<td>Unknown</td>
										<td>Unknown</td>
										<td>Unknown</td>
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
	<script>
		//Declaring global variables
		var btn1 = document.getElementById('cusBtn1');
		var btn2 = document.getElementById('cusBtn2');
		var btn3 = document.getElementById('cusBtn3');
		let cusStatus = document.querySelector('#customerStatus');
		let cusledger = document.querySelector('#customerLedger');
		let cus = document.querySelector('#customer');
		//customerLedger button EventListener
		btn2.addEventListener('click', (e) => {
			//console.log('aaaa');
			cus.style.display = "none";
			cusStatus.classList.remove('d-block');
			cusStatus.classList.add('d-none');
			cusledger.classList.remove('d-none');
			cusledger.style.display = "block";
			cus.classList.add('d-none');
			cus.classList.remove('d-block');
			btn2.classList.add("topcontrolActive");
			btn3.classList.remove("topcontrolActive");
			btn1.classList.remove("topcontrolActive");
		});
		//customerStatus button EventListener
		btn3.addEventListener('click', (e) => {
			// console.log('sum');
			cus.style.display = "none";
			cusledger.classList.remove('d-block');
			cusledger.classList.add('d-none');
			cusStatus.classList.remove('d-none');
			cusStatus.classList.add('d-block');
			cus.classList.add('d-none');
			cus.classList.remove('d-block');
			btn3.classList.add("topcontrolActive");
			btn2.classList.remove("topcontrolActive");
			btn1.classList.remove("topcontrolActive");
		});
		// customer button EventListener
		btn1.addEventListener('click', (e) => {
			cus.classList.add('d-block');
			cusledger.classList.remove('d-block');
			cusledger.classList.add('d-none');
			cusStatus.classList.remove('d-block');
			cusStatus.classList.add('d-none');
			btn1.classList.add("topcontrolActive");
			btn2.classList.remove("topcontrolActive");
			btn3.classList.remove("topcontrolActive");
		});
	</script>
</html>