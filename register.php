<?php include("./includes/header.php") ?>
<?php
$role = "user";
if (isset($_GET["role"])) {
    $role = $_GET["role"];
}
?>

<main>
    <section class="contact-section">
        <div class="container">
            <div class="col-4 m-auto">
                <div class="col-12">
                    <h2 class="contact-title text-center">Register</h2>
                </div>
                <div class="d-flex role-selector">
                    <button class="role-btn register-btn <?php echo $role != "recruiter" ? "active" : "" ?>">User</button>
                    <button class="role-btn register-btn <?php echo $role == "recruiter" ? "active" : "" ?>">Recruiter</button>
                </div>
                <div>
                    <form class="form-contact contact_form" action="<?php echo $role == "recruiter" ? "recruit_reg_code.php" : "registration_code.php" ?>" method="post" id="authForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="firstname" required id="firstname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your firstname'" placeholder="Firstname" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input class="form-control" name="lastname" required id="lastname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your lastname'" placeholder="Lastname" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" />
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'" placeholder="Password" />
                                </div>
                            </div>
                        </div>
                        <div class="gender-tab">
                            <p>Gender</p>
                            <label class="mr-3 cursor-pointer"><input type="radio" name="gender" value="Male" required class="mr-2">Male</label>
                            <label class="mr-3 cursor-pointer"><input type="radio" name="gender" value="Female" required class="mr-2">Female</label>
                            <label class="cursor-pointer"><input type="radio" name="gender" value="Other" required class="mr-2">Other</label>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn w-100">
                                Register
                            </button>
                        </div>
                        <a href="login.php?role=<?php echo $role ?>" id="registerLink" class="text-primary">Already have an account? Login</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("./includes/footer.php") ?>