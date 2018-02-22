<?php

/*
 * ./noyau/config.php
 * Paramètres du moteur MVC
 */

// Dossier racine
  $root = explode('index.php', $_SERVER['PHP_SELF']);
  define('ROOT', 'http://'.$_SERVER['HTTP_HOST'].$root[0]);
