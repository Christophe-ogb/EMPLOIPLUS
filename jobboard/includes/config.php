<?php
// Connexion à la DB (MySQL avec PDO)
$host = "localhost";
$dbname = "jobboard";
$user = "root";
$pass = ""; // Mot de passe vide par défaut avec XAMPP

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur DB: " . $e->getMessage());
}

// Options globales
session_start();  // Active les sessions sur toutes les pages qui incluent ce fichier
?>