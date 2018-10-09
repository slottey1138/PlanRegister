function fncSubmit()
{

	if(document.form1.txtStudentID.value == "")
	{
		alert('โปรดใส่รหัสประจำตัว');
		document.form1.txtStudentID.focus();
		return false;
	}

	if(document.form1.txtPassword.value == "")
	{
		alert('โปรดใส่รหัสผ่าน');
		document.form1.txtPassword.focus();
		return false;
	}

	if(document.form1.txtConPassword.value == "")
	{
		alert('โปรดยืนยันรหัสผ่าน');
		document.form1.txtConPassword.focus();
		return false;
	}

	if(document.form1.txtPassword.value != document.form1.txtConPassword.value)
	{
		alert('รหัสผ่านไม่ตรงกัน');
		document.form1.txtConPassword.focus();
		return false;
	}
  if(document.form1.txtName.value == "")
	{
		alert('โปรดใส่ชื่อ');
		document.form1.txtName.focus();
		return false;
	}
  if(document.form1.txtLastname.value == "")
	{
		alert('โปรดใส่นามสกุล');
		document.form1.txtLastname.focus();
		return false;
	}
  if(document.form1.txtEmail.value == "")
	{
		alert('โปรดใส่อีเมล');
		document.form1.txtEmail.focus();
		return false;
	}
  if(document.form1.txtPhone.value == "")
	{
		alert('โปรดใส่เบอร์โทรศัพท์');
		document.form1.txtPhone.focus();
		return false;
	}

	document.form1.submit();
}
