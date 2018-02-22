<?php

/*
 * ./app/routeurs/public.php
 * ROUTEUR PRINCIPAL DU SITE PUBLIC
 * PREFIXE :
 * DOSSIER DE TEMPLATE POUR CES ROUTES : ''
 */

// $template = '';

/*
  ROUTE PAR défaut
  Message de bienvenue
  PATTERN : /
  CTRL : DefaultControleur
  ACTION: indexAction
*/

    include_once '../app/controleurs/defaultsControleur.php';
    Controleurs\Defaults\indexAction();
