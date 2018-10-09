<meta charset="utf-8">
<?
include "connect.php";
$member = $_GET[member_id];
$type = "teacher";
$sql = "update member set user_type='$type' where member_id='$member'";
$q = mysqli_query($con,$sql);
if ($q) {
	echo "<script>location='teacher-cpr.php'</script>";
}
else {
	echo "ERROR";
}
?>