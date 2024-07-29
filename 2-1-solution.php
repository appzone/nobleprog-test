<?php
// Vuln     ::: this code is vuln to directory traversal because the input is not sanizied / filtered. 
// Solution ::: 
// to validate and sanitize input for the "view", example by doing file whitelisting or extensions whitelisting. 
// So only spesific files / extensions can be opened.

$allowed_files = ['image-1.jpg', 'image-2.jpg', 'readme.txt']; // List of allowed files


 $file = $_GET['view'];

if (in_array($file, $allowed_files)) {
    include("/var/www/html/" . $file);
} else {
    echo "Invalid file.";
}


?>
