<?php include("includes/header.php") ?>

<?php
if (!isset($_GET["id"])) {
    header("Location: index.php");
}
include("connection.php");
$sql = "SELECT * FROM jobs WHERE id=" . $_GET["id"];
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) < 1) {
    header("Location: index.php");
}
$row = mysqli_fetch_assoc($result);
?>

<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php echo $row["title"] ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="job-tittle">
                                <a href="#">
                                    <h4><?php echo $row["title"] ?></h4>
                                </a>
                                <ul>
                                    <li><?php echo $row["company_name"] ?></li>
                                    <li>$<?php echo $row["salary"] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p><?php echo $row['description'] ?></p>
                        </div>

                    </div>
                    <div class="apply-btn2">
                        <a href="includes/apply_job.php?id=<?php echo $row['id'] ?>&recruiter=<?php echo $row['recruiter'] ?>" class="btn">Apply Now</a>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Company Information</h4>
                        </div>
                        <span><?php echo $row["company_name"] ?></span>
                        <p><?php echo $row['company_description'] ?></p>
                        <ul>
                            <li>Name: <span><?php echo $row["company_name"] ?> </span></li>
                            <li>Email: <span><?php echo $row["company_email"] ?></span></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->

</main>

<?php include("includes/footer.php") ?>