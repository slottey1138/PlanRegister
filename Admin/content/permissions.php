<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="../css/bootstrap3.css">
    <link rel="stylesheet" href="../css/index2.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
  </head>
  <body style="background-color: #dcdcdc">
    <?php require("navbar.html");?>
<div class="col-md-1">

</div>
<div class="container col-md-10">
  <legend>กำหนดสิทธิ์ของอาจารย์</legend>
  <a href="roleNew.php" class="btn btn-info col-md-2">สร้างสิทธิ์ใหม่</a><br><br>
  <table class="table table-striped table-hover ">
    <thead>
      <tr class="success">
      <th>รหัสสิทธิ์</th>
      <th>ชื่อสิทธิ์</th>
      <th>แก้ไข</th>
      <th>ลบ</th>
      </tr>
    </thead>
    <tbody>
<?
include("connect.php");
$sql = "select * from roles ";
$obj = mysqli_query($con,$sql) or die (mysqli_error());
	while($r = mysqli_fetch_array($obj)) {
?>	
	<tr>
		<td><? echo $r[RolesID] ?></td>
		<td><? echo $r[rolename] ?></td>
		<td><a href="roleEdit.php?RolesID=<? echo $r[RolesID] ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
		<td><? if($r[rid]!=1) { ?><a href="roleDel.php?RolesID=<? echo $r[RolesID] ?>" class="btn btn-danger btn-sm">ลบ</a><? } ?></td>
	</tr>
<?  } ?>
<? mysqli_close($con) ?>
    </tbody>
  </table>
</div>
</body>
</html>
