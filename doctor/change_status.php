<?php
session_start();
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $messid = $_POST['messid'];

 echo "Received messid: " . $messid . "<br>";
    // Perform the update in the database
    $sql = "UPDATE messages SET status = 1 WHERE messid = :messid";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':messid', $messid, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "Status changed successfully";
    } else {
        echo "Error changing status";
    }
} else {
    // Handle other types of requests if needed
    echo "Invalid request";
}
?>
