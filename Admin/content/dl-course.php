<?php session_start();
include("connect.php");
$_SESSION["Year"] = $Year;
$SubjectID = $_GET["subject_id"];
$sql = "DELETE FROM course WHERE subject_id = '".$SubjectID."'";
$query = mysqli_query($con,$sql);
if ($query) {
	echo "<script>location='editcourse.php?year=$Year'</script>";
}
?>
