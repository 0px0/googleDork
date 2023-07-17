<?php

// Define your search query (Google Dork)
$query = 'site:example.com filetype:pdf';

// Set your Google API key
$apiKey = 'YOUR_API_KEY';

// Set your Custom Search Engine ID
$cx = 'YOUR_CX';

// Set the number of results you want to retrieve
$numResults = 10;

// Create the request URL
$url = "https://www.googleapis.com/customsearch/v1?key=$apiKey&cx=$cx&q=".urlencode($query)."&num=$numResults";

// Send the request and get the response
$response = file_get_contents($url);

// Decode the JSON response
$data = json_decode($response, true);

// Extract and print the search results
if (isset($data['items'])) {
    foreach ($data['items'] as $item) {
        echo $item['link']."\n";
    }
} else {
    echo "No results found.";
}

?>
