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
    <nav class="navbar navbar-expand-md justify-content-center navbar-dark">
      <span class="navbar-brand" href="#" style="font-family: Pacifico">Palace Petroleum</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active">
            <span class="nav-link" id="timeSpan" style="font-family: montserrat;"></span>
          </li>
        </ul>
        <ul class="navbar-nav my-2 my-md-0 d-flex">
          <li class="nav-item">
            <a id="admin">
              <i class="fas fa-user"></i>
            <span class="" href="#">Admin</span>
            </a>
            
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </body>
  <script type="text/javascript" src="../app/assets/js-app-files/header.js"></script>
</html>