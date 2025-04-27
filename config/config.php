<?php
$host   = "sql12.freesqldatabase.com";
$port   = "3306";
$dbname = "sql12775610";
$user   = "sql12775610";
$pass   = "l3ALhnHmXk";

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<script>alert('Connection failed: " . $e->getMessage() . "');</script>";
}
