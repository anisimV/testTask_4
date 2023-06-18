<?php 

require_once 'db/dbConnect.php';
require_once 'addProtocol.php';

$protocol_number = $_POST["protocol_number"];
$issue_date = $_POST["issue_date"];
$responsible_employee = $_POST["responsible_employee"];
$compliance_flag = $_POST["compliance_flag"];

$sql_check = "SELECT * FROM PROTOCOL_TABLE WHERE protocol_number = '$protocol_number'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows > 0) {
    echo "<script>alert('Протокол с данным номером уже существует!');</script>";
    echo "<script>window.location.href = 'protocol.php';</script>";
    exit;
}

$sql_insert = "INSERT INTO PROTOCOL_TABLE (protocol_number, issue_date, responsible_employee,compliance_flag) VALUES ('$protocol_number', '$issue_date', '$responsible_employee', '$compliance_flag')";

if ($conn->query($sql_insert) === true) {
    echo "<script>alert('Протокол успешно добавлен!');</script>";
    echo "<script>window.location.href = 'protocol.php';</script>";
} else {
    echo "Ошибка добавления протокола! " . $conn->error;
}

$conn->close();
