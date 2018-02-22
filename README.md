# Framework MVC procédural vierge.
## Pour démarrer :
1.  Modifier les paramètres : ./app/config/parametres.php
2.  Mettez en place votre template :
*   ./app/vues/templates/default.php
*   Fractionnez votre code en partials
*   Intégrez les zones dynamiques (à initialiser dans les paramètres)
3.  Modifier votre route par défaut :
*   ./www/.htaccess
*   ./app/routeurs/public.php
*   Appelez le bon contrôleur et la bonne action
4.  Créez votre contrôleur et votre action
*   Faites appel éventuellement au modèle
*   Définissez vos zones dynamiques (avec un tampon seulement si vous y intégrez une vue)
