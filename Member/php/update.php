<?
include "connect.php";
$MemberID = $_GET[member_id];
$Type = $_GET[name];
if($Type == "pass"){
  $sql = "UPDATE requestcpr SET Status = '$Type' WHERE member_id = '$MemberID' ";
  if($con->query($sql)){
      echo "<script>location='request-std.php'</script>";
  }
  else{
      echo "Error";
  }
}
if($Type == "fail"){
  $sql = "UPDATE requestcpr SET Status = '$Type' WHERE member_id = '$MemberID' ";
  if($con->query($sql)){
      echo "<script>location='request-std.php'</script>";
  }
  else{
      echo "Error";
  }
}
?>