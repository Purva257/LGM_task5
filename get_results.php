<?php

// Fetch results from the database

// Example:
// $results = [];
// $sql = "SELECT students.name, students.roll_number, results.subject, results.marks FROM students INNER JOIN results ON students.id = results.student_id";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
//     while ($row = $result->fetch_assoc()) {
//         $results[] = $row;
//     }
// }

// Replace $conn with your database connection

$results = [
    [
        'name' => 'John Doe',
        'roll_number' => '123456',
        'subject' => 'Math',
        'marks' => 85
    ],
    [
        'name' => 'Jane Smith',
        'roll_number' => '654321',
        'subject' => 'Science',
        'marks' => 78
    ]
];

header('Content-Type: application/json');
echo json_encode($results);
