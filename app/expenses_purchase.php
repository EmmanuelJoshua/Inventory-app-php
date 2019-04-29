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
							<div class="form-inline">
								<select class="custom-select form-control col-md-3 col-5">
									<option>Select Expenses Type</option>
									<option>Cash Expenses</option>
									<option>Bank Expenses</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<!-- EXPENSE/PURCHASE -->
				<div class="row">
					<div class="container-fluid">
					<form>
				<!-- 	<div class="form-row">
				    <div class="form-group col-md-5">
				     <select class="custom-select form-control">
				     	<option>Bank Name</option>
				     </select>
				    </div>
				  	</div> -->
				  	<div class="form-row">
				    <div class="form-group col-md-5">
				     	<input type="date" class="form-control" placeholder="Date">
				    </div>
				    <div class="form-group col-md-5">
				     	<input type="text" class="form-control" placeholder="Particulars">
				    </div>
				  	</div>
				  	<div class="form-row">
				    <div class="form-group col-md-5">
				     	<input type="text" class="form-control" placeholder="Description">
				    </div>
				    <div class="form-group col-md-5">
				     	<input type="text" class="form-control" placeholder="Ref">
				    </div>
				  	</div>
				  	<div class="form-row">
				    <div class="form-group col-md-5">
				     	<input type="text" class="form-control" placeholder="Amount">
				    </div>
				    <div class="form-group col-md-1">
				     	<input type="submit" class="form-control" value="Submit">
				    </div>
				  	</div>
					</form>
					</div>
				</div>
				<!-- TABLE -->
				<div class="row">
					<div class="container-fluid">
						<div id="product" class="">
							<h5 class="productTitle">Expense/Purchase Ledger</h5>
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
</body>
</html>