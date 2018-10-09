<?php
session_start();
include("connect.php");
$SubjectID = $_GET["subject_id"];
$Student = $_SESSION["Student"];
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>บันทึกผลการเรียน</title>
  </head>
  <body>
<? include "navbar.html";?>
<div class="container col-md-10 col-lg-offset-1">
<form class="form" action="updategrade.php" method="post">
  <input type="hidden" name="SubjectID" value="<?echo $SubjectID?>">
  <input type="hidden" name="MemberID" value="<?echo $Student?>">
    <?php
    $sql = "SELECT register.grade,member.member_id,
    course.subject_id,course.subject_name,
    course.subject_credit
    FROM ((register
    LEFT JOIN member ON register.member_id = member.member_id)
    LEFT JOIN course ON register.subject_id = course.subject_id)
    WHERE course.subject_id = '$SubjectID'";
    $query = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($query)
     ?>
    <table class="table table-striped table-hover ">
    <thead>
      <tr>
        <th class="success col-md-3">รหัสวิชา</th>
        <th class="success col-md-4">ชื่อวิชา</th>
        <th class="success col-md-2">หน่วยกิต</th>
        <th class="success col-md-2">ผลการเรียน</th>
        <th class="success col-md-2"></th>
      </tr>
    </thead>
    <tbody>
       <td><?echo $row["subject_id"];?></td>
       <td><?echo $row["subject_name"];?></td>
       <td><?echo $row["subject_credit"];?></td>
       <td><select class="form-control input-sm" name="selectGrade">
            <option <?php if ($row['grade'] == '' ) echo 'selected' ; ?> value="" ></option>
            <option <?php if ($row['grade'] == 'A' ) echo 'selected' ; ?> value="A" >A</option>
            <option <?php if ($row['grade'] == 'B+' ) echo 'selected' ; ?> value="B+" >B+</option>
            <option <?php if ($row['grade'] == 'B' ) echo 'selected' ; ?> value="B" >B</option>
            <option <?php if ($row['grade'] == 'C+' ) echo 'selected' ; ?> value="C+" >C+</option>
            <option <?php if ($row['grade'] == "C" ) echo 'selected' ; ?> value="C" >C</option>
            <option <?php if ($row['grade'] == "D+" ) echo 'selected' ; ?> value="D+" >D+</option>
            <option <?php if ($row['grade'] == 'D' ) echo 'selected' ; ?> value="D" >D</option>
            <option <?php if ($row['grade'] == 'F' ) echo 'selected' ; ?> value="F" >F</option>
            <option <?php if ($row['grade'] == 'AU' ) echo 'selected' ; ?> value="AU" >AU</option>
            <option <?php if ($row['grade'] == 'I' ) echo 'selected' ; ?> value="I" >I</option>
            <option <?php if ($row['grade'] == 'S' ) echo 'selected' ; ?> value="S" >S</option>
            <option <?php if ($row['grade'] == 'U' ) echo 'selected' ; ?> value="U" >U</option>
            <option <?php if ($row['grade'] == 'W' ) echo 'selected' ; ?> value="W" >W</option>
            <option <?php if ($row['grade'] == 'P' ) echo 'selected' ; ?> value="P" >P</option>
          </select></td>
          <td><button type="submit" class="btn btn-primary btn-sm">ยืนยัน</button></td>
    </tbody>
</form>
</body>
</html>
