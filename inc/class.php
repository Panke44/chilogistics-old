<?php

class HandlerCHI{
    /*private $sales;
    private $truck_number;
    private $pictures;
    private $email;
    private $conn;*/



  public function DBconnect(){
    $this->conn = mysqli_connect("localhost", "root", "", "chi_logistics");
  }

  public function AvailableTrucks(){
    $sqlavailable = "SELECT * FROM available_trucks WHERE available = 'YES'";
    $available = mysqli_query($this->conn, $sqlavailable);

    if (mysqli_num_rows($available) > 0){
      while($row = mysqli_fetch_assoc($available)){
        $v = $row['truck_number'];
        echo "<div class='truck-sale'>
                <div class='sale-img'>
                  <img src='../images/Truck Sale/{$row['truck_number']}/1.jpg' alt=''>
                </div>
                <div class='truck-info'>
                  <div class='truck-price'>$".number_format($row['price'], 2, '.', ',')."</div>
                  <p>{$row['year']} {$row['make']} {$row['model']}</p>
                  <p>Unit number: {$row['truck_number']}</p>
                  <p>Odometer: {$row['odometer']}</p>
                  <p>Transmission: {$row['transmission_type']}</p>
                  <p>Available for: {$row['available_for']}</p>
                  <p>Location: Harvey, IL</p>
                  <div class='truck-btn'>
                      <form action='sale.php' method='POST'>
                        <input type='hidden' name='truckID' value='{$v}'>
                        <button type='submit' name='submit'>Details</button>
                      </form>
                  </div>
                </div>
            </div>";
        }
        //div class truck-btn
        //<button><a href='sale.php?id={$row['truck_number']}'>Details</a></button>
      }
    }

  public function TruckInfo($truck_number){

    $truckinfo = "SELECT * FROM available_trucks WHERE truck_number ='{$truck_number}' AND available='YES'";
    $result =mysqli_query($this->conn, $truckinfo);

    if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        if ($row['available']= 'YES') {
          echo "<div class='sale-window'>
              <h2>Unit #{$row['truck_number']}</h2>
              <div class='sale-holder'>
                  <div class='product'>
                      <div class='product-small-img'>
                          <img src='../images/Truck Sale/{$row['truck_number']}/1.jpg' alt='' onclick='changePhoto(this)'>
                          <img src='../images/Truck Sale/{$row['truck_number']}/2.jpg' alt='' onclick='changePhoto(this)'>
                          <img src='../images/Truck Sale/{$row['truck_number']}/3.jpg' alt='' onclick='changePhoto(this)'>
                          <img src='../images/Truck Sale/{$row['truck_number']}/4.jpg' alt='' onclick='changePhoto(this)'>
                          <img src='../images/Truck Sale/{$row['truck_number']}/5.jpg' alt='' onclick='changePhoto(this)'>
                      </div>
                      <div class='img-container'>
                          <img id='imageBox' src='../images/Truck Sale/{$row['truck_number']}/1.jpg' alt=''>
                      </div>
                  </div>

                  <div class='sale-table_holder'><table>
                          <tr><th>Make</th><td>{$row['make']}</td></tr>
                          <tr><th>Model</th><td>{$row['model']}</td></tr>
                          <tr><th>Year</th><td>{$row['year']}</td></tr>
                          <tr><th>VIN</th><td>{$row['VIN']}</td></tr>
                          <tr><th>Odometer</th><td>{$row['odometer']}</td></tr>
                          <tr><th>Transmission</th><td>{$row['transmission_type']}</td></tr>
                          <tr><th>Engine</th><td>{$row['engine']}</td></tr>
                          <tr><th>Horsepower</th><td>{$row['horse_power']}</td></tr>
                          <tr><th>Suspension</th><td>{$row['suspension_type']}</td></tr>
                          <tr><th>Tires Condition</th><td>{$row['tires_condition']}</td></tr>
                          <tr><th>Tire size</th><td>{$row['tire_size']}</td></tr>
                          <tr><th>Wheels</th><td>{$row['wheels']}</td></tr>
                          <tr><th>Available for</th><td>{$row['available_for']}</td></tr>
                      </table>
                  </div>
              </div>
              <div class='sale-price'>
                  <h3>Price:</h3>
                  <h2>$".number_format($row['price'], 2, '.', ',')."</h2>
              </div>
          </div>";
        }else{
          echo "Wrong entry.The unit with this number is not available!";
        }
      }
    }
  }

  public function Gallery(){
    $x = count(glob("../images/GalleryImg/IMG/"."*"));

    for ($i=0;$i<$x;$i++) {
      echo "<a href='../images/GalleryImg/IMG/{$i}.jpg' data-lightbox='gallery'>
            <img src='../images/GalleryImg/IMG/{$i}.jpg' alt=''></a>";
    }
  }

  public function LogIn(){
    if(isset($_POST['submit'])){
      if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = mysqli_real_escape_string($this->conn,$_POST['username']);
        $password = mysqli_real_escape_string($this->conn,$_POST['password']);

        $sql = "SELECT * FROM log_in WHERE user='$username' AND password='$password'";

        $result = mysqli_query($this->conn, $sql);

        if (mysqli_num_rows($result) === 1) {

          $row = mysqli_fetch_assoc($result);

          if ($row['user'] === $username && $row['password'] === $password) {

          session_start();

          $_SESSION['user'] = $row['user'];

          $_SESSION['id'] = $row['id'];

          $_SESSION['name'] = $row['name'];

          header("Location: update.php");
          }
        }else{
          echo "Wrong username or password!";
        }
      }else{
        echo "Please enter your username and password!";
      }
    }
  }

  public function DBdisconnect(){
    mysqli_close($this->conn);
  }



}

?>
