<?php session_start(); ?>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="styles/reset.css" type="text/css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css"
            integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css"
            integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Rammetto+One|Roboto" rel="stylesheet">
      <link href="images/favicon.png" rel="icon" type="image/x-icon">
      <link rel="stylesheet" href="styles/style.css" type="text/css">
      <title>home - Smoker Store</title>
  </head>
<body>
    <!-- Top bar -->
    <?php
      if($_SESSION['profile']) { ?>
        <div class="container-fluid top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <i class="fas fa-envelope fa-2x"></i> <span>info@tech.com</span>
                        <i class="fas fa-phone fa-2x" data-fa-transform="flip-h"></i> <span>095/99887</span>
                    </div>
                    <div class="col-md">
                        <div class="dropdown float-right">
                            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                                Italiano
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">English</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <a href = "profile/profile.php" class = "profile"><?php $_SESSION['profile'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
      <div class="container-fluid top-bar">
          <div class="container">
              <div class="row">
                  <div class="col-md">
                      <i class="fas fa-envelope fa-2x"></i> <span>info@tech.com</span>
                      <i class="fas fa-phone fa-2x" data-fa-transform="flip-h"></i> <span>095/99887</span>
                  </div>
                  <div class="col-md">
                      <div class="dropdown float-right">
                          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                              Italiano
                          </button>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">English</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md">
                      <a href = "profile/login.php" class = "profile">Log-in or Sign-up</a>
                  </div>
              </div>
          </div>
      </div>
    <?php } ?>
      <!-- fine top-bar -->
      <!-- Login Page -->
      <div class = "lbody">
        <div class = "panel">
            <h4>Username/E-mail
            <input type = "email" autofocus required placeholder = "example@email.it" />
            <input type = "password" required
        </div>
      </div>
  </body>
</html>
