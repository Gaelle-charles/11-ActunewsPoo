<?php


namespace App\Model\Db;

use App\Model\Container\Container;

/**
 *Elle nous permettra de faire des requêtes CRUD sur les tables des BDD
 */

abstract class DbTable
{
    # Nom de la table
    protected $table;

    # Clé primaire
    protected $primary = 'id';

    # Instance de PDO
    /** @var \PDO $db */
    private $db;

    public function __construct()
    {
        # Récupération du container
        $container = Container::getInstance();

        # Récupération de PDO
        $this->db = $container->get('pdo');
    }

    /**
     * @return \PDO
     */
    public function getDb(): \PDO
    {
        return $this->db;
    }

    /**
     * Récupérer toutes les info d'une table dans la BDD
     */
    public function findAll(
        string $where   = '',
        string $orderBy = '',
        string $limit   = '',
        string $offset  = ''
    ) :array
    {
        # Requête SELECT
        $sql = "SELECT * FROM " . $this->table;
        
        # Si $where n'est pas vide
        if ( !empty( $where ) ) {
            $sql .= ' WHERE ' . $where;
        }

        # Si $orderBy n'est pas vide
        if ( !empty( $orderBy ) ) {
            $sql .= ' ORDER BY ' . $orderBy;
        }

        # Si $limit n'est pas vide
        if ( !empty( $limit ) ) {
            $sql .= ' LIMIT ' . $limit;
        }

        # Si $offset n'est pas vide
        if ( !empty( $offset ) ) {
            $sql .= ' OFFSET ' . $offset;
        }

        # Préparation et Exécution de requête
        $query = $this->db->prepare( $sql );
        $query->execute();

        # Retour de la réponse
        return  $query->fetchAll();
    }
}