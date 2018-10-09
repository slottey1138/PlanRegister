<?
session_start();
include "connect.php";
$SubjectID = $_GET[subject_id];
$MemberID = $_SESSION[member_id];
$Semester = $_GET[semester];
$sql = "DELETE FROM register WHERE subject_id = '$SubjectID' 
AND member_id = '$MemberID' AND semester = '$Semester' ";
if ($con->query($sql)) {
    echo "<script>location='planregister.php'</script>";
}
else {
    echo "Error";
}
?>