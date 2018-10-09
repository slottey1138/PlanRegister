  <meta http-equiv=Content-Type content="text/html; charset=utf-8">
  <?
  include "connect.php";
  $StudentID = trim($_POST["txtStudentID"]);
  $Firstname = trim($_POST["txtFirstname"]);
  $Lastname = trim($_POST["txtLastname"]);
  $Gpa = trim($_POST["txtGpa"]);
  $Somecredit = trim($_POST["txtSomecredit"]);
  $Leveledu = trim($_POST["txtLeveledu"]);
  $Semester = trim($_POST["txtSemester"]);
  $sql = "INSERT INTO requestcpr (member_id,Firstname,Lastname,Gpa,
  Somecredit,Leveledu,Semester)
  VALUES ('$StudentID','$Firstname','$Lastname','$Gpa','$Somecredit',
  '$Leveledu','$Semester')";
  $query = mysqli_query($con,$sql);
  if ($query) {
    echo "<script>alert('ลงทะเบียนเรียนเรียบร้อย')</script>";
  	echo "<script>location='creteria.php'</script>";
  }
  else {
    echo mysqli_error($con);
  }
  ?>
