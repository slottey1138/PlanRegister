<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?php
include("connect.php");
$memberId = $_POST['memberId'];
$userName = $_POST['txtUsername'];
$lastName = $_POST['txtLastname'];
$eMail = $_POST['txtEmail'];
$Phone = $_POST['txtPhone'];
$lineId = $_POST['txtLineid'];
$faceBook = $_POST['txtFacebook'];
$Room = $_POST['txtRoom'];
$teaStatus = $_POST['teaStatus'];
$sql = "UPDATE member SET username = '$userName', lastname = '$lastName',
member_id = '$memberId',email = '$eMail',phone = '$Phone',line_id = '$lineId',facebook = '$faceBook',
room = '$Room' , user_type = '$teaStatus'
WHERE member_id = $memberId";
$query = mysqli_query($con,$sql);
if ($query) {
	echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
	echo "<script>location='info-teacher.php'</script>";
}
else {
	echo "ERROR".mysqli_error($con);
}
?>
