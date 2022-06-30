<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Phuong'Store</title>
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
        div#header{
            position: relative;
            width: 100%;
            height: 60px;
            background: yellow;
            z-index: 1;
            line-height: 60px;
            white-space: nowrap;
        }
        div#body{
            position: relative;
            width: 70%;
            margin: 0px auto;
            margin-top: 10px;
            background: white;
            display: flex;
            justify-content: center;
        }
        .body{
            position: relative;
            width: 70%;
            margin: 0px auto;
            margin-top: 10px;
            background: white;
        }
        .center {
            margin: auto;
            width: 70%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .a{
            display: flex;
            float: left;
        }

        .hover:hover {
            background-color: #fff;
        }

        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button1 {
            background-color: white;
            color: black;
            border: 1px solid blue;
            border-radius: 3px;
        }
        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }
        .search{
            float: left;
            width: 250px;
            height: 40px;
            margin: 10px;
            background: #FFF;
            position: relative;
            border-radius: 10px;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
        }
        .searchinput{
            float: left;
            width: 200px;
            margin-left: 7px;
            margin-top: 3px;
            padding-top: 2px;
            border: 0;
            position: relative;
            background: #FFF;
            height: 30px;
            text-indent: 10px;
            font-size: 14px;
        }
        .searchicon{
            height: 25px;
            width: 25px;
            margin-bottom: 2px;
        }
        .btn1{
            width: 20px;
            height: 20px;
            background: #FFF;
            border: 0;
            cursor: pointer;
        }
    </style>
</head>
<body style="background-color: gray;"
    <?php
        session_start();
    ?>
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

    <div id="body">
        <div class="a">
            <div>
                <table align="center" style="width: 200px; margin: 20px;">
                    <?php
                        require 'sqlconnect.php';
                        $sql="SELECT * FROM hanghoa WHERE MSHH='".$_GET['MSHH']."'";
                        $result=mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result);
                        $gia = $row["Gia"];
                        echo "<b style='color: blue;'>Tên sản phẩm: </b><b style='font-size: 18px'>".$row["TenHH"]."</b>";
                        echo "<br><b>Giá bán: </b><b style='color:red; font-size:2s0px;'>".$gia."₫</b>";
                        mysqli_close($conn);
                    ?>
                </table>
            </div>
        </div>
    </div>
        <div>
            <div class="center">
                <br><br><span><b>Số lượng: &nbsp;&nbsp;</b></span>
                <button onclick="clicked(-1)" class="button1"><img src="anh/minus.png" style="padding-top: 4px;width: 20px; height: 20px;"></button>
                &nbsp;&nbsp;<span id="soluongsp" style="font-size: 20px;">1</span>&nbsp;&nbsp;
                <button onclick="clicked(1)" class="button1"><img src="anh/plus.png" style="padding-top: 4px;width: 20px; height: 20px;"></button>
            </div>
            <form action="dathang.php" method="post" name="myform">
                <div class="center">
                    <b><i style="color: green;">Tổng tiền cần thanh toán:&nbsp;</i></b><b style="color:red;font-size:20px"><span id="total"><?php echo $gia; ?></span>₫</b>
                </div>
                <hr style="border: 1; width: 70%;" class="center">
                <div class="center">
                    <input type="radio" name="gender" value="male" checked="1"> Anh <br>
                    <input type="radio" name="gender" value="female"> Chị <br>
                </div><div class="center"><br></div>
                <div class="center">
                    <input type="text" name="hoten" placeholder="Họ tên" style="font-size: 20px;height: 40px; width: 200px; border-radius: 5px">&nbsp;
                    <input type="text" name="sodienthoai" placeholder="Số điện thoại" style="font-size: 20px;height: 40px; width: 150px;border-radius: 5px">&nbsp;
                    <input type="text" name="email" placeholder="Email" style="font-size: 20px;height: 40px; width: 200px;border-radius: 5px">
                </div>
                <div class="center">
                    <input type="text" name="diachi" placeholder="Địa chỉ" style="font-size: 20px;height: 40px; width: 565px;border-radius: 5px">
                </div>
                <div class="center">
                    <input type="submit" value="XÁC NHẬN ĐẶT HÀNG" class="button button1">
                </div>
                <input type="hidden" name="soluong" id="soluong" value="1">
                <input type="hidden" name="MSHH" value="<?php echo $_GET['MSHH']; ?>">
                <input type="hidden" name="tong" id="tong" value="<?php echo $gia; ?>">
            </form>
        </div>

        <script type="text/javascript">
            var i = 1;
            function clicked(n) {
                var soluongsp = document.getElementById("soluongsp");
                var giab = "<?php echo $gia; ?>";
                i = i + n;
                if(i<1) i=1;
                soluongsp.innerHTML = i;
                document.getElementById("soluong").value = i;
                total.innerHTML = i*giab;
                document.getElementById("tong").value = i*giab;
            };
        </script>
</body>
</html>
