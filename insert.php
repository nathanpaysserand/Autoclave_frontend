<?php
// Connexion à la BDD
$conn = new mysqli("localhost", "root", "", "autoclave_db");
if($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// Récupération des données POST
$temp = $_POST['temperature'];
$consigne = $_POST['consigne'];
$cycle = $_POST['cycle'];
$status = $_POST['status'];

// Préparer et exécuter l'insertion
$stmt = $conn->prepare("INSERT INTO mesures (temperature, consigne, cycle, etat) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ddss", $temp, $consigne, $cycle, $status);
$stmt->execute();

$stmt->close();
$conn->close();
?>
