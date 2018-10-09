<?php
include("connect.php");
if(isset($_POST["addMember"])){
  $memberId = trim($_POST[MemberID]);
   $fName = trim($_POST[fName]);
   $lName = trim($_POST[lName]);
   $passWord = trim($_POST[Password]);
   $userType = trim($_POST[usertype]);
   $conTact = trim($_POST[contact]);

   $sql = "SELECT * FROM member WHERE member_id = '$memberId' ";
   $query = mysqli_query($con,$sql);
   if (mysqli_num_rows($query) > 0) {
    echo "<script>alert('มีผู้ใช้นี้ในระบบแล้ว');</script>";
    echo "<script>location='index.php'</script>";
     exit();
   }

   if($userType == "student"){
    $sql = "INSERT INTO member (member_id,username,lastname,password,user_type,contact)
    VALUES ('$memberId','$fName','$lName','$passWord','$userType','$conTact')";
    $query = mysqli_query($con,$sql);
    if($query)
    {
      echo "<script>alert('เพิ่มสมาชิกเรียบร้อย');</script>";
      echo "<script>location='index.php'</script>";
    }
    else{
      echo ("Error description: " . mysqli_error($con));
    }
   }
   else {
   $sql = "INSERT INTO member (member_id,username,lastname,password,user_type)
   VALUES ('$memberId','$fName','$lName','$passWord','$userType')";
   $query = mysqli_query($con,$sql);
   if($query)
   {
     echo "<script>alert('เพิ่มสมาชิกเรียบร้อย');</script>";
     echo "<script>location='index.php'</script>";
   }
   else{
     echo "Error [".$sql."]";
   }
  }
   mysqli_close($con);
}
 ?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หน้าหลัก</title>
  </head>
  <body style="background-color: #dcdcdc">
  <? include("navbar.html");?>
<div class="container col-md-10 col-md-offset-2">
    <div class="container col-md-10">
     <form class="form-horizontal" action="" method="post">
       <legend>เพิ่มสมาชิก</legend>
       <div class="form-group">
        <label class="col-md-2 control-label">รหัสประจำตัว</label>
        <div class="col-md-8">
        <input type="text" class="form-control" name="MemberID" required >
        </div>
       </div>
       <div class="form-group">
        <label class="col-md-2 control-label">ชื่อ</label>
        <div class="col-md-8">
        <input type="text" class="form-control" name="fName" required>
        </div>
       </div>
       <div class="form-group">
        <label class="col-md-2 control-label">นามสกุล</label>
        <div class="col-md-8">
        <input type="text" class="form-control" name="lName" required>
        </div>
       </div>
       <div class="form-group">
        <label class="col-md-2 control-label">รหัสผ่าน</label>
        <div class="col-md-8">
        <input type="text" class="form-control" name="Password" required>
        </div>
       </div>
       <div class="form-group">
      <label class="col-lg-2 control-label">ประเภทสมาชิก</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="usertype" id="optionsRadios1" value="student">
            นักศึกษา
          </label><br /><br>
      <div class="col-lg-6">
        <b>อาจารย์ที่ปรึกษา</b>
        <?
        $teaCher1 = "teacher";
        $teaCher2 = "teachercpr";
        $sql = "SELECT * FROM member WHERE user_type = '$teaCher1' OR user_type = '$teaCher2'";
        $query = mysqli_query($con,$sql);
         ?>
          <select class="form-control col-md-3" name="contact" id="select">
            <?
           while($row = mysqli_fetch_array($query))
           {
           ?>
          <option value="<? echo $row['member_id'];?>"><? echo $row['username']." ".$row['lastname'];?></option>
          <? } ?>
        </select><br>
      </div><br><br>
    </div><br><br>
        <div class="radio">
          <label>
            <input type="radio" name="usertype" id="optionsRadios2" value="teacher">
            อาจารย์
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="usertype" id="optionsRadios2" value="admin">
            แอดมิน
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">ยกเลิก</button>
        <button type="submit" name="addMember" class="btn btn-success">เพิ่มสมาชิก</button>
      </div>
    </div>
     </form>
    </div>
  </div>
</body>
</html>
