<? 
session_start();
include("connect.php");
?>
<html>
<head>
  <meta http-equiv=Content-Type content="text/html; charset=utf-8">
<title>จัดการสิทธ์</title>
</head>
<body>
  <?php require("navbar.html");?>
 <div class="container">
 <?
$sql = "select * from roles ";
$obj = mysqli_query($con,$sql) or die (mysqli_error());
?>
สิทธิ์การใช้งาน 
<select id="role">
<? 	while($r = mysqli_fetch_array($obj)) { ?>
	<option value="<?=$r[RolesID] ?>"> <?=$r[rolename] ?> </option>
<? } ?>	
</select>
<table class="table table-striped table-hover ">
<thead>
    <tr class="info">
      <th>รหัสผู้ใช้งาน</th>
      <th>ชื่อ - นามสกุล</th>
      <th>ชื่อสิทธิ์</th>
      <th>กำหนด</th>
    </tr>
  </thead>
<? 

$sql = "select * from member left join roles on member.RolesID = roles.RolesID  ";
$obj = mysqli_query($con,$sql) or die (mysqli_error());
	while($r = mysqli_fetch_array($obj)) {
?>	
<tbody>
	<tr class="active">
		<td><? echo $r[member_id] ?></td>
		<td><? echo $r[username]." ".$r[lastname]; ?></td>
		<td><? echo $r[rolename] ?></td>
		<td><? if($r[member_id]!="admin") { ?><a class="btn btn-success btn-sm" onclick="location='adduser2.php?member_id=<? echo $r[member_id] ?>
    &RolesID='+document.getElementById('role').value " style="cursor:pointer; color:#0033FF"> กำหนด</a><? } ?></td>
	</tr>
  </tbody>
<? } ?>
<? mysqli_close($con) ?>
</table>
 </div>