<?
session_start();
include "connect.php";
$MemberID = $_SESSION['member_id'];
$sql = "SELECT * FROM member WHERE member_id = $MemberID";
$query = mysqli_query($con,$sql);
$r = mysqli_fetch_array($query);
$Education = $r[education];
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>สหกิจ</title>
    <link rel="stylesheet" href="../css/bootstrap7.css">
    <link rel="stylesheet" href="../css/indexx.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body style="background-color: #dcdcdc">
    <?include ("navbar.php");?>
    <div class="col-md-1">
</div>
</div>
 <div class="container col-md-12">
       <div class="container col-md-7">
         <?
         $sql = "SELECT * FROM requestcpr WHERE member_id =  $MemberID";
         $query = mysqli_query($con,$sql);
         $re = mysqli_fetch_array($query);
         ?>
         <?
         if ($re[Status] == "pass"){
           echo "<a href='requestcpr.php' class='btn btn-primary disabled'>ส่งคำร้องขอไปสหกิจ</a>";
         }
         else {
         echo "<a href='requestcpr.php' class='btn btn-primary'>ส่งคำร้องขอไปสหกิจ</a>";
         }?>
         <?
         if($re[Status] == "pass"){
         ?>
         <a href="" class="btn btn-success col-md-offset-6"> สถานะสหกิจฯ : อนุมัตแล้ว</a><br><br>
         <?}?>
         <?
         if($re[Status] == "wait"){
         ?>
         <a href="" class="btn btn-primary disabled col-md-offset-6"> <b>สถานะสหกิจฯ :</b> รอการตรวจสอบ</a><br><br>
         <?}?>
         <?
         if($re[Status] == "fail"){
         ?>
         <a href="" class="btn btn-warning disabled col-md-offset-6"> <b>สถานะสหกิจฯ :</b> ไม่ผ่านการอนุมัต</a><br><br>
         <?}?>
         <?
         if($re[Status]==""){
         ?>
         <a href="" class="btn btn-default disabled col-md-offset-6"> <b>สถานะสหกิจฯ :</b> ยังไม่ส่งคำร้อง</a><br><br>
         <?}?>
         <legend>รายวิชาบังคับ</legend>
         <table class="table table-striped table-hover ">
         <thead>
           <tr>
             <th class="active">รหัสวิชา</th>
             <th class="active">ชื่อวิชา</th>
             <th class="active">หน่วยกิต</th>
           </tr>
         </thead>
         <?
         $sql = "SELECT * FROM course WHERE Subject_type = 'cpr' AND year = $Education ";
         $query = mysqli_query($con,$sql);
         ?>
         <?
         while($row = mysqli_fetch_array($query))
         {
         ?>
         <tbody>
            <td><?echo $row["subject_id"];?></td>
            <td><?echo $row["subject_name"];?></td>
            <td><?echo $row["subject_credit"];?></td>
         </tbody>
         <?}?>
         </table>
       </div>
       <div class="container col-md-5">
         <legend>อาจารย์สหกิจ</legend>
         <?php
         $showstd="select * from member where user_type = '".'teachercpr'."'";
         $result=mysqli_query($con,$showstd);
          ?>
          <?php
         while($row = mysqli_fetch_array($result))
         {
         ?>
      <div class="panel panel-success">
      <div class="panel-body">
      <div class="col-md-5">
        <img src="../img/user.jpg" alt="" class="teacher-cpr">
      </div>
      <h4>อ. <?php echo $row['username']." ".$row['lastname'];?></h4><br>
      <div class="">
        <a href="detailteacher.php?member_id=<?php echo $row["member_id"];?>"class="btn btn-primary">ข้อมูลการติดต่อ</a>
      </div><br><br>
     </div>
     </div>
     <?php } ?>
       </div>

   </div><br><br><br>
  <?php
mysqli_close($con);
?>
</body>
</html>
