<?php
if (!empty($_POST)) {
	// code...
	$id = getPost("id");
	$name = getPost("name");
	if ($id >0) {
		// code...
		$sql = "update category set name='$name' where id = '$id'";
		execute($sql);

	}else{
		$sql = "insert into category(name) values('$name')";
		execute($sql);
	}
}