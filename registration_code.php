<!--
Here, we write code for registration.
-->
<?php
require_once('connection.php');
$fname = $lname = $gender = $email = $password = $pwd = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$regex = '/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-zA-Z]).{8,}$/';
if (!preg_match($regex, $pwd)) {
	echo '<script>
	alert("Password should contain minimum 8 characters, atleast one special character and one number");
	window.location.href = "register.php";
	</script>';
	return;
}

$sql = "SELECT * FROM tbluser WHERE Email = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	echo '<script>
	alert("Email is already registered");
	window.location.href = "register.php";
	</script>';
	return;
}

try {

	$sql = "INSERT INTO tbluser (Firstname,Lastname,Gender,Email,Password) VALUES ('$fname','$lname','$gender','$email','$password')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		header("Location: login.php");
	} else {
		echo $result;
	}
} catch (Exception $err) {
	echo $err;
}

?>