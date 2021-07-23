<?php

	$con = mysqli_connect($address, $username, $password, $dbaname);

		if(!$con) {
			die("Connection failed " . $con);
		}

	$sql = "INSERT INTO tbl_account (id, account, password, role, time_stamp) VALUES ('00000001', 'user1','user', 2, now())";

	$result = mysqli_query($con, $sql);
	if ($result) {
		echo "Success";
	} else {
		die('Query failed' . mysqli_error($con));
	}

?>

