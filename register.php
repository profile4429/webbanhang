<?php

    require_once('layouts/header.php');

    
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trang Chu</title>
  <!--new-->
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- app css -->
    <link rel="stylesheet" href="./assets/css/grid.css">
    <link rel="stylesheet" href="./assets/css/app.css">
    <!--end new-->
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  
  height: 100%;
  width: 100%;
  place-items: center;
  background: #f2f2f2;
  /* background: linear-gradient(-135deg, #c850c0, #4158d0); */
}
::selection{
  background: #4158d0;
  color: #fff;
}
.wrapper{
  margin-left:350px ;
  margin-top: 20px;
  margin-bottom: 20px;
  width: 680px;
  background: #fff;
  border-radius: 15px;

}
.wrapper .title{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: #fff;
  user-select: none;
  border-radius: 15px 15px 0 0;
  background: black;
}
.wrapper form{
  padding: 10px 30px 50px 30px;
}
.wrapper form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  position: relative;
}
.wrapper form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
}
.wrapper form .field input:focus,
form .field input:valid{
  border-color: #4158d0;
}
.wrapper form .field label{
  position: absolute;
  top: 50%;
  left: 20px;
  color: #999999;
  font-weight: 400;
  font-size: 17px;
  pointer-events: none;
  transform: translateY(-50%);
  transition: all 0.3s ease;
}
form .field input:focus ~ label,
form .field input:valid ~ label{
  top: 0%;
  font-size: 16px;
  color: #4158d0;
  background: #fff;
  transform: translateY(-50%);
}
form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}
form .content input{
  width: 15px;
  height: 15px;
  background: red;
}
form .content label{
  color: #262626;
  user-select: none;
  padding-left: 5px;
}
form .content .pass-link{
  color: "";
}
form .field input[type="submit"]{
  color: #fff;
  border: none;
  padding-left: 0;
  margin-top: -10px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  background: black;
  transition: all 0.3s ease;
}
form .field input[type="submit"]:active{
  transform: scale(0.95);
}
form .signup-link{
  color: #262626;
  margin-top: 20px;
  text-align: center;
}
form .pass-link a,
form .signup-link a{
  color: #4158d0;
  text-decoration: none;
}
form .pass-link a:hover,
form .signup-link a:hover{
  text-decoration: underline;
}
    </style>
</head>
<body>
  <div class="container">
    
<div class="wrapper">
         <div class="title">
            ????ng K?? T??i Kho???n
         </div>
         <form method="post" action="process_form_register.php" onsubmit="return validateForm();">
            <div class="field">
               <input type="text" required name="fullname">
               <label>H??? v?? T??n</label>
            </div>
            <div class="field">
               <input type="text" required name="email">
               <label>Email</label>
            </div>
            <div class="field">
               <input type="tel" required name="phone_number">
               <label>S??? ??i???n Tho???i</label>
            </div>
            <div class="field">
               <input type="password" required  id ="pwd" name="password" minlength="6">
               <label>M???t Kh???u</label>
            </div>
            <div class="field">
               <input type="password" required id="confirmation_pwd" minlength="6">
               <label>Nh???p l???i m???t kh???u</label>
            </div>
            <div class="field">
               <input type="submit" value="????ng K??">
            </div>
            <div class="signup-link">
               ???? c?? t??i kho???n? <a href="login.php">????ng Nh???p</a>
            </div>
         </form>
      </div>
  </div>

</body>
</html>

<script type="text/javascript">
    function validateForm() {
      // body...
      $pwd = $('#pwd').val();
      $confirmPwd = $('#confirmation_pwd').val();
      if($pwd != $confirmPwd){
        alert("M???t kh???u kh??ng kh???p , vui l??ng ki???m tra l???i");
        return false
      }
      return true
    }
    
  </script>

<?php 
require_once('layouts/footer.php');
 ?>
<!-- footer -->
