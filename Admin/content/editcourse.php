<?php
session_start();
include("connect.php");
$year = $_GET['year'];
$_SESSION["Year"] = $_GET['year'];
$sql = "SELECT * FROM course WHERE year = $year";
$result = mysqli_query($con,$sql);
$show = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>แก้ไขรายวิชา</title>
  </head>
  <body>
    <?php require("navbar.html");?>
<div class="container col-md-10 col-md-offset-1">
  <legend>แก้ไขรายวิชาปีการศึกษา <?php echo $year; ?></legend>
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
  <?
  while($row = mysqli_fetch_array($result))
  {
  ?>
    <tr>
      <td><? echo $row['subject_id'];?></td>
      <td><? echo $row['subject_name'];?></td>
      <td><? echo $row['subject_credit'];?></td>
      <td><? echo $row['note'];?></td>
      <td><a href="editcourse2.php?subject_id=<?echo $row["subject_id"]?>" class="btn btn-danger btn-sm">แก้ไข</a></td>
      <td><a href="dl-course.php?subject_id=<?echo $row['subject_id']?>" class="btn btn-danger btn-sm">ลบ</a></td>
    </tr>
<? } ?>
</tbody>
</table>
</div>
</div>
</body>
</html>
