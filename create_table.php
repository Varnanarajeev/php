<?php
$conn = new mysqli("localhost", "root", "", "tbname");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS Employee (
    Empno INT PRIMARY KEY,
    Ename VARCHAR(50),
    Designation VARCHAR(50),
    BasicPay FLOAT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'Employee' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
