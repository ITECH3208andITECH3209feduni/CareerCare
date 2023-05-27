<?php
include("includes/header.php");
include("connection.php");

?>

<style>
	li a:hover {
		background-color: lightgray;


	}
</style>


<div id="carousel-example-generic" class="carousel slide " data-ride="carousel">

	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="pt1.png" class="w-100 pin" alt="First slide">
		</div>
		<div class="carousel-item">
			<img src="pt2.jpg" class="w-100 pin" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img src="pt3.jpg" class="w-100 pin" alt="Third slide">
		</div>
	</div>
	<a href="#carousel-example-generic" class="carousel-control-prev" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a href="#carousel-example-generic" class="carousel-control-next" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>



<style type="text/css">
	.pin {
		height: 500px;
	}
</style>

<div class="container-fluid py-4" style="background-color: white;">
	<div class="row">
		<?php
		$sql = "SELECT * FROM jobs LIMIT 3";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$r_id = $row['recruiter'];
				$sql2 = "SELECT Firstname, Lastname FROM tblrecruiter WHERE ID=$r_id";
				$result2 = mysqli_query($conn, $sql2);
				if (mysqli_num_rows($result2) > 0) {
					$r = mysqli_fetch_row($result2);
		?>
					<div class="col-md-4 my-2">
						<div class="job-card p-4">
							<h2 class="recruiter-name px-4 py-3 my-3"><?php echo $r[0] . ' ' . $r[1] ?></h2>
							<div class="pb-3">
								<h4 class="job-title"><?php echo $row['title'] ?></h4>
								<span class="job-salary">$1912</span>
							</div>
							<p class="job-desc">
								<?php echo $row['description'] ?>
							</p>
							<div class="mb-4">
								<a href="includes/apply_job.php?id=<?php echo $row['id'] ?>&recruiter=<?php echo $row['recruiter'] ?>" class="apply-btn">Apply</a>
							</div>

						</div>
					</div>
		<?php 	}
			}
		} ?>
	</div>
</div>


<style type="text/css">
	.ho:hover {
		background-color: lightgray;
	}
</style>
<?php include("includes/footer.php") ?>