<?php
  $GLOBALS['$msgerr'] = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    $email = $_REQUEST['email'];
    $psw = $_REQUEST['psw'];
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT email, username, password FROM profiles WHERE email = '$email' OR username = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
       // output data of each row
       $row = mysqli_fetch_assoc($result);
       if($psw == $row["password"])
       {
          $_SESSION["profile"] = $row["username"];
       } else {
          $GLOBALS['$msgerr'] = "<span style = 'color: red'>Password errata!</span>";
       }
    } else {
       $GLOBALS['$msgerr'] = "<span style = 'color: red'>Account inesistente!</span>";
    }

    mysqli_close($conn);
  }
?>
