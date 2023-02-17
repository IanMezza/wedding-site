<?php

/**
 * Template Name: PlantillaExcel
 *
 *
 * The template for displaying save the date page.
 *
 * @package Jack_&_Rose
 */

// Set the variables for the REST API URL and access token
$url = 'https://graph.microsoft.com/v1.0/me/drive/root:/path/to/excel/file.xlsx:/workbook/worksheets/Sheet1/range';
$access_token = 'YOUR_ACCESS_TOKEN';

// Set the HTTP headers
$headers = array(
    'Authorization: Bearer ' . $access_token,
    'Content-Type: application/json'
);

// Send the HTTP request to the Excel REST API
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Parse the JSON response
$data = json_decode($response, true);

// Extract the values from the JSON response
$values = $data['values'];

// Output the values
print_r($values);
?>