<?session_start();?>
<meta charset="utf-8">
<?
if($_POST){
	$Username = $_POST[txtusername];
	$Password = $_POST[txtpassword];
	$con = mysqli_connect("localhost","root","mysql","project");
	$sql = "select * from member left join roles on member.RolesID=roles.RolesID
  where member_id ='$Username' and password='$Password' ";
	$query = mysqli_query($con,$sql) or die (mysqli_error());
	if($r = mysqli_fetch_array($query)){
		$_SESSION[member_id] = $r[member_id];
		$_SESSION[menu1] = $r[m1];
		$_SESSION[menu2] = $r[m2];
		$_SESSION[menu3] = $r[m3];
		$_SESSION[menu4] = $r[m4];
		$_SESSION[menu5] = $r[m5];
    $_SESSION[menu6] = $r[m6];
    $_SESSION[menu7] = $r[m7];
    $_SESSION[menu8] = $r[m8];
    $_SESSION[menu9] = $r[m9];
    $_SESSION[menu10] = $r[m10];
    $_SESSION[menu11] = $r[m11];
    $_SESSION[menu12] = $r[m12];
    $_SESSION[menu13] = $r[m13];
    $_SESSION[menu14] = $r[m14];
    if($r[user_type] == "admin")
    {
      echo "<script>location='Admin/content/index.php'</script>";
    }
    if($r[user_type] != "admin")
    {
      echo "<script>location='Member/php/index.php'</script>";
    }
	}else {
    echo "<script>alert('ข้อมูลไม่ถูกต้อง');</script>";
    echo "<script>location='homepage.php'</script>";
			session_destroy();
		}
		mysqli_close($con);
}
?>
