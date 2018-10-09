<?php
include("connect.php");
if(isset($_POST["addEducation"])){
  $startYear = trim($_POST['startYear']);
    $endYear = trim($_POST['endYear']);
    $thName = trim($_POST['thName']);
    $engName = trim($_POST['engName']);
    $Credit = trim($_POST['Credit']);
    $sql = "insert into education(year,end_year,th_name,eng_name,credit)
    values('$startYear','$endYear','$thName','$engName','$Credit')";
    $result = mysqli_query($con,$sql);
    if ($result) {
      echo "<script>alert('เพิ่มหลักสูตรเรียบร้อย')</script>";
    }
    else {
      echo "<script>alert('เพิ่มหลักสูตรไม่สำเร็จ')</script>";
    }
}
 ?>
<html>
<head>
  <meta charset="utf-8"/>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    float: left;
    background-color: #f1f1f1;
    width: 20%;
    height: auto;
    margin-left: 1%;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    border: 5px solid #000;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    width: 79%;
    height: auto;
}
</style>
</head>
<body>
  <?php require("navbar.html");?>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, '1')" id="defaultOpen">หลักสูตรการศึกษา</button>
  <button class="tablinks" onclick="openCity(event, '2')">เพิ่มหลักสูตร</button>
  <button class="tablinks" onclick="openCity(event, '3')">แก้ไขหลักสูตร</button>
  <button class="tablinks" onclick="openCity(event, '4')">เพิ่มรายวิชา</button>
  <button class="tablinks" onclick="openCity(event, '5')">แก้ไขรายวิชา</button>
</div>

<div id="1" class="tabcontent">
  <?php
  $sql = "SELECT * FROM education";
  $result = mysqli_query($con,$sql);
   ?>
   <div class="container col-md-10">
     <br>
     <?php
     while($row2 = mysqli_fetch_array($result))
     {
     ?>
         <a href="detail-education.php?year=<?php echo $row2["year"];?>" class="btn btn-primary">ปีการศึกษา <?php echo $row2["year"];?></a>
     <?php
     }
     ?>
   </div>
</div>

<div id="2" class="tabcontent">
  <div class="container col-md-12">
    <form class="form-horizontal" action="" method="post">
      <fieldset>
        <legend>เพิ่มหลักสูตร</legend>
        <div class="form-group">
          <label class="col-md-3 control-label">หลักสูตรปรับปรุงปีการศึกษา</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="startYear">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">ถึงปีการศึกษา</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="endYear">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">ชื่อหลักสูตรภาษาไทย</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="thName">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">ชื่อหลักสูตรภาษาอังกฤษ</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="engName">
          </div>
        </div>
        <div class="form-group">
          <label  class="col-md-3 control-label">จำนวนหน่วยกิต</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="Credit">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-7 col-md-offset-3">
            <button type="submit" name="addEducation" class="btn btn-success">ยืนยันข้อมูล</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>

<div id="3" class="tabcontent">
  <?php
  $sql = "SELECT * FROM education";
  $result = mysqli_query($con,$sql);
   ?>
   <div class="container col-md-10">
     <br>
     <?php
     while($row2 = mysqli_fetch_array($result))
     {
     ?>
         <a href="editeducation.php?year=<?php echo $row2["year"];?>" class="btn btn-warning">ปีการศึกษา <?php echo $row2["year"];?></a>
     <?php
     }
     ?>
   </div>
</div>
<div id="4" class="tabcontent">
  <?php
  $sql = "SELECT * FROM education";
  $result = mysqli_query($con,$sql);
   ?>
   <div class="container col-md-10">
     <br>
     <?php
     while($row2 = mysqli_fetch_array($result))
     {
     ?>
         <a href="addcourse.php?year=<?php echo $row2["year"];?>" class="btn btn-info">ปีการศึกษา <?php echo $row2["year"];?></a>
     <?php
     }
     ?>
   </div>
</div>
<div id="5" class="tabcontent">
  <?php
  $sql = "SELECT * FROM education";
  $result = mysqli_query($con,$sql);
   ?>
   <div class="container col-md-10">
     <br>
     <?php
     while($row2 = mysqli_fetch_array($result))
     {
     ?>
         <a href="editcourse.php?year=<?php echo $row2["year"];?>" class="btn btn-warning">ปีการศึกษา <?php echo $row2["year"];?></a>
     <?php
     }
     ?>
   </div>
</div>
<script>
function openCity(evt, cityName) {
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
