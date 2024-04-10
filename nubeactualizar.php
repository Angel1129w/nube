<?php
$host = "tree-caribou-7375.g8z.gcp-us-east1.cockroachlabs.cloud"; 
$port = "26257"; 
$user = "angel"; 
$pass = "s--d5SQhPeRIipJGYA6xDA"; 
$dbname = "practica"; 
$sslmode = "verify-full"; 
$options = "--cluster=tree-caribou-7375"; 

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$pass;sslmode=$sslmode;options=$options";

try {
    $pdo = new PDO($dsn);
    $ID = $_POST["ID"];
    $nombre = $_POST["Nombre"];
    $edad = $_POST["Edad"];

    $sql = "UPDATE nube SET nombre = :nombre, edad = :edad WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $ID, PDO::PARAM_INT);
    $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
    $stmt->bindParam(':edad', $edad, PDO::PARAM_INT);
    $stmt->execute();

    echo json_encode(true); 

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
