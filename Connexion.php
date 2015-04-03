<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 02/04/2015
 * Time: 13:10
 */

try
{
    $db = new PDO('mysql:host=92.222.39.26;dbname=MovieEpsi', 'MovieEpsi', 'eCJDb9FdBFAYqTrr');
}
catch(Exception $e)
{
    echo 'Echec de la connexion à la base de données <br />';
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
    exit();
}
