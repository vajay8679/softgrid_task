<?php
// Load the XML file
$xml = simplexml_load_file('data.xml');

if (!$xml) {
    die('Failed to load XML file.');
}

// Create a CSV file
$csvFile = fopen('data.csv', 'w');

if (!$csvFile) {
    die('Failed to open CSV file.');
}

// Write CSV header
$headers = array('Name', 'Age', 'Email');
fputcsv($csvFile, $headers);

// Parse XML and write to CSV
foreach ($xml->item as $item) {
    $rowData = array(
        (string)$item->name,
        (int)$item->age,
        (string)$item->email
    );

    fputcsv($csvFile, $rowData);
}

// Close the CSV file
fclose($csvFile);

echo 'Conversion completed. CSV file saved as "data.csv".';
?>
