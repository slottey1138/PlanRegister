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
    <link rel="stylesheet" href="../css/index22.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php require("navbar.html");?>
<div class="col-md-1"></div>
<form class="from1" action="updatestd-info.php" method="post">
  <input type="hidden" name="memberId" value="<?echo $row['member_id'];?>">
  <div class="container col-md-2">
  <center>
     <img src="../../img/<?php echo $row['image'];?>" name="img-student" class="image-member">
     <br><br>
  </center>
  </div>
  <div class="col-md-8">
  <table class="table table-striped table-hover ">
    <tbody>
    <tr>
      <td colspan="2" class="success">ข้อมูลส่วนตัว</td>
    </tr>
    <tr>
      <th class="col-md-2"><b>ชื่อ</b></th>
      <td class=" col-md-4"><input type="text" name="txtUsername" class="form-control" value="<?php echo $row['username'];?>"></td>
    </tr>
    <tr>
      <th class="col-md-2"><b>นามสกุล</b></th>
      <td class="col-md-4"><input type="text" name="txtLastname" class="form-control" value="<?php echo $row['lastname'];?>"></td>
    </tr>
    <tr>
    <th>รหัสนักศึกษา</th>
    <td><input type="text" name="txtStudentid" class="form-control" value="<?php echo $row["member_id"];?>"></td>
    </tr>
    <tr>
      <th><b>รหัสประจำตัวประชาชน</b></th>
      <td><input type="text" name="txtIdcard" class="form-control" value="<?php echo $row["idcard"];?>"></td>
    </tr>
    <tr>
      <th><b>เกิดวันที่</b></th>
      <td><input type="text" name="txtBirthday" class="form-control" value="<?php echo $row["birthday"];?>"></td>
    </tr>
    <tr>
      <th><b>อีเมล</b></th>
      <td><input type="text" name="txtEmail" class="form-control" value="<?php echo $row["email"];?>"></td>
    </tr>
    <tr>
      <th><b>เบอร์โทรศัพท์</b></th>
      <td><input type="text" name="txtPhone" class="form-control" value="<?php echo $row["phone"];?>"></td>
    </tr>
    <tr>
      <th><b>ไลด์ไอดี</b></th>
      <td><input type="text" name="txtLineid" class="form-control" value="<?php echo $row["line_id"];?>"></td>
    </tr>
    <tr>
      <th><b>เฟสบุ๊ค</b></th>
      <td><input type="text" name="txtFacebook" class="form-control" value="<?php echo $row["facebook"];?>"></td>
    </tr>
    <tr>
      <th><b>ที่อยู่ปัจจุบัน</b></th>
      <td><input type="text" name="txtAddress" class="form-control" value="<?php echo $row["address"];?>"></td>
    </tr>
    <tr>
      <td colspan="2" class="success"><b>ข้อมูลสถานศึกษาเดิม</b></td>
    </tr>
    <tr>
      <th><b>ชื่อสถานศึกษาเดิม</b></th>
      <td><input type="text" name="txtOldschool" class="form-control" value="<?php echo $row["oldschool"];?>"></td>
    </tr>
    <tr>
      <th><b>ระดับการศึกษา</b></th>
      <td><input type="text" name="txtLeveledu" class="form-control" value="<?php echo $row["leveledu"];?>"></td>
    </tr>
    <tr>
      <th><b>สาขาวิชา</b></th>
      <td><input type="text" name="txtBranch" class="form-control" value="<?php echo $row["branch"];?>"></td>
    </tr>
    <tr>
      <th><b>เกรดเฉลี่ย</b></th>
      <td><input type="text" name="txtOldgpa" class="form-control" value="<?php echo $row["oldgpa"];?>"></td>
    </tr>
    <tr>
      <th><b>จังหวัด</b></th>
      <td><input type="text" name="txtProvince" class="form-control" value="<?php echo $row["province"];?>"></td>
    </tr>
    <tr>
      <td colspan="2" class="success"><b>ข้อมูลผู้ปกครอง</b></td>
    </tr>
    <tr>
      <th><b>ชื่อ</b></th>
      <td><input type="text" name="txtPrfirstname" class="form-control" value="<?php echo $row["pr_name"];?>"></td>
    </tr>
    <tr>
      <th><b>นามสกุล</b></th>
      <td><input type="text" name="txtPrlastname" class="form-control" value="<?php echo $row['pr_lastname'];?>"></td>
    </tr>
    <tr>
      <th><b>มีสถานะเป็น</b></th>
      <td><input type="text" name="txtPrstatus" class="form-control" value="<?php echo $row["pr_status"];?>"></td>
    </tr>
    <tr>
      <th><b>เบอร์โทรศัพท์</b></th>
      <td><input type="text" name="txtPrphone" class="form-control" value="<?php echo $row["pr_phone"];?>"></td>
    </tr>
    <tr>
      <th><b>ที่อยู่ปัจจุบัน</b></th>
      <td><input type="text" name="txtPraddress" class="form-control" value="<?php echo $row["pr_address"];?>"></td>
    </tr>
  </tbody>
  </table>
  <div class="form-group">
      <div class="col-lg-10">
        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button><br><br>
      </div>
    </div>
</form>
<br><br>
</div>
</body>
</html>
