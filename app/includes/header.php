<!DOCTYPE html>
<html>
  <head>
    <title>Home | Palace Petroleum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Website Icon -->
    <link rel="icon" href="">
    <!--Bootstrap -->
    <link rel="stylesheet" href="../app/assets/libraries/css-libs/bootstrap.css">
    <!-- Website Stylesheet -->
    <link rel="stylesheet" href="../app/assets/css-app-files/header.css">
  </head>
  <body onload="displayTime();">
    <div class="dashboard-main-wrapper">
      <div class="dashboard-header">
        <nav class="navbar navbar-expand bg-white fixed-top">
          <div class="header-wrapper">
            <a class="navbar-brand" href="#">Palace Petroleum</a>
          </div>
          <div class=" navbar-collapse">
            <ul class="navbar-nav ml-auto navbar-right-top">
              <li class="nav-item mr-3 pr-2">
                <span class="nav-link" id="timeSpan"></span>
              </li>
              <li class="nav-item nav-user dropdown show mr-3 pr-2">
                <a class="nav-user-img dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="../app/assets/images/icons8-male-user-50.png">
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#" style="font-family: 'Titillium Web'">View Admin<i class="fas fa-user-cog ml-2"></i></a>
                  <a class="dropdown-item" href="#" style="font-family: 'Titillium Web'">Add Admin<i class="fas fa-user-plus ml-3"></i></a>
                </div>
              </li>
              <li class="nav-item pr-2" style="border: none;">
                <a class="btn btn-primary" href="#">Logout<i class="fas fa-sign-out-alt"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </body>
  <script type="text/javascript" src="../app/assets/js-app-files/header.js"></script>
</html>