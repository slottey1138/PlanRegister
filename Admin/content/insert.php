<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?
include "connect.php";
$Year = $_POST[year];
if (isset($_POST[addstat])) {
$sql = "INSERT INTO statistics (Year) VALUES ('$Year')";
$query = mysqli_query($con,$sql);
if ($query) {
    echo "<script>location='statistics.php'</script>";
}
else {
 echo "<script>alert('มีปีการศึกษานี้แล้ว')</script>";
 echo "<script>location='statistics.php'</script>";
}
}
?>