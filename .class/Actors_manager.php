<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 02/04/2015
 * Time: 15:06
 */
include '.class\Actors.php';
class Actors_manager {
    private $_db; // Instance de PDO.

    public function __construct($db)
    {
        $this->setDb($db);
    }


    public function add($_id,$_first_name,$_last_name,$_gender)
    {
        $stmt = $dbh->prepare("INSERT INTO actors (id,first_name,last_name,gender) VALUES (:id, :first_name,:last_name,:gender)");
        $stmt->bindParam(':id', $_id);
        $stmt->bindParam(':first_name', $_first_name);
        $stmt->bindParam(':last_name', $_last_name);
        $stmt->bindParam(':gender', $_gender);
// insertion d'une ligne
        $stmt->execute();

    }

    public function delete(Actors $actor)
    {
        // Exécute une requête de type DELETE.
    }

    public function get($id)
    {

        $sql= "SELECT id, first_name, last_name, gender FROM actors WHERE id = ".$id;
        $stmt = $this->_db->query($sql);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        //print_r($row);

        return new Actors($row->id,$row->first_name,$row->last_name,$row->gender);
    }

    public function getList()
    {
        $actors = [];

        $q = $this->_db->query('SELECT id, first_name, last_name, gender FROM actors');

        while ($row = $q->fetch(PDO::FETCH_ASSOC))
        {
            echo $row->id;
            $actors[] = new Actors($row->id,$row->first_name,$row->last_name,$row->gender);
        }
        printf($actors);
        return $actors;
    }

    public function update(Actors $actor)
    {
        // Prépare une requête de type UPDATE.
        // Assignation des valeurs à la requête.
        // Exécution de la requête.
    }

    public function setDb(PDO $db)
    {
        $this->_db = $db;
    }
}