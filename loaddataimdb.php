<?php


/*
 * examples/mysql/loaddata.php
 *
 * This file is part of EditableGrid.
 * http://editablegrid.net
 *
 * Copyright (c) 2011 Webismymind SPRL
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://editablegrid.net/license
 */



/**
 * This script loads data from the database and returns it to the js
 *
 */

require_once('apiOMDB.php');
require_once('EditableGrid.php');

// create a new EditableGrid object
$grid = new EditableGrid();

/*
*  Add columns. The first argument of addColumn is the name of the field in the databse.
*  The second argument is the label that will be displayed in the header
*/
$grid->addColumn('idmovies', 'ID', 'integer', NULL, false);
$grid->addColumn('title', 'Title', 'string');
$grid->addColumn('genre', 'Genre', 'string');
$grid->addColumn('year', 'Année', 'string');


// send data to the browser
$api=new apiOMDB();
$json=$api->find_by_title("Spiderman");
$grid->renderJSON($json);


