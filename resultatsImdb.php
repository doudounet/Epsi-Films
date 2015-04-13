<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<!--
/*
 * examples/mysql/index.html
 *
 * This file is part of EditableGrid.
 * http://editablegrid.net
 *
 * Copyright (c) 2011 Webismymind SPRL
 * Dual licensed under the MIT or GPL Version 2 licenses.
 * http://editablegrid.net/license
 */
-->

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="css/styleDatatable.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">

    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" href="css/font-awesome-4.1.0/css/font-awesome.min.css" type="text/css" media="screen">
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="//cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js"></script>
    <script type="text/javascript" language="javascript" src="Data/js/dataTables.editor.js"></script>
    <script type="text/javascript" language="javascript" src="Data/resources/syntax/shCore.js"></script>
    <script type="text/javascript" language="javascript" src="Data/resources/demo.js"></script>
    <script type="text/javascript" language="javascript" src="Data/resources/editor-demo.js"></script>
<script>

    $(document).ready(function() {
      $('#moviesIMDB').dataTable( {
            ajax: {
                url: "loaddataimdb.php"
            },
            columns: [
                { "Search": "imdbID" },
                { "Search": "Title" },
                { "Search": "Year" },
                { "Search": "Type" }
            ]
        } );
    } );
</script>
</head>

<body>
<table id="moviesIMDB" class="display" cellspacing="0" width="100%">
    <thead>
    <tr>

        <th></th>
        <th>Titre</th>
        <th>Genre</th>
        <th>Année</th>
    </tr>
    </thead>
</table>






</body>

</html>
