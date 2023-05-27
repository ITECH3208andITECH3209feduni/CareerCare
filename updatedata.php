<?php
include("includes/header.php");
include("connection.php");
if (!isset($_GET['id'])) {
    header("Location: index.php");
}
$role = $_GET['role'];
$id = $_GET['id'];
?>

<main>
    <section class="contact-section">
        <div class="container">
            <div class="col-4 m-auto">
                <div class="col-12">
                    <h2 class="contact-title text-center">Update Profile</h2>
                </div>
                <div>
                    <form class="form-contact contact_form" action="includes/update_profile.php" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        <?php
                        $sql;
                        if ($role == "recruiter") {
                            $sql = "SELECT * FROM tblrecruiter WHERE ID=$id";
                        } elseif ($role == "user") {
                            $sql = "SELECT * FROM tbluser WHERE ID=$id";
                        }
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result)) {
                            $row = mysqli_fetch_assoc($result);
                        ?>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        </span>
                                        <input type="hidden" value="<?php echo $role ?>" name="role">
                                        <input type="hidden" value="<?php echo $id ?>" name="id">
                                        <input class="form-control" name="firstname" required id="firstname" value="<?php echo $row['Firstname'] ?>" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your firstname'" placeholder="Firstname" />
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input class="form-control" name="lastname" required id="lastname" value="<?php echo $row['Lastname'] ?>" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your lastname'" placeholder="Lastname" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" value="<?php echo $row['Email'] ?>" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" />
                                    </div>
                                </div>
                                <?php if ($role == "user") { ?>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input class="form-control" name="profession" value="<?php echo $row['profession'] ?>" id="profession" placeholder="Profession" />
                                        </div>
                                    </div>
                                    <div class="col-12">

                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="summary" required id="lastname" placeholder="Personal summary"><?php echo $row['summary'] ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input class="form-control" name="skills" value="<?php echo $row['skills'] ?>" placeholder="Additional Skills" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input class="form-control" name="languages" value="<?php echo $row['languages'] ?>" placeholder="Which Languages you can speak" />
                                        </div>
                                    </div>
                                    <div class="gender-tab col-sm-12">
                                        <p>Upload CV</p>
                                        <input type="file" class="p-0" name="cv" id="cv">
                                    </div>
                                    <div class="gender-tab col-sm-12 mt-3">
                                        <p>Upload Certificate</p>
                                        <input type="file" class="p-0" name="certificate">
                                    </div>
                                    <input type="hidden" name="p_certificate" value="<?php echo $row['certificate'] ?>">
                                    <input type="hidden" name="p_cv" value="<?php echo $row['cv'] ?>">
                                <?php } ?>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn w-100">
                                    Update
                                </button>
                            </div>
                        <?php
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include("includes/footer.php") ?>