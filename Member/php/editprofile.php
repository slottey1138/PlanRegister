<meta charset="UTF-8">
<?
include "connect.php";
    $Username = trim($_POST[fname]);
    $Lastname = trim($_POST[lname]);
    $IDcard = trim($_POST[idcard]);
    $Birthday = trim($_POST[birthday]);
    $Email = trim($_POST[email]);
    $Phone = trim($_POST[phone]);
    $LineID = trim($_POST[lineid]);
    $Facebook = trim($_POST[facebook]);
    $Address = trim($_POST[address]);
    $chin = trim($_POST[checkin]);
    $chout = trim($_POST[checkout]);
    $gpa = trim($_POST[gpa]);
    $scredit = trim($_POST[somecredit]);
    $oldschool = trim($_POST[oldschool]);
    $leveledu = trim($_POST[leveledu]);
    $branch = trim($_POST[branch]);
    $oldgpa = trim($_POST[oldgpa]);
    $province = trim($_POST[province]);
    $prname = trim($_POST[prname]);
    $prlastname = trim($_POST[prlastname]);
    $prstatus = trim($_POST[prstatus]);
    $prphone = trim($_POST[prphone]);
    $praddress = trim($_POST[praddress]);
    $MemberID = trim($_POST[MemberID]);
if (isset($_POST['edit1'])) {
    $sql = "update member set username='$Username',
    lastname='$Lastname',idcard='$IDcard',phone='$Phone',email='$Email',
    line_id='$LineID',facebook='$Facebook',birthday='$Birthday',address='$Address'
     where member_id = $MemberID";
    $result = mysqli_query($con,$sql);
    if ($result) {
        echo "<script>location='index.php'</script>";
    }
    else {
        echo "ERROR";
    }
 }
if (isset($_POST['edit2'])) {
    $sql = "update member set checkin ='$chin',
    checkout='$chout',gpa='$gpa',somecredit='$scredit'
    where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='index.php'</script>";
  }
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit3'])) {
    $sql = "update member set oldschool ='$oldschool',
    leveledu='$leveledu',branch='$branch',oldgpa='$oldgpa',
    province='$province'
     where member_id = $MemberID";
    $result = mysqli_query($con,$sql);
    if ($result) {
        echo "<script>location='index.php'</script>";
    }
    else {
        echo "ERROR";
    }
 }
 if (isset($_POST['edit4'])) {
    $sql = "update member set pr_name ='$prname',
    pr_lastname='$prlastname',pr_status='$prstatus',pr_phone='$prphone',
    pr_address='$praddress'
     where member_id = $MemberID";
    $result = mysqli_query($con,$sql);
    if ($result) {
        echo "<script>location='index.php'</script>";
    }
    else {
        echo "ERROR";
    }
 }
 if (isset($_POST['edit5'])) {
    $sql = "update member set username ='".$_POST[fname]."',
    lastname='".$_POST[lname]."',room='".$_POST[room]."',phone='".$_POST[phone]."',
    email='".$_POST[email]."',line_id='".$_POST[lineid]."',facebook='".$_POST[facebook]."'
     where member_id = '".$_POST[MemberID]."'";
    $result = mysqli_query($con,$sql);
    if ($result) {
        echo "<script>location='index.php'</script>";
    }
    else {
        echo "ERROR";
    }
 }
 if(isset($_POST['update-img'])){
     $img = $_POST[fileUpload];
     $MemberID = $_POST[MemberID];
     $sql = "UPDATE member SET image = '$img' WHERE member_id = '$MemberID' ";
     if ($con->query($sql) === TRUE) {
         echo "<script>location='index.php'</script>";
     }
     else{
         echo "Error";
     }
 }
?>