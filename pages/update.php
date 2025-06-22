<?php
  session_start();
  if(empty($_SESSION['user']) || $_SESSION['name'] == ''){
      header("Location: ../index.html");
      die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="180x180" href="../images/chi-logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/chi-logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/chi-logo.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->


    <!-- Facebook domain verification -->
    <meta name="facebook-domain-verification" content="v79zl7zscw6f5i8hrqcegjqv9wso79" />

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Updates</title>

    <!-- SEO -->
    <meta name="keywords" content="">
    <meta name="author" content="ChiLogisticsINC">
    <meta name="publisher" content="Safely transporting products through all 48 states">
    <meta name="Description" content="Safely transporting products through all 48 states">
    <meta name="image_src" content="../images/chi-logo.png">
    <meta name="image_url" content="../images/chi-logo.png">

    <!-- Facebook Open Graph -->
    <meta property="og:locale" content="en_EN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="ChiLogisticsINC">
    <meta property="og:url" content="#">
    <meta property="og:description" content="Safely transporting products through all 48 states">
    <meta property="og:image" content="../images/chi-logo.png">
    <meta property="og:site_name" content="ChiLogisticsINC">

    <!-- Google+ / Schema.org -->
    <meta itemprop="name" content="ChiLogisticsINC">
    <meta itemprop="headline" content="ChiLogisticsINC">
    <meta itemprop="description" content="Safely transporting products through all 48 states">
    <link rel="canonical" href="#">

    <!-- Twitter Cards -->
    <meta name="twitter:title" content="ChiLogisticsINC">
    <meta name="twitter:url" content="#">
    <meta name="twitter:description" content="Safely transporting products through all 48 states">
    <meta name="twitter:image" content="images/chi-logo.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!--Owl Carousel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../scss/main.css" rel="stylesheet">

</head>
<body>
<i class="fas fa-chevron-up" id="scrollTop"></i>
<!---  START NAVBAR FOR ONLY DESKTOP VERSION--->
<div id="nav-desktop-version" class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <a href="#"><img src="../images/chi-logo.png" alt="Logo"></a>
            </div>
            <div class="col-lg-6 text-center">
                <div class="row mt-3">
                    <div class="col-6 text-right login-holder">
                        <p>Call us:<span style="color: orange;"> +1 (630) 358-4242</span>  </p>
                    </div>
                    <div class="col-6 text-left">
                        <a href="" class="login"><i class="fa fa-fw fa-user" aria-hidden="true"></i>
                          <?php echo $_SESSION['name']; ?></a>
                        <form method="POST" style="display:inline"><input type="submit" class="btn btn-outline-danger btn-sm" value="Log Out" name="log_out">
                          <?php
                            if (isset($_POST['log_out'])) {
                              session_destroy();
                            }
                           ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---  END  NAVBAR FOR ONLY DESKTOP VERSION--->

<!---  START NAVBAR --->
<nav class="navbar navbar-expand-lg navbar-light bg-orange header-bottom">
    <div class="container">
        <a class="navbar-brand logo-nav" href="#"><img src="../images/chi-logo.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.html"><i class="fa fa-fw fa-home" aria-hidden="true"></i> Home
                        <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="careers.html" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Careers
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="careers.html"><i class="fa fa-truck" aria-hidden="true"></i> Drivers</a>
                        <a class="dropdown-item" href="officeCareer.html"><i class="fa fa-users" aria-hidden="true"></i> Office
                            Careers</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="https://intelliapp.driverapponline.com/c/chilogisticsinc?uri_b=ia_chilogisticsinc_1527737952" target="_blank"><i class="fa fa-address-card" aria-hidden="true"></i> Driver
                            App</a>
                    </div>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="news.html">News</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="inventory.php" id="navbarDropdown2" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Inventory
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="inventory.php">
                            <i class="fa fa-truck" aria-hidden="true"></i> Trucks Sale
                        </a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="gallery.php"><i class="fa fa-cogs" aria-hidden="true"></i> Gallery</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!---  END NAVBAR --->

<div class="row" style="padding: 20px;">
    <div class="col-4" style="padding: 20px; border: 1px solid black; width: 30%;">
        <div style="text-align: center; padding-bottom: 20px;">
            <h2 style="background-color: blanchedalmond ;">Update Truck</h2>
        </div>
        <div class="update-input">
            <form action="" class="truck-input" method="POST">
                <label for="truck">Truck Number:</label>
                <select name="truck" id="">
                  <option value=""></option>
                  <?php
                  $conn = mysqli_connect("localhost", "root", "", "chi_logistics");
                  $sql = "SELECT * FROM available_trucks";
                  $result = mysqli_query($conn, $sql);

                  if (mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                  echo "<option value='{$row['truck_number']}'>{$row['truck_number']}</option>";
                    }
                  }
                  ?>
                </select><br>
                <label for="truck">Available:</label>
                <select name="available" id="">
                  <option value=""></option>
                  <option value="YES">YES</option>
                  <option value="NO">NO</option>
                </select><br>
                <label for="truck">Available for:</label>
                <select name="available_for" id="">
                  <option value=""></option>
                  <option value="Rent">Rent</option>
                  <option value="Lease">Lease</option>
                  <option value="Purchase">Purchase</option>
                  <option value="Lease Purchase">Lease Purchase</option>
                  <option value="Rent or Lease">Rent or Lease</option>
                  <option value="Company driver only">Company driver only</option>
                </select><br>

                <label for="odometer">Set new odometer reading:</label>
                <input type="number" placeholder="Odometer" name="odometer"><br>

                <label for="price">Set new price:</label>
                <input type="number" placeholder="Price" name="price"><br>

                <br><br>
                <input type="submit" value="UPDATE" class="btn btn-secondary" name="update_at">
                <?php
                  if (isset($_POST['update_at'])){
                    if (isset($_POST['truck']) && $_POST['truck']!=''){
                      if (isset($_POST['available']) && $_POST['available']!='') {
                        $sql1 = "UPDATE available_trucks SET available ='{$_POST['available']}' WHERE truck_number ='{$_POST['truck']}'";
                        mysqli_query($conn, $sql1);
                      }
                      if (isset($_POST['available_for']) && $_POST['available_for']!='') {
                        $sql2 = "UPDATE available_trucks SET available_for ='{$_POST['available_for']}' WHERE truck_number ='{$_POST['truck']}'";
                        mysqli_query($conn, $sql2);
                      }
                      if (isset($_POST['odometer']) && $_POST['odometer']!='') {
                        $sql3 = "UPDATE available_trucks SET odometer ='{$_POST['odometer']}' WHERE truck_number ='{$_POST['truck']}'";
                        mysqli_query($conn, $sql3);
                      }
                      if (isset($_POST['price']) && $_POST['price']!='') {
                        $sql4 = "UPDATE available_trucks SET price ='{$_POST['price']}' WHERE truck_number ='{$_POST['truck']}'";
                        mysqli_query($conn, $sql4);
                      }
                    }else{
                      echo "You must choose a truck frist!";
                    }
                  }


                 ?>
              </form>
        </div>
    </div>
    <div class="col-8" style="padding: 20px;">
        <h2>Available Trucks</h2>
        <?php
        $sqlav = "SELECT * FROM available_trucks WHERE available = 'YES'";
        $av = mysqli_query($conn, $sqlav);
        echo"<table><tr>
                <th>Truck Number</th>
                <th>Year</th>
                <th>Make</th>
                <th>Model</th>
                <th>Odometer</th>
                <th>Program</th>
                <th>Price</th>
                <th>Remove from available trucks</th>
             </tr>";
        if (mysqli_num_rows($av) > 0){
          while($row = mysqli_fetch_assoc($av)){
            $truck = $row['truck_number'];
            echo"<tr>
                    <td>{$row['truck_number']}</td>
                    <td>{$row['year']}</td>
                    <td>{$row['make']}</td>
                    <td>{$row['model']}</td>
                    <td>{$row['odometer']}</td>
                    <td>{$row['available_for']}</td>
                    <td>$".number_format($row['price'], 2, '.', ',')."</td>
                    <td><form action='' method='POST'><input type='submit' class='btn btn-outline-danger btn-sm' value='REMOVE' name='{$truck}'></form></td>
                 </tr>";
                 if (isset($_POST[$truck])) {
                   $update2 = "UPDATE available_trucks SET available ='NO' WHERE truck_number ='{$row['truck_number']}'";
                   mysqli_query($conn,$update2);
                 }
          }
        }
        echo "</table>";
        ?>
    </div>
</div>

</body>
</html>
