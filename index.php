
<?php
  session_start();
  include 'profile/check.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles/reset.css" type="text/css">
    <link rel="stylesheet" href="styles/homepage.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css"
          integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css"
          integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rammetto+One|Roboto" rel="stylesheet">
    <link href="images/favicon.png" rel="icon" type="image/x-icon">
    <title>home - Smoker Store</title>
</head>
<body>
    <!-- Top bar -->
    <?php
      if(isset($_SESSION['profile'])) { ?>
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
                        <a href = "profile/profile.php" class = "profile"><?php echo $_SESSION['profile'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
      <div class="container-fluid top-bar">
          <div class="container">
              <div class="row">
                  <div class="col-md-8">
                      <i class="fas fa-envelope fa-2x"></i> <span>info@tech.com</span>
                      <i class="fas fa-phone fa-2x" data-fa-transform="flip-h"></i> <span>095/99887</span>
                      <div class="dropdown float-right">
                          <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
                              Italiano
                          </button>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">English</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <a href="#" class = "profile btn btn-primary">(Sign-in)</a>
                      <div class = "plogin">
                        <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                          <?php echo $GLOBALS['$msgerr'] ?>
                          <h6>Username/E-mail</h6>
                          <input type = "email" autofocus required placeholder = "example@email.it" name = "email"/>
                          <h6>Password</h6>
                          <input type = "password" required name = "psw"/>
                          <input type = "submit" value = "Log-in" style = "margin-top: 5px;">
                        </form>
                        <a href = "profile/register.php">o registrati!</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <?php } ?>
    <!-- / Top bar -->

    <!-- Title Bar -->
    <div class="container-fluid title-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-8 title">
                    <h1>SmokerStore</h1>
                </div>
                <div class="col-md-4 cart">
                    <a href="#">
                        <i class="fas fa-shopping-cart fa-2x" data-fa-transform="shrink-8"></i>
                        <span>Carrello</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--Large title with the shopping cart icon-->
    <div class="titleBar">
        <div class="shopCart">

        </div>
    </div>
    <!--Main image, needs to be responsive-->
    <div class="mainImage">
      <img src = "images/logo.jpg" />
    </div>
    <!--Selector of 3 pages-->
    <div class="selector">
      <a href="#a" onclick="showHome()" class="selectorButton">Home</a>
      <a href="#a" onclick="showProducts()" class="selectorButton">E-Cigs</a>
      <a href="#a" onclick="showContacts()" class="selectorButton">Contacts</a>
    </div>
    <!--Selector Page-->
    <div class="productsLabel">
      <h2 class="productsSign">Le nostre offerte:</h2>
      <div class="products">
        <div class = "fig-1">
            <img src = "images/products/athena.jpg"  />
            <span>Athena X 3905 full compactable</span>
            <span><br />$30,00</span>
        </div>
        <div class = "fig-2">
            <img src = "images/products/wismec.png"  />
            <span>Wismec V583 master model cleaner</span>
            <span><br />$50,00</span>
        </div>
        <div class = "fig-3">
            <img src = "images/products/athena.jpg"  />
            <span>Athena X 3905 full compactable</span>
            <span><br />$30,00</span>
        </div>
        <div class = "fig-4">
            <img src = "images/products/athena.jpg"  />
            <span>Athena X 3905 full compactable</span>
            <span><br />$30,00</span>
        </div>
        <div class = "fig-5">
            <img src = "images/products/athena.jpg"  />
            <span>Athena X 3905 full compactable</span>
            <span><br />$30,00</span>
        </div>
        <div class = "fig-6">
            <img src = "images/products/athena.jpg"  />
            <span>Athena X 3905 full compactable</span>
            <span><br />$30,00</span>
        </div>
        <div class = "fig-7">
            <img src = "images/products/athena.jpg"  />
            <span>Athena X 3905 full compactable</span>
            <span><br />$30,00</span>
        </div>
      </div>
    </div>
    <div class="homeLabel">
      <div class="jumbotron">
        <h1 class="display-4">Benvenuto da SmokerStore</h1>
        <p class="lead">Il nostro punto di forza è unire qualità e costi contenuti.</p>
        <hr class="my-4">
        <p>Trova il prodotto più adatto a te</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" onclick="showProducts()"  role="button">Vai ai prodotti</a>
        </p>
      </div>
    </div>
    <div class="contactsLabel">
      <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
      <input class="form-control" type="text" placeholder="Default input">
      <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
    </div>
    <!--Background image with 3 lorem ipsums and icons-->
    <div class="description">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <span><i class="fas fa-american-sign-language-interpreting"></i></span>
            <h3>Titolo</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-sm">
            <span><i class="fas fa-comment"></i></span>
            <h3>Titolo</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
          <div class="col-sm">
            <span><i class="fas fa-address-card"></i></span>
            <h3>Titolo</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!--Footers-->
    <div class="footerNewsletter">
      <form class="form-inline">
        <div class="form-group mb-2">
          <label for="staticEmail2" class="sr-only"></label>
          <span class="textNewsletter">ISCRIVITI ALLA NEWSLETTER</span>
        </div>
        <div class="form-group mx-sm-3 mb-2">
          <label for="exampleFormControlInput1"></label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <button type="submit" class="btn btn-primary mb-2"><i class="fas fa-envelope-open"></i></button>
      </form>
    </div>
    <div class="footerInfo">

    </div>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js"
            integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js"
            integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="scripts/script.js"></script>
    <script>
        $(document).ready(function(){
            $(".profile").click(function(){
                $(".plogin").slideToggle("fast");
            });
        });
    </script>
  </body>
</html>
