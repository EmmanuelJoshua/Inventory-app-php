<?php include("includes/header.php") ?>
<?php include("includes/sideNavigation.php") ?>
<!DOCTYPE html>
<html>

<head>
	<title>Tanks | Palace Petroleum</title>
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
						<a href="dashboard.php" style="color: #8CC2FF; text-decoration: none;">Home</a><span> <i class="fas fa-chevron-right" style="font-size: 11.9px;"></i> Tanks</span>
					</div>
				</div>
			</div>
			<!-- TOP CONTROLS (BUTTONS and DROPDOWNS) -->
			<div class="row">
				<div class="container-fluid">
					<div class="mt-4 top-controls mb-1">
						<button class="btn btn-primary mr-1" style="float: right; width: 180px !important;" data-toggle="modal" data-target="#closingDipping">Enter Closing Dipping</button>
						<div class="form-inline">
							<select class="custom-select form-control col-md-2 col-5">
								<option>Search by</option>
								<option>Tank Name</option>
								<option>Product Code</option>
								<option>Product Description</option>
							</select>
							<input type="text" name="" class="form-control ml-1 col-md-2 col-5" placeholder="">
						</div>
					</div>
				</div>
			</div>
			<!-- REGISTER TANK BUTTON -->
			<div class="row">
				<div class="container-fluid text-center">
					<div class="top-controls mb-3">
						<button class="btn btn-primary mr-1" style="width: 144px !important;" data-toggle="modal" data-target="#registerTank">Register Tank<i class="fas fa-plus-circle"></i></button>
					</div>
				</div>
			</div>
			<!-- SECTION SWITCHING BUTTONS -->
			<div class="row">
				<div class="container-fluid">
					<div class="top-controls2 mb-3">
						<button class="btn topcontrolActive mr-1" style="width: 70px !important;" id="tankBtn1">Tank</button>
						<button class="btn mr-1" style="width: 110px !important;" id="tankBtn2">Tank Ledger</button>
						<button class="btn mr-1" style="width: 124px !important;" id="tankBtn3">Tank Summary</button>
					</div>
				</div>
			</div>
			<!-- DIV CONTAINING MODALS -->
			<div class="top-controls">
				<!-- CLOSING DIPPING MODAL -->
				<div class="modal fade" id="closingDipping" tabindex="-1" role="dialog" aria-labelledby="closingDippingModal" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="ClosingDippingModal"><i class="fas fa-plus-square"></i></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form class="form-horizontal">
									<div class="form-group mb-3">
										<div class="col-sm-12">
											<input type="text" class="form-control" placeholder="Enter Date" style="width: 100%;">
										</div>
									</div>
									<div class="form-group mb-3">
										<div class="col-sm-12">
											<input type="text" class="form-control" placeholder="Enter Tank" style="width: 100%;">
										</div>
									</div>
									<div class="form-group mb-3">
										<div class="col-sm-12">
											<input type="password" class="form-control" id="pwd1" placeholder="Enter Closing Dipping" style="width: 100%;">
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary pl-1 pr-1" data-dismiss="modal" style="width: 80px !important;">Cancel<i class="fas fa-times-circle"></i></button>
								<button type="button" class="btn btn-primary pl-1 pr-1" style="width: 80px !important;">Submit<i class="fas fa-check-circle"></i></button>
							</div>
						</div>
					</div>
				</div>
				<!-- REGISTER TANK MODAL -->
				<div class="modal fade" id="registerTank" tabindex="-1" role="dialog" aria-labelledby="registerTankModal" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="registerTankModal"><i class="fas fa-plus-square"></i></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form class="form-horizontal">
									<div class="form-group mb-3">
										<div class="col-sm-12">
											<input type="text" class="form-control" placeholder="Enter Tank Name" style="width: 100%;">
										</div>
									</div>
									<div class="form-group mb-3">
										<div class="col-sm-12">
											<input type="text" class="form-control" placeholder="Enter Product Code" style="width: 100%;">
										</div>
									</div>
									<div class="form-group mb-3">
										<div class="col-sm-12">
											<input type="password" class="form-control" id="pwd2" placeholder="Enter Product Description" style="width: 100%;">
										</div>
									</div>
									<div class="form-group mb-3">
										<div class="col-sm-12">
											<input type="password" class="form-control" id="pwd3" placeholder="Enter Opening Stock" style="width: 100%;">
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
				<!-- DELETE TANK MODAL -->
				<div class="modal fade" id="deleteTank" tabindex="-1" role="dialog" aria-labelledby="deleteTankModal" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="deleteTankModal"><i class="fas fa-trash-alt"></i></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<h4>Do you want to delete this tank?</h4>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary pl-1 pr-1" data-dismiss="modal" style="width: 80px !important;">Cancel<i class="fas fa-times-circle"></i></button>
								<button type="button" class="btn btn-primary pl-1 pr-1">Yes<i class="fas fa-check-circle"></i></button>
							</div>
						</div>
					</div>
				</div>
				<!-- UPDATE TANK MODAL -->
				<div class="modal fade" id="updateTank" tabindex="-1" role="dialog" aria-labelledby="updateTankModal" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="updateTankModal"><i class="fas fa-edit"></i></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form class="form-horizontal">
									<div class="form-group mb-3">
										<div class="col-sm-12">
											<input type="text" class="form-control" placeholder="Enter Tank Name" style="width: 100%;">
										</div>
									</div>
									<div class="form-group mb-3">
										<div class="col-sm-12">
											<input type="text" class="form-control" placeholder="Enter Product Code" style="width: 100%;">
										</div>
									</div>
									<div class="form-group mb-3">
										<div class="col-sm-12">
											<input type="password" class="form-control" id="pwd4" placeholder="Enter Product Description" style="width: 100%;">
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-primary pl-1 pr-1" data-dismiss="modal" style="width: 80px !important;">Cancel<i class="fas fa-times-circle"></i></button>
								<button type="button" class="btn btn-primary pl-1 pr-1" style="width: 80px !important;">Update<i class="fas fa-check-circle"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CONTAINER FOR TABLES -->
			<div class="row">
				<div class="container-fluid">
					<!-- DIV FOR TANK -->
					<div id="tank" class="animated slideInUp">
						<div class="table-responsive">
							<table class="table bg-white">
								<thead>
									<tr>
										<th scope="col">Tank Name</th>
										<th scope="col">Product Code</th>
										<th scope="col">Product Descriptions</th>
										<th scope="col">Date Added</th>
										<th scope="col">Options</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Unknown</td>
										<td>Unknown</td>
										<td>Unknown</td>
										<td>Unknown</td>
										<td>
											<div class="nav-item dropdown show">
												<button class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													Actions
												</button>
												<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
													<button class="dropdown-item" href="#" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#updateTank">Edit<i class="fas fa-edit ml-4"></i></button>
													<button class="dropdown-item" style="font-family: 'Titillium Web'" data-toggle="modal" data-target="#deleteTank">Delete<i class="fas fa-trash-alt ml-4"></i></button>
												</div>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- DIV FOR TANK LEDGER (Display is set to none) -->
					<div id="tankLedger" class="d-none animated slideInUp">
						<div class="top-controls">
							<div class="form-inline">
								<select class="form-control col-md-2 col-4 mb-2">
									<option>Select Tank</option>
								</select>
							</div>
							<div>
								<h5 class="productTitle">Tank Name :</h5>
							</div>
							<table class="table bg-white">
								<thead>
									<tr style="font-size: 14px;">
										<th scope="col">Pump Name</th>
										<th scope="col">Pump Sales</th>
										<th scope="col">Pump Meter Margin</th>
										<th scope="col">Opening Dipping</th>
										<th scope="col">Closing Dipping</th>
										<th scope="col">Date</th>
										<th scope="col">Supply</th>
										<th scope="col">Return</th>
										<th scope="col">Expected</th>
										<th scope="col">Total Margin</th>
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
										<td>Unknown</td>
										<td>Unknown</td>
										<td>Unknown</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- DIV FOR TANK SUMMARY (Display is set to none) -->
					<div id="tankSummary" class="d-none animated slideInUp">
						<div>
							<h5 class="productTitle">Tank Summary as of :</h5>
						</div>
						<table class="table bg-white">
							<thead>
								<tr>
									<th scope="col">S/N</th>
									<th scope="col">Tank Name</th>
									<th scope="col">Product Code</th>
									<th scope="col">Product Description</th>
									<th scope="col">Current Balance</th>
								</tr>
							</thead>
							<tbody>
								<tr>
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
			</div>
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
	//Declaring global variables
	var btn1 = document.getElementById('tankBtn1');
	var btn2 = document.getElementById('tankBtn2');
	var btn3 = document.getElementById('tankBtn3');

	let tankSummary = document.querySelector('#tankSummary');
	let tankledger = document.querySelector('#tankLedger');
	let tank = document.querySelector('#tank');

	//TankLedger button EventListener
	btn2.addEventListener('click', (e) => {
		//console.log('aaaa');
		tank.style.display = "none";
		tankSummary.classList.remove('d-block');
		tankSummary.classList.add('d-none');
		tankledger.classList.remove('d-none');
		tankledger.style.display = "block";
		tank.classList.add('d-none');
		tank.classList.remove('d-block');

		btn2.classList.add("topcontrolActive");
		btn3.classList.remove("topcontrolActive");
		btn1.classList.remove("topcontrolActive");
	});

	//tankSummary button EventListener
	btn3.addEventListener('click', (e) => {
		//console.log('sum');
		tank.style.display = "none";
		tankledger.classList.remove('d-block');
		tankledger.classList.add('d-none');
		tankSummary.classList.remove('d-none');
		tankSummary.classList.add('d-block');
		tank.classList.add('d-none');
		tank.classList.remove('d-block');

		btn3.classList.add("topcontrolActive");
		btn2.classList.remove("topcontrolActive");
		btn1.classList.remove("topcontrolActive");

	});

	// tank button EventListener
	btn1.addEventListener('click', (e) => {

		tank.classList.add('d-block');
		tankledger.classList.remove('d-block');
		tankledger.classList.add('d-none');
		tankSummary.classList.remove('d-block');
		tankSummary.classList.add('d-none');

		btn1.classList.add("topcontrolActive");
		btn2.classList.remove("topcontrolActive");
		btn3.classList.remove("topcontrolActive");
	});

</script>

</html>
