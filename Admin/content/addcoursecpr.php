<meta charset="utf-8" />
<?
include("connect.php");
$SubjectID = $_POST["txtSubID"];
$SubjectType = "cpr";
$Note = $_POST["txtNote"];
$sql = "update course set subject_type = '$SubjectType' 
where subject_id='$SubjectID'";
$query = mysqli_query($con,$sql);
  if ($query) {
    echo "<script>alert('เพิ่มรายวิชาเรียบร้อย')</script>";
  	echo "<script>location='passing-cpr.php'</script>";
  }
  else {
    echo "Error";
  }
 ?>
