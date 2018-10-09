<?php
session_start();
?>
<meta charset="utf-8" />
<?php
include("connect.php");
$MemberID = $_POST["MemberID"];
$SubjectID = $_POST["SubjectID"];
$Semester = $_POST["Semester"];
$Year = $_POST["Year"];
$sql = "INSERT INTO register (member_id,subject_id,semester,year)
VALUES ('$MemberID','$SubjectID','$Semester','$Year')";
$query = mysqli_query($con,$sql);
  if ($query) {
  	echo "<script>location='planregister.php'</script>";
  }
  else {
    echo "Error";
  }
 ?>
