<? include("connect.php") ?>
<?

$RolesID = $_GET[RolesID];
$sql = "delete from roles where RolesID=$RolesID";
mysqli_query($con,$sql) or die (mysqli_error());

mysqli_close($con) 
?>

<script>
location = "permissions.php";
</script>
