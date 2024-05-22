<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // File path to the CSV file
    $csvFile = __DIR__ . '/messages.csv'; // Full path to the CSV file

    // Get date and message from POST data
    $date = $_POST['date'];
    $message = $_POST['message'];

    // Append the data to the CSV file
    $csvRow = "\"$date\",\"$message\"\n";
    file_put_contents($csvFile, $csvRow, FILE_APPEND);

    // Return success response
    http_response_code(200);
}
?>
