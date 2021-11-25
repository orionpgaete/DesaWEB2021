<?php
require 'app.php';

function incluirTemplate( $nombre ){

   
 /* include "includes/template/${nombre}.php"; */
     include TEMPLATES_URL . "/${nombre}.php";
}