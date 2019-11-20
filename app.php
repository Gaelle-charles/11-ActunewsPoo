<?php

# 1. Chargement du kernel
require_once 'kernel/kernel.php';

// -- ROUTAGE AUTOMATIQUE ------------------ |
# 2. Traitement de la requète
/** @var \Symfony\Component\HttpFoundation\Response $response */
$response = call_user_func_array([ new $controller, $action], []);
# dump( $response );

# 3. On retourne une réponse au client.
$response->send();