<?php
session_start();
include("connect.php");
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>ผลการเรียน</title>
    <link rel="stylesheet" href="../css/bootstrap7.css">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body style="background-color:#dcdcdc">
    <?php require("navbar.php");?>
<div class="container col-md-12">
  <?php
  $teaCher1 = "teacher";
  $teaCher2 = "teachercpr";
  $showContact = "SELECT * FROM member WHERE user_type = '$teaCher1' OR user_type = '$teaCher2'";
  $reSult=mysqli_query($con,$showContact);
   ?>
   <?php
  while($row = mysqli_fetch_array($reSult))
  {
  ?>
  <div class="container col-md-3">
    <div class="panel panel-success">
  <div class="panel-heading">
    <center>
      <h3 class="panel-title">อ. <?php echo $row['username']." ".$row['lastname'];?></h3>
    </center>
  </div>
  <div class="panel-body">
    <center>
      <img src="../img/user.jpg" alt=""><br><br>
      <a href="detailteacher.php?member_id=<? echo $row["member_id"]?>" class="btn btn-primary">ข้อมูลการติดต่อ</a>
    </center>
  </div>
</div>
  </div>
  <?php } ?>

</div>
<?php
mysqli_close($con);
?>
</body>
</html>
