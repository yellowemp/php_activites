<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>User List</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/design.css">
</head>
<body>
	<div class="container main-pos">
		<div class="col-xs-4 ">
			<h1> Login Page</h1>
			<form action="user.php" method="post">
				<div class="wrapper">
					<!-- Username password-->
					<div class="form-group after-space">
						<lable for="username">Username</lable>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<lable for="password">Password</lable>
						<input type="password" name="password" class="form-control">
					</div>
				</div>
				<!-- submit-->
				<input type="submit" name="submit" value="Login" class="btn btn-primary">
			</form>
		</div>
	</div>
</body>
</html>>

<?php
echo "Hello";
?>
