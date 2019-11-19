<?php

namespace App\Controller;

use App\Model\Container\Container;

/**
 * Class AbstractController c'est une class qui aide d'autres class
 *
 *
 *
 *
 * @package App\Controller
 * AbstractController est ce qu'on appel
 * une classe abstraite.
 * ---------------------------------------
 * Une classe abstraite est une classe
 * que l'on ne peux pas instancié. ( et donc
 * créer un objet).
 * ---------------------------------------
 * Pour être utilisé, elle doit OBLIGATOIREMENT
 * être hérité !
 * ---------------------------------------
 * Autre particularitén elle peux comporter
 * des méthodes abtraites. CAD, des fonctions
 * qui n'ont pas encore été décrites (écrites).
 */
abstract class AbstractController
{

    use ControllerTrait;
    private $container;
    /**
     *On récupére l'instance de du container de notre application
     */
    public function __construct()
    {
        $this->container = Container::getInstance();
    }

    protected function getParmater(string $name)
    {
        return $this->container->get( $name );
    }
}