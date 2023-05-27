<?php include("connection.php") ?>
<?php include("includes/header.php");
?>
<style>
    .bg-primary {
        background: #71a95a !important;
    }

    .ftco-section {
        padding: 7em 0;
    }

    .ftco-no-pt {
        padding-top: 0;
    }

    .ftco-no-pb {
        padding-bottom: 0;
    }

    .heading-section {
        font-size: 28px;
        color: #000;
    }

    .img {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .form-control {
        height: 50px;
        background: #fff;
        color: rgba(0, 0, 0, 0.8);
        font-size: 14px;
        border-radius: 5px;
        border: none;
        -webkit-box-shadow: 0px 8px 19px -13px rgba(0, 0, 0, 0.09) !important;
        -moz-box-shadow: 0px 8px 19px -13px rgba(0, 0, 0, 0.09) !important;
        box-shadow: 0px 8px 19px -13px rgba(0, 0, 0, 0.09) !important;
    }

    .form-control::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: rgba(0, 0, 0, 0.3) !important;
    }

    .form-control::-moz-placeholder {
        /* Firefox 19+ */
        color: rgba(0, 0, 0, 0.3) !important;
    }

    .form-control:-ms-input-placeholder {
        /* IE 0+ */
        color: rgba(0, 0, 0, 0.3) !important;
    }

    .form-control:-moz-placeholder {
        /* Firefox 18- */
        color: rgba(0, 0, 0, 0.3) !important;
    }

    .form-control:focus,
    .form-control:active {
        border-color: #71a95a !important;
    }

    textarea.form-control {
        height: inherit !important;
    }

    .wrapper {
        width: 100%;
        overflow: hidden;
        border-radius: 5px;
    }

    .btn {
        padding: 12px 16px;
        cursor: pointer;
        border-width: 1px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: 400;
        -webkit-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
        -moz-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
        box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.12);
        position: relative;
        margin-bottom: 20px;
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;
    }

    @media (prefers-reduced-motion: reduce) {
        .btn {
            -webkit-transition: none;
            -o-transition: none;
            transition: none;
        }
    }

    .btn:hover,
    .btn:active,
    .btn:focus {
        outline: none !important;
        -webkit-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.22) !important;
        -moz-box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.22) !important;
        box-shadow: 0px 10px 20px -6px rgba(0, 0, 0, 0.22) !important;
    }

    .btn.btn-primary {
        background: #71a95a !important;
        border-color: #71a95a !important;
        color: #fff;
    }

    .btn.btn-primary:hover,
    .btn.btn-primary:focus {
        border-color: #5a8947 !important;
        background: #5a8947 !important;
    }

    .contactForm .label {
        color: #000;
        text-transform: uppercase;
        font-size: 12px;
        font-weight: 600;
    }

    .contactForm .form-control {
        border: none;
    }

    #contactForm .error {
        color: red;
        font-size: 12px;
    }

    #contactForm .form-control {
        font-size: 16px;
    }

    #message {
        resize: vertical;
    }

    #form-message-warning,
    #form-message-success {
        display: none;
    }

    #form-message-warning {
        color: red;
    }

    #form-message-success {
        color: #28a745;
        font-size: 18px;
        font-weight: 500;
    }

    .submitting {
        float: left;
        width: 100%;
        padding: 10px 0;
        display: none;
        font-size: 16px;
        font-weight: 500;
    }
</style>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="wrapper img" style="background-image: url(img.jpg);">
                    <div class="row">
                        <div class="col-md-9 col-lg-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Get in touch with us</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    Your message was sent, thank you!
                                </div>
                                <form method="POST" action="includes/contact.php" name="contactForm" class="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Full Name</label>
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Email Address</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="subject">Subject</label>
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Message</label>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Send Message" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("includes/footer.php") ?>