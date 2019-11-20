<?php
# Récupération de l'instance de PSO
$pdo = \App\Model\Db\DbFactory::createPDO();

# Stockage de l'instance dans le container
$container->set('pdo', $pdo);