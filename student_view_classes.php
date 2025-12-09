<?php
require "includes/auth.php";
require "config/db.php";

if ($_SESSION["role"] !== "Student") {
    header("Location: login.php");
    exit;
}

$dept = $_GET["dept"];
$search = $_GET["search"] ?? "";

// get department name
$deptRow = $conn->query("SELECT dept_name FROM Department WHERE dept_ID = $dept")->fetch_assoc();
$deptName = $deptRow["dept_name"];

$sql = "SELECT * FROM Class WHERE dept_ID = $dept";

if ($search !== "") {
    $sql .= " AND class_name LIKE '%$search%'";
}

$classes = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Classes</title>
</head>
<body>

<h2><?= $deptName ?> Classes</h2>

<form method="GET">
    <input type="hidden" name="dept" value="<?= $dept ?>">
    <input type="text" name="search" placeholder="Search..." value="<?= $search ?>">
    <button type="submit">Search</button>
</form>

<table border="1" cellpadding="5" cellspacing="0">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Section</th>
    <th>Date</th>
    <th>Action</th>
</tr>

<?php while ($c = $classes->fetch_assoc()): ?>
<tr>
    <td><?= $c["class_ID"] ?></td>
    <td><?= $c["class_name"] ?></td>
    <td><?= $c["section_no"] ?></td>
    <td><?= $c["date_slot"] ?></td>
    <td><a href="student_enroll.php?id=<?= $c["class_ID"] ?>">Enroll</a></td>
</tr>
<?php endwhile; ?>

</table>

</body>
</html>
