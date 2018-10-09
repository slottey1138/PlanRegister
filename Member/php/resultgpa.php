<?php
session_start();
include("connect.php");
$MemberID = $_SESSION['member_id'];
$strSQL = "SELECT * FROM member WHERE member_id = '".$_SESSION['member_id']."'  ";
$objQuery = mysqli_query($con,$strSQL);
$show = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>ผลการเรียน</title>
    <link rel="stylesheet" href="../css/bootstrap7.css">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
    crossorigin="anonymous"></script>
  </head>
  <body style="background-color: #dcdcdc">
  <?php require("navbar.php");?>
<div class="col-md-1">
</div>
</div>
 <div class="container col-md-12">
   <div class="container col-md-12">
    <div class="container col-md-12">
      <div class="well well-sm col-md-5">
         ชื่อ : <?php echo $show["username"]." ".$show["lastname"]; ?>
      </div>
      <div class="col-md-4">

      </div>
      <div class="well well-sm col-md-3">
         เกรดเฉลี่ย : <?php echo $show["gpa"]; ?>
      </div>
      <div class="container col-md-12">
        <?php
        $year = 1;
        while ($year <= 5) {
        $sql = "SELECT register.grade,register.semester,register.year,register.status,member.member_id,
        member.username,member.lastname,course.subject_id,
        course.subject_name,course.subject_credit
        FROM ((register
        LEFT JOIN member ON register.member_id = member.member_id)
        LEFT JOIN course ON register.subject_id = course.subject_id)
        WHERE register.member_id = '$MemberID' AND register.semester = '$year'";
        $query = mysqli_query($con,$sql);
        ?>
        <table class="table table-striped table-hover ">
        <tbody>
          <?php
          $i=1;
          while($row = mysqli_fetch_array($query))
          {
            if($i==1){echo '<thead>
              <tr>
                <th colspan="4">ปีการศึกษา : '.$row[year].'</th>
                </tr>
              <tr>
                <th class="success col-md-3">รหัสวิชา</th>
                <th class="success col-md-4">ชื่อวิชา</th>
                <th class="success col-md-2">หน่วยกิต</th>
                <th class="success col-md-2">ผลการเรียน</th>
                <th class="success col-md-1"></th>
              </tr>
            </thead>';
          $i++;}
          ?>
           <td><?echo $row[subject_id];?></td>
           <td><?echo $row[subject_name];?></td>
           <td><?echo $row[subject_credit];?></td>
           <td><?echo $row[grade];?></td>
           <? if($row[status]==""){ ?>
           <td><a href="savegpa.php?subject_id=<?echo $row["subject_id"]?>" class="btn btn-primary btn-sm">บันทึกผลการเรียน</a></td>
         <? }
         else if($row[status]=="dontsave")
         { ?>
           <td> <a href="savegpa.php?subject_id=<?echo $row["subject_id"]?>" class="btn btn-danger btn-sm">แก้ไขผลการเรียน</a> </td>
         <? }
        else { ?>
          <td> <a href="savegpa.php?subject_id=<?echo $row["subject_id"]?>" class="btn btn-success btn-sm disabled">ตรวจสอบแล้ว</a> </td>
        <?}
         ?>

        </tbody>
        <?}?>
        <?php $year++ ?>
      <?php } ?>
        </table>
      </div>
    </div>
  <?php
mysqli_close($con);
?>
</body>
</html>
