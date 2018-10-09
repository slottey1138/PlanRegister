<? include("connect.php") ?>
<? include("navbar.html") ?>

<?
if($_POST){
	$RolesID = $_GET[RolesID];
	$rolename = $_POST[rolename];
	if(strlen($rolename)==0) $rolename = "role".rand(1000,9999);
	$m1 = intval($_POST[m1]);
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
  $m14 = intval($_POST[m14]);
  $sql = "update  roles set rolename='$rolename',m1=$m1,m2=$m2,m3=$m3,m4=$m4,m5=$m5,m6=$m6,
  m7=$m7,m8=$m8,m9=$m9,m10=$m10,m11=$m11,m12=$m12,m13=$m13, m14=$m14 where RolesID=$RolesID";
	mysqli_query($con,$sql) or die (mysqli_error());
	echo "<h2><font color=blue>บันทึกข้อมูลเรียบร้อย</font></h2>";
}

$RolesID = $_GET[RolesID];
$sql = "select * from roles where RolesID=$RolesID";
$obj = mysqli_query($con,$sql) or die (mysqli_error());
if($r = mysqli_fetch_array($obj)) {
	$RolesID = $r[RolesID];
	$rolename = $r[rolename];
	$m1 = $r[m1];
	$m2 = $r[m2];
	$m3 = $r[m3];
  $m4 = $r[m4];
  $m5 = $r[m5];
  $m6 = $r[m6];
  $m7 = $r[m7];
  $m8 = $r[m8];
  $m9 = $r[m9];
  $m10 = $r[m10];
  $m11 = $r[m11];
  $m12 = $r[m12];
  $m13 = $r[m13];
  $m14 = $r[m14];
}
mysqli_close($con);
?>
<div align="left">
  <p>&nbsp;</p>
  <form method="post" name="form1">
  <table width="700" border="0" align="center" cellpadding="1" cellspacing="0">
    <tr>
      <td colspan="2" bgcolor="#0099CC">เพิ่มข้อมูลสิทธิ์</td>
      </tr>
    <tr>
      <td width="143">รหัส</td>
      <td width="553"><?=$RolesID ?></td>
    </tr>
    <tr>
      <td width="143">ชื่อสิทธิ์</td>
      <td width="553"><input name="rolename" type="text" id="rolename" value="<?=$rolename ?>" /></td>
    </tr>
    <tr>
      <td>หน้าโปรไฟล์</td>
      <td><input name="m1" type="checkbox" id="m1" value="1" <? if($m1==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td>ผลการเรียน</td>
      <td><input name="m2" type="checkbox" id="m2" value="1" <? if($m2==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td>ลงทะเบียน</td>
      <td><input name="m3" type="checkbox" id="m3" value="1" <? if($m3==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td>สหกิจฯ</td>
      <td><input name="m4" type="checkbox" id="m4" value="1" <? if($m4==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td>หลักสูตร</td>
      <td><input name="m5" type="checkbox" id="m5" value="1" <? if($m5==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td>ข้อมูลอาจารย์</td>
      <td><input name="m6" type="checkbox" id="m6" value="1" <? if($m6==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td>ตอบแบบสอบถาม</td>
      <td><input name="m7" type="checkbox" id="m6" value="1" <? if($m7==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td>ข้อมูลนักศึกษา</td>
      <td><input name="m8" type="checkbox" id="m6" value="1" <? if($m8==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td>ผลการเรียนนักศึกษา</td>
      <td><input name="m9" type="checkbox" id="m6" value="1" <? if($m9==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td>ผลการลงทะเบียน</td>
      <td><input name="m10" type="checkbox" id="m6" value="1" <? if($m10==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td>สถิตินักศึกษา</td>
      <td><input name="m11" type="checkbox" id="m6" value="1" <? if($m11==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td>นักศึกษาขอไปสกิจฯ</td>
      <td><input name="m12" type="checkbox" id="m6" value="1" <? if($m12==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td>วิชาบังคับสหกิจฯ</td>
      <td><input name="m13" type="checkbox" id="m6" value="1" <? if($m13==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td>ข้อมูลแบบสอบถาม</td>
      <td><input name="m14" type="checkbox" id="m6" value="1" <? if($m14==1) echo "checked" ?>/></td>
    </tr>
    <tr>
      <td colspan="2"> <p>&nbsp;
        </p>
        <p>
          <input name="Submit" type="submit"  value="บันทึก"  />
          </p></td>
      </tr>
  </table>
  </form>