<?php

/**
 * Kenrel va permettre de charger les composants de notre application
 * -----------------------------------------------
 * Piste d'amélioration, nous utilisons une approche  00.
 */

# Chargement du Router
 require_once 'middleware/router.php';

 # Chargement de Twig
 require_once 'middleware/twig.php';

 # Chargement de PDO
require_once  'middleware/pdo.php';