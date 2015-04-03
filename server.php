<?php

require_once('connexion.php');
try {
    // $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass); //MYSQL database
    //$conn = new PDO("sqlite:db/movies.db");  // SQLite Database
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$where =" 1=1 ";
$order_by="1";
$rows=25;
$current=1;
$limit_l=($current * $rows) - ($rows);
//$limit_h=$limit_lower + $rows  ;


//Handles Sort querystring sent from Bootgrid
if (isset($_REQUEST['sort']) && is_array($_REQUEST['sort']) )
  {
    $order_by="";
    foreach($_REQUEST['sort'] as $key=> $value)
		$order_by.=" $key $value";
	}

//Handles search  querystring sent from Bootgrid 
if (isset($_REQUEST['searchPhrase']) )
  {
    $search=trim($_REQUEST['searchPhrase']);
  	$where.= " AND  m.title LIKE '".$search."%' OR  m.year LIKE '".$search."%' OR  g.genre LIKE '".$search."%'  ";
	}

//Handles determines where in the paging count this result set falls in
if (isset($_REQUEST['rowCount']) )  
  $rows=$_REQUEST['rowCount'];

 //calculate the low and high limits for the SQL LIMIT x,y clause
  if (isset($_REQUEST['current']) )  
  {
   $current=$_REQUEST['current'];
	$limit_l=($current * $rows) - ($rows);
	$limit_h=$rows ;
   }

if ($rows==-1)
$limit="";  //no limit
else   
//$limit=" LIMIT $limit_l,$limit_h  ";
   
//NOTE: No security here please beef this up using a prepared statement - as is this is prone to SQL injection.
$sql="SELECT m.idmovies, replace(m.title,'\"','' ) as title, m.year, g.genre FROM movies m,movies_genres mg,genres g WHERE m.idmovies = mg.idmovies_genres AND mg.idgenres = g.idgenres AND $where ORDER BY m.title ";
   echo $sql;

$stmt=$db->prepare($sql);
$stmt->execute();
$results_array=$stmt->fetchAll(PDO::FETCH_ASSOC);

$json=json_encode( $results_array );

$nRows=$db->query("SELECT count(*) FROM movies  WHERE $where")->fetchColumn();   /* specific search then how many match */

header('Content-Type: application/json'); //tell the broswer JSON is coming

if (isset($_REQUEST['rowCount']) )  //Means we're using bootgrid library
echo "{ \"current\":  $current, \"rowCount\":$rows,  \"rows\": ".$json.", \"total\": $nRows }";
else
echo $json;  //Just plain vanillat JSON output 
exit;
}
catch(PDOException $e) {
    echo 'SQL PDO ERROR: ' . $e->getMessage();
}
?>