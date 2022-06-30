<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Xem don dat hang</h2>
    <table border="1">
      <tr>
        <th>So don dat hang</th>
        <th>Ma so kh</th>
        <th>Ngay DH</th>
        <th>Ngay GH</th><br>
      </tr>
    <?php require("sqlconnect.php");
      $sql= "SELECT * FROM dathang";
      $result = mysqli_query($conn, $sql);

      while($row = mysqli_fetch_assoc($result)){
        ?>



            <tr>
              <td><?php echo $row['SoDonDH']; ?></td>
                <td><?php echo $row['MSKH']; ?></td>
                  <td><?php echo $row['NgayDH']; ?></td>
                    <td><?php echo $row['NgayGH']; ?></td>
                  
            </tr>



        <?php
      }

     ?>
     </table>
  </body>
</html>
