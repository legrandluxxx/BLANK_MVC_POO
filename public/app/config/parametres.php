<?php

/*
 * ./app/config/parametres.php
 * Paramètres de l'application
 */

// Paramètres de connexion à la base de données
    define('DBHOTE', '127.0.0.1:8889');
    define('DBNAME', 'material_blog');
    define('DBUSER', 'root');
    define('DBPWD' , 'root');

// Paramètres généraux
  // Table des users pour le login
     define('USER' , 'user');

  // Dossier du template par défaut
     $template = '';

// Zones dynamiques du template général
    $zoneTitre    = '';
    $zoneContenu  = '';
