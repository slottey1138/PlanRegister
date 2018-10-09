<?php
session_start();
include("connect.php");
$SubjectID = $_GET["subject_id"];
$sql = "SELECT * FROM course WHERE subject_id = '".$SubjectID."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$Year = $_SESSION["Year"];

if(isset($_POST["UpdateCourse"])){
$Year = $_POST["Year"];
$con = mysqli_connect("localhost","root","mysql","project")or die("Error");
mysqli_set_charset($con,"utf8");
$sql = "UPDATE course SET
subject_id = '".$_POST["txtSubid"]."',
subject_name = '".$_POST["txtSubname"]."',
subject_credit = '".$_POST["txtSubcredit"]."',
note = '".$_POST["txtNote"]."'
WHERE subject_id = '".$_POST["SubjectID"]."'";
$result = mysqli_query($con,$sql);
if ($result){
	echo "<script>alert('บันทึกเรียนเรียบร้อย')</script>";
	echo "<script>location='editcourse.php?year=$Year'</script>";
}
else {
	echo "ERROR".mysqli_error($con);
}
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
   <?php require("navbar.html");?>
   <div class="container col-md-10 col-md-offset-1">
     <legend>แก้ไขรายวิชา</legend>
     <form class="" action="" method="post">
       <input type="hidden" name="SubjectID" value="<?echo $row['subject_id']?>">
       <input type="hidden" name="Year" value="<?echo $Year?>">
       <table class="table table-striped table-hover table-bordered">
    <thead class="thead-dark">
      <tr>
        <th>รหัสวิชา</th>
        <th>ชื่อวิชา</th>
        <th>หน่วยกิต</th>
        <th>หมายเหตุแก้ไข</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><input type="text" name="txtSubid" value="<? echo $row['subject_id']?>"></td>
        <td><input type="text" name="txtSubname" value="<? echo $row['subject_name'];?>"></td>
        <td><input type="text" name="txtSubcredit" value="<? echo $row['subject_credit'];?>"></td>
        <td><input type="text" name="txtNote" value="<? echo $row['note'];?>"></td>
      </tr>
    </tbody>
    </table>
    <button type="submit" name="UpdateCourse" class="btn btn-success col-md-offset-11">ยืนยัน</button>
     </form>
   </div>
  </body>
</html>
