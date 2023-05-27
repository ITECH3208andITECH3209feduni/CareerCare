<?php
include("../connection.php");
session_start();
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $salary = $_POST['salary'];
    $cname = $_POST['cname'];
    $cemail = $_POST['cemail'];
    $required_experience = $_POST['required_experience'];
    $cdesc = $_POST['cdesc'];
    $id = $_SESSION['id'];

    try {
        echo "im here";


        $sql = "INSERT INTO jobs (title, description, salary, recruiter, company_name, company_email, required_experience, company_description) VALUES ('$title', '$desc', $salary, $id, '$cname', '$cemail', '$required_experience', '$cdesc')";

        if (mysqli_query($conn, $sql)) {
            echo '
        <script>
        alert("Job Posted Successfully!");
        window.location.href = "../index.php";
        </script>
        ';
        } else {
            echo '
            <script>
            alert("We are facing some errors, Please try again!");
            window.location.href = "../postjob.php";
            </script>
            ';
        }
    } catch (Exception $err) {
        print_r($err);
        echo $err;
    }
} else {
    header("Location: ../postjob.php");
}
