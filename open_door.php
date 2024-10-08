<?php


$filePath = 'db.txt'; 


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    try{
        file_put_contents($filePath,"T");
        echo "Changed";
    } catch (Exception $e) {
        http_response_code(500); // Internal Server Error
        echo "Not Changed";
        exit;
    }

} 

?>