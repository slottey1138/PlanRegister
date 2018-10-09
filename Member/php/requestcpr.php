<?session_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ส่งคำร้องไปสหกิจ</title>
    <link rel="stylesheet" href="../css/bootstrap7.css">
    <link rel="stylesheet" href="../css/indexx.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <?php require("navbar.php");?>
    <div class="container col-md-10 col-md-offset-1">
      <form class="form-horizontal" action="saverequestcpr.php" method="post">
    <fieldset>
      <legend>ส่งคำร้องขอไปสหกิจ</legend>
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">รหัสนักศึกษา</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" name="txtStudentID">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">ชื่อ</label>
        <div class="col-lg-10">
          <input type="text" class="form-control"  name="txtFirstname">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">นามสกุล</label>
        <div class="col-lg-10">
          <input type="text" class="form-control"  name="txtLastname">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">เกรดเฉลี่ย</label>
        <div class="col-lg-10">
          <input type="text" class="form-control"  name="txtGpa">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">หน่วยกิตรวม</label>
        <div class="col-lg-10">
          <input type="text" class="form-control"  name="txtSomecredit">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">ชั้นปี</label>
        <div class="col-lg-10">
          <input type="text" class="form-control"  name="txtLeveledu">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">ปีการศึกษาที่ออกฝึก</label>
        <div class="col-lg-10">
          <input type="text" class="form-control"  name="txtSemester">
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button type="reset" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
    </div>
  </body>
</html>
