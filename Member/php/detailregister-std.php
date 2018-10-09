<?php 
session_start();
require("checksession.php");
$Member = $_GET["member_id"];
$sql = "SELECT * FROM member WHERE member_id = $Member ";
$query = mysqli_query($con,$sql);
$show = mysqli_fetch_array($query,MYSQLI_ASSOC);
 ?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>อาจารย์</title>
    <link rel="stylesheet" href="../css/bootstrap5.css">
    <link rel="stylesheet" href="../css/teacherstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php require("navbar.php");?>
    <div class="container col-md-10 col-md-offset-1">
      <div class="container col-md-12">
         <div class="well well-sm col-md-5">
       <b>ผลการลงทะเบียนของ : <?php echo $show['username']." ".$show['lastname']; ?></b>
         </div>
         <div class="col-md-4"></div>
      </div>
      <div class="container col-md-12">
        <?php
        $sql = 50;
        $year = 1;
        while ($year <= 10) {
        $sql = "SELECT register.grade,register.semester,register.year,member.member_id,
        member.username,member.lastname,course.subject_id,
        course.subject_name,course.subject_credit
        FROM ((register
        LEFT JOIN member ON register.member_id = member.member_id)
        LEFT JOIN course ON register.subject_id = course.subject_id)
        WHERE register.member_id = '$Member' AND register.semester = '$year'";
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
              <th colspan="4">ปีการศึกษา : '.$row[year].'</th>
              </tr>
                <tr>
                  <th class="success col-md-3">รหัสวิชา</th>
                  <th class="success col-md-4">ชื่อวิชา</th>
                  <th class="success col-md-2">หน่วยกิต</th>
                </tr>
              </thead>';
              $i++;
            }
          ?>
           <td><?echo $row["subject_id"];?></td>
           <td><?echo $row["subject_name"];?></td>
           <td><?echo $row["subject_credit"];?></td>
        </tbody>
        <?}?>
        <?php $year++ ?>
      <?php } ?>
        </table>
      </div>
    </div>
</body>
</html>
