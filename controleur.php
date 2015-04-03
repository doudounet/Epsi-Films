<?php
/**
 * Created by PhpStorm.
 * User: BettyFlop
 * Date: 03/04/2015
 * Time: 11:06
 */
function AffichageResultat() {
    $posts = Affichage();
    require 'display.php';
}

function read_action($id) {
    $post = get_post_details_by_id($id);
    require 'templates/read.php';
}
?>