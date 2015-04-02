<?php
?>
<html>
<head>
<!-- bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
<body>
<form class="form-horizontal" role="form" method="post" action="index.php">

    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Titre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Titre" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Realisateur</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="email" name="realisateur" placeholder="Jean Dupont" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Synopsis</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="synopsis"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <! Will be used to display an alert to the user>
        </div>
    </div>
</form>
</body>
</html>