<?php include("includes/header.php") ?>
<?php $page = 'payment';include("includes/sideNavigation.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Payment | Palace Petroleum</title>
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
		<div class="dashboard-wrapper">
			<div class="container-fluid">
				<!-- ROW CONTAINING LINK TO HOME/DASHBOARD -->
				<div class="row">
						<div class="links col-12 text-white">
							<a href="dashboard.php" style="color: #8CC2FF; text-decoration: none;">Home</a><span> <i class="fas fa-chevron-right" style="font-size: 11.9px;"></i> Payment</span>
						</div>
				</div>
				<!-- TOP CONTROLS (BUTTONS and DROPDOWNS) -->
				<div class="row">
					<div class="container-fluid">
						<div class="top row mb-2">
							<div class="col-md-6 top-controls2 mt-2">
								<button class="btn topcontrolActive mr-1" style="width: 120px !important;" id="payBtn1">Payment Sent</button>
								<button class="btn mr-1" style="width: 150px !important;" id="payBtn2">Payment Received</button>
							</div>
							<div class="col-md-6 top-controls text-right mt-2">
								<button class="btn btn-primary mr-1" data-toggle="modal" data-target="#makePayment" style=" width: 140px !important;">Make Payment<i class="fas fa-plus-circle"></i></button>
								<button class="btn btn-primary mr-1" data-toggle="modal" data-target="#receivePayment" style="width: 170px !important;">Receive Payment<i class="fas fa-plus-circle"></i></button>
							</div>
						</div>
					</div>
				</div>
				<!-- CONTAINER FOR TABLES -->
				<div class="row">
					<div class="container-fluid">
						<!-- DIV FOR PAYMENT SENT -->
						<div id="paymentSent" class="animated fadeIn">
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
											<th scope="col">Date</th>
											<th scope="col">Supplier</th>
											<th scope="col">Payment Type</th>
											<th scope="col">Purpose</th>
											<th scope="col">Ref No</th>
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
													<button class="dropdown-item" href="#" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#editPaymentSent">Edit<i class="fas fa-edit ml-4"></i></button>
													<button class="dropdown-item" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#deletePaymentSent">Delete<i class="fas fa-trash-alt ml-4"></i></button>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- DIV FOR PAYMENT RECEIVED (Display is set to none)-->
					<div id="paymentReceived" class="d-none animated fadeIn">
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
										<th scope="col">Date</th>
										<th scope="col">Customer</th>
										<th scope="col">Payment Type</th>
										<th scope="col">Purpose</th>
										<th scope="col">Ref No</th>
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
												<button class="dropdown-item" href="#" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#editPaymentReceived">Edit<i class="fas fa-edit ml-4"></i></button>
												<button class="dropdown-item" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#deletePaymentReceived">Delete<i class="fas fa-trash-alt ml-4"></i></button>
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
			<!-- MAKE PAYMENT MODAL -->
			<div class="modal fade" id="makePayment" tabindex="-1" role="dialog" aria-labelledby="makePaymentModal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="makePaymentModal"><i class="fas fa-plus-square"></i></h5>
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
										<select class="custom-select form-control">
											<option>Select Supplier</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-3">
									<div class="col-sm-12">
										<select class="custom-select form-control">
											<option>Select Payment Type</option>
											<option>Bank</option>
											<option>Cash</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-3">
									<div class="col-sm-12">
										<input type="text" class="form-control"placeholder="Enter Purpose" style="width: 100%;">
									</div>
								</div>
								<div class="form-group mb-3">
									<div class="col-sm-12">
										<input type="text" class="form-control"placeholder="Enter Ref Number" style="width: 100%;">
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
			<!-- RECEIVE PAYMENT MODAL -->
			<div class="modal fade" id="receivePayment" tabindex="-1" role="dialog" aria-labelledby="receivePaymentModal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="receivePaymentModal"><i class="fas fa-plus-square"></i></h5>
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
										<select class="custom-select form-control">
											<option>Select Customer</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-3">
									<div class="col-sm-12">
										<select class="custom-select form-control">
											<option>Select Payment Type</option>
											<option>Bank</option>
											<option>Cash</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-3">
									<div class="col-sm-12">
										<input type="text" class="form-control"placeholder="Enter Purpose" style="width: 100%;">
									</div>
								</div>
								<div class="form-group mb-3">
									<div class="col-sm-12">
										<input type="text" class="form-control"placeholder="Enter Ref Number" style="width: 100%;">
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
			<!-- EDIT PAYMENT SENT MODAL -->
			<div class="modal fade" id="editPaymentSent" tabindex="-1" role="dialog" aria-labelledby="editPaymentSentModal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="editPaymentSentModal"><i class="fas fa-edit"></i></h5>
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
										<select class="custom-select form-control">
											<option>Select Supplier</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-3">
									<div class="col-sm-12">
										<select class="custom-select form-control">
											<option>Select Payment Type</option>
											<option>Bank</option>
											<option>Cash</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-3">
									<div class="col-sm-12">
										<input type="text" class="form-control"placeholder="Enter Purpose" style="width: 100%;">
									</div>
								</div>
								<div class="form-group mb-3">
									<div class="col-sm-12">
										<input type="text" class="form-control"placeholder="Enter Ref Number" style="width: 100%;">
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
							<button type="button" class="btn btn-primary pl-1 pr-1" style="width: 90px !important;">Update<i class="fas fa-check-circle"></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- DELETE PAYMENT SENT MODAL -->
			<div class="modal fade" id="deletePaymentSent" tabindex="-1" role="dialog" aria-labelledby="deleteProductModal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="deleteProductModal"><i class="fas fa-trash-alt"></i></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h4>Do you want to delete this payment?</h4>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 90px !important;">Cancel<i class="fas fa-times-circle"></i></button>
							<button type="button" class="btn btn-primary pl-1 pr-1">Yes<i class="fas fa-check-circle"></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- EDIT PAYMENT RECEIVED MODAL -->
			<div class="modal fade" id="editPaymentReceived" tabindex="-1" role="dialog" aria-labelledby="editPaymentReceivedModal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="editPaymentReceivedModal"><i class="fas fa-edit"></i></h5>
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
										<select class="custom-select form-control">
											<option>Select Customer</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-3">
									<div class="col-sm-12">
										<select class="custom-select form-control">
											<option>Select Payment Type</option>
											<option>Bank</option>
											<option>Cash</option>
										</select>
									</div>
								</div>
								<div class="form-group mb-3">
									<div class="col-sm-12">
										<input type="text" class="form-control"placeholder="Enter Purpose" style="width: 100%;">
									</div>
								</div>
								<div class="form-group mb-3">
									<div class="col-sm-12">
										<input type="text" class="form-control"placeholder="Enter Ref Number" style="width: 100%;">
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
							<button type="button" class="btn btn-primary pl-1 pr-1" style="width: 90px !important;">Update<i class="fas fa-check-circle"></i></button>
						</div>
					</div>
				</div>
			</div>
			<!-- DELETE PAYMENT RECEIVED MODAL -->
			<div class="modal fade" id="deletePaymentReceived" tabindex="-1" role="dialog" aria-labelledby="deletePaymentReceivedModal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="deletePaymentReceivedModal"><i class="fas fa-trash-alt"></i></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h4>Do you want to delete this payment?</h4>
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
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
	//Declaring global variables
	var btn1 = document.getElementById('payBtn1');
	var btn2 = document.getElementById('payBtn2');
	
	let paySent = document.querySelector('#paymentSent');
	let payReceive = document.querySelector('#paymentReceived');
	
	//paymentSent button EventListener
	btn2.addEventListener('click', (e) => {

		payReceive.classList.remove('d-none');
		payReceive.style.display = "block";
		paySent.classList.add('d-none');
		paySent.classList.remove('d-block');

		btn2.classList.add("topcontrolActive");
		btn1.classList.remove("topcontrolActive");
	});

	// paymentReceived button EventListener
	btn1.addEventListener('click', (e) => {

		paySent.classList.add('d-block');
		payReceive.classList.remove('d-block');
		payReceive.classList.add('d-none');

		btn1.classList.add("topcontrolActive");
		btn2.classList.remove("topcontrolActive");
	});

</script>

</html>