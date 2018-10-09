<?php
include("connect.php");
$MemberID = $_GET['member_id'];
$sql = "SELECT * FROM member WHERE member_id=$MemberID";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="../css/bootstrap3.css">
    <link rel="stylesheet" href="../css/index2.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php require("navbar.html");?>
<div class="col-md-1"></div>
<div class="container col-md-2">
<center>
   <img src="../img/user.jpg" alt="">
   <br><br>
</center>
</div>
<form class="" action="updatetch-info.php" method="post">
  <input type="hidden" name="memberId" value="<?echo $row['member_id'];?>">
  <div class="col-md-8">
  <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <td colspan="2" class="success">ข้อมูลส่วนตัว</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th><b>ชื่อ</b></th>
      <td><input type="text" name="txtUsername" class="form-control" value="<?php echo $row['username'];?>"></td>
    </tr>
    <tr>
      <th><b>นามสกุล</b></th>
      <td><input type="text" name="txtLastname" class="form-control" value="<?php echo $row['lastname'];?>"></td>
    </tr>
    <tr>
    <th>รหัสประจำตัว</th>
    <td><input type="text" name="txtMemberid" class="form-control" value="<?php echo $row['member_id'];?>"></td>
    </tr>
    <tr>
    <th>ห้องอาจารย์</th>
    <td><input type="text" name="txtRoom" class="form-control" value="<?php echo $row['room'];?>"></td>
    </tr>
    <tr>
      <th><b>อีเมล</b></th>
      <td><input type="text" name="txtEmail" class="form-control" value="<?php echo $row['email'];?>"></td>
    </tr>
    <tr>
      <th><b>เบอร์โทรศัพท์</b></th>
      <td><input type="text" name="txtPhone" class="form-control" value="<?php echo $row['phone'];?>"></td>
    </tr>
    <tr>
      <th><b>ไลด์ไอดี</b></th>
      <td><input type="text" name="txtLineid" class="form-control" value="<?php echo $row['line_id'];?>"></td>
    </tr>
    <tr>
      <th><b>เฟสบุ๊ค</b></th>
      <td><input type="text" name="txtFacebook" class="form-control" value="<?php echo $row['facebook'];?>"></td>
    </tr>
    <tr>
      <th><b>สถานะอาจารย์</b></th>
      <td><div class="col-lg-10">
        <select class="form-control" name="teaStatus" id="select">
          <option value="teacher">อาจารย์</option>
          <option value="teachercpr">อาจารย์สหกิจ</option>
        </select>
      </div></td>
    </tr>
  </tbody>
  </table>
  </div>
  <div class="form-group">
      <div class="col-lg-10 col-md-offset-3">
        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button><br><br>
      </div>
    </div>
</form>
</body>
</html>
