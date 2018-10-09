<?
session_start();
include "connect.php";
$MemberID = $_GET[member_id];
$sql = "SELECT*FROM questionnaire WHERE member_id = $MemberID";
$query = mysqli_query($con,$sql);
$r = mysqli_fetch_array($query);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>รายละเอียดแบบสอบถาม</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?include("navbar.php");?>
    <div class="container col-md-10 col-md-offset-1">
    <a href="list-question.php" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> ย้อนกลับ</a><br><br>
    <legend>ข้อมูลแบบสอบถาม</legend>
    <table class="table table-striped table-hover ">
  <thead>
    <tr class="success">
      <th colspan="2">ข้อมูลแบบสอบถาม</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="col-md-3">ชื่อ - นามสกุล</td>
      <td class="col-md-7"><?= $r[Firstname]." ".$r[Lastname];?></td>
    </tr>
    <tr>
      <td class="col-md-3">รหัสนักศึกษา</td>
      <td class="col-md-7"><?= $r[member_id]?></td>
    </tr>
    <tr>
      <td class="col-md-3">เกรดเฉลี่ย</td>
      <td class="col-md-7"><?= $r[Gpa]?></td>
    </tr>
    <tr>
      <td class="col-md-3">ปีที่เข้าศึกษา</td>
      <td class="col-md-7"><?= $r[Checkin]?></td>
    </tr>
    <tr>
      <td class="col-md-3">ปีที่สำเร็จศึกษา</td>
      <td class="col-md-7"><?= $r[Checkout]?></td>
    </tr>
    <tr>
      <td class="col-md-3">สถานที่ทำงาน</td>
      <td class="col-md-7"><?= $r[Workplace]?></td>
    </tr>
    <tr>
      <td class="col-md-3">ตำแหน่งงาน</td>
      <td class="col-md-7"><?= $r[Position]?></td>
    </tr>
  </tbody>
</table> 
    </div>
</body>
</html>