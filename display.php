<?php
require_once('server.php');
//header('Content-Type: application/json');
?>
<html>
<head>
<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.10.6/js/jquery.dataTables.min.js" type="text/javascript"></script>
/* <script> 
/*$(document).ready(function() {
    $('#resultatTable').DataTable( {
        "ajax": 'server.php'
    } );
} );*/
</script>*/

</head>
<body>
<table id="resultatTable" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Annee</th>
                <th>Genre</th>
        </thead>
        <tbody>
        </tbody>
 </table>
 </body>
 </html>

