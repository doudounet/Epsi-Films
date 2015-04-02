<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 02/04/2015
 * Time: 13:10
 */

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=MovieEpsi', 'root', '');
}
catch(Exception $e)
{
    echo 'Echec de la connexion à la base de données <br />';
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit();
}
?>