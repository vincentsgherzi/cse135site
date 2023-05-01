<?php
header('Content-Type: application/json');
$message = "Hello World from PHP!";
$date = date("Y-m-d");
$ip_address = $_SERVER['REMOTE_ADDR'];
$response = array(
    "message" => $message,
    "date" => "Today's date is " . $date,
    "ipAddress" => $ip_address
);
echo json_encode($response);
?>
