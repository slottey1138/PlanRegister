<html>
<head>
<title>สมัครสมาชิก</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="flat.css">
<link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
<style media="screen">
  body{
    font-family: 'Mitr', sans-serif;
    background-image: url("photo5.jpg");
      background-size: cover;
      color:#fff;
    }
    h1{
      font-family: 'Mitr', sans-serif;
      color:#fff;
    }
    #frmCheckUsername {border-top:#F0F0F0 2px solid;background:#FAF8F8;padding:10px;}
.demoInputBox{padding:7px; border:#F0F0F0 1px solid; border-radius:4px;}
.status-available{color:#2FC332;}
.status-not-available{color:#D60202;}
span {
  width: 80%;
  height: 35px;
  font-size: 1.1em;
  color: red;
}
</style>
</head>
<body>
<?php include('checkregister.php') ?>
<br><br><br>
<div class="container cik-md-12">
  <form name="form1" method="post" class="form-horizontal" action="register.php">
    <center>
    <h1>สมัครสมาชิก</h1>
    </center><br>
    <div class="form-group" <?php if (isset($member_id_error)): ?> class="form_error" <?php endif ?>>
        <label  class="col-md-3 control-label">รหัสประจำตัว :</label>
        <div class="col-md-6">    
          <input type="text" class="form-control demoInputBox"  name="MemberID"  >
          <?php if (isset($member_id_error)): ?>
	  	<span><?php echo $member_id_error; ?></span>
	      <?php endif ?>
        </div>
        
    </div>
    <div class="form-group">
        <label  class="col-md-3 control-label">ชื่อ :</label>
        <div class="col-md-6">    
          <input type="text" class="form-control demoInputBox"  name="fName"  >
        </div>
        
    </div>
    <div class="form-group">
        <label  class="col-md-3 control-label">นามสกุล :</label>
        <div class="col-md-6">    
          <input type="text" class="form-control demoInputBox"  name="lName"  >
        </div>
    </div>
    <div class="form-group">
        <label  class="col-md-3 control-label">รหัสผ่าน :</label>
        <div class="col-md-6">
          <input type="password" class="form-control" name="txtPassword" id="txtPassword"  >
        </div>
    </div>
    <div class="form-group"<?php if (isset($Password_Error)): ?> class="form_error" <?php endif ?>>
        <label  class="col-md-3 control-label">ยืนยันรหัสผ่าน :</label>
        <div class="col-md-6">
          <input type="password" class="form-control" name="txtConPassword" id="txtConPassword">
          <?php if (isset($Password_Error)): ?>
	  	<span><?php echo $Password_Error; ?></span>
	      <?php endif ?>
        </div>
    </div>


      <div class="form-group">
                <div class="col-md-10 col-md-offset-3">
                  <a href="homepage.php" class="btn btn-default">ยกเลิก</a>
                  <button type="submit" name="register" class="btn btn-info">ลงทะเบียน</button>
                </div>
        </div>
  </form>
</div>
</body>
</html>
