<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/flat.css">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title></title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
      <? if($_SESSION[menu1]==1) { ?>
        <li><a href="index.php">โปรไฟล์</a></li>
      <?}?>
      <? if($_SESSION[menu2]==1) { ?>
        <li><a href="resultgpa.php">ผลการเรียน</a></li>
      <?}?>
        <? if($_SESSION[menu3]==1) { ?>
        <li><a href="planregister.php">ลงทะเบียน</a></li>
      <?}?>
      <? if($_SESSION[menu4]==1) { ?>
        <li><a href="creteria.php">สหกิจฯ</a></li>
       <?}?>
       <? if($_SESSION[menu5]==1) { ?>
        <li><a href="education.php">หลักสูตรการศึกษา</a></li>
       <?}?>
       <? if($_SESSION[menu6]==1) { ?>
        <li><a href="ct-teacher.php">ข้อมูลอาจารย์</a></li>
       <?}?>
       <? if($_SESSION[menu7]==1) { ?>
        <li><a href="ask-ans.php">ตอบแบบสอบถาม</a></li>
       <?}?>
       <? if($_SESSION[menu8]==1) { ?>
        <li><a href="info-student.php">ข้อมูลนักศึกษา</a></li>
       <?}?>
       <? if($_SESSION[menu9]==1) { ?>
        <li><a href="gpa-std.php">ผลการเรียนนักศึกษา</a></li>
       <?}?>
       <? if($_SESSION[menu10]==1) { ?>
        <li><a href="planregister-std.php">ผลการลงทะเบียน</a></li>
       <?}?>
       <? if($_SESSION[menu11]==1) { ?>
        <li><a href="statistics-std.php">สถิตินักศึกษา</a></li>
       <?}?>
       <? if($_SESSION[menu12]==1) { ?>
        <li><a href="request-std.php">นักศึกษาขอไปสหกิจฯ</a></li>
       <?}?>
       <? if($_SESSION[menu13]==1) { ?>
        <li><a href="passingctr-std.php">วิชาบังคับสหกิจฯ</a></li>
       <?}?>
       <? if($_SESSION[menu14]==1) { ?>
        <li><a href="list-question.php">ข้อมูลแบบสอบถาม</a></li>
       <?}?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout" class="btn btn-danger"> <span class="glyphicon glyphicon-log-out"></span> ออกจากระบบ</a></li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>