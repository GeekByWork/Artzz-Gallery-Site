<?php
// $contacts = readfile(contacts.txt);
// echo $contacts;

$title = "Artzz - Art at Best";
$content = "Artworks you have never seen before.";

$contacts = file_get_contents("Contacts.txt");

$contact = explode(" ", $contacts);
// $file = fopen("Contacts.txt", "r");
// $contact = fread($file, filesize("test.txt"));
// fclose($file);

include 'index.php';
?>