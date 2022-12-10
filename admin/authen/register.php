<?php
 session_start();
    require_once('..\..\utils\utility.php');
    require_once('..\..\database\dbhelper.php');
    require_once('process_form_register.php');
    
     $user = getUserToken();
    if($user != null){
    	header('Location:../');
    	die();
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registation Form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary" style="margin: 0px auto; margin: 250px;">
			<div class="panel-heading">
				<h2 class="text-center">Đăng ký tài khoản</h2>
				<h5 class="text-center" style="color: red">
					<?=$msg?>
				</h5>
			</div>
			<div class="panel-body">
				<form method="post" onsubmit="return validateForm();">
					<div class="form-group">
				  <label for="usr">Họ và Tên</label>
				  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$fullname?>">
				</div>
				<div class="form-group">
				  <label for="email">Email</label>
				  <input required="true" type="email" class="form-control" id="email" name="email" value="<?=$email?>">
				</div>
				<div class="form-group">
				  <label for="pwd">Mật khẩu</label>
				  <input required="true" type="password" class="form-control" id="pwd" name="password" minlength="6">
				</div>
				<div class="form-group">
				  <label for="confirmation_pwd">Nhập lại mật khẩu</label>
				  <input required="true" type="password" class="form-control" id="confirmation_pwd" minlength="6">
				</div>
				<p>
					<a href="login.php">Tôi đã có tài khoản</a>
				</p>
				<button class="btn btn-success">Đăng ký</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function validateForm() {
			// body...
			$pwd = $('#pwd').val();
			$confirmPwd = $('#confirmation_pwd').val();
			if($pwd != $confirmPwd){
				alert("Mật khẩu không khớp , vui lòng kiểm tra lại");
				return false
			}
			return true
		}
		
	</script>
</body>
</html>