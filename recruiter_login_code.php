<!--
Here, we write code for recruiter login.
-->
<?php

require_once('connection.php');
$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM tblrecruiter WHERE Email='$email' AND Password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row["ID"];
		$email = $row["Email"];
		$status = $row['status'];
		if ($status == "banned") {
			echo '
            <script>
            alert("Sorry you are banned!");
            window.location.href = "login.php";
            </script>
            ';
			return;
		}
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
		$_SESSION['role'] = 'recruiter';
	}
	header("Location: index.php");
} else {
	echo "<script>
	alert('Invalid email or password');
	window.location.href = 'login.php?role=recruiter'
	</script>";
}
?>