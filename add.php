<?php
 
/*
 * 
 * http://editablegrid.net
 *
 * Copyright (c) 2011 Webismymind SPRL
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://editablegrid.net/license
 */
      
require_once('config.php');         

// Database connection                                   
$mysqli = mysqli_init();
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);
$mysqli->real_connect($config['db_host'],$config['db_user'],$config['db_password'],$config['db_name']); 

// Get all parameter provided by the javascript
$name = $mysqli->real_escape_string(strip_tags($_POST['name']));
$firstname = $mysqli->real_escape_string(strip_tags($_POST['firstname']));
$tablename = $mysqli->real_escape_string(strip_tags($_POST['tablename']));

$return=false;

$stmt = "INSERT INTO ".$tablename."(idmovies,title,year,number,type,location,language) VALUES (1231231,'$name',1201,NULL,NULL,'location','language')";
	echo($stmt);

    //$stmt->bind_param("ss", $name, $firstname);

if ($mysqli->query($stmt) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

            
$mysqli->close();        

echo $return ? "ok" : "error";

      

