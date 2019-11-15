<?php
/**
 * Ici, notre fichier index.php représente le controleur frontal, il a pour charge de
 * rediriger la requete de l'utilisateur vers le bon controleur en s'aidant des parametres dans l'URL.
 */

#Aperçu de $_GET
//echo '<pre>';
//print_r( $_GET );
//echo '</pre>';

# chargement automatique des classes
require_once 'autoload.php';

# chargement des routes
require_once 'routes.php';