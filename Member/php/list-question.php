<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>แบบสอบถาม</title>
</head>
<body>
<?
  require("navbar.php");
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
<div class="container col-md-12">
  <legend>ข้อมูลแบบสอบถามนักศึกษา</legend>
<form class="navbar-form navbar-left" name="frmSearch" method="post"
action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
<div class="form-group">
  <input type="text" name="txtKeyword" id="txtKeyword" class="form-control" value="<?php echo $strKeyword;?>" placeholder="ใส่รหัสนักศึกษา">
</div>
<input type="submit" value="ค้นหา" class="btn btn-default"></input>
</form>
<br><br>
<a href="ask-ans2.php" class="btn btn-info col-md-offset-7">บันทึกแบบสอบถาม</a><br><br>
<?php
$con=mysqli_connect("localhost","root","mysql","project");
mysqli_set_charset($con,"utf8");
   $sql = "SELECT * FROM questionnaire WHERE member_id LIKE '%".$strKeyword."%' ";
   $query = mysqli_query($con,$sql);
?>
<table class="table table-striped table-hover ">
  <tr>
    <tr class="success">
      <th class="col-md-1">ลำดับที่</th>
      <th class="col-md-3">ชื่อ - นามสกุล</th>
      <th class="col-md-5">รหัสนักศึกษา</th>
      <th class="col-md-2">ดูรายละเอียด</th>
      <th class="col-md-1">ผลการเรียน</th>
    </tr>
  </tr>
<?php
$i=1;
while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td> <?php echo $i;?></td>
    <td> <?php echo $row['Firstname']." ".$row['Lastname'];?></td>
    <td> <?php echo $row['member_id'];?></td>
    <td><a href="detail-question.php?member_id=<?php echo $row["member_id"];?>" class="btn btn-success btn-sm">
    <span class="glyphicon glyphicon-zoom-in"></span> ดูรายละเอียด</a></td>
    <td><a href="detailgpa-std.php?member_id=<?php echo $row["member_id"];?>" class="btn btn-primary btn-sm">
    <span class="glyphicon glyphicon-zoom-in"></span> ดูผลการเรียน</a></td>
  </tr>
<?php
$i++;
}
?>
</table>
</div>
<?php
mysqli_close($con);
?>
</body>
</html>