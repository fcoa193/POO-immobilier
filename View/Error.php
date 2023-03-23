<?php ob_start();?>

<h1>ERROR</h1>

<?php 
$title = "Error";
$style = '../Tools/Style/login.css';
$content = ob_get_clean();
require './Template.php' ?>