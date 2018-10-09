<?php session_start();
require("checksession.php");
include("connect.php");
 ?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>อาจารย์</title>
    <link rel="stylesheet" href="../css/bootstrap5.css">
    <link rel="stylesheet" href="../css/teacherstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <?php require("navbar.php");?>
  <?php
  	ini_set('display_errors', 1);
  	error_reporting(~0);

  	$strKeyword = null;

  	if(isset($_POST["txtKeyword"]))
  	{
  		$strKeyword = $_POST["txtKeyword"];
  	}
  ?>
  <div class="container col-md-12">
    <legend>ผลการลงทะเบียนนักศึกษา</legend>
    <div class="container col-md-12">
      <div class="col-md-1"></div>
      <div class="col-md-12">
        <form class="navbar-form navbar-left" name="frmSearch" method="post"
        action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
        <div class="form-group">
          <input type="text" name="txtKeyword" id="txtKeyword" class="form-control" value="<?php echo $strKeyword;?>" placeholder="ใส่รหัสนักศึกษา">
        </div>
        <input type="submit" value="ค้นหา" class="btn btn-default"></input>
        </form></div>
        <?php
        $con=mysqli_connect("localhost","root","mysql","project");
        mysqli_set_charset($con,"utf8");
           $sql = "SELECT * FROM member WHERE member_id LIKE '%".$strKeyword."%' AND user_type = '".'student'."' ";
           $query = mysqli_query($con,$sql);
        ?>
      <div class="container col-md-12">
        <div class="container" style="width: 200px"></div><br>
          <table class="table table-striped table-hover ">
            <thead>
              <tr class="success">
                <th class="col-md-1">ลำดับที่</th>
                <th class="col-md-4">ชื่อ - นามสกุล</th>
                <th class="col-md-5">รหัสนักศึกษา</th>
                <th class="col-md-2">ดูรายละเอียด</th>
              </tr>
            </thead>
            <?php
            $i=1;
           while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
           {
           ?>
            <tbody>
              <tr>
                <td> <?php echo $i;?></td>
                <td> <?php echo $row['username']." ".$row['lastname'];?></td>
                <td> <?php echo $row['member_id'];?></td>
                <td><a href="detailregister-std.php?member_id=<?php echo $row["member_id"];?>" class="btn btn-primary btn-sm">
                <span class="glyphicon glyphicon-zoom-in"></span>  ดูผลการเรียน</a></td>
              </tr>
            </tbody>
            <?php $i++; } ?>
          </table>
      </div>
    </div>
  </div>
  <?php
  mysqli_close($con);
  ?>
</body>
</html>
