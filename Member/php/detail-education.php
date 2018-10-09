<?
session_start();
$year = $_GET['year'];
include "connect.php";
$sql = "SELECT * FROM course WHERE year = $year";
$result = mysqli_query($con,$sql);
$show = mysqli_fetch_array($result,MYSQLI_ASSOC);
$sql2 = "SELECT * FROM education WHERE year = $year";
$result2 = mysqli_query($con,$sql2);
$show2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
?>
<html> 
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หลักสูตรการศึกษา</title>
    <link rel="stylesheet" href="../css/bootstrap3.css">
    <link rel="stylesheet" href="../css/education.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <?php require("navbar.php");?>
<div class="container col-md-10 col-md-offset-1">
  <legend>หลักสูตรปีการศึกษา <?php echo $year; ?></legend>
  ชื่อภาษาไทย : <?echo $show2['th_name'];?><br>
  ชื่อภาษาอังกฤษ : <?echo $show2['eng_name'];?><br>
  หน่วยกิตรวม : <?echo $show2['credit'];?><br><br>
  <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th class="active col-md-2">รหัสวิชา</th>
      <th class="active col-md-5">ชื่อวิชา</th>
      <th class="active col-md-2">หน่วยกิต</th>
      <th class="active col-md-3">หมายเหตุแก้ไข</th>
    </tr>
  </thead>
  <tbody>
  <?php
  while($row = mysqli_fetch_array($result))
  {
  ?>
    <tr>
      <td><?php echo $row['subject_id'];?></td>
      <td><?php echo $row['subject_name'];?></td>
      <td><?php echo $row['subject_credit'];?></td>
      <td></td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</body>
</html>
