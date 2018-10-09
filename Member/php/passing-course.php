<?
session_start();
include "connect.php";
$Year = $_GET[year];
$sql = "SELECT * FROM member WHERE member_id = '".$_SESSION['member_id']."' ";
$query = mysqli_query($con,$sql);
?>

<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>อาจารย์</title>
    <link rel="stylesheet" href="../css/bootstrap5.css">
    <link rel="stylesheet" href="../css/teacherr.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <style>
    .body-course{
      height: 600px;
    }
    </style>
  </head>
  <body>
  
    <?include("navbar.php");?>
    <div class="container col-md-12">
      <div class="container col-md-12 ">
              <div class="container col-md-12">
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
                <?
                $Type = "cooperative";
                $sql = "SELECT*FROM course WHERE Subject_type = 'cpr' AND year = '$Year'";
                $query = mysqli_query($con,$sql);
                ?>
                <?
                while($row = mysqli_fetch_array($query))
                {
                ?>
                <tbody>
                   <td><?echo $row["subject_id"];?></td>
                   <td><?echo $row["subject_name"];?></td>
                   <td><?echo $row["subject_credit"];?></td>
                   <td><a href="JavaScript:if(confirm('ยืนยันการลบข้อมูล ?')==true){window.location=
         'del-course-cpr.php?subject_id=<?= $row["subject_id"]?>&year=<?= $Year?>';}" class="btn btn-danger btn-sm">X ลบ</a></td>
                </tbody>
                <?}?>
                </table>
              </div>
          <div class="container col-md-3">
            <legend>เพิ่มรายวิชา</legend>
            <form name="form1" action="addcourse.php" method="post">
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
             <input type="submit" name="submit" class="btn btn-info" value="เพิ่มรายวิชา">
             <br><br><br><br>
           </div>
            </form>
          </div>

      </div>
    </div>
</body>
</html>
