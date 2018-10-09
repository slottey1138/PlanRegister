<?
session_start();
include("connect.php");
 ?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>อาจารย์</title>
  </head>
  <body>
    <?include("navbar.html");?>
    <div class="container col-md-12">
    <div class="tab">
  <button class="tablinks" onclick="openCity(event, '1')" id="defaultOpen">รายชื่อรอการยืนยัน</button>
  <button class="tablinks" onclick="openCity(event, '2')">รายชื่อที่ผ่านการยืนยัน</button>
  <button class="tablinks" onclick="openCity(event, '3')">รายชื่อที่ไม่ผ่านการยืนยัน</button>
    </div>
    <div id="1" class="tabcontent">
    <div class="container col-md-12 ">
        <legend>รายชื่อนักศึกษาขอไปสหกิจ</legend>
        <table class="table table-striped table-hover ">
        <?
        $pass = "pass";
        $fail = "fail";
        $showstd="SELECT * FROM requestcpr WHERE Status != '$pass' AND Status != '$fail' ";
        $result=mysqli_query($con,$showstd);
        ?>
          <table class="table table-striped table-hover ">
            <thead>
              <tr class="success">
                <th class="col-md-1">ลำดับที่</th>
                <th class="col-md-2">ชื่อ - นามสกุล</th>
                <th class="col-md-2">รหัสนักศึกษา</th>
                <th class="col-md-1">เกรดเฉลี่ย</th>
                <th class="col-md-1">หน่วยกิตรวม</th>
                <th class="col-md-2">ผลการเรียน</th>
                <th class="col-md-2">ยืนยัน</th>
                <th class="col-md-1">สถานะ</th>
              </tr>
            </thead>
          <form action="update.php" method="post">
          <?
            $i=1;
           while($row = mysqli_fetch_array($result))
           {
           ?>
            <tbody>
              <tr>
                <td> <?= $i;?></td>
                <td> <?= $row['Firstname']." ".$row['Lastname'];?></td>
                <td> <?= $row['member_id'];?></td>
                <td> <?= $row['Gpa'];?></td>
                <td><?= $row['Somecredit'];?></td>
                <td><a href="detailgpa-std.php?member_id=<? echo $row["member_id"];?>" class="btn btn-info btn-sm col-md-12"> ผลการเรียน</a>
                <td>
                <?
                $Pass = "pass";
                $Fail = "fail";
                ?>
                <a href="JavaScript:if(confirm('ยืนยันข้อมูล ?')==true){window.location=
                  'update.php?member_id=<?= $row[member_id]?>&name=<?= $Pass?>';} "  class="btn btn-success btn-sm col-md-6">ผ่าน</a>
                <a href="JavaScript:if(confirm('ยืนยันข้อมูล ?')==true){window.location=
                  'update.php?member_id=<?= $row[member_id]?>&name=<?= $Fail?>';} "  class="btn btn-danger btn-sm col-md-6">ไม่ผ่าน</a>
                </td>
                </td>              
               <td> <a href="" class="btn btn-info btn-sm disabled">รอการตรวจสอบ</a> </td>
              </tr>
            </tbody>
            <? $i++; } ?>
          </form>
          </table>
      </div>
</div>

<div id="2" class="tabcontent">
<div class="container col-md-12 ">
        <legend>รายชื่อนักศึกษาขอไปสหกิจ</legend>
        <table class="table table-striped table-hover ">
        <?
        $show_pass="SELECT * FROM requestcpr WHERE Status = '".'pass'."' ";
        $result_pass=mysqli_query($con,$show_pass);
        ?>
          <table class="table table-striped table-hover ">
            <thead>
              <tr class="success">
                <th class="col-md-1">ลำดับที่</th>
                <th class="col-md-2">ชื่อ - นามสกุล</th>
                <th class="col-md-2">รหัสนักศึกษา</th>
                <th class="col-md-1">เกรดเฉลี่ย</th>
                <th class="col-md-1">หน่วยกิตรวม</th>
                <th class="col-md-2">ผลการเรียน</th>
                <th class="col-md-1">สถานะ</th>
              </tr>
            </thead>
            <?
            $i=1;
           while($row = mysqli_fetch_array($result_pass))
           {
           ?>
            <tbody>
              <tr>
                <td> <?= $i;?></td>
                <td> <?= $row['Firstname']." ".$row['Lastname'];?></td>
                <td> <?= $row['member_id'];?></td>
                <td> <?= $row['Gpa'];?></td>
                <td><?= $row['Somecredit'];?></td>
                <td><a href="detailgpa-std.php?member_id=<? echo $row["member_id"];?>" class="btn btn-info btn-sm col-md-12"> ผลการเรียน</a>
                <td><a href="" class="btn btn-success btn-sm col-md-11 disabled">อนุมัติ</a></td>
              </tr>
            </tbody>
            <? $i++; } ?>
          </table>
      </table>
      </div>
</div>

<div id="3" class="tabcontent">
<div class="container col-md-12 ">
        <legend>รายชื่อนักศึกษาขอไปสหกิจ</legend>
        <table class="table table-striped table-hover ">
        <?
        $show_pass="SELECT * FROM requestcpr WHERE Status = '".'fail'."' ";
        $result_pass=mysqli_query($con,$show_pass);
        ?>
          <table class="table table-striped table-hover ">
            <thead>
              <tr class="success">
                <th class="col-md-1">ลำดับที่</th>
                <th class="col-md-2">ชื่อ - นามสกุล</th>
                <th class="col-md-2">รหัสนักศึกษา</th>
                <th class="col-md-1">เกรดเฉลี่ย</th>
                <th class="col-md-1">หน่วยกิตรวม</th>
                <th class="col-md-2">ผลการเรียน</th>
                <th class="col-md-1">สถานะ</th>
              </tr>
            </thead>
            <?
            $i=1;
           while($row = mysqli_fetch_array($result_pass))
           {
           ?>
            <tbody>
              <tr>
                <td> <?= $i;?></td>
                <td> <?= $row['Firstname']." ".$row['Lastname'];?></td>
                <td> <?= $row['member_id'];?></td>
                <td> <?= $row['Gpa'];?></td>
                <td><?= $row['Somecredit'];?></td>
                <td><a href="detailgpa-std.php?member_id=<? echo $row["member_id"];?>" class="btn btn-info btn-sm col-md-12"> ผลการเรียน</a>
                <td> <a href="" class="btn btn-danger btn-sm disabled col-md-11">ไม่อนุมัติ</a> </td>       
              </tr>
            </tbody>
            <? $i++; } ?>
          </table>
      </table>
      </div>
</div>
      <div class="container col-md-12 ">
       
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
