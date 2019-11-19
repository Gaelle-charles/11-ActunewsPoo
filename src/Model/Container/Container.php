<?php


namespace App\Model\Container;
/**
 * L'objectif d'un container est de ggarder en mémoire
 * les différentes instances de notre application  et
 * les redistribuer à la demande
 */
# Une classe "final" ne pourra pas ê hérité

final class Container
{
    # Stock les instances de l'application
    private $instances;
    # Stock les instances de notre container
    private static $instance;

    # en privé on bloque l'instanciation de la class
    private function __construct()
    {
        $this->instances = []; # quand une variable est static ne peuvent communiquer avec les varibles non static et le contraire est possible
        self::$instance;
    }

    # on récupére une instance
    public function get(string $key)
    {
        return $this->instances[$key];
    }

    # on stocke une instance
    public function set(string $key, $value)
    {
        $this->instances[$key] = $value;
    }

    # on vérifie la présence d'une instance
    public function has(string $key)
    {
        return in_array($key, $this->instances); # in_array pour vérifier si la valeur existe dans le tableau (si la key existe)
    }
    /**
     *Permet de retourner une instance unique du container
     * ---------------------------------------------
     * Implémentation du SINGLETON
     */
    public static function getInstance() #pas accessible depuis l'objet mais depuis la class
    {
        /**
         *Je crée une instance de container uniquement si self::$instance n'existe pas
         */
        if (!isset(self::$instance)){
        self::$instance = new self();
        }
        /**
         *La premiere fois, je retourne une nouvelle instance;
         * les fois suivantes, je retourne la meme instance.
         */
        return self::$instance;
    }
}