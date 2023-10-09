<?php
// Path to your Excel file within your project directory
$excelFilePath = 'electrical11.pdf';

// Check if the file exists
if (file_exists($excelFilePath)) {
    // Set the appropriate content type and headers for file download
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: inline; filename="' . basename($excelFilePath) . '"');

    // Output the Excel file
    readfile($excelFilePath);
} else {
    // Handle the case when the file doesn't exist
    echo 'Excel file not found.';
}
