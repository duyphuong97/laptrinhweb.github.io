<?php
  function connect(){
    $address = "127.0.0.1";
    $user    = "root";
    $pass    = "";
    $database= "qlbanhang";
    $conn = mysqli_connect($address, $user, $pass)
    or die("Could not connect: " . mysql_error());
    $db = mysqli_select_db($conn,$database)
    or die("Could not select database");
  }

  function tenSP($i){
    $address = "127.0.0.1";
    $user    = "root";
    $pass    = "";
    $database= "qlbanhang";
    $conn = mysqli_connect($address, $user, $pass)
    or die("Could not connect: " . mysql_error());
    $db = mysqli_select_db($conn,$database)
    or die("Could not select database");

    $sql="SELECT * FROM hanghoa";
    $result=mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($result)) {
       return $row['TenHH'][$i];
    }

  }

  echo tenSP(1);

?>
