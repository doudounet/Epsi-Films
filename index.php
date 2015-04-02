<?php
$json=file_get_contents("http://www.omdbapi.com/?t=titanic&y=1997");
$info=json_decode($json);
print_r($info);
?>