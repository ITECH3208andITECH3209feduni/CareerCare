<?php include("includes/header.php") ?>
<?php
$role;
if (isset($_GET['role'])) {
    $role = $_GET['role'];
} else {
    header("Location: welcome.php");
}
?>
<main>
    <section class="contact-section">
        <div class="container">
            <div class="col-4 m-auto">
                <div class="col-12">
                    <h2 class="contact-title text-center">Reset Password</h2>
                </div>
                <div>
                    <form class="form-contact contact_form" action="verify_account.php" method="post" id="authForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control valid" required name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" />
                                    <input type="hidden" class="form-control fa fa-enevelope" required name="role" value="<?php echo $role ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">

                            <button type="submit" class="button button-contactForm boxed-btn w-100">
                                Reset Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("includes/footer.php") ?>