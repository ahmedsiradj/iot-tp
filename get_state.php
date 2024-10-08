<?php


$filePath = 'db.txt'; 


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
     file_get_contents($filePath);
} 

?>