<meta charset="utf-8" />
<?
include "connect.php";
$SubjectID = $_POST["txtSubID"];
$Year = $_POST["Year"];
$SubjectType = "cpr";
$Note = $_POST["txtNote"];
$sql = "UPDATE course SET subject_type = '$SubjectType' 
WHERE subject_id='$SubjectID' AND year = '$Year' ";
$query = mysqli_query($con,$sql);
  if ($query) {
    echo "<script>location='passing-course.php?year=$Year'</script>";
}
  else {
    echo "Error";
  }
 ?>
