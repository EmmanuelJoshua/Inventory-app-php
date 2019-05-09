<?php include("includes/header.php") ?>
<?php $page = 'invoice';include("includes/sideNavigation.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Invoice | Palace Petroleum</title>
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
							<a href="dashboard.php" style="color: #8CC2FF; text-decoration: none;">Home</a><span> <i class="fas fa-chevron-right" style="font-size: 11.9px;"></i> Invoice</span>
						</div>
					</div>
				</div>
				<!-- TOP CONTROLS (BUTTONS and DROPDOWNS) -->
				<div class="row">
					<div class="container-fluid">
						<div class="row mb-4">
							<div class="col-md-12 top-controls2 mt-4">
								<button class="btn topcontrolActive mr-1" style="width: 185px !important;" id="regCus">Create For Registered</button>
								<button class="btn mr-1" style="width: 205px !important;" id="unregCus">Create For Unregistered</button>
								<button class="btn mr-1" style="width: 130px !important;" id="invLed">Invoice Ledger</button>
							</div>
						</div>
					</div>
				</div>
				<!-- DIV CONTAINING MODALS -->
				<div class="top-controls">
					<!-- EDIT REGISTERED CUSTOMER MODAL -->
					<div class="modal fade" id="editRegisteredCustomer" tabindex="-1" role="dialog" aria-labelledby="editRegisteredCustomerModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="editRegisteredCustomerModal"><i class="fas fa-edit"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="form-horizontal">
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control" placeholder="Enter S/N" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Product Code" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Description" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Quantity" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Ref" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Amount" style="width: 100%;">
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
					<!-- EDIT UNREGISTERED CUSTOMER MODAL -->
					<div class="modal fade" id="editUnregisteredCustomer" tabindex="-1" role="dialog" aria-labelledby="editUnregisteredCustomerModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="editUnregisteredCustomerModal"><i class="fas fa-edit"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="form-horizontal">
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control" placeholder="Enter S/N" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Product Code" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Description" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Quantity" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Ref" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Amount" style="width: 100%;">
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
					<!-- EDIT INVOICE LEDGER MODAL -->
					<div class="modal fade" id="editInvoiceLedger" tabindex="-1" role="dialog" aria-labelledby="editInvoiceLedgerModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="editInvoiceLedgerModal"><i class="fas fa-edit"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="form-horizontal">
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control" placeholder="Enter S/N" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="date" class="form-control">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Customer" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Invoice Number" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Amount" style="width: 100%;">
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
					<!-- DELETE REGISTERED CUSTOMER INVOICE MODAL -->
					<div class="modal fade" id="deleteRegisteredCus" tabindex="-1" role="dialog" aria-labelledby="deleteRegisteredCusModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="deleteRegisteredCusModal"><i class="fas fa-trash-alt"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h4>Do you want to delete this Invoice?</h4>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 90px !important;">Cancel<i class="fas fa-times-circle"></i></button>
									<button type="button" class="btn btn-primary pl-1 pr-1">Yes<i class="fas fa-check-circle"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- DELETE UNREGISTERED CUSTOMER INVOICE MODAL -->
					<div class="modal fade" id="deleteUnregisteredCus" tabindex="-1" role="dialog" aria-labelledby="deleteUnregisteredCusModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="deleteUnregisteredCusModal"><i class="fas fa-trash-alt"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h4>Do you want to delete this Invoice?</h4>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 90px !important;">Cancel<i class="fas fa-times-circle"></i></button>
									<button type="button" class="btn btn-primary pl-1 pr-1">Yes<i class="fas fa-check-circle"></i></button>
								</div>
							</div>
						</div>
					</div>
					<!-- DELETE INVOICE LEDGER MODAL -->
					<div class="modal fade" id="deleteInvoiceLed" tabindex="-1" role="dialog" aria-labelledby="deleteInvoiceLedModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="deleteInvoiceLedModal"><i class="fas fa-trash-alt"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<h4>Do you want to delete this Invoice Ledger?</h4>
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
						<!-- DIV FOR REGISTERED CUSTOMERS -->
						<div id="registeredCustomers" class="animated fadeIn">
							<div class="top-controls mb-2">
								<div class="form-inline">
									<select class="custom-select form-control col-md-3 col-6">
										<option>Customer Name</option>
									</select>
									<input type="button" name="" class="btn ml-1 col-md-1 col-4" value="Submit">
								</div>
								<div class="form-inline mt-3">
									<input type="text" name="" class="form-control col-md-3 col-3" placeholder="Product Code">
									<input type="text" name="" class="form-control ml-1 col-md-3 col-3" placeholder="Quantity">
									<input type="button" name="" class="btn ml-1 col-md-1 col-4" value="Submit">
								</div>
							</div>
							<div class="container">
								<div class="row">
									<div class="productTitle col-md-2 mb-2">
										Details
									</div>
								</div>
							</div>
							<div class="top-controls form-inline mb-2">
								<select class="custom-select form-control col-md-3 col-6">
									<option>Payments</option>
									<option>Paid</option>
									<option>Not Paid</option>
								</select>
							</div>
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
													<button class="dropdown-item" href="#" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#editRegisteredCustomer">Edit<i class="fas fa-edit ml-4"></i></button>
													<button class="dropdown-item" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#deleteRegisteredCus">Delete<i class="fas fa-trash-alt ml-4"></i></button>
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
						<div class="top-controls mb-2">
							<div class="form-inline">
								<input type="text" name="" class="form-control col-md-3 col-3" placeholder="Name">
								<input type="text" name="" class="form-control ml-1 col-md-3 col-3" placeholder="Address">
								<input type="text" name="" class="form-control ml-1 col-md-3 col-4" placeholder="Phone Number">
							</div>
							<div class="form-inline">
								<input type="button" name="" class="btn mt-2 col-md-1 col-4" value="Submit">
							</div>
							<div class="form-inline mt-3">
								<input type="text" name="" class="form-control col-md-3 col-4" placeholder="Product Code">
								<input type="text" name="" class="form-control ml-1 col-md-3 col-3" placeholder="Quantity">
								<input type="text" name="" class="form-control ml-1 col-md-3 col-3" placeholder="Rate">
							</div>
							<div class="form-inline">
								<input type="button" name="" class="btn mt-2 col-md-1 col-4" value="Submit">
							</div>
						</div>
						<div class="container">
								<div class="row">
									<div class="productTitle col-md-2 mb-2">
										Details
									</div>
								</div>
							</div>
						<div class="top-controls form-inline mb-2">
							<select class="custom-select form-control col-md-3 col-6">
								<option>Payments</option>
								<option>Paid</option>
								<option>Not Paid</option>
							</select>
						</div>
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
												<button class="dropdown-item" href="#" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#editUnregisteredCustomer">Edit<i class="fas fa-edit ml-4"></i></button>
												<button class="dropdown-item" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#deleteUnregisteredCus">Delete<i class="fas fa-trash-alt ml-4"></i></button>
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
					<div class="table-responsive">
						<table class="table bg-white mt-2">
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
											<button class="dropdown-item" href="#" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#editInvoiceLedger">Edit<i class="fas fa-edit ml-4"></i></button>
											<button class="dropdown-item" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#deleteInvoiceLed">Delete<i class="fas fa-trash-alt ml-4"></i></button>
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
	<!-- DIV CONTAINING MODALS -->
	<div class="top-controls">
	</div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
//Declaring global variables
var navReg = document.getElementById('regCus');
var navUnreg= document.getElementById('unregCus');
var navLed = document.getElementById('invLed');
let registered = document.querySelector('#registeredCustomers');
let unregistered  = document.querySelector('#unregisteredCustomers');
let invoice = document.querySelector('#invoiceLedger');
// registered button EventListener
navReg.addEventListener('click',(e)=>{
registered.classList.add('d-block');
unregistered.classList.remove('d-block');
unregistered.classList.add('d-none');
invoice.classList.remove('d-block');
invoice.classList.add('d-none');
navReg.classList.add("topcontrolActive");
navUnreg.classList.remove("topcontrolActive");
navLed.classList.remove("topcontrolActive");
});
//unregistered button EventListener
navUnreg.addEventListener('click',(e)=>{
registered.style.display = "none";
invoice.classList.remove('d-block');
invoice.classList.add('d-none');
unregistered.classList.remove('d-none');
unregistered.style.display = "block";
registered.classList.add('d-none');
registered.classList.remove('d-block');
		navUnreg.classList.add("topcontrolActive");
navReg.classList.remove("topcontrolActive");
navLed.classList.remove("topcontrolActive");
});
//productSummary button EventListener
navLed.addEventListener('click',(e)=>{
registered.style.display = "none";
unregistered.classList.remove('d-block');
unregistered.classList.add('d-none');
invoice.classList.remove('d-none');
invoice.style.display = "block";
registered.classList.add('d-none');
registered.classList.remove('d-block');
		navLed.classList.add("topcontrolActive");
navReg.classList.remove("topcontrolActive");
navUnreg.classList.remove("topcontrolActive");
		
});
// product button EventListener
navProd1.addEventListener('click',(e)=>{
product.classList.add('d-block');
productledger.classList.remove('d-block');
productledger.classList.add('d-none');
productSummary.classList.remove('d-block');
productSummary.classList.add('d-none');
navProd1.classList.add("topcontrolActive");
navProd2.classList.remove("topcontrolActive");
navProd3.classList.remove("topcontrolActive");
})
</script>
</html>