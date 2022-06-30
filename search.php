<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Phuong'Store</title>
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
			width: 100%;
			margin: 0px auto;
			height: 600px;
			margin-top: 10px;
			background: white;
			display: flex;
			justify-content: center;
		}
        .a{
            display: flex;
            float: left;
        }
        .btn{
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 60px;
            height: 60px;
            line-height: 60px;
            display: flex;
            justify-content: center;
            float: left;
            margin-left: 20px;
        }
        .hover:hover {
            background-color: #fff;
        }
        table#table,#td{
            border: 1px solid gray;
            border-collapse: collapse;
            text-align: center;
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
            width: 25px;
            height: 25px;
            background: #FFF;
            border: 0;
            cursor: pointer;
        }
	</style>
</head>
<body>
	<div id="body">

        <table align="center" id="table" >
        <?php
            require 'sqlconnect.php';
            $name = addslashes($_GET['search']);
            $sql="SELECT * FROM hanghoa WHERE TenHH LIKE '%" . $name . "%'";
            $result=mysqli_query($conn,$sql) or die("Không tìm thấy sản phẩm nào!");

            while ($row = mysqli_fetch_array($result)) {
                echo "<td style='width:300px;' id='td'>";
                    echo "<div style='margin-left:0px;'>";
                        echo "<a href='chitietsanpham.php?MSHH=".$row["MSHH"]."'>
                            <img src='images/".$row['image']."' style='width: 250px;height: 300px;'' /><br>
                            <span>".$row["TenHH"]."</span><br><strong>".$row["Gia"]."₫</strong>
                        </a>";

            }
						echo "KHÔNG TÌM THẤY SẢN PHẨM CẦN TÌM";

        ?>
        </table>
	</div>
</body>
</html>
