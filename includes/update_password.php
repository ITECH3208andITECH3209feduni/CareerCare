<?php
require_once('../connection.php');

if (isset($_POST['role']) && isset($_POST['password']) && isset($_POST['c_password']) && $_POST['email']) {
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $role = $_POST['role'];
    $email = $_POST['email'];

    if ($password == $c_password) {
        $password = MD5($password);
        $sql;
        if ($role == "user") {
            $sql = "SELECT * FROM tbluser WHERE Email='$email'";
            $sql = "UPDATE tbluser SET Password='$password' WHERE Email='$email'";
        } else if ($role == "recruiter") {
            $sql = "UPDATE tblrecruiter SET Password='$password' WHERE Email='$email'";
        }
        if (mysqli_query($conn, $sql)) {
            if ($role == "user") {
                echo '
                <script>
                alert("Password changed successfully!");
                window.location.href = "../login.php";
                </script>
                ';
            } else {
                echo '
                <script>
                alert("Password changed successfully!");
                window.location.href = "../login.php";
                </script>
                ';
            }
        } else {
            echo '
            <script>
            alert("We are facing some problems. Please try again!");
            window.location.href = "../index.php";
            </script>
        ';
        }
    } else {
        echo '
            <script>alert("Passwords do not match. Please try again");
            window.location.href = "../reset_password.php?role=' . $role . '";
            </script>
        ';
    }
} else {
    header("Location: ../index.php");
}
