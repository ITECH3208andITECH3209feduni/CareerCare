<?php include("includes/header.php") ?>
<style>
	li a:hover {
		background-color: lightgray;


	}
</style>



<br>
<br>
<br>
<br>

<?php

include_once('header1.php');
require_once('connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID='$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		$fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$gender = $row["Gender"];
	}
}

?>
<div class="jumbotron">
	<center>
		<h1>Welcome <?php echo $fname . " " . $lname; ?></h1>
		<hr>
		<?php echo $email; ?><br><a href="logout.php">Logout</a>
		<a class="ml-5" href="updatedata.php?id=<?php echo $_SESSION['id'] ?>&role=user">Update Profile</a>
		<a class="ml-5" href="applied_jobs.php">Applied Jobs</a>
		<hr>
	</center>
</div>


<style type="text/css">
	.ho:hover {
		background-color: lightgray;
	}
</style>

<?php include("includes/footer.php") ?>