<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?php
include("connect.php");
$memberId = $_POST['memberId'];
$userName = $_POST['txtUsername'];
$lastName = $_POST['txtLastname'];
$studentId = $_POST['txtStudentid'];
$idCard = $_POST['txtIdcard'];
$birthDay = $_POST['txtBirthday'];
$eMail = $_POST['txtEmail'];
$Phone = $_POST['txtPhone'];
$lineId = $_POST['txtLineid'];
$faceBook = $_POST['txtFacebook'];
$Address = $_POST['txtAddress'];
$oldSchool = $_POST['txtOldschool'];
$levelEdu = $_POST['txtLeveledu'];
$Branch = $_POST['txtBranch'];
$oldGpa = $_POST['txtOldgpa'];
$proVince = $_POST['txtProvince'];
$prFirstname = $_POST['txtPrfirstname'];
$prLastname = $_POST['txtPrlastname'];
$prStatus = $_POST['txtPrstatus'];
$prPhone = $_POST['txtPrphone'];
$prAddress = $_POST['txtPraddress'];
$sql = "UPDATE member SET username = '$userName', lastname = '$lastName',
member_id = '$studentId',idcard = '$idCard',birthday = '$birthDay',
email = '$eMail',phone = '$Phone',line_id = '$lineId',facebook = '$faceBook',
address = '$Address',oldschool ='$oldSchool',leveledu = '$levelEdu',branch = '$Branch',
oldgpa = '$oldGpa',province = '$proVince',pr_name = '$prFirstname',pr_lastname = '$prLastname',
pr_status = '$prStatus',pr_phone ='$prPhone',pr_address ='$prAddress'
WHERE member_id = $memberId";
$query = mysqli_query($con,$sql);
if ($query) {
	echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
	echo "<script>location='info-student.php'</script>";
}
else {
	echo "ERROR".mysqli_error($con);
}
?>
