<?
session_start();
include "connect.php";
$MemberID = $_GET['member_id'];
$sql="SELECT a.*,b.*
FROM member a
LEFT OUTER JOIN member b ON a.contact = b.member_id
WHERE a.member_id ='$MemberID'";
$result = mysqli_query($con,$sql);
$r = mysqli_fetch_array($result);
?>

<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หน้าหลัก</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body style="background-color: #dcdcdc">
    <? include ("navbar.html");?>
   
<div class="col-md-1"></div>
<div class="container col-md-2">
<center>
   <img src="../../img/<?= $r['11'];?>" class="image-member">
   <br><br>
</center>
</div>
<div class="col-md-8">
<table class="table table-striped table-hover ">
<thead>
  <tr>
    <td colspan="2" class="success">ข้อมูลส่วนตัว</td>
  </tr>
</thead>
<tbody>
<tr>
    <th class="active col-md-2"><b>ชื่อ นามสกุล</b></th>
    <td class="active col-md-6"><?php echo $r['1']." ".$r['2'];?>
    <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit1"><span class="glyphicon glyphicon-edit"></span> Edit<a>
  </td>
  </tr>
  <tr>
  <th>รหัสนักศึกษา</th>
  <td><?= $r["0"];?><a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit2"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>รหัสประจำตัวประชาชน</b></th>
    <td><?= $r["8"];?>
    <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit3"><span class="glyphicon glyphicon-edit"></span> Edit<a>
  </td>
  </tr>
  <tr>
    <th><b>เกิดวันที่</b></th>
    <td><?= $r["9"];?>
    <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit4"><span class="glyphicon glyphicon-edit"></span> Edit<a>
  </td>
  </tr>
  <tr>
    <th><b>อีเมล</b></th>
    <td><?= $r["5"];?>
    <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit5"><span class="glyphicon glyphicon-edit"></span> Edit<a>
  </td>
  </tr>
  <tr>
    <th><b>เบอร์โทรศัพท์</b></th>
    <td><?= $r["4"];?>
    <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit6"><span class="glyphicon glyphicon-edit"></span> Edit<a>
  </td>
  </tr>
  <tr>
    <th><b>ไลด์ไอดี</b></th>
    <td><?= $r["6"];?>
    <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit7"><span class="glyphicon glyphicon-edit"></span> Edit<a>
  </td>
  </tr>
  <tr>
    <th><b>เฟสบุ๊ค</b></th>
    <td><?= $r["7"];?>
    <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit8"><span class="glyphicon glyphicon-edit"></span> Edit<a>
  </td>
  </tr>
  <tr>
    <th><b>ที่อยู่ปัจจุบัน</b></th>
    <td><?= $r["10"];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit9"><span class="glyphicon glyphicon-edit"></span> Edit<a> </td>
  </tr>
  <tr>
    <td colspan="2" class="success"><b>ข้อมูลการศึกษา</b></td>
  </tr>
  <tr>
    <th><b>ปีที่เข้าศึกษา</b></th>
    <td><?=$r["27"];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit10"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>ปีที่สำเร็จการศึกษา</b></th>
    <td><?=$r["28"];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit11"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>สถานะการศึกษา</b></th>
    <? if($r[25]=="lerning"){ ?>
             <td><span class="label label-info">กำลังการศึกษา</span> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit12"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
           <? }
           else if($r[25]=="Graduation")
           { ?>
             <td><span class="label label-success">สำเร็จการศึกษา</span> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit12"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
           <? }
          else if($r[25]=="Deprived") { ?>
            <td><span class="label label-danger">พ้นสภาพ</span><a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit12"><span class="glyphicon glyphicon-edit"></span> Edit<a>  
   <a type="button" class="btn btn-info btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit25"> พ้นสภาพนักศึกษา<a> </td>
          <? }
          else { ?>
            <td><a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit12"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
          <?} ?>
          
    </td>
  </tr>
  <tr>
    <th><b>อาจารย์ที่ปรึกษา</b></th>
    <td><? echo $r[username]." ".$r[lastname];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit13"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>เกรดเฉลี่ยปัจจุบัน</b></th>
    <td><?=$r[24];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit14"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>หน่วยกิจสะสม</b></th>
    <td><?=$r[31];?> หน่วยกิต <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit15"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <td colspan="2" class="success"><b>ข้อมูลสถานศึกษาเดิม</b></td>
  </tr>
  <tr>
    <th><b>ชื่อสถานศึกษาเดิม</b></th>
    <td><?echo $r[14];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit16"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>ระดับการศึกษา</b></th>
    <td><? echo $r["15"];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit17"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>สาขาวิชา</b></th>
    <td><? echo $r["16"];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit18"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>เกรดเฉลี่ย</b></th>
    <td><? echo $r["18"];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit19"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>จังหวัด</b></th>
    <td><? echo $r["17"];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit20"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <td colspan="2" class="success"><b>ข้อมูลผู้ปกครอง</b></td>
  </tr>
  <tr>
    <th><b>ชื่อ นามสกุล</b></th>
    <td><? echo $r["19"]." ".$r['20'];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit21"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>มีสถานะเป็น</b></th>
    <td><? echo $r["21"];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit22"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>เบอร์โทรศัพท์</b></th>
    <td><? echo $r["22"];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit23"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
  <tr>
    <th><b>ที่อยู่ปัจจุบัน</b></th>
    <td><? echo $r["23"];?> <a type="button" class="btn btn-primary btn-xs" style="float:right; margin:0;" 
  data-toggle="modal" data-target="#edit24"><span class="glyphicon glyphicon-edit"></span> Edit<a></td>
  </tr>
</tbody>
</table>
<br><br>
</div>
<form action="editmember.php" name="form1" method="post">
  <input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">ชื่อ</label>
       <input type="text" name="fname" class="form-control is-valid" value="<?= $r["1"]; ?>" id="inputValid">
     </div>
     <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">นามสกุล</label>
       <input type="text" name="lname" class="form-control is-valid" value="<?= $r["2"]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit1" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>

<form action="editmember.php" name="form2" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit2" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">รหัสนักศึกษา</label>
       <input type="text" name="member" class="form-control is-valid" value="<?= $r["0"]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit2" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form3" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit3" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">รหัสประจำตัวประชาชน</label><br><br>
       <input type="text" name="idcard" class="form-control is-valid" value="<?= $r["idcard"]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit3" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form4" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit4" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">เกิดวันที่</label><br>
       <input type="text" name="birthday" class="form-control is-valid" value="<?= $r["birthday"]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit4" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form5" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit5" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">อีเมล</label><br>
       <input type="text" name="email" class="form-control is-valid" value="<?= $r[5]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit5" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form6" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit6" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">เบอร์โทรศัพท์</label><br>
       <input type="text" name="phone" class="form-control is-valid" value="<?= $r[4]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit6" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form7" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit7" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">ไลด์ไอดี</label><br>
       <input type="text" name="lineid" class="form-control is-valid" value="<?= $r[6]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit7" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form8" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit8" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">เฟสบุ๊ค</label><br>
       <input type="text" name="facebook" class="form-control is-valid" value="<?= $r[7]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit8" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form9" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit9" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">ที่อยู่ปัจจุบัน</label><br>
       <input type="text" name="address" class="form-control is-valid" value="<?= $r[10]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit9" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form10" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit10" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">ปีที่เข้าศึกษา</label><br>
       <input type="text" name="checkin" class="form-control is-valid" value="<?= $r[27]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit10" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form11" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit11" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">ปีที่สำเร็จการศึกษา</label><br>
       <input type="text" name="checkout" class="form-control is-valid" value="<?= $r[28]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit11" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>


<form action="editmember.php" name="form12" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit12" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <div class="form-group">
      <label for="exampleSelect1">สถานะการศึกษา</label>
      <select class="form-control" name="status">
        <option value="lerning">กำลังศึกษา</option>
        <option value="Graduation">สำเร็จการศึกษา</option>
        <option value="Deprived">พ้นสภาพ</option>
      </select>
    </div>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit12" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form13" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit13" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
      <?
        $teaCher1 = "teacher";
        $teaCher2 = "teachercpr";
        $sql = "SELECT * FROM member WHERE user_type = '$teaCher1' OR user_type = '$teaCher2'";
        $query = mysqli_query($con,$sql);
         ?>
       <div class="form-group">
      <label for="exampleSelect1">อาจารย์ที่ปรึกษา</label>
      <select class="form-control" name="contact" id="select">
      <?
           while($row = mysqli_fetch_array($query))
           {
           ?>
        <option value="<? echo $row['member_id'];?>"><? echo $row[username]." ".$row[lastname];?></option>
          <? } ?>
      </select>
    </div>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit13" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>


<form action="editmember.php" name="form14" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit14" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">เกรดเฉลี่ยปัจจุบัน</label><br>
       <input type="text" name="gpa" class="form-control is-valid" value="<?= $r[24]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit14" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form15" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit15" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">หน่วยกิจสะสม</label><br>
       <input type="text" name="somecredit" class="form-control is-valid" value="<?= $r[31]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit15" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form16" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit16" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">ชื่อสถานศึกษาเดิม</label><br>
       <input type="text" name="oldschool" class="form-control is-valid" value="<?= $r[14]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit16" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form17" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit17" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">ระดับการศึกษา</label><br>
       <input type="text" name="leveledu" class="form-control is-valid" value="<?= $r[15]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit17" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form18" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit18" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">สาขาวิชา</label><br>
       <input type="text"  name="branch" class="form-control is-valid" value="<?= $r[16]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit18" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form19" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit19" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">เกรดเฉลี่ย</label><br>
       <input type="text" name="oldgpa"  class="form-control is-valid" value="<?= $r[18]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit19" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form20" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit20" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">จังหวัด</label><br>
       <input type="text" name="province"  class="form-control is-valid" value="<?= $r[17]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit20" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form21" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit21" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">ชื่อ</label>
       <input type="text" name="prname" class="form-control is-valid" value="<?= $r[19]; ?>" id="inputValid">
     </div>
     <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">นามสกุล</label>
       <input type="text" name="prlastname" class="form-control is-valid" value="<?= $r[20]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit21" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form22" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit22" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">มีสถานะเป็น</label><br>
       <input type="text" name="prstatus" class="form-control is-valid" value="<?= $r[21]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit22" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form23" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit23" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">เบอร์โทรศัพท์</label><br>
       <input type="text" name="prphone" class="form-control is-valid" value="<?= $r[22]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit23" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form24" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit24" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">ที่อยู่ปัจจุบัน</label><br>
       <input type="text" name="praddress" class="form-control is-valid" value="<?= $r[23]; ?>" id="inputValid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit24" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
<form action="editmember.php" name="form25" method="post">
<input type="hidden" name="MemberID" value="<?= $r[0]?>">
<div class="modal fade" id="edit25" tabindex="-1" role="dialog" aria-labelledby="edit2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> 
      <div class="modal-body">
      <div class="form-group has-success">
       <label class="form-control-label" for="inputSuccess1">ปีการศึกษาที่พ้นสภาพ</label><br>
       <input type="text" name="resign" class="form-control is-valid">
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="edit32" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>
</form>
</div>
</body>
</html>
