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
                    <h2 class="contact-title text-center">Login</h2>
                </div>
                <div class="d-flex role-selector">
                    <button class="role-btn login-btn <?php echo $role != "recruiter" ? "active" : "" ?>">User</button>
                    <button class="role-btn login-btn <?php echo $role == "recruiter" ? "active" : "" ?>">Recruiter</button>
                </div>
                <div>
                    <form class="form-contact contact_form" action="<?php echo $role == "recruiter" ? "recruiter_login_code.php" : "login_code.php" ?>" method="post" id="authForm" novalidate="novalidate">
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
                        <a href="reset_password.php?role=<?php echo $role ?>" id="forgot-pass" class="text-primary">Forgot Password?</a>
                        <div class="form-group mt-3">

                            <button type="submit" class="button button-contactForm boxed-btn w-100">
                                Login
                            </button>
                        </div>
                        <a href="register.php?role=<?php echo $role ?>" id="registerLink" class="text-primary">Don't have an account? Register</a>

                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("./includes/footer.php") ?>