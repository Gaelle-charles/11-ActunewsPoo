<?php
# 1. Déduction du Controller et de l'Action
# Récupération des paramètres GET et affectation d'une valeur par défaut.

$controller = 'App\\Controller\\' . ucfirst(($request->get('controller') ?? DEFAULT_CONTROLLER)). 'Controller'; // default
$action     = $request->get('action') ?? DEFAULT_ACTION ; // home