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

$id = $mysqli->real_escape_string(strip_tags($_POST['idmovies']));
$titre = $mysqli->real_escape_string(strip_tags($_POST['title']));
$year = $mysqli->real_escape_string(strip_tags($_POST['year']));
$gender = $mysqli->real_escape_string(strip_tags($_POST['gender']));
$tablename = $mysqli->real_escape_string(strip_tags($_POST['tablename']));

$return=false;
$stmt = "INSERT INTO ".$tablename."(idmovies,title,gender,year) VALUES ($id,'$titre','$gender',$year)";
	echo($stmt);

   

if ($mysqli->query($stmt) === TRUE) {
    echo "New record created successfully";
} else {
	$error = "Error: " . $sql . "<br>" . $mysqli->error;
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

            
$mysqli->close();        

echo $return ? "ok" : "error";

      

