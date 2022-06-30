<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "qlbanhang");

  // Initialize message variable
  $msg = "";


  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	// $image_text = mysqli_real_escape_string($db, $_POST['image_text']);
    $TenHH = $_POST['TenHH'];
    $QuyCach = $_POST['QuyCach'];
    $Gia = $_POST['Gia'];
    $SoLuongHang = $_POST['SoLuongHang'];
    $GhiChu = $_POST['GhiChu'];

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO hanghoa (image, TenHH, QuyCach, Gia, SoLuongHang, GhiChu) VALUES ('$image', '$TenHH', '$QuyCach', '$Gia', '$SoLuongHang', '$GhiChu')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  echo $msg;
  $result = mysqli_query($db, "SELECT * FROM hanghoa");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<style>
  /* Remove the navbar's default margin-bottom and rounded borders */
  .navbar {
    margin-bottom: 0;
    border-radius: 0;
  }
  /* Add a gray background color and some padding to the footer */
  footer {
    background-color: #f2f2f2;
    padding: 25px;
  }
</style>

<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="mau.php">Phuong'Store</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="menu"><a href="#">Áo nam</a>
            <div class="menucon">
              <a href="aosomi.php">Áo Sơ Mi</a>
              <a href="aothun.php">Áo Thun</a>

            </div>
          </li>
          <li class="menu"><a href="#">Quần nam</a>
            <div class="menucon">
              <a href="quansot.php">Quần Short</a>
              <a href="quandai.php">Quần Dài</a>

            </div>
          </li>
          <li class="menu"><a href="#">Giày nam</a>
            <div class="menucon">
              <a href="giaythethao.php">Giày Thể Thao</a>
              <a href="giaymoi.php">Giày Mọi</a>

            </div>
          </li>
          <li class="menu"><a href="#">Phụ kiện nam</a>
            <div class="menucon">
              <a href="vidanam.php">Ví Da Nam</a>
              <a href="nonnam.php">Nón Nam</a>

            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left" action="search.php">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default">Tim</button>
      </form>
          <li><a href="#"><span class="	glyphicon glyphicon-shopping-cart"> </span>  Gio Hang</a></li>
          <li><a href="dangnhap.html"><span class="glyphicon glyphicon-log-in"> </span>  Login</a></li>
        </ul>
      </div>
    </div>
  </nav>


<div id="content">
  <form method="POST" action="demo.php" enctype="multipart/form-data">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['TenHH']."</p>";
        echo "<p>".$row['QuyCach']."</p>";
        echo "<p>".$row['Gia']."</p>";
        echo "<p>".$row['SoLuongHang']."</p>";
        echo "<p>".$row['GhiChu']."</p>";
        echo "<button><a href='xulyxoa.php?MSHH=".$row['MSHH']."'>Xoa</a></button>";
      echo "</div>";


    }
  ?>

  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <input type="text" name="TenHH" placeholder="Tên hàng hóa" value="">
      <input type="text" name="QuyCach" placeholder="Quy Cách" value="">
      <input type="text" name="Gia" placeholder="Giá" value="">
      <input type="text" name="SoLuongHang" placeholder="Số Lượng Hàng" value="">
      <input type="text" name="GhiChu" placeholder="Ghi Chú" value="">
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
    <button><a href="dondathang.php">XEM ĐƠN ĐẶT HÀNG</a></button>
  </form>
</div>
</body>
</html>
