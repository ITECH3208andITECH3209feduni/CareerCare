<?php include("includes/header.php") ?>
<?php
if (!isset($_SESSION['role']) || $_SESSION['role'] !== "recruiter") {
    // $_SESSION['role'];
    header("Location: index.php");
}
?>


<main>
    <section class="contact-section">
        <div class="container">
            <div class="col-4 m-auto">
                <div class="col-12">
                    <h2 class="contact-title text-center">Post a Job</h2>
                </div>
                <div>
                    <form class="form-contact contact_form" action="includes/post_job.php" method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="title" required placeholder="Job Title" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="desc" required placeholder="Job Description"></textarea>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="number" name="salary" required placeholder="Salary package" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="cname" required placeholder="Company Name" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control valid" type="email" name="cemail" required placeholder="Company Email" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="required_experience" required placeholder="Experience Required" />
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="cdesc" required placeholder="Company Description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" name="submit" class="button button-contactForm boxed-btn w-100">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include("includes/footer.php") ?>