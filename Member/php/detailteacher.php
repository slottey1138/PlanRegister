<?php
session_start();
include("connect.php");
$MemberID = $_GET['member_id'];
$sql = "SELECT * FROM member WHERE member_id=$MemberID";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หลักสูตรการศึกษา</title>
    <link rel="stylesheet" href="../css/bootstrap7.css">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body style="background-color:#dcdcdc">
    <? include("navbar.php");?>
    <div class="col-md-1">
</div>
</div>
 <div class="container col-md-12">
   <div class="col-md-1"></div>
     <div class="jumbotron col-md-10">
        <div class="container col-md-3">
            <img src="../img/user.jpg" alt="">
        </div>
        <div class="container col-md-8 detail">
           <h4>ชื่อ : <?= $row["username"]." ".$row["lastname"]; ?></h4><br>
           <h4>ห้องอาจารย์ : <?= $row["room"]; ?></h4><br>
           <h4>อีเมล : <?= $row["email"]; ?></h4><br>
           <h4>เบอร์โทรศัพท์ : <?= $row["phone"]; ?></h4><br>
           <h4>ไลด์ไอดี : <?= $row["line_id"]; ?></h4><br>
           <h4>เฟสบุ๊ค : <?= $row["facebook"]; ?></h4>
           <h4></h4>
        </div>
     </div>
 </div>
  <?php
mysqli_close($con);
?>
</body>
</html>
