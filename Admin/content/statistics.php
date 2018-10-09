<?php
session_start();
include "connect.php";
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>หน้าหลัก</title>
  </head>
  <body>
    <? include("navbar.html");?>
    <div class="container col-md-12">
      <div class="container col-md-8 col-lg-offset-2">
        <legend>สถิตินักศึกษา</legend>
        <a href="" class="btn btn-info col-md-offset-10" data-toggle="modal" data-target="#add1">
        <span class="glyphicon glyphicon-plus"></span> เพิ่มปีการศึกษา</a><br><br>
        <?
        $sql = "SELECT*FROM statistics";
        $query = mysqli_query($con,$sql);
        ?>
        <table class="table table-striped table-hover ">
        <thead>
          <tr>
            <th class="active col-md-2">ปีการศึกษา</th>
            <th class="active col-md-2">เข้าศึกษา</th>
            <th class="active col-md-2">สำเร็จการศึกษา</th>
            <th class="active col-md-2">พ้นสภาพ</th>
            <th class="active col-md-1">ดูรายละเอียด</th>
            <th class="active col-md-1">ลบ</th>
          </tr>
        </thead>
        <?
        while($r=mysqli_fetch_array($query))
        {
        ?>
        <tbody>
        <?$Year = $r[Year];?>
         <tr>
         <td><?echo $Year?></td>
         <td><?
         $sql = "SELECT count(member_id) AS total FROM member WHERE checkin = $Year";
         $result = mysqli_query($con,$sql);
         $values = mysqli_fetch_assoc($result);
         $numCheckin = $values['total'];
         echo $numCheckin;
         ?></td>
         <td><?
         $sql = "SELECT count(member_id) AS total FROM member WHERE checkout = $Year";
         $result = mysqli_query($con,$sql);
         $values = mysqli_fetch_assoc($result);
         $numCheckout = $values['total'];
         echo $numCheckout;
         ?></td>
         <td>
         <?
         $sql = "SELECT count(member_id) AS total FROM member WHERE resign = $Year";
         $result = mysqli_query($con,$sql);
         $values = mysqli_fetch_assoc($result);
         $numResign = $values['total'];
         echo $numResign;
         ?>
         </td>
         <td><a class="btn btn-default" href="detail-statistic.php?Year=<?= $r[Year]?>">
         <span class="glyphicon glyphicon-search"></span> ดูรายละเอียด</a></td>
         <td align="center"><a href="JavaScript:if(confirm('ยืนยันการลบข้อมูล ?')==true){window.location=
         'del-year.php?Year=<? echo $r[Year];?>';}" class="btn btn-danger">ลบ</a></td>
         </tr>
        </tbody>
        <?}?>
        </table>
      </div>
    </div>
    <form action="insert.php" method="post">
    <div class="modal fade" id="add1" tabindex="-1" role="dialog" aria-labelledby="add1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-group">
      <label  class="col-lg-3 control-label">ปีการศึกษา</label>
      <div class="col-lg-9">
        <input type="text" class="form-control"  name="year" placeholder="ใส่ปีการศึกษา">
      </div>
      </div><br><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="addstat" class="btn btn-primary">ยืนยัน</button>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>

