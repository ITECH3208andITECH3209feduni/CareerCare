<?php include("connection.php") ?>
<?php include("includes/header.php") ?>
<?php




if (!isset($_SESSION["adminemail"]) && empty($_SESSION['adminemail'])) {
	header("Location: index.php");
} ?>

<style>
	.switch_btn {
		background: none;
		cursor: pointer;
		outline: none;
		border: none;
		border-bottom: 2px solid black;
		font-size: 25px;
		font-weight: 500;
		transition: all 0.2s linear;
		padding: 5px 20px;
		color: black;
	}

	.switch_btn.active {
		color: #fb246a;
		border-color: #fb246a;
	}

	.switch_btn:hover {
		text-decoration: none;
		color: #fb246a;
		border-color: #fb246a;
	}
</style>



<div class="container">

	<div class="d-flex mb-5">
		<?php
		if (isset($_GET['tab']) && $_GET["tab"] == "recruiters") {
			echo '<a href="admindata.php?tab=users" class="switch_btn">Users</a>
					<a href="admindata.php?tab=recruiters" class="switch_btn active">Recruiters</a>';
		} else {
			echo '<a href="admindata.php?tab=users" class="switch_btn active">Users</a>
					<a href="admindata.php?tab=recruiters" class="switch_btn">Recruiters</a>';
		}
		?>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>

				<th scope="col">ID</th>
				<th scope="col">Firstname</th>
				<th scope="col">Lastname</th>
				<th scope="col">Email</th>
				<th scope="col">Gender</th>
				<th scope="col">Edit</th>
				<th scope="col">Delete</th>
				<th scope="col">Ban</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "";
			if (isset($_GET['tab']) && $_GET["tab"] == "recruiters") {
				$sql = "SELECT * FROM tblrecruiter";
			} else {
				$sql = "SELECT * FROM tbluser";
			}
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {


			?>
					<tr>
						<td scope="row"><?php echo $row['ID'] ?></td>
						<td><?php echo $row['Firstname'] ?></td>
						<td><?php echo $row['Lastname'] ?></td>
						<td><?php echo $row['Email'] ?></td>
						<td><?php echo $row['Gender'] ?></td>
						<td>
							<a class="text-primary" href="updatedata.php?role=<?php echo isset($_GET['tab']) && $_GET['tab'] == "recruiters" ? "recruiter" : "user" ?>&id=<?php echo $row['ID'] ?>">Edit</a>
						</td>
						<td>
							<a class="text-primary" href="includes/delete_profile.php?role=<?php echo isset($_GET['tab']) && $_GET['tab'] == "recruiters" ? "recruiter" : "user" ?>&id=<?php echo $row['ID'] ?>">Delete</a>
						</td>
						<td>
							<?php if ($row['status'] == "banned") {
								echo '
								<a class="text-primary" href="includes/ban_user.php?role=';
								echo isset($_GET['tab']) && $_GET['tab'] == "recruiters" ? "recruiter" : 'user';
								echo '&status=active&id=' . $row['ID'] . '">Unban</a>';
							} else {
								echo '
									<a class="text-primary" href="includes/ban_user.php?role=';
								echo isset($_GET['tab']) && $_GET['tab'] == "recruiters" ? "recruiter" : 'user';
								echo '&status=banned&id=' . $row['ID'] . '">Ban</a>';
							} ?>
						</td>
					</tr>
			<?php
				}
			} ?>
		</tbody>
	</table>
</div>
<?php include("includes/footer.php") ?>