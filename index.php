<?php include("./includes/header.php") ?>
<?php include("connection.php") ?>

<main>
    <!-- slider Area Start-->
    <div class="slider-area">
        <!-- Mobile Menu -->
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <h1>Find the most exciting startup jobs</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Featured_job_start -->
    <section class="featured-job-area feature-padding">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center">
                        <span>Recent Job</span>
                        <h2>Featured Jobs</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">

                    <?php
                    $sql = "SELECT * FROM jobs LIMIT 3";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <!-- single-job-content -->
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="job-tittle">
                                        <a href="job_details.php?id=<?php echo $row["id"] ?>">
                                            <h4><?php echo $row["title"] ?></h4>
                                        </a>
                                        <ul>
                                            <li><?php echo $row['company_name'] ?></li>
                                            <li>$<?php echo $row["salary"] ?></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link f-right">
                                    <a href="job_details.php?id=<?php echo $row["id"] ?>">Full Time</a>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured_job_end -->
    <!-- How  Apply Process Start-->
    <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle white-text text-center">
                        <span>Apply process</span>
                        <h2>How it works</h2>
                    </div>
                </div>
            </div>
            <!-- Apply Process Caption -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-search"></span>
                        </div>
                        <div class="process-cap">
                            <h5>1. Search a job</h5>
                            <!--<p>
                                Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod
                                tempor incididunt ut laborea.
                            </p>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-curriculum-vitae"></span>
                        </div>
                        <div class="process-cap">
                            <h5>2. Apply for job</h5>
                            <!--<p>
                                Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod
                                tempor incididunt ut laborea.
                            </p>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-process text-center mb-30">
                        <div class="process-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="process-cap">
                            <h5>3. Get your job</h5>
                            <!--<p>
                                Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod
                                tempor incididunt ut laborea.
                            </p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- How  Apply Process End-->
    <!-- Testimonial Start -->
    <div class="testimonial-area testimonial-padding">
        <div class="container">
            <!-- Testimonial contents -->
            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="h1-testimonial-active dot-style">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-30">
                                        <img src="assets/img/testmonial/testimonial-founder.png" alt="" />
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>
                                        "I couldn't be happier with my experience on Career Care. It's a game-changing platform that connects professionals with incredible job opportunities. Thanks to Career Care, I found my dream job and took my career to new heights. Highly recommended for anyone looking to make their next career move!"
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-30">
                                        <img src="assets/img/testmonial/testimonial-founder.png" alt="" />
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>
                                        "Career Care has been an absolute game-changer for my career. The user-friendly interface and extensive job listings helped me find my dream job in no time. Highly recommended!"
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption">
                                <!-- founder -->
                                <div class="testimonial-founder">
                                    <div class="founder-img mb-30">
                                        <img src="assets/img/testmonial/testimonial-founder.png" alt="" />
                                        <span>Margaret Lawson</span>
                                        <p>Creative Director</p>
                                    </div>
                                </div>
                                <div class="testimonial-top-cap">
                                    <p>
                                        "I can't recommend Career Care enough! Thanks to their user-friendly platform and vast job opportunities, I found my ideal job quickly and effortlessly. It's a must-visit site for any professional seeking career advancement."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <!-- Support Company Start-->
    <div class="support-company-area support-padding fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2">
                            <span>What we are doing</span>
                            <h2>24k Talented people are getting Jobs</h2>
                        </div>
                        <div class="support-caption">
                            <p class="pera-top">
                                Career Care is revolutionizing the way professionals connect with top employers, providing a seamless platform to discover and secure their dream jobs.
                            </p>
                            <p>
                                Are you a recruiter seeking exceptional talent? Look no further! Post your job on Career Care and gain access to a vast pool of highly qualified professionals. Join us in shaping the future of recruitment!
                            </p>
                            <a href="about.html" class="btn post-btn">Post a job</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img">
                        <img src="assets/img/service/support-img.jpg" alt="" />
                        <div class="support-img-cap text-center">
                            <p>Since</p>
                            <span>1994</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Support Company End-->
</main>

<?php include("./includes/footer.php") ?>