<?php
// ini_set()

if ($_POST) {
    $name = $_POST['name'];
    $to_email = "zeeshan796464@gmail.com";
    $subject = $_POST['subject'];
    $body = "
        Name: " . $_POST['name'] . "
        

        Message: " . $_POST['message'] . "


        Email: " . $_POST['email'] . "
    ";
    $headers = "From: " . $_POST['email'];


    if (mail($to_email, $subject, $body, $headers)) {
        echo " <script>
            alert('Thank you for contacting us, $name. You will get a reply within 24 hours.');
            window.location.href = '../contact.php'</script>";
    } else {
        echo " <script>
            alert('We are sorry but the email did not go through.');
            window.location.href = '../contact.php'</script>";
    }
} else {
    echo " <script>
    alert('Something went wrong');
    window.location.href = '../contact.php'</script>";
}
