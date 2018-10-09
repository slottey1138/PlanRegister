<html>
  <head>
  <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <title></title>
  </head>
  <body>
  <? include("connect.php") ?>
  <? include("navbar.html");?>
<?
if($_POST){
	$rolename = $_POST[rolename];
	if(strlen($rolename)==0) $rolename = "role".rand(1000,9999);
	$m1 = 1;
	$m2 = intval($_POST[m2]);
	$m3 = intval($_POST[m3]);
  $m4 = intval($_POST[m4]);
  $m5 = intval($_POST[m5]);
  $m6 = intval($_POST[m6]);
  $m7 = intval($_POST[m7]);
  $m8 = intval($_POST[m8]);
  $m9 = intval($_POST[m9]);
  $m10 = intval($_POST[m10]);
  $m11 = intval($_POST[m11]);
  $m12 = intval($_POST[m12]);
  $m13 = intval($_POST[m13]);
  $sql = "insert into roles(rolename,m1,m2,m3,m4,m5,m6,m7,m8,m9,m10,m11,m12,m13) 
  values('$rolename',$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10,$m11,$m12,$m13)";
	$obj = mysqli_query($con,$sql) or die (mysqli_error());
	echo "<h2><font color=blue>บันทึกข้อมูลเรียบร้อย</font></h2>";
}
mysqli_close($con);
?>
<div class="container">
  <form method="post" name="form1">
    <legend>เพิ่มข้อมูลสิทธิ์</legend>
  <table width="700" border="0" align="center" cellpadding="1" cellspacing="0">
      <td width="143">ชื่อสิทธิ์</td>
      <td width="553"><input name="rolename" type="text" id="rolename" /></td>
    </tr>
    <tr>
      <td>หน้าโปรไฟล์</td>
      <td><input name="m1" type="checkbox" id="m1" value="1" /></td>
    </tr>
    <tr>
      <td>ผลการเรียน</td>
      <td><input name="m2" type="checkbox" id="m2" value="1" /></td>
    </tr>
    <tr>
      <td>ลงทะเบียน</td>
      <td><input name="m3" type="checkbox" id="m3" value="1" /></td>
    </tr>
    <tr>
      <td>สหกิจฯ</td>
      <td><input name="m4" type="checkbox" id="m4" value="1" /></td>
    </tr>
    <tr>
      <td>หลักสูตร</td>
      <td><input name="m5" type="checkbox" id="m5" value="1" /></td>
    </tr>
    <tr>
      <td>ข้อมูลอาจารย์</td>
      <td><input name="m6" type="checkbox" id="m6" value="1" /></td>
    </tr>
    <tr>
      <td>ตอบแบบสอบถาม</td>
      <td><input name="m7" type="checkbox" id="m6" value="1" /></td>
    </tr>
    <tr>
      <td>ข้อมูลนักศึกษา</td>
      <td><input name="m8" type="checkbox" id="m6" value="1" /></td>
    </tr>
    <tr>
      <td>ผลการเรียนนักศึกษา</td>
      <td><input name="m9" type="checkbox" id="m6" value="1" /></td>
    </tr>
    <tr>
      <td>ผลการลงทะเบียน</td>
      <td><input name="m10" type="checkbox" id="m6" value="1" /></td>
    </tr>
    <tr>
      <td>สถิตินักศึกษา</td>
      <td><input name="m11" type="checkbox" id="m6" value="1" /></td>
    </tr>
    <tr>
      <td>นักศึกษาขอไปสกิจฯ</td>
      <td><input name="m12" type="checkbox" id="m6" value="1" /></td>
    </tr>
    <tr>
      <td>วิชาบังคับสหกิจฯ</td>
      <td><input name="m13" type="checkbox" id="m6" value="1" /></td>
    </tr>
    <tr>
      <td colspan="2"> <p>&nbsp;
        </p>
        <p>
          <input name="Submit" type="submit" class="btn btn-success" value="บันทึก"  />
          </p></td>
      </tr>
  </table>
  </form>
  </body>
</html>