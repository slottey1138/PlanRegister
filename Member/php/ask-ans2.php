<?php
session_start();
include "connect.php";
$sql = "SELECT * FROM member WHERE member_id = $_SESSION[member_id]";
$query = mysqli_query($con,$sql);
$r = mysqli_fetch_array($query);
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>ตอบแบบสอบถาม</title>
    <link rel="stylesheet" href="../css/bootstrap7.css">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
  <?include ("navbar.php");?>
  <div class="col-md-1">
</div>
</div>
 <div class="container col-md-10">
 <legend>ตอบแบบสอบถาม</legend>
   <form name="form1" action="savequestion.php" method="post" class="form-horizontal">
   <div class="form-group">
         <label for="inputEmail" class="col-md-3 control-label">รหัสนักศึกษา :</label>
         <div class="col-md-6">
           <input type="text" class="form-control" name="MemberID" >
         </div>
     </div>
     <div class="form-group">
         <label for="inputEmail" class="col-md-3 control-label">ชื่อ :</label>
         <div class="col-md-6">
           <input type="text" class="form-control" name="fName" >
         </div>
     </div>
     <div class="form-group">
         <label for="inputEmail" class="col-md-3 control-label">นามสกุล :</label>
         <div class="col-md-6">
           <input type="text" class="form-control" name="lName" >
         </div>
     </div>
     <div class="form-group">
         <label for="inputEmail" class="col-md-3 control-label">เกรดเฉลี่ย :</label>
         <div class="col-md-6">
           <input type="text" class="form-control" name="Gpa">
         </div>
     </div>
     <div class="form-group">
         <label for="inputEmail" class="col-md-3 control-label">ปีที่เข้าศึกษา :</label>
         <div class="col-md-6">
           <input type="text" class="form-control" name="Checkin" >
         </div>
     </div>
     <div class="form-group ">
         <label for="inputEmail" class="col-md-3 control-label">ปีที่สำเร็จการศึกษา :</label>
         <div class="col-md-6">
           <input type="text" class="form-control" name="Checkout">
         </div>
     </div>
     <div class="form-group ">
         <label for="inputEmail" class="col-md-3 control-label">สถานที่ทำงาน :</label>
         <div class="col-md-6">
           <input type="text" class="form-control" name="Workplace">
         </div>
     </div>
     <div class="form-group ">
         <label for="inputEmail" class="col-md-3 control-label">ตำแหน่งงาน :</label>
         <div class="col-md-6">
           <input type="text" class="form-control" name="Position">
         </div>
     </div>
     <div class="form-group ">
               <div class="col-md-10 col-md-offset-3">
                 <button type="reset" class="btn btn-default">ยกเลิก</button>
                 <button type="submit" class="btn btn-primary">ยืนยันข้อมูล</button>
               </div>
       </div>
   </form>
 </div>
  <?php
mysqli_close($con);
?>
</body>
</html>
