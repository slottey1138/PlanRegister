<?php 
  include("Member/php/connect.php");
  if (isset($_POST['register'])) {
  	$MemberID = $_POST['MemberID'];
    $Password = $_POST['txtPassword'];
    $conPassword = $_POST['txtConPassword'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];

  	$sql_u = "SELECT * FROM member WHERE member_id ='$MemberID'";
  	$res_u = mysqli_query($con, $sql_u);

  	if (mysqli_num_rows($res_u) > 0) {
  	  $member_id_error = "มีผู้ใช้นี้อยู่ในระบบแล้ว..."; 	
  	}else if($Password != $conPassword){
      $Password_Error = "รหัสผ่านไม่ตรงกัน";
    }
    else{
      $register = "INSERT INTO member (member_id,password,username,lastname) 
      VALUES ('$MemberID','$Password','$fName','$lName')";
      if ($con->query($register) === TRUE) {
        echo "<center><h3 style='color:green'>สมัครสมาชิกเรียบร้อย</h3></center>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
  }
?>