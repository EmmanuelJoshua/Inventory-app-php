<?php include("includes/header.php") ?>
<?php include("includes/sideNavigation.php") ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Expenses/Purchase | Palace Petroleum</title>
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
							<a href="dashboard.php" style="color: #8CC2FF; text-decoration: none;">Home</a><span> <i class="fas fa-chevron-right" style="font-size: 11.9px;"></i> Expenses/Purchase</span>
						</div>
					</div>
				</div>
				<!-- TOP CONTROLS (BUTTONS and DROPDOWNS) -->
				<div class="row">
					<div class="container-fluid">
						<div class="mt-4 top-controls mb-4">
							<button class="btn btn-primary mr-1" data-toggle="modal" data-target="#enterExpense" style="float: right; width: 244px !important;">Enter Expenses/Purchases<i class="fas fa-plus-circle"></i></button>
							<div class="form-inline">
								<select class="custom-select form-control col-md-2 col-5">
									<option>Search by</option>
									<option>Cash Expense</option>
									<option>Bank Expense</option>
								</select>
								<input type="text" name="" class="form-control ml-1 col-md-2 col-5" placeholder="">
							</div>
						</div>
					</div>
				</div>
				<!-- DIV CONTAINING MODALS -->
				<div class="top-controls">
					<!-- ENTER EXPENSES MODAL -->
					<div class="modal fade" id="enterExpense" tabindex="-1" role="dialog" aria-labelledby="enterExpenseModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="enterExpenseModal"><i class="fas fa-plus-square"></i></h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="form-horizontal">
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<select class="custom-select form-control">
													<option>Select Expense Type</option>
													<option>Cash Expenses</option>
													<option>Bank Expenses</option>
												</select>
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="date" class="form-control">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Particular" style="width: 100%;">
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="col-sm-12">
												<input type="text" class="form-control"placeholder="Enter Description" style="width: 100%;">
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
				</div>
				<!-- TABLE -->
				<div class="row">
					<div class="container-fluid">
						<div id="product" class="">
							<div class="table-responsive">
								<table class="table bg-white">
									<thead>
										<tr>
											<th scope="col">Date</th>
											<th scope="col">Particulars</th>
											<th scope="col">Description</th>
											<th scope="col">Expenses Type</th>
											<th scope="col">Ref</th>
											<th scope="col">Amount</th>
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
										</tr>
									</tbody>
								</table>
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