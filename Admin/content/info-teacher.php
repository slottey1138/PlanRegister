<?
include("connect.php");
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หน้าหลัก</title>
  </head>
  <body style="background-color: #dcdcdc">
    <?php require("navbar.html");?>
    <div class="container col-md-10 col-md-offset-1">
      <legend>ข้อมูลอาจารย์</legend>
      <?php
      $teaCher1 = "teacher";
      $teaCher2 = "teachercpr";
      $th = "student";
      $showth = "SELECT * FROM member WHERE user_type = '$teaCher1' OR user_type = '$teaCher2'";
      $result=mysqli_query($con,$showth);
      ?>
      <div class="container" style="width: 200px"></div>
        <table class="table table-striped table-hover ">
          <thead>
            <tr class="success">
              <th class="col-md-1">ลำดับที่</th>
              <th class="col-md-4">รหัสประจำตัว</th>
              <th class="col-md-5">ชื่อ - นามสกุล</th>
              <th class="col-md-2">ดูรายละเอียด</th>
            </tr>
          </thead>
          <?php
          $i=1;
         while($row = mysqli_fetch_array($result))
         {
         ?>
          <tbody>
            <tr>
              <td> <?php echo $i;?></td>
              <td> <?php echo $row['member_id'];?></td>
              <td> <?php echo $row['username']." ".$row['lastname'];?></td>
              <td><a href="detail-member2.php?member_id=<?php echo $row["member_id"];?>" class="btn btn-info btn-sm">ดูรายละเอียด</a></td>
            </tr>
          </tbody>
          <?php
          $i++;
           }
            ?>
        </table>
    </div>
  </body>
</html>
