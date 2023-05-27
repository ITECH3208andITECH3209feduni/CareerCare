<?php
include("../connection.php");

$id = $_GET["id"];
$role = $_GET["role"];
$status = $_GET["status"];

$sql;
if ($role == "user") {
    $sql = "UPDATE tbluser SET status='$status' WHERE ID='$id'";
} elseif ($role == "recruiter") {
    $sql =  "UPDATE tblrecruiter SET status='$status' WHERE ID='$id'";
}



if (mysqli_query($conn, $sql)) {
    echo '
            <script>
            alert("Status Updated Successfully!");
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
