<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table#table,#tr{
            border: 2px solid blue;
            border-collapse: collapse;
            text-align: center;
        }

        td#td{
        	border: 2px solid blue;
            border-collapse: collapse;
            text-align: center;
            color: red;
        }
	</style>
</head>
<body>
<?php
	require 'sqlconnect.php';
		$sodondh = $_GET['sodondh'];
		$mskh = $_GET['mskh'];

		$sql1="SELECT * FROM chitietdathang WHERE sodondh='".$sodondh."'";
		$sql2="SELECT * FROM khachhang WHERE mskh='".$mskh."'";
		$sql3="UPDATE hanghoa hh,chitietdathang ct SET hh.soluong = hh.soluong-ct.soluong WHERE ct.mshh=hh.mshh AND sodondh='".$sodondh."'";
		$result1=mysqli_query($conn,$sql1) or die("Error!");
		$result2=mysqli_query($conn,$sql2) or die("Error!");

		if ($_GET['giaohang'] == 1) {
			$conn->query($sql3);
		}

		echo "<table id='table'>";
			$row=mysqli_fetch_array($result1);
			echo "<tr id='tr'>";
				echo "<b>SỐ ĐƠN ĐẶT HÀNG: ".$row['sodondh']."</b>";
			echo "</tr>";
			$result3=mysqli_query($conn,"SELECT * FROM hanghoa WHERE mshh='".$row['mshh']."'");
			$row2=mysqli_fetch_array($result3);
			echo "<tr id='tr'>";
				echo "<td id='td'>Tên sản phẩm: ".$row2['tenhh']."</td><td id='td'>Giá: ".$row2['gia']."</td><td id='td'>Số lượng: ".$row['soluong']."</td><td id='td'>Tổng cộng: ".$row['giadathang']."</td>";
			echo "</tr>";

			$result4=mysqli_query($conn,"SELECT * FROM khachhang WHERE mskh='".$mskh."'");
			$row3=mysqli_fetch_array($result4);
		echo "</table>";
		echo "Tên khách hàng: <b>".$row3['hotenkh']."</b><br>";
		echo "Địa chỉ: <b>".$row3['diachi']."</b><br>";
		echo "Số điện thoại: <b>".$row3['sodienthoai']."</b><br>";
		echo "E-mail: <b>".$row3['email']."</b><br>";
?>
</body>
</html>
