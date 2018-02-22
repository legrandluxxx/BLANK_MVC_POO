<?php
/*
  ./app/vues/posts/index.php
  Liste des posts
  Variables disponibles :
      - $posts : ARRAY(ARRAY(id, titre, texte, slug, image, auteur, pseudo))
 */
 ?>

 <h1 class="page-header">
     Framework MVC Procédural Vierge
     <small>Fait avec amour ...</small>
 </h1>

<p>Pour démarrer :</p>
<ul>
  <li>Modifier les paramètres : ./app/config/parametres.php</li>
  <li>Mettez en place votre template :
      <ul>
        <li>./app/vues/templates/default.php</li>
        <li>Fractionnez votre code en partials</li>
        <li>Intégrez les zones dynamiques (à initialiser dans les paramètres)</li>
      </ul>
  </li>
  <li>Modifier votre route par défaut :
    <ul>
      <li>./www/.htaccess</li>
      <li>./app/routeurs/public.php</li>
      <li>Appelez le bon contrôleur et la bonne action</li>
    </ul>
  </li>
  <li>Créez votre contrôleur et votre action
      <ul>
        <li>Faites appel éventuellement au modèle</li>
        <li>Définissez vos zones dynamiques (avec un tampon seulement si vous y intégrez une vue)</li>
      </ul>
  </li>
</ul>
