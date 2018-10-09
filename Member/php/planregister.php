<?php
session_start();
include "connect.php";
$MemberID = $_SESSION['member_id'];
$strSQL = "SELECT * FROM member WHERE member_id = '".$_SESSION['member_id']."'  ";
$objQuery = mysqli_query($con,$strSQL);
$show = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>ลงทะเบียน</title>
    <link rel="stylesheet" href="../css/bootstrap7.css">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
        <form class="" action="saveregister.php" method="post">
          <input type="hidden" name="MemberID" value="<?php echo $show["member_id"];?>">
          <div class="container col-md-10">
           ภาคเรียนที่ : <input type="text" style="width:100px; border:none;"name="Semester" >
             ปีการศึกษาที่ : <input type="text" style="width:100px; border:none;"name="Year">
          </div><br><br>
       <table class="table table-striped table-hover ">
       <thead>
         <tr>
           <th class="warning col-md-2">รหัสวิชา</th>
           <th class="warning col-md-5">ชื่อวิชา</th>
           <th class="warning col-md-2">หน่วยกิต</th>
           <th class="warning col-md-3">หมายเหตุ</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td><input type="text" class="form-control" name="SubjectID" ></td>
           <td><input type="text" class="form-control" name="SubjectName"></td>
           <td><input type="text" class="form-control" name="SubjectCredit"></td>
           <td><input type="text" class="form-control" name="Note"></td>
         </tr>
       </tbody>
       </table>
       <div class="container col-md-12">
         <input type="submit" name="submit" class="btn btn-info col-lg-offset-11" value="ลงทะเบียน">
         <br><br><br>
       </div>
        </form>
       </div>
      <div class="container col-md-12">
        <?php
        $year = 1;
        while ($year <= 5) {
        $sql = "SELECT register.grade,register.semester,register.year,member.member_id,
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
          $i = 1;
          while($row = mysqli_fetch_array($query))
          {
            if ($i==1) {echo '<thead>
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
            $i++;
            }
          ?>
           <td><?echo $row["subject_id"];?></td>
           <td><?echo $row["subject_name"];?></td>
           <td><?echo $row["subject_credit"];?></td>
           <td><?echo $row["note"];?></td>
           <td><a href="JavaScript:if(confirm('ยืนยันการลบรายวิชา ?')==true){window.location=
                  'del-planregister.php?subject_id=<?php echo $row["subject_id"]?>&semester=<?= $row[semester]?>';}" class="btn btn-danger btn-sm">X ลบ</a></td>
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
