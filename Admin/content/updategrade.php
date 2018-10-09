<meta charset="utf-8" />
<?php
include("connect.php");
$Student = $_POST["MemberID"];
$sql = "UPDATE register SET
grade = '".$_POST["selectGrade"]."'
WHERE subject_id = '".$_POST["SubjectID"]."'
AND member_id = '".$_POST["MemberID"]."'";
$result = mysqli_query($con,$sql);
if ($result) {
	echo "<script>alert('บันทึกผลการเรียนเรียบร้อย')</script>";
	echo "<script>location='detailgpa-std.php?member_id=$Student'</script>";
}
else {
	echo "ERROR".mysqli_error($con);
}
?>
