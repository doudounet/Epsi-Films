<?php

require_once('connexion.php');
try {
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("SET CHARACTER SET utf8");
$where =" 1=1 ";
$order_by="1";

//$sql= "SELECT m.idmovies, replace(m.title,'\"','' ) as title, m.year, g.genre FROM movies m,movies_genres mg,genres g WHERE m.idmovies = mg.idmovies_genres AND mg.idgenres = g.idgenres AND  1=1  AND  (m.title LIKE '%' OR  m.year LIKE '%' OR  g.genre LIKE '%')   ORDER BY m.title";
$sql="SELECT m.idmovies, m.title, year, g.genre FROM movies m,movies_genres mg,genres g WHERE m.idmovies = mg.idmovies_genres AND mg.idgenres = g.idgenres AND $where ORDER BY title ";


$stmt=$db->prepare($sql);
$stmt->execute();
$results_array=$stmt->fetchAll(PDO::FETCH_NUM);


header('Content-Type: application/json charset=utf-8'); //tell the broswer JSON is coming
/*$tests = array('movies' => $results_array);
echo json_encode($tests); */

echo json_encode($results_array);




}
catch(PDOException $e) {
    echo 'SQL PDO ERROR: ' . $e->getMessage();
}


?>

