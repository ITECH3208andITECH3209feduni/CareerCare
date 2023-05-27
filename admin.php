<?php include("includes/header.php") ?>


<main>
    <section class="contact-section">
        <div class="container">
            <div class="col-4 m-auto">
                <div class="col-12">
                    <h2 class="contact-title text-center">Admin Login</h2>
                </div>
                <div>
                    <form class="form-contact contact_form" action="connectadmin.php" method="post" novalidate="novalidate">
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
                        <div class="form-group mt-3">
                            <button type="submit" name="login" class="button button-contactForm boxed-btn w-100">
                                Login
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("includes/footer.php") ?>