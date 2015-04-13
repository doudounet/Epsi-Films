<?php if (!defined('DATATABLES')) exit(); // Ensure being used in DataTables env.

// Enable error reporting for debugging (remove for production)
error_reporting(E_ALL);
ini_set('display_errors', '1');


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Database user / pass
 */
 

$sql_details = array(
	"type" => "Mysql",  // Database type: "Mysql", "Postgres", "Sqlite" or "Sqlserver"
	"user" => "MovieEpsi",       // Database user name
	"pass" => "eCJDb9FdBFAYqTrr",       // Database password
	"host" => "92.222.39.26",       // Database host
	"port" => "3306",       // Database connection port (can be left empty for default)
	"db"   => "MovieEpsi",       // Database name
	"dsn"  => ""        // PHP DSN extra information. Set as `charset=utf8` if you are using MySQL
);

