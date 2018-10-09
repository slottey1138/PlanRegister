<meta charset="utf-8" />
<?php
include "connect.php";
if(isset($_POST[saveGrade])){
$StudentID = $_POST["StudentID"];
$Status = "save";
$sql = "UPDATE register SET
grade = '".$_POST["selectGrade"]."',
status = '".$Status."'
WHERE subject_id = '".$_POST["SubjectID"]."'
AND member_id = '".$_POST["StudentID"]."'";
$result = mysqli_query($con,$sql);
if ($result) {
	echo "<script>alert('บันทึกผลการเรียนเรียบร้อย')</script>";
	echo "<script>location='checkgrade2.php?member_id=$StudentID'</script>";
}
else {
	echo "ERROR".mysqli_error($con);
}
}
$Status = "save";
$MemberID = $_GET[member_id];
$sql = "UPDATE register SET
grade = '".$_GET[grade]."',
status = '".$Status."'
WHERE subject_id = '".$_GET[subject_id]."'
AND member_id = '".$MemberID."'";
$result = mysqli_query($con,$sql);
if ($result) {
	echo "<script>alert('บันทึกผลการเรียนเรียบร้อย')</script>";
	echo "<script>location='checkgrade2.php?member_id=$MemberID'</script>";
}
else {
	echo "ERROR".mysqli_error($con);
}
?>