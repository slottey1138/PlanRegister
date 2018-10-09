<?php
include("connect.php");
$sql = "SELECT * FROM course";
$query = mysqli_query($con,$sql);

if(isset($_POST["addCourse"])){
$sql = "INSERT INTO course (subject_id,subject_name,subject_credit,note,year)
 VALUES ('".$_POST["SubjectID"]."','".$_POST["SubjectName"]."','".$_POST["SubjectCredit"]."',
 '".$_POST["Note"]."','".$_POST["idYear"]."')";
 $query = mysqli_query($con,$sql);
 if($query)
 {
   echo "<script>alert('เพิ่มวิชาเรียบร้อย');</script>";
   echo "<script>location='addcourse.php?year=$year'</script>";
 }
 else{
   echo "Error [".$strSQL."]";
 }
 mysqli_close($con);
}
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>เพิ่มรายวิชา</title>
  </head>
  <body>
  <?php require("navbar.html");?>
<div class="container col-md-10 col-md-offset-1">
  <form class="form1" action="" method="post">
    <legend>เพิ่มรายวิชา</legend>
    <input type="hidden" name="idYear" value="<?php echo $year ?>">
    <div class="container col-md-12">
      <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th class="active col-md-2">รหัสวิชา</th>
          <th class="active col-md-4">ชื่อวิชา</th>
          <th class="active col-md-1">หน่วยกิต</th>
          <th class="active col-md-3">หมายเหตุแก้ไข</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input class="form-control input-sm" type="text" name="SubjectID"></td>
          <td><input class="form-control input-sm" type="text" name="SubjectName"></td>
          <td><input class="form-control input-sm" type="text" name="SubjectCredit"></td>
          <td><input class="form-control input-sm" type="text" name="Note"></td>
        </tr>
      </tbody>
    </table>
    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-0">
          <button type="submit" name="addCourse" class="btn btn-success">ยืนยันข้อมูล</button>
        </div>
      </div>
    </div>
  </form>
</div>
  <?php
mysqli_close($con);
?>
<script src="../js/taps.js"></script>
<script src="../js/dropdown.js"></script>
</body>
</html>
