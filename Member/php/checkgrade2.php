<?php 
session_start();
require("checksession.php");
$MemberID = $_GET['member_id'];
$select = "SELECT * FROM member WHERE member_id = $MemberID";
$query2 = mysqli_query($con,$select);
$row = mysqli_fetch_array($query2);
$_SESSION["Student"] = $MemberID;
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>อาจารย์</title>
    <link rel="stylesheet" href="../css/bootstrap5.css">
    <link rel="stylesheet" href="../css/teacherrr.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php require("navbar.php");?>
    <div class="container col-md-12">
      <div class="container col-md-12">
         <div class="col-md-1"></div>
         <div class="well well-sm col-md-3">
       <b>ผลการเรียนของ : </b><? echo $row["username"]." ".$row["lastname"]?>
         </div>
         <div class="col-md-4"></div>
         <div class="well well-sm col-md-3">
       <b>เกรดเฉลี่ยปัจจุบัน : <?php echo $row['gpa']; ?></b>
        </div>
      </div>
      <div class="tab">
        <button class="tablinks" onclick="openList(event, '1')" id="defaultOpen">ผลการเรียนทั้งหมด</button>
      </div>
      <div id="myTabContent" class="tab-content">
        <div class="tabcontent" id="1">
          <?php
          $year = 1;
          while ($year <= 30) {
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
              if ($i==1) {
                echo '<thead>
                  <tr>
                    <th class="success col-md-3">รหัสวิชา</th>
                    <th class="success col-md-4">ชื่อวิชา</th>
                    <th class="success col-md-1">หน่วยกิต</th>
                    <th class="success col-md-1">ผลการเรียน</th>
                    <th class="success col-md-1"></th>
                  </tr>
                </thead>';
                $i++;
              }
            ?>
             <td><?echo $row["subject_id"];?></td>
             <td><?echo $row["subject_name"];?></td>
             <td><?echo $row["subject_credit"];?></td>
             <td><?echo $row["grade"];?></td>
             <? if($row[status]==""){ ?>
             <td>
             <div class="btn-group btn-group-justified">
                <a href="JavaScript:if(confirm('ยืนยันข้อมูลผลการเรียน ?')==true){window.location='updategrade2.php?subject_id=<?echo $row["subject_id"]?>&member_id=<?= $MemberID?>&grade=<?= $row[grade]?>';}" class="btn btn-info btn-sm">บันทึก</a>
                <a href="edit-grade.php?subject_id=<?echo $row["subject_id"]?>" class="btn btn-danger btn-sm">แก้ไข</a>
                  </div>
             </td>
           <? }
           else if($row[status]=="dontsave")
           { ?>
             <td> <div class="btn-group btn-group-justified">
             <a href="JavaScript:if(confirm('ยืนยันข้อมูลผลการเรียน ?')==true){window.location='updategrade2.php?subject_id=<?echo $row["subject_id"]?>&member_id=<?= $MemberID?>&grade=<?= $row[grade]?>';}" class="btn btn-info btn-sm">บันทึก</a>
                <a href="edit-grade.php?subject_id=<?echo $row["subject_id"]?>" class="btn btn-danger btn-sm">แก้ไข</a>
                  </div> </td>
           <? }
          else { ?>
            <td> <a href="edit-grade.php?subject_id=<?echo $row["subject_id"]?>" class="btn btn-success btn-sm disabled col-md-12">ตรวจสอบแล้ว</a>
          <?}
           ?>
          </tbody>
          <?}?>
          <?php $year++ ?>
        <?php } ?>
          </table>
        </div>
        <div class="tabcontent" id="2">

          <?php
          $sql = "SELECT register.grade,register.semester,register.grade,member.member_id,member.username,member.lastname,course.subject_id,
          course.subject_name,course.subject_credit
          FROM ((register
          LEFT JOIN member ON register.member_id = member.member_id)
          LEFT JOIN course ON register.subject_id = course.subject_id)
          WHERE register.member_id = '$MemberID' AND register.grade = 'F'";
          $query = mysqli_query($con,$sql);
           ?>
         
          <tbody>
            <?php
            while($row = mysqli_fetch_array($query))
            {
            ?>
             <td><?echo $row["subject_id"];?></td>
             <td><?echo $row["subject_name"];?></td>
             <td><?echo $row["subject_credit"];?></td>
             <td><?echo $row["grade"];?></td>
          </tbody>
          <?}?>
          </table>

        </div>
      <div class="col-md-1">

      </div>
    </div>
</body>
</html>
