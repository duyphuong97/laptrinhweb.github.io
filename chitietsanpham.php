<!DOCTYPE html>
<html lang="en">
<head>
  <title>Duy Phương Store</title>
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






<div class="jumbotron">
  <div class="container text-center">
    <img src="anh/anhbia1.jpg" width="50%" alt="">
  </div>
</div>

<?php require 'sqlconnect.php';
  $sql="SELECT * FROM hanghoa where MSHH = ".$_GET['MSHH'];
  $result=mysqli_query($conn,$sql);
  while ($row = mysqli_fetch_array($result)) {

 ?>

<div class="row">
  <div class="col-sm-6">
    <img src="images/<?php echo $row['image'] ?>" class="img-responsive" style="width:100%" alt="Image">
  </div>
  <div class="col-sm-6">
    <h2><?php echo $row['TenHH']; ?></h2>
    <h2><?php echo $row['Gia']; ?></h2>
    <hr>
    <h3><u>Chi tiet sản phẩm:</u> <?php echo $row['GhiChu']; ?></h3>

    <u><h3>Nhap so luong:</u></h3><br>  <input class="col-sm-2 text-center" value="1" type="number"><br><br>



      <a class='btn btn-primary btn-md' href='giohang.php?MSHH=<?php echo $row['MSHH']; ?>'>Mua Ngay</a>;
      <button type="button" class="btn btn-primary btn-md">+Thêm vào giỏ hàng</button> <br><br>
      <hr>
      <h2>Địa chỉ bán hàng</h2>
      <ul>
         <li><i>904C Hà Hoàng Hổ, P. Mỹ Xuyên, Tp. Long Xuyên, An Giang</i></li> <br><br>
         <li><i>122 Nguyễn Ảnh Thủ, xã Trung Chánh, H. Hóc Môn, Tp.HCM</i></li><br><br>
         <li><i>384 Huỳnh Tấn Phát, P. Bình Thuận, Q.7, Tp.HCM</i></li> <br><br>
         <li><i>384 Huỳnh Tấn Phát, P. Bình Thuận, Q.7, Tp.HCM</i></li> <br><br>
         <li><i>129 Nguyễn Trung Trực, P. Vĩnh Bảo, Tp. Rạch Giá, Kiên Giang</i></li> <br><br>
         <li><i>166 Võ Văn Ngân, P. Bình Thọ, Q. Thủ Đức, Tp.HCM</i></li> <br><br>
         <li><i>458 Lê Văn Sỹ, P.14, Q.3, Tp.HCM</i></li> <br><br>
         <li><i>69 - 71 Nguyễn Thị Tú, P.Bình Hưng Hòa B, Q.Bình Tân, TP.HCM</i></li> <br><br>
       </ul>
<?php } ?>

  </div>
</div>


<footer class="container-fluid text-center">
  <p>Mở cửa:7 giờ 30, đóng cửa: 22 giờ.</p>
</footer>

</body>
</html>
