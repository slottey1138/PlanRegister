<?php 
session_start();
include("connect.php");
$sql = "SELECT * FROM member WHERE user_id = '".$_SESSION['user_id']."' ";
$query = mysqli_query($con,$sql);
?>

<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>อาจารย์</title>
    <link rel="stylesheet" href="../css/bootstrap5.css">
    <link rel="stylesheet" href="../css/teacherr.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
  </head>
  <body>
    <?include("navbar.html");?>
    <div class="container col-md-10 col-md-offset-1">
    <legend>เลือกปีการศึกษา</legend>
    <?
    $sql = "SELECT * FROM education";
    $result = mysqli_query($con,$sql);
     ?>
     <div class="container col-md-10">
       <?php
       while($row = mysqli_fetch_array($result))
       {
       ?>
           <a href="passing-course.php?year=<? echo $row["year"];?>" class="btn btn-primary">
             ปีการศึกษา <?php echo $row["year"];?></a>
       <?php
       }
       ?>
       </div>
       </div>
</body>
</html>