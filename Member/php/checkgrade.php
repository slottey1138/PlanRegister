<?php 
session_start();
require("checksession.php");
?>

<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>อาจารย์</title>
    <link rel="stylesheet" href="../css/bootstrap5.css">
    <link rel="stylesheet" href="../css/teacherstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php require("navbar.php");?>
  <div class="container col-md-12">
    <legend>ตรวจสอบผลการเรียนนักศึกษา</legend>
    <div class="container col-md-12">
      <div class="col-md-1"></div>
      <div class="container col-md-10">
        <?php
        $showstd="SELECT * FROM member WHERE contact = '".$_SESSION["member_id"]."'";
        $result=mysqli_query($con,$showstd);
        ?>
        <div class="container" style="width: 200px"></div><br>
          <table class="table table-striped table-hover ">
            <thead>
              <tr class="success">
                <th class="col-md-5">ชื่อ - นามสกุล</th>
                <th class="col-md-5">รหัสนักศึกษา</th>
                <th class="col-md-2">ดูรายละเอียด</th>
              </tr>
            </thead>
            <?php
           while($row = mysqli_fetch_array($result))
           {
           ?>
            <tbody>
              <tr>
                <td> <?php echo $row['username']." ".$row['lastname'];?></td>
                <td> <?php echo $row['member_id'];?></td>
                <td><a href="checkgrade2.php?member_id=<?php echo $row["member_id"];?>" class="btn btn-primary btn-sm">ดูผลการเรียน</a></td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
      </div>
    </div>
  </div>
</body>
</html>
