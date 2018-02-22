<?php

/* 
 * ./noyau/connexion.php
 * Création de l'objet PDO $connexion
 */

$dsn = "mysql:host=".DBHOTE.";dbname=".DBNAME;
$param = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

try { 
     $connexion = new PDO($dsn,DBUSER,DBPWD,$param);
} 
catch (PDOException $e) {
     die("Problème de connexion à la base de données...");
}