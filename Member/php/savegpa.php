<?php
session_start();
include("connect.php");
$SubjectID = $_GET["subject_id"];
$MemberID = $_SESSION['member_id'];
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>บันทึกผลการเรียน</title>
    <link rel="stylesheet" href="../css/bootstrap7.css">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </head>
  <body>
<?php require("navbar.php");?>
<div class="container col-md-10 col-lg-offset-1">
<form class="form" action="updategrade.php" method="post">
  <input type="hidden" name="SubjectID" value="<?echo $SubjectID?>">
  <input type="hidden" name="MemberID" value="<?echo $MemberID?>">
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
       <td><select class="form-control" name="selectGrade">
            <option value=""></option>
            <option value="A">A</option>
            <option value="B+">B+</option>
            <option value="B">B</option>
            <option value="C+">C+</option>
            <option value="C">C</option>
            <option value="D+">D+</option>
            <option value="D">D</option>
            <option value="F">F</option>
            <option value="AU">AU</option>
            <option value="I">I</option>
            <option value="S">S</option>
            <option value="U">U</option>
            <option value="W">W</option>
            <option value="P">P</option>
          </select></td>
          <td><button type="submit" class="btn btn-primary">ยืนยัน</button></td>
    </tbody>
</form>
</body>
</html>
