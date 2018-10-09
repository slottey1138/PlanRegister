<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หน้าหลัก</title>
  </head>
  <body>
    <?php require("navbar.html");?>
<center>
  <a href="addeducation.php" class="btn btn-info">เพิ่มหลักสูตร</a>
  <a href="editeducation.php" class="btn btn-info">แก้ไขหลักสูตร</a>
  <a href="addcourse.php" class="btn btn-info">เพิ่มรายวิชา</a>
  <a href="editcourse.php" class="btn btn-info">แก้ไขรายวิชา</a>
  <a href="compareedu.php" class="btn btn-info">เปรียบเทียบหลักสูตร</a>
</center><br>
<div class="col-md-1">

</div>
<div class="container col-md-10">
  <form class="form-horizontal" action="saveeducation.php" method="post">
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
          <button type="submit" class="btn btn-success">ยืนยันข้อมูล</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>
</body>
</html>
