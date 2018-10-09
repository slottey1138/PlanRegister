<?
include 'connect.php';
$Year = $_GET[year];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?include 'navbar.php';?>
    <?
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
<div class="container col-md-12">
  <legend>ข้อมูลนักศึกษา</legend>
<form class="navbar-form navbar-left" name="frmSearch" method="post"
action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
<div class="form-group">
  <input type="text" name="txtKeyword" id="txtKeyword" class="form-control" value="<?php echo $strKeyword;?>" placeholder="ใส่รหัสวิชา">
</div>
<input type="submit" value="ค้นหา" class="btn btn-default"></input>
</form>
<br><br>
<?php
   $sql = "SELECT * FROM course WHERE subject_id LIKE '%".$strKeyword."%' ";
   $query = mysqli_query($con,$sql);
?>
        <table class="table table-striped table-hover ">
      <thead>
    <tr>
      <th class="active col-md-2">รหัสวิชา</th>
      <th class="active col-md-5">ชื่อวิชา</th>
      <th class="active col-md-2">หน่วยกิต</th>
      <th class="active col-md-1">ดูข้อมูล</th>
    </tr>
  </thead>
  <tbody>
  <?php
  while($row = mysqli_fetch_array($query))
  {
  ?>
    <tr>
      <td><?php echo $row['subject_id'];?></td>
      <td><?php echo $row['subject_name'];?></td>
      <td><?php echo $row['subject_credit'];?></td>
      <td><a href="detail-course-fail.php?subject_id=<?= $row["subject_id"]?>" class="btn btn-info btn-sm">ดูข้อมูล</a></td>
    </tr>
<?php } ?>
</tbody>
</table>
</body>
</html>