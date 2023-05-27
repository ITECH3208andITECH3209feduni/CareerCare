<?php include("includes/header.php") ?>

<?php
include('connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require("phpmailer/src/Exception.php");
require("phpmailer/src/PHPMailer.php");
require("phpmailer/src/SMTP.php");


$otp = random_int(100000, 999999);
$email;

if (isset($_POST["email"]) && isset($_POST['role'])) {
    $role = $_POST['role'];
    $email = $_POST["email"];
    $result;
    if ($role == "user") {
        $sql = "SELECT * FROM tbluser WHERE Email='$email'";
        $result = mysqli_query($conn, $sql);
    } else if ($role == "recruiter") {
        $sql = "SELECT * FROM tblrecruiter WHERE Email='$email'";
        $result = mysqli_query($conn, $sql);
    }
    if (mysqli_num_rows($result) > 0) {

         $mail = new PHPMailer(true);

         $mail->isSMTP();
         $mail->Host = 'smtp.gmail.com';
         $mail->SMTPAuth = true;
         $mail->Username = "zeeshan796464@gmail.com";
         $mail->Password = 'wbzdnfrpuighlrql';
         $mail->SMTPSecure = 'ssl';
         $mail->Port = 465;

         $mail->setFrom('zeeshan796464@gmail.com');

         $mail->addAddress($email);

         $mail->isHTML(true);

         $mail->Subject = "OTP for resetting password";
         $mail->Body = "Hi, This is your otp to reset email " . $otp;

         $mail->send();
    } else {

        echo '<script>
        alert("No account found with this email. Please try again");
        window.location.href = "reset_password.php?role=' . $role . '";
        </script>';
    }
} else {
    header('Location: welcome.php');
}
?>
<main>
    <section class="contact-section">
        <div class="container">
            <div class="col-4 m-auto">
                <div class="col-12">
                    <h2 class="contact-title text-center">Please enter OTP we sent to your email</h2>
                </div>
                <div>
                    <form class="form-contact contact_form" action="change_password.php" method="post" id="authForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" required name="otp" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter OTP'" placeholder="OTP" />
                                    <input type="hidden" required name="real_otp" value="<?php echo $otp ?>">
                                    <input type="hidden" required name="role" value="<?php echo $role ?>">
                                    <input type="hidden" required name="email" value="<?php echo $email ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">

                            <button type="submit" class="button button-contactForm boxed-btn w-100">
                                Continue
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("includes/footer.php") ?>