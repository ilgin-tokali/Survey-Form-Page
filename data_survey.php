<?php

$data = "Name: " . $_POST['name'] . "\n";
$data .= "Email: " . $_POST['email'] . "\n";

$age = $_POST['age'] ?: "Not provided";
$data .= "Age: " . $age . "\n";

$occupation = $_POST['occupation'] ?: "Not provided";
$data .= "Occupation: " . $occupation . "\n";

$concerns = $_POST['concerns'] ?? "Not provided";
$data .= "Main Concern: " . $concerns . "\n";

$details = trim($_POST['details']) ?: "No details";
$data .= "Concern Details: " . $details . "\n";

$improvements = $_POST['improvements'] ?? []; // Default to empty array
$data .= "Suggested Improvements: " . (!empty($improvements) ? implode(", ", $improvements) : "None") . "\n";

$data .= "-------------------------\n";

file_put_contents("submissions.txt", $data, FILE_APPEND);

echo "Thank you! Your data has been saved.";
?>