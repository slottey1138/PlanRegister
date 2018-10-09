<meta charset="utf-8">
<?
include "connect.php";
$SubjectID = $_GET[subject_id];
$Year = $_GET[year];
$Type = "genaral";
$sql_update_cpr = "UPDATE course SET Subject_type = '$Type' 
WHERE subject_id = '$SubjectID' AND year = '$Year'";
if($con->query($sql_update_cpr) === TRUE){
    echo "<script>location='passing-course.php?year=$Year'</script>";
}
else {
    echo "Error";
}
?>