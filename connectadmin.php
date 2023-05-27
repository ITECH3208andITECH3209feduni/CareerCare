<?php

session_start();

if (!empty($_SESSION)) {
	header("Location: admindata.php");
}

if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($email == "careercare@gmail.com" and $password == 54321) {
		session_unset();
		$_SESSION['adminemail'] = $email;
		header("Location: admindata.php");
	} else {
		echo "EMAILS OR PASSWORDS ARE NOT MATCHED!";
	}
}
?>
<br>
<a href="admin.php">Go Back</a>