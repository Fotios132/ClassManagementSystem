<?php
require "includes/auth.php";
require "config/db.php";

if ($_SESSION["role"] !== "Student") {
    header("Location: login.php");
    exit;
}

$departments = $conn->query("SELECT * FROM Department");
?>
<!DOCTYPE html>
<html>
<head>
<title>Select Department</title>
</head>
<body>

<h2>Select Department</h2>

<?php while ($d = $departments->fetch_assoc()): ?>
    <p>
        <a href="student_view_classes.php?dept=<?= $d['dept_ID'] ?>">
            <?= $d['dept_name'] ?>
        </a>
    </p>
<?php endwhile; ?>

</body>
</html>
