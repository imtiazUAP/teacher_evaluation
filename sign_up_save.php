<?php
include ("dbconnect.php");

$dbconnect = new dbClass();
$connection = $dbconnect->getConnection();

$stmt = $connection->prepare("
    INSERT INTO student (student_reg, student_name, student_dept, student_email, student_password, student_batch, semester_id)
    VALUES (?, ?, ?, ?, ?, ?, ?)
");
$stmt->bind_param("ssssssi", $_REQUEST['reg'], $_REQUEST['name'], $_REQUEST['department'], $_REQUEST['email'], $_REQUEST['password'], $_REQUEST['batch'], $_REQUEST['semester_id']);

if ($stmt->execute()) {
    header('Location: http://localhost/teacher_evaluation/sign_up_notification.php');
} else {
    die("Insert failed: " . $stmt->error);
}

$stmt->close();
$connection->close();
?>