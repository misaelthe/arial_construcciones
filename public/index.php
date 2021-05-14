<?php 
require_once "../app/controllers/mvc_controller.php";
require_once "../app/models/pages.php";
$mvc = new MvcController();
$mvc -> getDefaultPage();
?>
