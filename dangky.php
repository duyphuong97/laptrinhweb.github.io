<?php
	require 'sqlconnect.php';

	$password = addslashes($_POST['pass']);
	$cpassword= addslashes($_POST['cpass']);
	$email = addslashes($_POST['email']);
	$hoten = addslashes($_POST['name']);
	$phonenum = addslashes($_POST['sodienthoai']);

	if (!$phonenum || !$password || !$cpassword || !$email || !$hoten) {
		echo "Vui lòng nhập đầy đủ thông tin!<a href='javascript:history.go(-1)'>Quay lại</a>"; exit;
	}
	else
	if (!preg_match("/^(?=.*[a-z])(?=.{4,}$)/", trim($password))){
		echo "Mật khẩu phải chứa ít nhất 1 ký tự thường và độ dài tối thiểu 4 ký tự!<a href='javascript:history.go(-1)'>Quay lại</a>"; exit;
	}
	else
	if ($cpassword != $password){
		echo "Nhập lại mật khẩu không khớp!<a href='javascript:history.go(-1)'>Quay lại</a>"; exit;
	}
	// else
	// if (!preg_match("/^([a-zA-Z0-9_\.\-])+\@(gmail.com)$/", trim($email))) {
	// 	echo "Email không đúng định dạng user@gmail.com"; exit;
	// }
	else
	if (mysqli_num_rows(mysqli_query($conn,"SELECT email FROM client WHERE email='".$email."'")) > 0){
        echo "Email này đã có người dùng. Vui lòng chọn email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
	else{
		$sql="INSERT INTO client(fullname,email,pass) 
			  VALUES('".$hoten."','".$email."','".$password."')";
		$result = mysqli_query($conn,$sql)
		or die("Đăng ký thất bại!");
		echo "Đăng ký thành công! <a href='javascript:history.go(-1)'>Back</a>
		<hr><a href='dangnhap.html'>Login</a>";
	}
?>