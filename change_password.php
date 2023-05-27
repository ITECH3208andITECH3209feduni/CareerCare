<?php include("includes/header.php") ?>


<?php
$role;
$email;
if (isset($_POST['real_otp']) && isset($_POST['role']) && isset($_POST['email'])) {
    $role = $_POST['role'];
    $email = $_POST['email'];
    if ($_POST['otp'] !== $_POST['real_otp']) {
        echo '
            <script>
            alert("Incorrect OTP. Please try again");
            window.location.href = "reset_password.php?role=' . $role . '";
            </script>
        ';
    }
} else {
    header("Location: login.php");
}
?>
<main>
    <section class="contact-section">
        <div class="container">
            <div class="col-4 m-auto">
                <div class="col-12">
                    <h2 class="contact-title text-center">Create new password</h2>
                </div>
                <div>
                    <form class="form-contact contact_form" action="includes/update_password.php" method="post" id="authForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" required name="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Password'" placeholder="Password" />
                                    <input type="hidden" required name="role" value="<?php echo $role ?>">
                                    <input type="hidden" required name="email" value="<?php echo $email ?>">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" required name="c_password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Confirm Password'" placeholder="Confirm Password" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">

                            <button type="submit" class="button button-contactForm boxed-btn w-100">
                                Change Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include("includes/footer.php") ?>