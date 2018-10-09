<?
    session_start();
    include "connect.php";
    $Year = $_GET[Year];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
    <? include"navbar.php" ?>
<div class="container col-md-12">
<a href="statistics-std.php" class="btn btn-info">ย้อนกลับ</a><br><br>
<h3><b>สถิตินักศึกษาปีการศึกษา : </b><?= $Year?></h3><br>
<div class="tab">
  <button class="tablinks" onclick="openList(event, '1')" id="defaultOpen">เข้าศึกษา</button>
  <button class="tablinks" onclick="openList(event, '2')">สำเร็จการศึกษา</button>
  <button class="tablinks" onclick="openList(event, '3')">พ้นสภาพ</button>
</div><br>

<div id="1" class="tabcontent col-md-12">
<table class="table table-striped table-hover ">
<?
$sql = "select * from member where checkin = '$Year'";
$query = mysqli_query($con,$sql);
?>
  <thead>
    <tr class="info">
      <th class="col-md-1">ลำดับที่</th>
      <th class="col-md-2">รหัสนักศึกษา</th>
      <th class="col-md-2">ชื่อ - นามสกุล</th>
      <th class="col-md-1">ดูรายละเอียด</th>
    </tr>
  </thead>
  <?
$i=1;
while($r=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td> <? echo $i;?></td>
    <td> <? echo $r['username']." ".$r['lastname'];?></td>
    <td> <? echo $r['member_id'];?></td>
    <td><a href="detail-std.php?member_id=<?php echo $r["member_id"];?>" class="btn btn-primary btn-sm">ดูข้อมูลส่วนตัว</a></td>
  </tr>
<?
$i++;
}
?>
</table>
</div> 
<div id="2" class="tabcontent col-md-10 ">
<table class="table table-striped table-hover ">
<?
$sql2 = "select * from member where checkout = '$Year'";
$query = mysqli_query($con,$sql2);
?>
  <thead>
    <tr class="info">
      <th class="col-md-1">ลำดับที่</th>
      <th class="col-md-2">รหัสนักศึกษา</th>
      <th class="col-md-2">ชื่อ - นามสกุล</th>
      <th class="col-md-1">ดูรายละเอียด</th>
    </tr>
  </thead>
  <?
$i=1;
while($r=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td> <? echo $i;?></td>
    <td> <? echo $r['username']." ".$r['lastname'];?></td>
    <td> <? echo $r['member_id'];?></td>
    <td><a href="detail-member.php?member_id=<?php echo $r["member_id"];?>" class="btn btn-primary btn-sm">ดูรายละเอียด</a></td>
  </tr>
<?
$i++;
}
?>
</table>
</div> 
<div id="3" class="tabcontent col-md-10">
<table class="table table-striped table-hover ">
<?
$sql = "select * from member where resign = '$Year'";
$q = mysqli_query($con,$sql);
if ($q){
?>
  <thead>
    <tr class="info">
      <th class="col-md-1">ลำดับที่</th>
      <th class="col-md-2">รหัสนักศึกษา</th>
      <th class="col-md-2">ชื่อ - นามสกุล</th>
      <th class="col-md-1">ดูรายละเอียด</th>
    </tr>
  </thead>
  <?
$i=1;
while($r=mysqli_fetch_array($q))
{
?>
  <tr>
    <td> <? echo $i;?></td>
    <td> <? echo $r['username']." ".$r['lastname'];?></td>
    <td> <? echo $r['member_id'];?></td>
    <td><a href="detail-member.php?member_id=<?php echo $r["member_id"];?>" class="btn btn-primary btn-sm">ดูรายละเอียด</a></td>
  </tr>
<?
$i++;
}
?>
<?}
else {
  echo("Error description: " . mysqli_error($con));
}
?>

</table>
</div> 
</div>
</div>
<script>
function openList(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
</body>
</html>