<?php
require_once("../connection.php");
session_start();

if (isset($_GET['id']) && isset($_GET['recruiter']) && isset($_SESSION['id'])) {
    $id = $_GET['id'];
    $recruiter = $_GET['recruiter'];
    $user = $_SESSION['id'];

    try {

        $sql = "INSERT INTO applied_jobs (user, recruiter, job) VALUES ($user, $recruiter, $id)";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "
            <script>
        alert('Applied Successfully');
        window.location.href = '../index.php'
        
        </script>
        ";
            // header("Location: Preview.php");
        }
    } catch (Exception $err) {
        echo $err;
    }
} else {
    header("Location: ../index.php");
}
