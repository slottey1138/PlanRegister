<meta charset="utf-8" />
<?
include "connect.php";
$fName = $_POST[fName];
$lName = $_POST[lName];
$gpa = $_POST[Gpa];
$Chin = $_POST[Checkin];
$Chout = $_POST[Checkout];
$Work = $_POST[Workplace];
$Position = $_POST[Position];
$MemberID = $_POST[MemberID];
$sql = "INSERT INTO questionnaire (member_id,Firstname,Lastname,Gpa,Checkin,Checkout,Workplace,Position)
VALUES ('$MemberID','$fName','$lName','$gpa','$Chin','$Chout','$Work','$Position')";
if (mysqli_query($con, $sql)) {
  echo "<script>alert('เพิ่มข้อมูลเรียนเรียบร้อย')</script>";
  echo "<script>location='ask-ans.php'</script>";
} 
else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
 ?>
