<?php

namespace Mymovies\DAO;

use Doctrine\DBAL\Connection;
use Mymovies\Domain\Mymovie;

class MymovieDAO
{
    /**
     * Database connection
     *
     * @var \Doctrine\DBAL\Connection
     */
    private $db;

    /**
     * Constructor
     *
     * @param \Doctrine\DBAL\Connection The database connection object
     */
    public function __construct(Connection $db) {
        $this->db = $db;
    }

    /**
     * Returns a list of all movies, sorted by title.
     *
     * @return array A list of all movies.
     */
    public function findAll() {
        $sql = "select * from movie order by mov_title";
        $result = $this->db->fetchAll($sql);
        
        // Convert query result to an array of domain objects
        $mymovies = array();
        foreach ($result as $row) {
            $id = $row['mov_id'];
            $mymovies[$id] = $this->buildDomainObject($row);
        }
        return $mymovies;
    }

    /**
     * Creates a movie object based on a DB row.
     *
     * @param array $row The DB row containing movies data.
     * @return \Mymovies\Domain\Mymovies
     */
    protected function buildDomainObject($row) {
        $Mymovie = new Mymovie();
        $Mymovie->setId($row['mov_id']);
        $Mymovie->setTitle($row['mov_title']);
        $Mymovie->setLongDescription($row['mov_description_short']);
        $Mymovie->setShortDescription($row['mov_description_long']);
        $Mymovie->setDirector($row['mov_director']);
        $Mymovie->setYear($row['mov_year']);
        $Mymovie->setImage($row['mov_image']);
        
        return $Mymovie;
    }
}
