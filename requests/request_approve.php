<?php
require "../includes/auth.php";
require "../config/db.php";

if ($_SESSION["role"] !== "Admin") {
    header("Location: ../login.php");
    exit;
}

$id = $_GET["id"];

// Approve the request 
$sql = "UPDATE Request SET status = 'approved' WHERE request_ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

//Get request details
$sql2 = "SELECT * FROM Request WHERE request_ID = ?";
$stmt2 = $conn->prepare($sql2);
$stmt2->bind_param("i", $id);
$stmt2->execute();
$request = $stmt2->get_result()->fetch_assoc();

// Auto-generate a new class ID 
$result = $conn->query("SELECT MAX(class_ID) AS max_id FROM Class");
$row = $result->fetch_assoc();
$classID = $row['max_id'] + 1;

$deptID     = $request['dept_ID'];
$blackoutID = $request['blackout_ID'];
$dateSlot   = $request['date_slot'];

// Default simple class values 
$className  = "New Class";
$sectionNo  = 1;
$teacherID  = 101;

//Insert new class
$sql3 = "INSERT INTO Class (class_ID, class_name, section_no, dept_ID, teacher_ID, blackout_ID, date_slot)
         VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt3 = $conn->prepare($sql3);
$stmt3->bind_param("isiiiss", $classID, $className, $sectionNo, $deptID, $teacherID, $blackoutID, $dateSlot);
$stmt3->execute();


header("Location: requests_list.php");
exit;
?>
