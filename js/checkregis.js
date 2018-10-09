function fncSubmit()
{

	if(document.form1.txtStudent-id.value == "")
	{
		alert('Please input Username');
		document.form1.txtStudent-id.focus();
		return false;
	}

	if(document.form1.txtPassword.value == "")
	{
		alert('Please input Password');
		document.form1.txtPassword.focus();
		return false;
	}

	if(document.form1.txtConpassword.value == "")
	{
		alert('Please input Confirm Password');
		document.form1.txtConpassword.focus();
		return false;
	}

	if(document.form1.txtPassword.value != document.form1.txtConpassword.value)
	{
		alert('Confirm Password Not Match');
		document.form1.txtConpassword.focus();
		return false;
	}

	if(document.form1.txtName.value == "")
	{
		alert('Please input Name');
		document.form1.txtName.focus();
		return false;
	}
  if(document.form1.txtLastname.value == "")
	{
		alert('Please input LastName');
		document.form1.txtName.focus();
		return false;
	}
  if(document.form1.txtEmail.value == "")
	{
		alert('Please input Email');
		document.form1.txtEmail.focus();
		return false;
	}
  if(document.form1.txtPhone.value == "")
	{
		alert('Please input Phone');
		document.form1.txtPhone.focus();
		return false;
	}
	document.form1.submit();
}
