<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Website Stylesheet -->
    <link rel="stylesheet" href="../app/assets/css-app-files/sideNav.css">
    <!--Bootstrap -->
    <link rel="stylesheet" href="../app/assets/libraries/css-libs/bootstrap.css">
    <!-- Website Stylesheet -->
    <link rel="stylesheet" href="../app/assets/css-app-files/dashboard.css">
    <!-- Font CDN -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
    <div class="nav-left-sidebar sidebar-dark">
        <nav class="navbar-white bg-transparent">
            <ul class="navbar-nav flex-column pt-2" id="navbar-nav">
              <li class="nav-item <?php if($page=='product'){echo 'navbar-active';}?>">
                <a class="nav-link " href="products.php"><i class="fas fa-boxes"></i><span>Products</span></a>
              </li>
              <li class="nav-item <?php if($page=='tank'){echo 'navbar-active';}?>">
                <a class="nav-link" href="tanks.php"><i class="fas fa-truck"></i><span>Tanks</span></a>
              </li>
              <li class="nav-item <?php if($page=='prices'){echo 'navbar-active';}?>">
                <a class="nav-link" href="prices.php"><i class="fas fa-tags"></i></i><span>Prices</span></a>
              </li>
              <li class="nav-item <?php if($page=='pump'){echo 'navbar-active';}?>">
                <a class="nav-link" href="pump.php"><i class="fas fa-gas-pump"></i><span>Fuel Pump</span></a>
              </li>
              <li class="nav-item <?php if($page=='supplies'){echo 'navbar-active';}?>">
                <a class="nav-link" href="supplies.php"><i class="fas fa-truck-loading"></i></i><span>Supplies</span></a> 
              </li>
              <li class="nav-item <?php if($page=='suppliers'){echo 'navbar-active';}?>">
                <a class="nav-link" href="suppliers.php"><i class="fas fa-users"></i><span>Suppliers</span></a>
              </li>
              <li class="nav-item <?php if($page=='customers'){echo 'navbar-active';}?>">
                <a class="nav-link" href="customers.php"><i class="fas fa-user-friends"></i><span>Customers/Buyers</span></a>
              </li>
              <li class="nav-item <?php if($page=='payment'){echo 'navbar-active';}?>">
                <a class="nav-link" href="payment.php"><i class="far fa-credit-card"></i><span>Payment</span></a>
              </li>
              <li class="nav-item <?php if($page=='bank'){echo 'navbar-active';}?>">
                <a class="nav-link" href="bank.php"><i class="fas fa-university"></i><span>Bank</span></a>
              </li>
              <li class="nav-item <?php if($page=='expenses'){echo 'navbar-active';}?>">
                <a class="nav-link" href="expenses_purchase.php"><i class="fas fa-cash-register"></i><span>Expenses/Purchases</span></a>
              </li>
              <li class="nav-item <?php if($page=='invoice'){echo 'navbar-active';}?>">
                <a class="nav-link" href="invoice.php"><i class="fas fa-file-invoice"></i><span>Invoice</span></a>
              </li>
              <li class="nav-item <?php if($page=='income'){echo 'navbar-active';}?>">
                <a class="nav-link" href="income_expenditure.php"><i class="fas fa-file-invoice-dollar"></i><span>Income/Expenditure</span></a>
              </li>
            </ul>
      </div>
      </div>
    </nav>
  </div>
</div>
</body>
</html>