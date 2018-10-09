<?
include("connect.php");
if(isset($_POST["AddTeacherCpr"])){
$member = $_POST[member_id];
$type = "teachercpr";
$sql = "update member set user_type = '$type' where member_id='$member'";
$query = mysqli_query($con,$sql);
if($query){
    echo "<script>location='teacher-cpr.php'</script>";
}
else{
    echo "Error";
}
}
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title>อาจารย์สหกิจ ฯ</title>
  </head>
  <body>
     <? include("navbar.html");?>
     <div class="container col-md-10 col-md-offset-1">
     <button type="button" class="btn btn-primary" style="float:right;" data-toggle="modal" data-target="#exampleModalCenter">
  เพิ่มอาจารย์สหกิจฯ</button>
       <legend>รายชื่ออาจารย์สหกิจ</legend>
       <?
       $showth = "select * from member where user_type = '".'teachercpr'."'";
       $result=mysqli_query($con,$showth);
       ?>
       <div class="container" style="width: 200px"></div>
         <table class="table table-striped table-hover ">
           <thead>
             <tr class="success">
               <th class="col-md-5">ชื่อ - นามสกุล</th>
               <th class="col-md-4">รหัสประจำตัว</th>
               <th class="col-md-2">ดูรายละเอียด</th>
               <th class="col-md-1">ลบ</th>
             </tr>
           </thead>
           <?
          while($row = mysqli_fetch_array($result))
          {
          ?>
           <tbody>
             <tr>
               <td> <? echo $row['username']." ".$row['lastname'];?></td>
               <td> <? echo $row['member_id'];?></td>
               <td><a href="detail-teachercpr.php?member_id=<?php echo $row["member_id"];?>" class="btn btn-info btn-sm">ดูรายละเอียด</a></td>
               <td><a href="delteacher-cpr.php?member_id=<?php echo $row["member_id"];?>" class="btn btn-danger btn-sm">ลบ</a></td>
             </tr>
           </tbody>
           <?php } ?>
         </table>
     </div>
     <form action="" method="post">
     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
      <legend>เลือกอาจารย์</legend>
        <?
        $sql = "select*from member where user_type='".'teacher'."'";
        $query = mysqli_query($con,$sql);
        ?>
        <select class="form-control col-md-3" name="member_id" id="select">
            <?
           while($r = mysqli_fetch_array($query))
           {
           ?>
          <option value="<?= $r['member_id'];?>"><?= $r['username']." ".$r['lastname'];?></option>
          <? } ?>
        </select><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
        <button type="submit" name="AddTeacherCpr" class="btn btn-primary">เพิ่ม</button>
      </div>
    </div>
  </div>
</div>
     </form>
  </body>
</html>
