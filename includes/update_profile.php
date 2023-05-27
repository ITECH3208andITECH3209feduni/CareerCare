<?php
include("../connection.php");
session_start();

if (isset($_SESSION["role"])) {
    $session_role = $_SESSION['role'];
}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$role = $_POST['role'];
$id = $_POST['id'];
$p_certificate = "";
$p_cv = "";
if (isset($_POST['p_certificate'])) {
    $p_certificate = $_POST['p_certificate'];
    $p_cv = $_POST['p_cv'];
}
$summary;
$skills;
$languages;
$target_file_name;
$target_certificate_name;
$profession;
if ($role == "user") {
    $profession = $_POST['profession'];
    $target_file = $_POST['p_cv'];
    $target_certificate = $_POST['p_certificate'];
    $summary = $_POST['summary'];
    $skills = $_POST['skills'];
    $languages = $_POST['languages'];
}
$target_dir = "../uploads/files/";
if (isset($_FILES['cv']) && ($_FILES['cv']['size'] > 0)) {
    $cv = $_FILES['cv'];
    $fileType = strtolower(pathinfo($cv['name'], PATHINFO_EXTENSION));
    $target_file = $target_dir . $id . '.' . $fileType;
    $target_file_name = "uploads/files/" . $id . '.' . $fileType;

    if (!move_uploaded_file($cv["tmp_name"], $target_file)) {
        echo '
        <script>
        alert("Sorry we are facing some error while uploading file!");
        </script>
        ';
        return;
    }
} else {
    $target_file_name = $p_cv;
}

if (isset($_FILES['certificate']) && ($_FILES['certificate']['size'] > 0)) {
    $certificate = $_FILES['certificate'];
    $fileType = strtolower(pathinfo($certificate['name'], PATHINFO_EXTENSION));
    $target_certificate = $target_dir . bin2hex(random_bytes(6)) . '.' . $fileType;
    $target_certificate_name = "uploads/files/" . bin2hex(random_bytes(6)) . '.' . $fileType;
    if (!move_uploaded_file($certificate["tmp_name"], $target_certificate)) {
        echo '
        <script>
        alert("Sorry we are facing some error while uploading file!");
        </script>
        ';
        return;
    }
} else {
    $target_certificate_name = $p_certificate;
}


$sql;
if ($role == "user") {
    $sql = "UPDATE tbluser SET Firstname='$firstname', Lastname='$lastname', Email='$email', profession='$profession', cv='$target_file_name', summary='$summary', skills='$skills', languages='$languages', certificate='$target_certificate_name' WHERE ID='$id'";
} elseif ($role == 'recruiter') {
    $sql = "UPDATE tblrecruiter SET Firstname='$firstname', Lastname='$lastname', Email='$email' WHERE ID='$id'";
}

if (mysqli_query($conn, $sql)) {
    if (isset($session_role) && $session_role == "user") {
        echo '
        <script>
        alert("Profile Updated Successfully!");
        window.location.href = "../index.php";
        </script>
        ';
    } elseif (isset($session_role) && $session_role == 'recruiter') {
        echo '
        <script>
        alert("Profile Updated Successfully!");
        window.location.href = "../index.php";
        </script>
        ';
    } else {
        echo '
        <script>
        alert("Profile Updated Successfully!");
        window.location.href = "../admindata.php";
        </script>
        ';
    }
} else {
    if (isset($session_role) && $session_role == "user") {

        echo '
            <script>
            alert("We are facing some errors. Please try again later.");
            window.location.href = "../index.php";
            </script>
            ';
    } elseif (isset($session_role) && $session_role == 'recruiter') {
        echo '
            <script>
            alert("We are facing some errors. Please try again later.");
            window.location.href = "../index.php";
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
