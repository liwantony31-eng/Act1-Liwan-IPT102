<?php
header('Content-Type: application/json; charset=utf-8');

$response = [
    'message' => 'Hello from the server!',
    'student' => 'Tony Liwan',
    'course'  => 'IPT 2',
    'time'    => date('Y-m-d H:i:s')
];

echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>
