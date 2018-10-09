<?
session_start();
include "connect.php";
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
$SubjectID = $_GET[subject_id];
$sql = "SELECT register.grade,register.year,register.member_id,member.member_id,
member.username,member.lastname,course.subject_id,
course.subject_name,course.subject_credit
FROM ((register
LEFT JOIN member ON register.member_id = member.member_id)
LEFT JOIN course ON register.subject_id = course.subject_id)
WHERE register.subject_id = '$SubjectID' AND register.grade = 'F'";
$query = mysqli_query($con,$sql);

?>
<div class="container col-md-12">
<h3><b>รายชื่อนักศึกษาที่ไม่ผ่านวิชา </b><?= $SubjectID?></h3><br>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th class="active">ชื่อ - นามสกุล</th>
      <th class="active">รหัสนักศึกษา</th>
      <th class="active">รหัสวิชา</th>
      <th class="active">ชื่อวิชา</th>
      <th class="active">ปีการศึกษา</th>
      <th class="active">ผลการเรียน</th>
    </tr>
  </thead>
  <?php
  $i = 1;
            while($row = mysqli_fetch_array($query))
            {
            ?>
  <tbody>
    <tr>
      <td><?= $row[username]." ".$row[lastname];?></td>
      <td><?= $row[member_id]?></td>
      <td><?= $row[subject_id]?></td>
      <td><?= $row[subject_name]?></td>
      <td><?= $row[year]?></td>
      <td><?= $row[grade]?></td>
    </tr>
  </tbody>
            <?$i++;}
           
            ?>
</table> 
</div>
</body>
</html>