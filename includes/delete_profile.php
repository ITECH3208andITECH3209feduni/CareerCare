<?php
include("../connection.php");
session_start();

if (isset($_SESSION['role'])) {
    $session_role = $_SESSION['role'];
}
$id = $_GET["id"];
$role = $_GET["role"];

$sql;
if ($role == "user") {
    $sql =  "DELETE FROM tbluser WHERE ID='$id'";
} elseif ($role == "recruiter") {
    $sql =  "DELETE FROM tblrecruiter WHERE ID='$id'";
}



if (mysqli_query($conn, $sql)) {
    if (isset($session_role) && $session_role == "user") {

        echo '
            <script>
            alert("Profile Deleted Successfully!");
            window.location.href = "../admindata.php";
            </script>
            ';
    } elseif (isset($session_role) && $session_role == 'recruiter') {
        echo '
            <script>
            alert("Profile Deleted Successfully!");
            window.location.href = "../admindata.php";
            </script>
            ';
    } else {
        echo '
            <script>
            alert("Profile Deleted Successfully!");
            window.location.href = "../admindata.php";
            </script>
            ';
    }
} else {
    if (isset($session_role) && $session_role == "user") {

        echo '
                <script>
                alert("We are facing some errors. Please try again later.");
                window.location.href = "../admindata.php";
                </script>
                ';
    } elseif (isset($session_role) && $session_role == 'recruiter') {
        echo '
                <script>
                alert("We are facing some errors. Please try again later.");
                window.location.href = "../admindata.php";
                </script>
                ';
    } else {
        echo '
                <script>
                alert("We are facing some errors. Please try again later.");
                window.location.href = "../admindata.php";
                </script>
                ';
    }
}
