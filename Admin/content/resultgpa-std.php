<?php
session_start();
include("connect.php")
 ?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หน้าหลัก</title>
  </head>
  <body style="background-color: #dcdcdc">
  <?
  require("navbar.html");
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
<div class="container col-md-10 col-md-offset-1">
  <legend>ข้อมูลนักศึกษา</legend>
<form class="navbar-form navbar-left" name="frmSearch" method="post"
action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
<div class="form-group">
  <input type="text" name="txtKeyword" id="txtKeyword" class="form-control" value="<?php echo $strKeyword;?>" placeholder="ใส่รหัสนักศึกษา">
</div>
<input type="submit" value="ค้นหา" class="btn btn-default"></input>
</form>
<br><br>
<?php
   $sql = "SELECT * FROM member WHERE member_id LIKE '%".$strKeyword."%' AND user_type = '".'student'."' ";
   $query = mysqli_query($con,$sql);
?>
<table class="table table-striped table-hover ">
  <tr>
    <tr class="success">
      <th class="col-md-1">ลำดับที่</th>
      <th class="col-md-4">ชื่อ - นามสกุล</th>
      <th class="col-md-5">รหัสนักศึกษา</th>
      <th class="col-md-2">ดูรายละเอียด</th>
    </tr>
  </tr>
<?php
$i=1;
while($row=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td> <?php echo $i;?></td>
    <td> <?php echo $row['username']." ".$row['lastname'];?></td>
    <td> <?php echo $row['member_id'];?></td>
    <td><a href="detailgpa-std.php?member_id=<?php echo $row["member_id"];?>" class="btn btn-primary btn-sm">ดูผลการเรียน</a></td>
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