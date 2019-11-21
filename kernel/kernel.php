<?php

/**
 * Kernel va permettre de charger les composants de notre application
 * -----------------------------------------------
 * Piste d'amélioration, nous utilisons une approche  00.
 */
# -------------- Début du chargement du Kernel -------------- #

# Chargement du Router
 require_once 'middleware/router.php';

 # Chargement de Twig
 require_once 'middleware/twig.php';

 # Chargement de PDO
require_once  'middleware/pdo.php';


# -------------- Fin du chargement du Kernel -------------- #

# --------------  Kernel is Ready-------------- #
/**
 *
 * Récupération des classes à charger par le Kernel
 * @var  $onKernelReady
 */
$onKernelReady = include_once 'event/onKernelReady.php';

foreach ( $onKernelReady as $class ){

    # On instancie chaque classe
    $obj = new $class;

    # On vérifie que chaq class est bien une instance de KernelEventInterface
    if ( $obj instanceof  \App\Model\Kernel\KernelEventInterface){

        # On execute la fonction load
        $obj->load();
    }
}