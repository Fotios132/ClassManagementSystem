<?php
require "includes/auth.php";
require "config/db.php";

if ($_SESSION["role"] !== "Student") {
    header("Location: login.php");
    exit;
}

$classID = $_GET["id"];
$studentID = $_SESSION["user_id"];

// check if already enrolled
$check = $conn->query("SELECT * FROM Student_Class WHERE student_ID = $studentID AND class_ID = $classID");

if ($check->num_rows > 0) {
    echo "You are already enrolled in this class.";
    exit;
}

// enroll
$conn->query("INSERT INTO Student_Class (student_ID, class_ID) VALUES ($studentID, $classID)");

header("Location: myclasses.php");
exit;
?>
