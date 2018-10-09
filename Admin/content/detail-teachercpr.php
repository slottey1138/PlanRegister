<?php
session_start();
$MemberID = $_GET['member_id'];
$con = mysqli_connect("localhost","root","mysql","project")or die("Error");
mysqli_set_charset($con,"utf8");
$sql = "SELECT * FROM member WHERE member_id=$MemberID";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="../css/bootstrap3.css">
    <link rel="stylesheet" href="../css/index2.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php require("navbar.html");?>
  <div class="col-md-1"></div>
  <div class="container col-md-2">
  <center>
   <img src="../img/user.jpg" alt="">
   <br><br>
  </center>
</div>
<div class="col-md-8">
<table class="table table-striped table-hover ">
<thead>
  <tr>
    <td colspan="2" class="success">ข้อมูลส่วนตัว</td>
  </tr>
  <tr>
    <th class="active col-md-2"><b>ชื่อ นามสกุล</b></th>
    <td class="active col-md-4"><?php echo $row['username']." ".$row['lastname'];?></td>
  </tr>
</thead>
<tbody>
  <tr>
  <th>รหัสประจำตัว</th>
  <td><?php echo $row["member_id"];?></td>
  </tr>
  <tr>
    <th><b>ห้อง</b></th>
    <td><?php echo $row["room"];?></td>
  </tr>
  <tr>
    <th><b>อีเมล</b></th>
    <td><?php echo $row["email"];?></td>
  </tr>
  <tr>
    <th><b>เบอร์โทรศัพท์</b></th>
    <td><?php echo $row["phone"];?></td>
  </tr>
  <tr>
    <th><b>ไลด์ไอดี</b></th>
    <td><?php echo $row["line_id"];?></td>
  </tr>
  <tr>
    <th><b>เฟสบุ๊ค</b></th>
    <td><?php echo $row["facebook"];?></td>
  </tr>
  <tr>
</tbody>
</table>
<br><br>
</div>
</body>
</html>
