<?php

# 1. Déduction du Controller et de l'Action
# Récupération des paramètres GET et affectation d'une valeur par défaut.

$controller = 'App\\Controller\\' . ucfirst(($request->get('controller') ?? DEFAULT_CONTROLLER)). 'Controller'; // default
$action     = $request->get('action') ?? DEFAULT_ACTION ; // home

# 2A. Chargement de Twig
$loader = new \Twig\Loader\FilesystemLoader(PATH_TEMPLATE);
$twig   = new \Twig\Environment($loader, [
    'cache' => false,
]);

# 2B. On stock l'instance de Twig dans notre container
$container->set('twig', $twig);
#dump( $container);

// -- ROUTAGE AUTOMATIQUE ------------------ |
# 3. Traitement de la requète
/** @var \Symfony\Component\HttpFoundation\Response $response */
$response = call_user_func_array([ new $controller, $action], []);
# dump( $response );

# 4. On retourne une réponse au client.
$response->send();