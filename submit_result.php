<?php

// Handle form submission and insert into the database

$data = json_decode(file_get_contents('php://input'), true);

$name = $data['name'];
$rollNumber = $data['rollNumber'];
$subject = $data['subject'];
$marks = $data['marks'];

// Insert data into the database (you need to establish connection to MySQL here)

// Example:
// $conn = new mysqli($servername, $username, $password, $dbname);
// $sql = "INSERT INTO results (student_id, subject, marks) VALUES (?, ?, ?)";
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("iss", $studentId, $subject, $marks);
// $stmt->execute();

// Replace $servername, $username, $password, $dbname with your database credentials

$response = [
    'success' => true
];

header('Content-Type: application/json');
echo json_encode($response);
