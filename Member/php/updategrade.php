<meta charset="utf-8" />
<?php
include("connect.php");
$Status = "dontsave";
$sql = "UPDATE register SET
grade = '".$_POST["selectGrade"]."',
status = '".$Status."'
WHERE subject_id = '".$_POST["SubjectID"]."'
AND member_id = '".$_POST["MemberID"]."'";
$result = mysqli_query($con,$sql);
if ($result) {
	echo "<script>alert('บันทึกผลการเรียนเรียบร้อย')</script>";
	echo "<script>location='resultgpa.php'</script>";
}
else {
	echo "ERROR".mysqli_error($con);
}
 ?>
