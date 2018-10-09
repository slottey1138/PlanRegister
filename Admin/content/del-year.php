<meta http-equiv=Content-Type content="text/html; charset=utf-8">
<?
include "connect.php";
$Year = $_GET[Year];
$sql = "DELETE FROM statistics WHERE Year = '".$Year."'";
$query = mysqli_query($con,$sql);
if($query){
    echo "<script>location='statistics.php'</script>";
}
else{
    echo "Error";
}
?>