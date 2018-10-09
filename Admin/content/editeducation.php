<?php
include("connect.php");
$year = $_GET['year'];
$sql = "SELECT * FROM education WHERE year = $year";
$query = mysqli_query($con,$sql);
$result = mysqli_fetch_array($query);

if(isset($_POST["UpdateEducation"])){
  $sql = "UPDATE education SET
			year = '".$_POST["year"]."' ,
			th_name = '".$_POST["thName"]."' ,
			eng_name = '".$_POST["engName"]."' ,
			credit = '".$_POST["credit"]."'
      WHERE year = '".$_POST["idYear"]."' ";
      $query = mysqli_query($con,$sql);

      	if($query) {
      	 echo "<script>alert('แก้ไขหลักสูตรเสร็จสมบูรณ์')</script>";
          echo "<script>location='education2.php'</script>";
      	}

      	mysqli_close($con);
}
 ?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>แก้ไขหลักสูตร</title>
  </head>
  <body>
    <?php require("navbar.html");?>
<div class="col-md-1">
</div>
<div class="container col-md-12">
    <form class='form-horizontal' action="" method="post">
      <input type="hidden" name="idYear" value="<?php echo $year?>">
      <fieldset>
        <legend>แก้ไขหลักสูตร</legend>
        <div class="form-group">
          <label for="inputEmail" class="col-md-3 control-label">หลักสูตรปรับปรุงปีการศึกษา</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="year" id="inputEmail" value="<?php echo $result["year"];?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail" class="col-md-3 control-label">ชื่อหลักสูตรภาษาไทย</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="thName"id="inputEmail" value="<?php echo $result["th_name"];?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail" class="col-md-3 control-label">ชื่อหลักสูตรภาษาอังกฤษ</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="engName"id="inputEmail" value="<?php echo $result["eng_name"];?>">
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail" class="col-md-3 control-label">จำนวนหน่วยกิต</label>
          <div class="col-md-7">
            <input type="text" class="form-control" name="credit"id="inputEmail" value="<?php echo $result["credit"];?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-7 col-md-offset-3">
            <button type="submit" name="UpdateEducation" class="btn btn-success">ยืนยันข้อมูล</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
  <?php
mysqli_close($con);
?>
</body>
</html>