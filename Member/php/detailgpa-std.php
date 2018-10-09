<?
session_start();
include "connect.php";
$MemberID = $_GET['member_id'];
$select = "SELECT * FROM member WHERE member_id = $MemberID";
$query = mysqli_query($con,$select);
$row = mysqli_fetch_array($query);
$sl_type = "SELECT * FROM member WHERE member_id = '$_SESSION[member_id]'";
$query = mysqli_query($con,$sl_type);
$sl_row = mysqli_fetch_array($query);
$year =  "$row[education]";
?> 
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>อาจารย์</title>
    <link rel="stylesheet" href="../css/bootstrap5.css">
    <link rel="stylesheet" href="../css/teacherrr.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
  </head>
  <body>
    <? include("navbar.php");?>
    <div class="container col-md-12">
      <div class="container col-md-12">
         <div class="col-md-1"></div>
         <div class="well well-sm col-md-3">
       <b>ผลการเรียนของ : </b><? echo $row[username]." ".$row[lastname]?>
         </div>
         <div class="col-md-4"></div>
         <div class="well well-sm col-md-3">
       <b>เกรดเฉลี่ยปัจจุบัน : <? echo $row[24]; ?></b>
        </div>
      </div>
      <div class="tab">
        <button class="tablinks" onclick="openList(event, '1')" id="defaultOpen">ผลการเรียนทั้งหมด</button>
        <button class="tablinks" onclick="openList(event, '2')">รายวิชาที่ไม่ผ่าน</button>
        <?
        if($sl_row[user_type] == "teachercpr"){
        ?>
        <button class="tablinks" onclick="openList(event, '3')">รายวิชาบังคับสหกิจฯ</button>
      <?}?>
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
            <?
            $i=1;
            while($row = mysqli_fetch_array($query))
            {
              if ($i==1) {
                echo '<thead>
                <tr>
                <th colspan="4">ปีการศึกษา : '.$row[year].'</th>
                </tr>
                  <tr>
                    <th class="success col-md-2">รหัสวิชา</th>
                    <th class="success col-md-4">ชื่อวิชา</th>
                    <th class="success col-md-2">หน่วยกิต</th>
                    <th class="success col-md-2">ผลการเรียน</th>
                    <th class="success col-md-1">สถานะ</th>
                  </tr>
                </thead>';
                $i++;
              }
            ?>
             <td><?echo $row["subject_id"];?></td>
             <td><?echo $row["subject_name"];?></td>
             <td><?echo $row["subject_credit"];?></td>
             <td><?echo $row["grade"];?></td>
             <?
             if ($row[status] == "save"){
             echo "<td><a href='' class='btn btn-success disabled btn-sm'>ตรวจสอบแล้ว</a></td>";
              }
             else{
              echo "<td><a href='' class='btn btn-default disabled btn-sm'>ยังไม่ตรวจสอบ</a></td>";
               }?>
          </tbody>
          <?}?>
          <?$year++ ?>
        <? } ?>
          </table>
        </div>
        <div class="tabcontent" id="2">
        <?php
          $sql = "SELECT register.grade,register.semester,register.grade,member.member_id,
          member.username,member.lastname,course.subject_id,
          course.subject_name,course.subject_credit
          FROM ((register
          LEFT JOIN member ON register.member_id = member.member_id)
          LEFT JOIN course ON register.subject_id = course.subject_id)
          WHERE register.member_id = '$MemberID' AND register.grade = 'F'";
          $query = mysqli_query($con,$sql);
           ?>
          <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th class="success col-md-3">รหัสวิชา</th>
              <th class="success col-md-5">ชื่อวิชา</th>
              <th class="success col-md-2">หน่วยกิต</th>
              <th class="success col-md-2">ผลการเรียน</th>
            </tr>
          </thead>
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
        <div class="tabcontent" id="3">
          <?php
          $sql = "SELECT register.grade,register.semester,register.grade,member.member_id,
          member.username,member.lastname,course.subject_id,
          course.subject_name,course.subject_credit
          FROM ((register
          LEFT JOIN member ON register.member_id = member.member_id)
          LEFT JOIN course ON register.subject_id = course.subject_id)
          WHERE register.member_id = '$MemberID' AND course.Subject_type = 'cpr'";
          $query = mysqli_query($con,$sql);
           ?>
          <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th class="success col-md-3">รหัสวิชา</th>
              <th class="success col-md-5">ชื่อวิชา</th>
              <th class="success col-md-2">หน่วยกิต</th>
              <th class="success col-md-2">ผลการเรียน</th>
            </tr>
          </thead>
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
