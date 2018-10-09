<?php
session_start();
include "connect.php";
$strSQL = "SELECT * FROM member WHERE user_id = '".$_SESSION['user_id']."' ";
$objQuery = mysql_query($strSQL);
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หลักสูตรการศึกษา</title>
    <link rel="stylesheet" href="../css/index2.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body style="background-color: #dcdcdc">
    <? include ("navbar.php");?>
<div class="col-md-1">

</div>
<div class="container col-md-10">
  <caption><h1 style="color:#778899">เลือกหลักสูตรการศึกษา</h1></caption>
  <div class="container ">
    <?
    $sql = "SELECT * FROM education";
    $result = mysqli_query($con,$sql);
     ?>
     <div class="container col-md-10">
       <br>
       <?php
       while($row2 = mysqli_fetch_array($result))
       {
       ?>
           <a href="detail-education.php?year=<?php echo $row2["year"];?>" class="btn btn-primary">
             ปีการศึกษา <?php echo $row2["year"];?></a>
       <?php
       }
       ?>
     </div>
  </div>
  <div id="2" class="tabcontent">
  </div>
</div>
<?php
mysqli_close($con);
?>
</body>
</html>
