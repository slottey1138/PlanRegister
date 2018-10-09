<?
include "connect.php";
$Username = trim( $_POST[fname]); $Lastname = trim($_POST[lname]);
$IDcard = trim($_POST[idcard]); $memBer = trim($_POST[member]);
$Birthday = trim($_POST[birthday]); $Email = trim($_POST[email]);
$Phone = trim($_POST[phone]); $LineID = trim($_POST[lineid]);
$Facebook = trim($_POST[facebook]); $Address = trim($_POST[address]);
$chin = trim($_POST[checkin]); $chout = trim($_POST[checkout]);
$Status = trim($_POST[status]); $gpa = trim($_POST[gpa]);
$scredit = trim($_POST[somecredit]); $oldschool = trim($_POST[oldschool]);
$leveledu = trim($_POST[leveledu]); $branch = trim($_POST[branch]);
$oldgpa = trim($_POST[oldgpa]); $province = trim($_POST[province]);
$prname = trim($_POST[prname]); $prlastname = trim($_POST[prlastname]);
$prstatus = trim($_POST[prstatus]); $prphone = trim($_POST[prphone]);
$praddress = trim($_POST[praddress]); $contact = trim($_POST[contact]);
$MemberID = trim($_POST[MemberID]); $Resign = trim($_POST[resign]);
if (isset($_POST['edit1'])) {
    $sql = "update member set username='$Username',lastname='$Lastname'
     where member_id = $MemberID";
    $result = mysqli_query($con,$sql);
    if ($result) {
        echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
    }
    else {
        echo "ERROR";
    }
 }
 if (isset($_POST['edit2'])) {
    $sql = "update member set member_id ='$memBer' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='info-student.php'</script>";
  }
else {
echo "ERROR";
}
 }

if (isset($_POST['edit3'])) {
    $sql = "update member set idcard ='$IDcard' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
  }
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit4'])) {
    $sql = "update member set birthday ='$Birthday' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
  }
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit5'])) {
    $sql = "update member set email ='$Email' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
  }
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit6'])) {
    $sql = "update member set phone ='$Phone' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
  }
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit7'])) {
    $sql = "update member set line_id ='$LineID' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
  }
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit8'])) {
    $sql = "update member set facebook ='$Facebook' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
  }
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit9'])) {
    $sql = "update member set address ='$Address' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
  }
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit10'])) {
    $sql = "update member set checkin ='$chin' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
  }
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit11'])) {
    $sql = "update member set checkout ='$chout' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
  }
else {
echo "ERROR";
}
 }

 if (isset($_POST['edit12'])) {
    $sql = "update member set status ='$Status' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
  }
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit13'])) {
   $contact = $_POST[contact];
  $sql = "update member set contact ='$contact' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit14'])) {
    $sql = "update member set gpa ='$gpa' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
  }
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit15'])) {
    $sql = "update member set somecredit ='$scredit' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
  }
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit16'])) {
    $sql = "update member set oldschool = '$oldschool' where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
  }
else {
echo "ERROR";
}
 }
 if (isset($_POST['edit17'])) {
  $sql = "update member set leveledu = '$leveledu' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit18'])) {
  $sql = "update member set branch = '$branch' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit19'])) {
  $sql = "update member set oldgpa= '$oldgpa' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit20'])) {
  $sql = "update member set province = '$province' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit21'])) {
  $sql = "update member set pr_name = '$prname', pr_lastname='$prlastname'
   where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit22'])) {
  $sql = "update member set pr_status = '$prstatus' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit23'])) {
  $sql = "update member set pr_phone = '$prphone' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit24'])) {
  $sql = "update member set pr_address = '$praddress' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit25'])) {
  $sql = "update member set username='$Username',lastname='$Lastname'
   where member_id = $MemberID";
  $result = mysqli_query($con,$sql);
  if ($result) {
      echo "<script>location='detail-member2.php?member_id=$MemberID'</script>";
  }
  else {
      echo "ERROR";
  }
}
if (isset($_POST['edit26'])) {
  $sql = "update member set member_id ='$memBer' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='info-teacher.php'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit27'])) {
  $Room = $_POST[room];
  $sql = "update member set room ='$Room' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
  echo "<script>location='detail-member2.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit28'])) {
  $sql = "update member set email ='$Email' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member2.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit29'])) {
  $sql = "update member set phone ='$Phone' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member2.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit30'])) {
  $sql = "update member set line_id ='$LineID' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member2.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit31'])) {
  $sql = "update member set facebook ='$Facebook' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member2.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
if (isset($_POST['edit32'])) {
  $sql = "update member set resign ='$Resign' where member_id = $MemberID";
$result = mysqli_query($con,$sql);
if ($result) {
echo "<script>location='detail-member.php?member_id=$MemberID'</script>";
}
else {
echo "ERROR";
}
}
?>