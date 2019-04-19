<!DOCTYPE html>
<html>
  <head>
    <!-- <base href="../"> -->
    <title>Home | Palace Petroleum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Website Icon -->
    <link rel="icon" href="">
    <!--Bootstrap -->
    <link rel="stylesheet" href="../app/assets/libraries/css-libs/bootstrap.css">
    <!-- Website Stylesheet -->
    <link rel="stylesheet" href="../app/assets/css-app-files/header.css">
    <!-- Font CDN -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body onload="displayTime();">
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
              <div class="header-wrapper">
                <a class="navbar-brand" href="#" style="font-family: montserrat">Palace Petroleum</a>
              </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <span class="nav-link" id="timeSpan" style="font-family: montserrat;"></span>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-user"></i>
              <span class="" href="#">Admin</span></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="btn btn-primary" href="#">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
      </div>
  </body>
  <script type="text/javascript" src="../app/assets/js-app-files/header.js"></script>
</html>