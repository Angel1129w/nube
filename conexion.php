<?php
$host = "tree-caribou-7375.g8z.gcp-us-east1.cockroachlabs.cloud"; 
$port = "26257"; 
$user = "angel"; 
$pass = "s--d5SQhPeRIipJGYA6xDA"; 
$dbname = "practica"; 
$sslmode = "verify-full"; 
$options = "--cluster=tree-caribou-7375"; 

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$pass;sslmode=$sslmode;options=$options";
    $pdo = new PDO($dsn);
    echo "Conexión exitosa";
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
