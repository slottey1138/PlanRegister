<?php
session_start();
include "connect.php";
$Year = $_GET["Year"];
$sql = "SELECT * FROM statistics";
$query = mysqli_query($con,$sql);
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="../css/bootstrap3.css">
    <link rel="stylesheet" href="../css/index2.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php require("navbar.html");?>
    <div class="col-md-1">
    </div>
    </div>
     <div class="container col-md-12">
       <div class="container col-md-12">
    <legend>ปีการศึกษา : <?echo $Year;?></legend>
    <div class="tab">
      <button class="tablinks" onclick="openList(event, '1')" id="defaultOpen">เข้าศึกษา</button>
      <button class="tablinks" onclick="openList(event, '2')">สำเร็จการศึกษา</button>
    </div>
    <div id="myTabContent" class="tab-content">
      <div class="tabcontent" id="1">
        <br>
        <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th class="active col-md-1">ลำดับที่</th>
            <th class="active col-md-4">ชื่อ-นามสกุล</th>
            <th class="active col-md-3">รหัสนักศึกษา</th>
            <th class="active col-md-2">ผลการเรียน</th>
            <th class="active col-md-2">ข้อมูลส่วนตัง</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>สมหมาย ขายดี</td>
            <td>5604000001</td>
            <td><a href="#" class="btn btn-info btn-sm">ผลการเรียน</a></td>
            <td><a href="#" class="btn btn-info btn-sm">ข้อมูลส่วนตัว</a></td>
          </tr>
        </tbody>
        </table>
      </div>
      <div class="tabcontent" id="2">
        <br>
        <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th class="active col-md-1">ลำดับที่</th>
            <th class="active col-md-3">ชื่อ-นามสกุล</th>
            <th class="active col-md-2">รหัสนักศึกษา</th>
            <th class="active col-md-2">จำนวนปีการศึกษา</th>
            <th class="active col-md-1">ผลการเรียน</th>
            <th class="active col-md-1">ข้อมูลส่วนตัว</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>สมหมาย ขายดี</td>
            <td>5604000001</td>
            <td>4</td>
            <td><a href="#" class="btn btn-info btn-sm">ผลการเรียน</a></td>
            <td><a href="#" class="btn btn-info btn-sm">ข้อมูลส่วนตัว</a></td>
          </tr>
        </tbody>
        </table>
      </div>
    </div>
       </div>
     </div>
      <?php
    mysqli_close($con);
    ?>
    <script>
    function openList(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
</body>
</html>
