<?php session_start();?>
<?php

if (!$_SESSION["UserID"]){  //check session

	  Header("Location: ../../homepage.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form

}?>
