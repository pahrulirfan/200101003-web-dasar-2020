<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ci-web-lanjut';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->error){
    die('error');
}