<?php
require "../includes/auth.php";
require "../config/db.php";

// Only Admin can reject a request
if ($_SESSION["role"] !== "Admin") {
    header("Location: ../login.php");
    exit;
}

$id = $_GET["id"];

// Change status to rejected (lowercase to match DB)
$sql = "UPDATE Request SET status = 'rejected' WHERE request_ID = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

// Go back to the request list
header("Location: requests_list.php");
exit;
?>
