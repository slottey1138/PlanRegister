<? include("connect.php") ?>
<?	
$uid = $_GET[member_id];
$rid=$_GET[RolesID];
$sql = "update member set RolesID=$rid where member_id='$uid' ";
mysqli_query($con,$sql) or die (mysqli_error());
mysqli_close($con) 
?>
<script>
location = "adduser.php";
</script>
