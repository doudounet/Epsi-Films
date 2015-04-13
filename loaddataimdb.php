<?php
require_once('apiOMDB.php');
require_once('EditableGrid.php');

$grid = new EditableGrid();

$grid->addColumn('imdbID', 'ID', 'integer', NULL, false);
$grid->addColumn('Title', 'Title', 'string');
$grid->addColumn('Type', 'Genre', 'string');
$grid->addColumn('Year', 'Année', 'string');

$api=new apiOMDB();
$json=$api->find_by_title('Spiderman');
$grid->renderJSON($json);


?>
