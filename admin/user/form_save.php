<?php

if(!empty($_POST)){
	$id = getPost('id');
	

	$fullname = getPost('fullname');
	$email = getPost('email');
	$phone_number = getPost('phone_number');
	$address = getPost('address');
	$password = getPost('password');
	if($password != ''){
		$password = getSecurityMD5($password);
	}
	
    $created_at = $updated_at = date("Y-m-d H:i:s");

	$role_id = getPost('role_id');


     if($id >0){
     	//update

    $sql = "select * from user where email='$email' and id <> $id";
    $userItem = executeResult($sql,true);

    if($userItem != null){
    	$msg = 'Email da ton tai trong he thong';

    }else{
    	if($password !=''){
     		$sql = "update user set fullname = '$fullname',email = '$email',phone_number='$phone_number',address = '$address', password='$password',updated_at='$updated_at',role_id = '$role_id' where id=$id";
     	}else{
     		$sql = "update user set fullname = '$fullname',email = '$email',phone_number='$phone_number',address = '$address', updated_at='$updated_at',role_id = '$role_id' where id=$id";
     	}
     	execute($sql);
     	header('Location: index.php');
    die();
    }
     	
     }else{
     	//insert
     	 $sql = "select * from user where email='$email'";
    $userItem = executeResult($sql,true);
     	 if($userItem == null){
    	$sql = "insert into user(fullname,email,phone_number,address,password,role_id,created_at,updated_at,deleted) values('$fullname','$email','$phone_number','$address','$password','$role_id','$created_at','$updated_at',0)";
    	execute($sql);
    header('Location: index.php');
    die();
    }else{
    	$msg = 'Email da duoc dang ky,vui long kiem tra lai';
    }
    

     }



}





?>