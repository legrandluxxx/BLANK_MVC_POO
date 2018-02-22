<?php
/*
 * ./app/controleurs/defaultsControleur.php
 * Contrôleur default
 */

namespace Controleurs\Defaults;
//use Modeles\Default;

/**
 * Message de bienvenue
 * @return [type]
 */
  function indexAction(){
      //include_once '../app/modeles/defaultsModele.php';
      //$defaults = Default\findAll($connexion);

      GLOBAL $zoneContenu, $zoneTitre;
      ob_start();
          include '../app/vues/defaults/index.php';
      $zoneContenu = ob_get_clean();

  }
