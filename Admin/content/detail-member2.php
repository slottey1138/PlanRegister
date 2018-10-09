<?php
session_start();
include("connect.php");
$MemberID = $_GET['member_id'];
$sql = "SELECT * FROM member WHERE member_id=$MemberID";
$query = mysqli_query($con,$sql);
$r = mysqli_fetch_array($query);
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หน้าหลัก</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body style="background-color: #dcdcdc">
    <? include "navbar.html"?>
<div class="col-md-1"></div>
<div class="container col-md-2">
<center>
   <img src="../img/user.jpg" alt="">
   <br><br>
</center>
</div>
<div class="col-md-8">
<table class="table table-striped table-hover ">
<thead>
  <tr>
    <td colspan="2" class="success">ข้อมูลส่วนตัว</td>
  </tr>
  <tr>
    <th class="active col-md-2"><b>ชื่อ นามสกุล</b></th>
    <td class="active col-md-4"><?=  $r['username']." ".$r['lastname'];?><a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit1"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
</thead>
<tbody>
  <tr>
  <th>รหัสประจำตัว</th>
  <td><?= $r["member_id"];?>
  <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit2"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>ห้อง</b></th>
    <td><?= $r["room"];?>
    <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit3"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>อีเมล</b></th>
    <td><?= $r["email"];?>
    <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit4"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>เบอร์โทรศัพท์</b></th>
    <td><?= $r["phone"];?>
    <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit5"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>ไลด์ไอดี</b></th>
    <td><?= $r["line_id"];?>
    <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit6"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>เฟสบุ๊ค</b></th>
    <td><?= $r["facebook"];?>
    <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit7"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
</tbody>
</table>
<br><br>
<form action="editmember.php" name="form1" method="post">
<input type="hidden" name="MemberID" value="<?= $r[member_id]?>">
<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">ชื่อ</label>
       <input type="text" name="fname" class="form-control is-valid" value="<?= $r["username"]; ?>" id="inputValid">
     </div>
     <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">นามสกุล</label>
       <input type="text" name="lname" class="form-control is-valid" value="<?= $r["lastname"]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit25" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form2" method="post">
<input type="hidden" name="MemberID" value="<?= $r[member_id]?>">
<div class="modal fade" id="edit2" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">รหัสประจำตัว</label>
       <input type="text" name="member" class="form-control is-valid" value="<?= $r["member_id"]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit26" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form3" method="post">
<input type="hidden" name="MemberID" value="<?= $r[member_id]?>">
<div class="modal fade" id="edit3" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">ห้อง</label>
       <input type="text" name="room" class="form-control is-valid" value="<?= $r["room"]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit27" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form4" method="post">
<input type="hidden" name="MemberID" value="<?= $r[member_id]?>">
<div class="modal fade" id="edit4" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">อีเมล</label>
       <input type="text" name="email" class="form-control is-valid" value="<?= $r["email"]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>  
        <button type="submit" name="edit28" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form5" method="post">
<input type="hidden" name="MemberID" value="<?= $r[member_id]?>">
<div class="modal fade" id="edit5" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">เบอร์โทรศัพท์</label>
       <input type="text" name="phone" class="form-control is-valid" value="<?= $r["phone"]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit29" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form6" method="post">
<input type="hidden" name="MemberID" value="<?= $r[member_id]?>">
<div class="modal fade" id="edit6" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">ไลด์ไอดี</label>
       <input type="text" name="lineid" class="form-control is-valid" value="<?= $r["line_id"]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit30" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form7" method="post">
<input type="hidden" name="MemberID" value="<?= $r[member_id]?>">
<div class="modal fade" id="edit7" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">เฟสบุ๊ค</label>
       <input type="text" name="facebook" class="form-control is-valid" value="<?= $r["facebook"]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit31" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
</div>
</body>
</html>
