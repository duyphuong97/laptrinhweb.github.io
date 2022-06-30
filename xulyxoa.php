
    <?php
    // khởi tạo kết nối
    $connect = mysqli_connect('localhost', 'root', '', 'qlbanhang');
    //Kiểm tra kết nối
    if (!$connect) {
        die('kết nối không thành công ' . mysqli_connect_error());
    }
    //câu truy vấn xóa bản ghi có id=1
    $sql = "DELETE FROM hanghoa WHERE MSHH =".$_GET['MSHH'];
    //kiểm tra
    if (mysqli_query($connect, $sql)){
        //Thông báo nếu thành công
        echo 'Xóa thành công';
        header("Location: demo.php");
      }
    else{
        //Hiện thông báo khi không thành công
        echo 'Không thành công. Lỗi' . mysqli_error($connect);
  }  //ngắt kết nối
    mysqli_close($connect);

     ?>
