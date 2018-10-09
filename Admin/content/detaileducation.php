<?php
$year = $_GET['year'];
session_start();
$con = mysqli_connect("localhost","root","mysql","project")or die("Error");
mysqli_set_charset($con,"utf8");
$MemberID = $_SESSION['member_id'];
$strSQL = "SELECT * FROM education  ";
$objQuery = mysqli_query($con,$strSQL);
$show = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หลักสูตรการศึกษา</title>
    <link rel="stylesheet" href="../css/bootstrap3.css">
    <link rel="stylesheet" href="../css/education.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php require("navbar.html");?>
<center>
  <a href="addeducation.php" class="btn btn-info">เพิ่มหลักสูตร</a>
  <a href="editeducation.php" class="btn btn-info">แก้ไขหลักสูตร</a>
  <a href="addcourse.php" class="btn btn-info">เพิ่มรายวิชา</a>
  <a href="editcourse.php" class="btn btn-info">แก้ไขรายวิชา</a>
  <a href="compareedu.php" class="btn btn-info">เปรียบเทียบหลักสูตร</a>
</center><br>
<div class="col-md-1">

</div>
<div class="container col-md-10">
  <legend>หลักสูตรปีการศึกษา <?php echo $year; ?></legend>
  ชื่อภาษาไทย : <?echo $show['th_name'];?>
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
