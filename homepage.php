
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>เว็บแอพพลิเคชั่ยสนับสนุนการลงทะเบียน</title>
    <link rel="stylesheet" href="css/font.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style media="screen">
    body {
      margin: 0;
      padding: 0;
      background-image: url("photo5.jpg");
      background-size: cover;
      font-family: 'Kanit', sans-serif;
    }

    html {
      font-family: 'Kanit', sans-serif;
    }

    label, p,h4 {
      font-family: 'Kanit', sans-serif;
      font-size: 1.563em;
    }

    .text-head {
      width: 90%;
      height: 320px;
      background-color: none;
      margin-left: 5%;
    }

    .text1 {
      text-align: center;
      font-size: 4.375em;
      margin-top: 140px;
      color: #fff;
      font-family: 'Kanit', sans-serif;
    }

    .text2 {
      text-align: center;
      font-size: 3.125em;
      margin: 0;
      color: #fff;
      font-family: 'Kanit', sans-serif;
    }

    .text3 {
      text-align: center;
      font-size: 2.500em;
      margin: 0;
      color: #fff;
      font-family: 'Kanit', sans-serif;
    }

    .btn-login {
      width: 17%;
      height: 65px;
      font-size: 1.785em;
      font-family: 'Kanit', sans-serif;
      cursor: pointer;
      background-color: #0bbc84;
      border: none;
      color: #fff;
      margin-left: 31%;
      opacity: 0.8;
      padding: 10px 20px 10px 20px
    }

    .btn-login:hover {
      background-color: #10e09e;
      transition: .5s;
    }

    .btn-login2 {
      width: 100%;
      height: 45px;
      border: none;
      background-color: #0bbc84;
      color: #fff;
      font-size: 1.250em;
      margin-top: 20px;
      cursor: pointer;
      font-family: 'Kanit', sans-serif;
    }

    .btn-login2:hover {
      background-color: #10e09e;
      transition: .9s;
    }

    .input {
      font-size: 1.250em;
      font-family: 'Kanit', sans-serif;
    }

    .btn-register {
      background-color: #0bbc84;
      font-size: 1.785em;
      color: #fff;
      text-decoration: none;
      padding: 11px 51px 13px 51px;
    font-family: 'Kanit', sans-serif;
      opacity: 0.8;
      margin-left: 3%;
    }

    .btn-register:hover {
      background-color: #10e09e;
      transition: .5s;
    }

    </style>
  </head>
  <body>
    <div class="text-head">
      <p class="text1">ยินดีต้อนรับสู่</p>
      <p class="text2">เว็บแอพพลิเคชั่นสนับสนุนการลงทะเบียน</p>
      <p class="text3">คณะ วิศวกรรมคอมพิวเตอร์ มหาวิทยาลัยสยาม</p>
    </div>
    <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-success col-md-2 col-md-offset-4"><h4> <span class="glyphicon glyphicon-log-in"></span> เข้าสู่ระบบ</h4></button>
   <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
    <div class="w3-center"><br>
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright"
      title="Close Modal">&times;</span>
      <img src="user3.jpg" alt="Avatar" style="width:20%" class="w3-circle w3-margin-top">
    </div>
    <form class="w3-container" action="checklogin.php" method="post">
      <div class="w3-section">
        <label><b>Username</b></label>
        <input class="w3-input w3-border input" type="text" placeholder="Enter Username" name="txtusername" required>
        <label><b>Password</b></label>
        <input class="w3-input w3-border input" type="password" placeholder="Enter Password" name="txtpassword" required>
        <button class="btn-login2" type="submit">เข้าสู่ระบบ</button><br>
      </div><br>
    </form>
  </div>
</div>
&nbsp;<a href="register.php" class="btn btn-success col-md-2"><h4><span class="glyphicon glyphicon-pencil"></span> สมัครสมาชิก</h4></a>
  </body>
</html>
