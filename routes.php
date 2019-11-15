<?php

/**
 * Ici, notre fichier index.php représente le controleur frontal, il a pour charge de
 * rediriger la requete de l'utilisateur vers le bon controleur en s'aidant des parametres dans l'URL.
 */

#Aperçu de $_GET
    //echo '<pre>';
    //print_r($_GET);
    //echo '</pre>';

# Récupération  des paramétres GET et affectation d'une valeur par défaut
$controller = ucfirst( $_GET['controller'] ) . 'Controller'; // ?? 'DefaultController';
$action = $_GET['action']; // ?? 'home'; //home


// -- ROUTAGE AUTOMATIQUE
     /** Méthode 1. */
call_user_func([ $controller, $action ], []);

     /** Méthode 2. */
//$obj = new  $controller(); // DefaultController
//$obj->$action();

    /** Méthode 3. Approche dynamique */
//$$controller = new $controller();
//$($controller)->$action();

// -- ROUTAGE MANUEL
      // -- DEFAULT CONTROLLER
/** Maintenant nous avons les autolaod les require_once ne sont + nécéssaire */

#require_once  'src/Controller/DefaultController.php';
#require_once  'src/Controller/MembreController.php';
//$membreCtrl = new MembreController();
//$defaultCtrl = new DefaultController();
//
//if ($controller == 'default' && $action == 'home') {
//    $defaultCtrl->home();
//}
//if ($controller == 'default' && $action == 'category') {
//    $defaultCtrl->category();
//}
//if ($controller == 'default' && $action == 'article') {
//    $defaultCtrl->article();
//}

// -- MEMBER CONTROLLER

//
//if ($controller == 'membre' && $action == 'register') {
//    $membreCtrl->register();
//}
//if ($controller == 'membre' && $action == 'login') {
//    $membreCtrl->login();
//}
