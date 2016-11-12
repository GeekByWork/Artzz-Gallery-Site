<?php
// create curl resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "https://juranet.tech/php/curl/user_list.php");


// $output contains the output string
$users = json_decode(curl_exec($ch), true);

// close curl resource to free up system resources
curl_close($ch);

?>
