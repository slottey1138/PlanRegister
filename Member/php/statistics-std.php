<? session_start();
require("checksession.php");
include("connect.php");
$sql = "SELECT * FROM statistics";
$query = mysqli_query($con,$sql);
?>
<html>
  <head>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>อาจารย์</title>
    <link rel="stylesheet" href="../css/bootstrap5.css">
    <link rel="stylesheet" href="../css/teacherstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
  </head>
  <body>
  <? include("navbar.php");?>
    <div class="container col-md-12">
      <div class="container col-md-12">
        <legend>สถิตินักศึกษา</legend>
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
            <th class="active col-md-2">ดูรายละเอียด</th>
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
