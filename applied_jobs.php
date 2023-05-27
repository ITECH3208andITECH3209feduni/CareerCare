<?php include("connection.php") ?>

<?php include("includes/header.php");
?>

<?php
// session_start();
if (!isset($_SESSION['id']) || ($_SESSION['role'] !== "user" && $_SESSION['role'] !== "recruiter")) {
    header("Location: index.php");
} else {
    $id = $_SESSION['id'];
}


?>

<div class="container">
    <h3>Applied Jobs</h3>
    <?php if ($_SESSION['role'] == "user") {
    ?>
        <table class="table table-striped">
            <thead>
                <tr>

                    <th scope="col">Job ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Salary</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM applied_jobs WHERE user = $id";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $job_id = $row['job'];
                        $sql2 = "SELECT * FROM jobs WHERE id = $job_id";
                        $r2 = mysqli_query($conn, $sql2);

                        if (mysqli_num_rows($r2) > 0) {
                            while ($r = mysqli_fetch_assoc($r2)) {
                ?>
                                <tr>
                                    <td scope="row"><?php echo $r['id'] ?></td>
                                    <td><?php echo $r['title'] ?></td>
                                    <td><?php echo $r['description'] ?></td>
                                    <td><?php echo $r['salary'] ?></td>
                                </tr>
                <?php
                            }
                        }
                    }
                } ?>
            </tbody>
        </table>
    <?php
    }
    ?>
    <?php if ($_SESSION['role'] == "recruiter") {
        $sql = "SELECT * FROM applied_jobs WHERE recruiter = $id";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $job_id = $row['job'];
                $user_id = $row['user'];
                $sql2 = "SELECT * FROM jobs WHERE id = $job_id";
                $r2 = mysqli_query($conn, $sql2);
                $r = mysqli_fetch_assoc($r2);

                $sql3 = "SELECT * FROM tbluser WHERE ID = $user_id";
                $rslt = mysqli_query($conn, $sql3);

    ?>
                <h5><?php echo $r["title"] ?></h5>
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th scope="col">User ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Email</th>
                            <th scope="col">Profession</th>
                            <th scope="col">CV</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($rslt) > 0) {
                            while ($row2 = mysqli_fetch_assoc($rslt)) {
                        ?>
                                <tr>
                                    <td scope="row"><?php echo $row2['ID'] ?></td>
                                    <td><?php echo $row2['Firstname'] ?></td>
                                    <td><?php echo $row2['Lastname'] ?></td>
                                    <td><?php echo $row2['Gender'] ?></td>
                                    <td><?php echo $row2['Email'] ?></td>
                                    <td><?php echo $row2['profession'] ?></td>
                                    <?php
                                    if (empty($row2['cv'])) {
                                        echo '<td>
                                        Not Uploaded
                                    </td>';
                                    } else {
                                        echo '<td><a class="text-primary" href="' . $row2['cv'] . '" target="_blank" download>Download</a></td>';
                                    }
                                    ?>


                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
    <?php
            }
        }
    }
    ?>
</div>

<?php include("includes/footer.php") ?>