<?php
	require 'sqlconnect.php';
	session_start();
	$fullname = addslashes($_POST['hoten']);
	$phonenum = addslashes($_POST['sodienthoai']);
	$email = addslashes($_POST['email']);
	$address = addslashes($_POST['diachi']);
	$gender = addslashes($_POST['gender']);
	$soluong = addslashes($_POST['soluong']);
	$total = addslashes($_POST['tong']);
	$idsp = addslashes($_POST['MSHH']);
	$sale = "0%";
	$mskh = rand(10000,99999).rand(10000,99999);
	$sodondh= $idsp.rand(10000,99999);

	$sql_khachhang="INSERT INTO khachhang VALUES('".$mskh."','".$fullname."','".$address."','".$phonenum."','".$email."')";
	$sql_chitietdathang="INSERT INTO chitietdathang VALUES('".$sodondh."','".$idsp."','".$soluong."','".$total."','".$sale."')";
	$sql_dathang="INSERT INTO dathang VALUES('".$sodondh."','".$mskh."','".date("Y-m-d")."','".date("Y-m-d",strtotime("+3 day"))."')";

	if ($fullname==null) echo "Họ tên không được để trống!";
	else
	if ($phonenum==null) echo "Số điện thoại không được để trống!";
	else
	if ($email==null) echo "Email không được để trống!";
	else
	if ($address==null) echo "Địa chỉ không được để trống!";
	else{
		$result1=mysqli_query($conn,$sql_khachhang) or die("Ko them them khach hang");
		$result2=mysqli_query($conn,$sql_chitietdathang) or die("Ko them them chi tiet dh!");
		$result3=mysqli_query($conn,$sql_dathang) or die("Ko them them dat hang!");
		mysqli_close($conn);
		echo "Đặt hàng thành công! <a href='mau.php'>TIẾP TỤC MUA SẮM</a>";
	}


?>
