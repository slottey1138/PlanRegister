<?
session_start();
$MemberID = $_SESSION['member_id'];
include "connect.php";
//select a.* from test a left outer join test b on a.t1 = b.t3 where b.t1='a4'
$sql="SELECT a.*,b.*
FROM member a
LEFT OUTER JOIN member b ON a.contact = b.member_id
WHERE a.member_id ='$MemberID'";
$result = mysqli_query($con,$sql);
$r = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <?include "navbar.php";?>
    <? if($r[12]=="student") { ?>
    <div class="col-md-12">
    <div class="col-md-2">
      <div class="image">
       <img src="../../img/<?= $r['11'];?>" class="img-user" />
       <br><br>
      </div>
      <div class="btn-edit" style="width: 200px;">
        <a href="" data-toggle="modal" data-target="#edit-img" class="btn btn-primary btn-edit2"><span class="glyphicon glyphicon-edit"></span>  แก้ไขรูปภาพ</a><br><br><br>
        <a href="detailteacher.php?member_id=<?= $r["member_id"];?>" class="btn btn-info">ข้อมูลอาจารย์ที่ปรึกษา</a>  
    </div>
    </div>
    <div class="panel panel-primary col-md-5">
  <div class="panel-heading">
    <h3 class="panel-title">ข้อมูลส่วนตัว</h3>
  </div>
  <div class="panel-body">
  <div class="col-4">
    <div class="id">
      <b>ชื่อ - นามสกุล :</b> <? echo $r[1]; echo " ";echo " "; echo $r[2]; ?>
    </div>
    <div class="id">
      <b>รหัสนักศึกษา :</b> <? echo $r[0]; ?>
    </div>
    <div class="id">
      <b>เบอร์โทรศัพท์ :</b> <? echo $r[4]; ?>
    </div>
    <div class="id">
      <b>อีเมล :</b> <? echo $r[5]; ?>
    </div>
    <div class="id">
      <b>ไลด์ไอดี :</b> <? echo $r[6]; ?>
    </div>
    <div class="id">
      <b>เฟสบุ๊ค :</b> <? echo $r[7]; ?>
    </div>
    <div class="id">
    <b>รหัสประจำตัวประชาชน :</b> <? echo $r[8]; ?>
    </div>
    <div class="id">
      <b>เกิดวันที่ :</b> <? echo $r[9]; ?>
    </div>
    <div class="id">
      <b>ที่อยู่ปัจจุบัน :</b> <? echo $r[10]; ?>
      <a type="button" class="btn btn-warning" style="float:right;" data-toggle="modal" data-target="#edit1">
      <span class="glyphicon glyphicon-edit"></span> แก้ไข</a>
    </div>
  </div>
  </div>
  </div>
  <div class="panel panel-primary col-md-5">
  <div class="panel-heading">
    <h3 class="panel-title">ข้อมูลการศึกษา</h3>
  </div>
  <div class="panel-body">
  <div class="id">
     <b> ปีที่เข้าศึกษา :</b> พ.ศ. <?= $r[27]; ?>
  </div>
  <div class="id">
      <b>ปีที่สำเร็จศึกษา :</b> พ.ศ. <?= $r[28]; ?>
  </div>
  <div class="id">
      <b>หลักสูตร :</b> ปีการศึกษา <?= $r[29]; ?>
  </div>
  <div class="id">
      <b>อาจารย์ที่ปรึกษา : </b> อาจารย์ <?= $r[username]." ".$r[lastname]; ?>
  </div>
  <div class="id">
      <b>สถานะการศึกษา :</b> <?= $r[25]; ?>
  </div>
  <div class="id">
      <b>เกรดเฉลี่ย :</b> <?= $r[24]; ?>
  </div>
  <div class="id">
      <b>หน่วยกิตรวม :</b> <?= $r[31]; ?>
      <a type="button" class="btn btn-warning" style="float:right;" data-toggle="modal" data-target="#edit2">
      <span class="glyphicon glyphicon-edit"></span> แก้ไข</a>
  </div>
  </div>
    </div>
    <div class="panel panel-primary col-md-5" >
  <div class="panel-heading">
    <h3 class="panel-title">ข้อมูลสถานศึกษาเดิม</h3>
  </div>
  <div class="panel-body">
  <div class="id">
  <b>ชื่อสถานศึกษาเดิม :</b> <?= $r[14]; ?>
  </div>
  <div class="id">
      <b>ระดับการศึกษา :</b> <?= $r[15]; ?>
  </div>
  <div class="id">
      <b>สาขาวิชา :</b> <?= $r[16]; ?>
  </div>
  <div class="id">
      <b>เกรดเฉลี่ย :</b> <?= $r[18]; ?>
  </div>
  <div class="id">
      <b>จังหวัด :</b> <?= $r[17]; ?>
      <a type="button" class="btn btn-warning" style="float:right;" data-toggle="modal" data-target="#edit3">
      <span class="glyphicon glyphicon-edit"></span> แก้ไข</a>
  </div>
    </div>
    </div>
    <div class="panel panel-primary col-md-5 col-md-offset-7">
  <div class="panel-heading">
    <h3 class="panel-title">ข้อมูลผู้ปกครอง</h3>
  </div>
  <div class="panel-body">
  <div class="id">
  </div>
  <div class="id">
  <b>ชื่อ-นามสกุล :</b> <?php echo $r[19]." ".$r[20];?>
  </div>
  <div class="id">
  <b>มีสถานะเป็น :</b> <?= $r[21]; ?>
  </div>
  <div class="id">
      <b>เบอร์โทรศัพท์ :</b> <?= $r[22]; ?>
  </div>
  <div class="id">
      <b>ที่อยู่ปัจจุบัน :</b> <?= $r[23]; ?>
      <a type="button" class="btn btn-warning" style="float:right;" data-toggle="modal" data-target="#edit4">
      <span class="glyphicon glyphicon-edit"></span> แก้ไข</a>
  </div>
  </div>
    <div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <form name="form1" method="post" class="form-horizontal" action="editprofile.php">
      <fieldset>
  <legend>แก้ไขข้อมูลส่วนตัว</legend>
  <input type="hidden" value="<?=$r[0]?>" name="MemberID">
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>ชื่อ</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="fname" value="<?= $r[1]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>นามสกุล</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="lname" value="<?= $r[2]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>โทรศัพท์</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="phone" value="<?= $r[4]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>อีเมล</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="email" value="<?= $r[5]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>ไลน์ไอดี</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="lineid" value="<?= $r[6]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>เฟสบุ๊ค</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="facebook" value="<?= $r[7]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>รหัสประชาชน</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="idcard" value="<?= $r[8]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>วันเกิด</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="birthday" value="<?= $r[9]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>ที่อยู่</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="address" value="<?= $r[10]; ?>">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-3">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
      <button type="submit" name="edit1" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </fieldset>
      </form>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="edit2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <form name="form2" method="post" class="form-horizontal" action="editprofile.php">
      <fieldset>
  <legend>แก้ไขข้อมูลการศึกษา</legend>
  <input type="hidden" value="<?=$r[0]?>" name="MemberID">
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>ปีที่เข้าศึกษา</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="checkin" value="<?= $r[27]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>ปีที่สำเร็จศึกษา</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="checkout" value="<?= $r[28]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>หลักสูตร</b></label>
      <div class="col-lg-9">
        <input type="text" id="disabledInput" disabled="" name="education"class="form-control input-sm" value="<?= $r[29]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>สถานะการศึกษา</b></label>
      <div class="col-lg-9">
        <input type="text"id="disabledInput" disabled=""  class="form-control input-sm" name="status" value="<?= $r[25]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>เกรดเฉลี่ย</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="gpa" value="<?= $r[24]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>หน่วยกิตรวม</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="somecredit" value="<?= $r[31]; ?>">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-3">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
      <button type="submit" name="edit2" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </fieldset>
      </form>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="edit3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
  <form name="form3" method="post" class="form-horizontal" action="editprofile.php">
      <fieldset>
  <legend>แก้ไขข้อมูลข้อมูลสถานศึกษาเดิม</legend>
  <input type="hidden" value="<?=$r[0]?>" name="MemberID">
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>ชื่อสถานศึกษาเดิม</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="oldschool" value="<?= $r[14]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>ระดับการศึกษา</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="leveledu" value="<?= $r[15]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>สาขาวิชา</b></label>
      <div class="col-lg-9">
        <input type="text" name="branch"class="form-control input-sm" value="<?= $r[16]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>เกรดเฉลี่ย</b></label>
      <div class="col-lg-9">
        <input type="text"  class="form-control input-sm" name="oldgpa" value="<?= $r[18]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>จังหวัด</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="province" value="<?= $r[17]; ?>">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-3">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
      <button type="submit" name="edit3" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </fieldset>
      </form>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="edit4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <form name="form4" method="post" class="form-horizontal" action="editprofile.php">
      <fieldset>
  <legend>แก้ไขข้อมูลผู้ปกครอง</legend>
  <input type="hidden" value="<?=$r[0]?>" name="MemberID">
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>ชื่อ</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="prname" value="<?= $r[19]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>นามสกุล</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="prlastname" value="<?= $r[20]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>มีสถานะเป็น</b></label>
      <div class="col-lg-9">
        <input type="text" name="prstatus"class="form-control input-sm" value="<?= $r[21]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>เบอร์โทรศัพท์</b></label>
      <div class="col-lg-9">
        <input type="text"  class="form-control input-sm" name="prphone" value="<?= $r[22]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>ที่อยู่ปัจจุบัน</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="praddress" value="<?= $r[23]; ?>">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-3">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
      <button type="submit" name="edit4" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </fieldset>
      </form>
      </div>
      </div>
    </div>
  </div>
</div>
<?}
else {
?>
<div class="container col-md-12">
    <div class="col-md-2 col-md-offset-2">
      <div class="image">
       <img src="../../img/<?= $r[11];?>" class="img-user" />
       <br><br>
      </div>
      <div class="btn-edit" style="width: 200px;">
        <a href="page1.php?member_id=<?= $r["member_id"];?>" data-toggle="modal" data-target="#edit-img" class="btn btn-primary btn-edit2"> 
        <span class="glyphicon glyphicon-edit"></span> แก้ไขรูปภาพ</a><br><br><br>
    </div>
    </div>
    <div class="panel panel-primary col-md-6">
  <div class="panel-heading">
    <h3 class="panel-title">ข้อมูลส่วนตัว</h3>
  </div>
  <div class="panel-body">
  <div class="col-4">
    <div class="id">
      <b>ชื่อ - นามสกุล :</b> <? echo $r[1]; echo " ";echo " "; echo $r[2]; ?>
    </div><br>
    <div class="id">
      <b>รหัสประจำตัว :</b> <? echo $r[0]; ?>
    </div><br>
    <div class="id">
      <b>ห้อง :</b> <? echo $r[13]; ?>
    </div><br>
    <div class="id">
      <b>เบอร์โทรศัพท์ :</b> <? echo $r[4]; ?>
    </div><br>
    <div class="id">
      <b>อีเมล :</b> <? echo $r[5]; ?>
    </div><br>
    <div class="id">
      <b>ไลด์ไอดี :</b> <? echo $r[6]; ?>
    </div><br>
    <div class="id">
      <b>เฟสบุ๊ค :</b> <? echo $r[7]; ?>
      <a type="button" class="btn btn-warning " style="float:right;" data-toggle="modal" data-target="#edit5">
      <span class="glyphicon glyphicon-edit"></span> แก้ไข</a>
    </div><br>
  </div>
  </div>
  <div class="modal fade" id="edit5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <form name="form4" method="post" class="form-horizontal" action="editprofile.php">
      <fieldset>
  <legend>แก้ไขข้อมูล</legend>
  <input type="hidden" value="<?=$r[0]?>" name="MemberID">
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>ชื่อ</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="fname" value="<?= $r[1]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>นามสกุล</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="lname" value="<?= $r[2]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>รหัสประจำตัว</b></label>
      <div class="col-lg-9">
        <input class="form-control input-sm" id="disabledInput" placeholder="Disabled input here..." disabled="" type="text" value="<?= $r["member_id"]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>ห้อง</b></label>
      <div class="col-lg-9">
        <input type="text"  name="room" class="form-control input-sm" name="room" value="<?= $r[13]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>เบอร์โทรศัพท์</b></label>
      <div class="col-lg-9">
        <input type="text"  class="form-control input-sm" name="phone" value="<?= $r[4]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>อีเมล</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="email" value="<?= $r[5]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>ไลด์ไอดี</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="lineid" value="<?= $r[6]; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-3 control-label"><b>เฟสบุ๊ค</b></label>
      <div class="col-lg-9">
        <input type="text" class="form-control input-sm" name="facebook" value="<?= $r[7]; ?>">
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-3">
      <button type="button" class="btn btn-danger" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
      <button type="submit" name="edit5" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> บันทึก</button>
      </div>
    </div>
  </fieldset>
      </form>
      </div>
      </div>
  </div>
</div>
<?}?>
<form action="editprofile.php" method="post">
<input type="hidden" value="<?=$r[0]?>" name="MemberID">
<div class="modal fade" id="edit-img" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        แก้ไขรูปภาพ <br>
        <input type="file" name="fileUpload" id="fileUpload">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="update-img" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>