<?php
require_once('apiOMDB.php');


$api=new apiOMDB();
$json=$api->find_by_title('Spiderman');

echo json_encode($json);
?>
