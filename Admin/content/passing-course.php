<?
session_start();
include "connect.php";
$Year = $_GET[year];
$sql = "SELECT * FROM member WHERE user_id = '".$_SESSION['user_id']."' ";
$query = mysqli_query($con,$sql);
?>

<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>อาจารย์</title>
  </head>
  <body>
    <?include("navbar.html");?>
    <?
  $Type = "cpr";
  $SubjectID = $_POST[txtSubID];
  $Year2 = $_POST[Year];
    if(isset($_POST[addcourse_cpr])){
      $sql = "UPDATE course SET Subject_type = '$Type' WHERE subject_id = '$SubjectID' AND year = $Year2";
      if($con->query($sql)){
        echo "<div class='alert alert-dismissible alert-success col-md-4'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
         <p align='center'>เพิ่มรายวิชาเรียบร้อย</p>
      </div>";
      }
      else {
        echo "Error";
      }
    }
  ?>
    <div class="container col-md-12">
      <div class="container col-md-12 col-md-offset-1">
              <div class="container col-md-10">
                <legend><b>รายวิชาบังคับหลักสูตรปีการศึกษา :</b> <?= $Year;?></legend>
                <table class="table table-striped table-hover ">
                <thead>
                  <tr>
                    <th class="active">รหัสวิชา</th>
                    <th class="active">ชื่อวิชา</th>
                    <th class="active">หน่วยกิต</th>
                    <th class="active col-md-1">ลบ</th>
                  </tr>
                </thead>
                <?php
                $Type = "cooperative";
                $sql = "SELECT*FROM course WHERE Subject_type = 'cpr' AND year = '$Year'";
                $query = mysqli_query($con,$sql);
                ?>
                <?php
                while($row = mysqli_fetch_array($query))
                {
                ?>
                <tbody>
                   <td><?echo $row["subject_id"];?></td>
                   <td><?echo $row["subject_name"];?></td>
                   <td><?echo $row["subject_credit"];?></td>
                   <td><a href="JavaScript:if(confirm('ยืนยันการลบข้อมูล ?')==true){window.location=
                  'delcourse-cpr.php?subject_id=<?= $row["subject_id"]?>&year=<?= $Year?>';}" class="btn btn-danger btn-sm">ลบ</a></td>
                </tbody>
                <?}?>
                </table>
              </div>
          <div class="container col-md-3">
            <legend>เพิ่มรายวิชา</legend>
            <form name="form1" action="" method="post">
            <input type="hidden" name="Year" value="<?=$Year?>">
           <table class="table table-striped table-hover ">
           <thead>
             <tr>
               <th class="warning col-md-2">รหัสวิชา</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td><input type="text" class="form-control" name="txtSubID" ></td>
             </tr>
           </tbody>
           </table>
           <div class="container col-md-12">
             <input type="submit" name="addcourse_cpr" class="btn btn-info" value="เพิ่มรายวิชา">
             <br><br><br><br>
           </div>
            </form>
          </div>
      </div>
    </div>
</body>
</html>
