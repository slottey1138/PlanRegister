<?
session_start();
$MemberID = $_GET['member_id'];
include "connect.php";
$sql="SELECT a.*,b.*
FROM member a
LEFT OUTER JOIN member b ON a.contact = b.member_id
WHERE a.member_id ='$MemberID'";
$result = mysqli_query($con,$sql);
$r = mysqli_fetch_array($result);
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="../css/bootstrap3.css">
    <link rel="stylesheet" href="../css/index22.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body style="background-color: #dcdcdc">
    <? include ("navbar.php");?>
<div class="container col-md-2 col-md-offset-1">
<center>
   <img src="../../img/<?= $r['11'];?>" class="image-member">
   <br><br>
</center>
</div>
<div class="container col-md-8">
<table class="table table-striped table-hover ">
<thead>
  <tr>
    <td colspan="2" class="success">ข้อมูลส่วนตัว</td>
  </tr>
</thead>
<tbody>
<tr>
    <th class="active col-md-2"><b>ชื่อ นามสกุล</b></th>
    <td class="active col-md-6"><?= $r['1']." ".$r['2'];?>
  </td>
  </tr>
  <tr>
  <th>รหัสนักศึกษา</th>
  <td><?= $r["0"];?></td>
  </tr>
  <tr>
    <th><b>รหัสประจำตัวประชาชน</b></th>
    <td><?= $r["8"];?>
  </td>
  </tr>
  <tr>
    <th><b>เกิดวันที่</b></th>
    <td><?= $r["9"];?>
  </td>
  </tr>
  <tr>
    <th><b>อีเมล</b></th>
    <td><?= $r["5"];?>
  </td>
  </tr>
  <tr>
    <th><b>เบอร์โทรศัพท์</b></th>
    <td><?= $r["4"];?>
  </td>
  </tr>
  <tr>
    <th><b>ไลด์ไอดี</b></th>
    <td><?= $r["6"];?>
  </td>
  </tr>
  <tr>
    <th><b>เฟสบุ๊ค</b></th>
    <td><?= $r["7"];?>
  </td>
  </tr>
  <tr>
    <th><b>ที่อยู่ปัจจุบัน</b></th>
    <td><?= $r["10"];?> </td>
  </tr>
  <tr>
    <td colspan="2" class="success"><b>ข้อมูลการศึกษา</b></td>
  </tr>
  <tr>
    <th><b>ปีที่เข้าศึกษา</b></th>
    <td><?=$r["27"];?> </td>
  </tr>
  <tr>
    <th><b>ปีที่สำเร็จการศึกษา</b></th>
    <td><?=$r["28"];?> </td>
  </tr>
  <tr>
    <th><b>สถานะการศึกษา</b></th>
    <? if($r[25]=="lerning"){ ?>
             <td>กำลังศึกษา </td>
           <? }
           else if($r[25]=="Graduation")
           { ?>
             <td>สำเร็จการศึกษา </td>
           <? }
          else if($r[25]=="Deprived") { ?>
            <td>พ้นสภาพ  </td>
          <? }
          else { ?>
          <?} ?>
          
    </td>
  </tr>
  <tr>
    <th><b>อาจารย์ที่ปรึกษา</b></th>
    <td><? echo $r["username"]." ".$r['lastname'];?> </td>
  </tr>
  <tr>
    <th><b>เกรดเฉลี่ยปัจจุบัน</b></th>
    <td><?=$r["24"];?> </td>
  </tr>
  <tr>
    <th><b>หน่วยกิจสะสม</b></th>
    <td><?=$r["31"];?> หน่วยกิต </td>
  </tr>
  <tr>
    <td colspan="2" class="success"><b>ข้อมูลสถานศึกษาเดิม</b></td>
  </tr>
  <tr>
    <th><b>ชื่อสถานศึกษาเดิม</b></th>
    <td><?echo $r["14"];?> </td>
  </tr>
  <tr>
    <th><b>ระดับการศึกษา</b></th>
    <td><? echo $r["15"];?> </td>
  </tr>
  <tr>
    <th><b>สาขาวิชา</b></th>
    <td><? echo $r["16"];?> </td>
  </tr>
  <tr>
    <th><b>เกรดเฉลี่ย</b></th>
    <td><? echo $r["18"];?> </td>
  </tr>
  <tr>
    <th><b>จังหวัด</b></th>
    <td><? echo $r["17"];?></td>
  </tr>
  <tr>
    <td colspan="2" class="success"><b>ข้อมูลผู้ปกครอง</b></td>
  </tr>
  <tr>
    <th><b>ชื่อ นามสกุล</b></th>
    <td><? echo $r["19"]." ".$r['20'];?> </td>
  </tr>
  <tr>
    <th><b>มีสถานะเป็น</b></th>
    <td><? echo $r["21"];?> </td>
  </tr>
  <tr>
    <th><b>เบอร์โทรศัพท์</b></th>
    <td><? echo $r["22"];?></td>
  </tr>
  <tr>
    <th><b>ที่อยู่ปัจจุบัน</b></th>
    <td><? echo $r["23"];?> </td>
  </tr>
</tbody> 
<br><br>
</div>
</div>
</body>
</html>
